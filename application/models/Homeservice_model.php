<?php
class Homeservice_model extends CI_Model{
	
	
	function __construct(){
		parent::__construct(); 
		$this->load->helper('string');
	}
	
	public function register_user_model($data){
		$table="user_register";  
		$salt=random_string('alnum', 8);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['salt'] = $salt;
    $data['cpassword'] = $password;
    $data['added_on'] = date("Y-m-d");
    $login = $this->db->get_where('user_register',array('phone'=>$data['phone'],'email'=>$data['email']))->num_rows();
     if($login>0){
     	return false;
     }else{
     	 	$status=$this->db->insert($table,$data);
     	 	$last_id = $this->db->insert_id();
     	 	$query = $this->db->insert('login',array('email'=>$data['email'],'password'=>$data['cpassword'],'register_id'=>$last_id,'salt'=>$data['salt'],'added_on'=>date('Y-m-d H:i:s')));
    if($status == true && $query == true){
			return true;
		}
		else{
			return false;
		}
     }
		
		
	}
	
	public function reviewlist($where){
		$this->db->select('t1.*,t2.id as empid,t2.firstname,t2.lastname,t2.aadhar_card,t2.photo,t3.service,t3.sub_service,t3.id as bookid');
		$this->db->from('review as t1');
		$this->db->join('user_register as t2','t1.emp_id = t2.id');
		$this->db->join('booknow as t3','t1.order_id=t3.id');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();

	}
	public function servic_blog($where){
		$this->db->select('t1.*, t1.id as blogid, t2.id as courses_id,t2.name as coursename');
		$this->db->from('blog as t1');
		$this->db->join('services as t2','t1.courses = t2.id');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
	}

	
	public function getdifferencemin($start, $curecord)
	{
		$date = date('Y-m-d');
		$startone = strtotime("$start");
		$curone = strtotime("$date $curecord");
		$difference = $curone - $startone;
		$minutes = ceil($difference / 60);
		return $minutes;
	}
	
	public function get_servicewebsite($where,$type='all'){
		$query = $this->db->get_where('services',$where);
		if($type == 'all'){
			return $query->result_array();
		}else{
			return $query->row_array();
		}
	}
	

	public function login_user_model($data){
		 $this->load->helper('cookie');
		$table = "login";
		$email = $data['email'];
		$password = $data['password'];
		$this->db->where('email',$email);
		$query = $this->db->get($table);
		$result=$query->row_array();
		if(!empty($result)){
			$salt = $result['salt'];
			$password=md5($password.SITE_SALT.$salt);
			$hashpassword=$result['password']; 
			if($password==$hashpassword && $result['status']==1){
				$last_id = $result['register_id'];
				$cookie = array(
              'name'   => 'login_cookie',
              'value'  => $last_id,
              'expire' => '86400'        
                ); 
              set_cookie($cookie);  
              $login_record = get_cookie('login_cookie');
   
				return 1;
			}
			
		}
		else{ 
			 return $result=array('verify'=>"Wrong Password!");
			 }
	}
	
public function blog_desc($where){
    $this->db->select('t1.*, t2.id as blogid, t2.name,t2.description,t2.photos,t3.id as servid, t3.name as coursename',);
	$this->db->from('blog_desc t1');
	$this->db->join('blog t2', 't1.blog_id = t2.id');
	$this->db->join('services t3','t2.courses = t3.id');
	$this->db->where($where);
	$query = $this->db->get();
	return $query->row_array();
}
public function couselling($where){
	$this->db->select('t1.*, t2.id as couselling, t2.name');
	$this->db->from('couselling_blog t1');
	$this->db->join('couselling t2', 't1.couselling_id = t2.id');
	$this->db->where($where);
	$query = $this->db->get();
	return $query->row_array();
}
	
}


	?>