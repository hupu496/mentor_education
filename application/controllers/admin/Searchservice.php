<?php defined('BASEPATH') or exit('No direct script access allowed');

class Searchservice extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Search Service";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
 		//print_r($data);die;
		$this->template->load('admin/searchservice','add',$data);
	}
	
	public function add_blog(){
		$data['title'] = "Add Blog";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
		$data['courses'] = $this->db->get_where('services',array('status'=>1))->result_array();
		$this->template->load('admin/searchservice','add_blog',$data);
	}

 public function insert_blog(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/blog/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name'] !=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }

	 $result=$this->db->insert('blog',$data);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Blog Created.");
	}
    else{
   $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/add_blog');
} 

	public function searchlist(){
		$data['title'] = "Search List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $searchlist= $this->Search_model->get_search(array('all'));
		if(!empty($searchlist)){
			$this->session->set_flashdata('msg',"data already Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('msg',"data add Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['searchlist'] = $searchlist;
		$this->template->load('admin/searchservice','view',$data);
	}
	
	public function blog_list(){
		$data['title'] = "Blog list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('blog',array('status'=>1))->result_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','blog_list',$data);
	}
	public function edit_blog($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub Blog Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('blog',array('id'=>$id))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_blog',$data);

	}
	public function update_blog(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name'] !=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);
	 if($_FILES['photos']['name'] !=''){
	 	$result=$this->db->update('blog',array('id'=>$data['id'],'name'=>$data['name'],'Description'=>$data['Description'],'photos'=>$data['photos']),$where);

	 }else{
	 	$result=$this->db->update('blog',array('id'=>$data['id'],'name'=>$data['name'],'Description'=>$data['Description']),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/blog_list');

	}
	public function delete_blog($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_blog($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Blog.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/blog_list');
	}
	public function our_team(){
		$data['title'] = "Add Team";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
		$this->template->load('admin/searchservice','add_team',$data);
	}
	public function insert_team(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name']!=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		}
		
		$data['added_on'] = date('y-m-d');
		$result = $this->db->insert('our_team', $data);
		if ($result) {
			$this->session->set_flashdata('msg', "Team Inserted.");
		} else {
			$this->session->set_flashdata('err_msg', $result);
		}
    redirect('admin/searchservice/team_list');
} 
public function team_list(){
		$data['title'] = "team list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('our_team',array('status'=>1))->result_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','team_list',$data);
	}
	public function edit_team($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Team Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('our_team',array('id'=>$id))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_team',$data);

	}
	public function update_team(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name'] !=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);


	 if($_FILES['photos']['name'] !=''){
	 	$result=$this->db->update('our_team',array('id'=>$data['id'],'name'=>$data['name'],'position'=>$data['position'],'description'=>$data['description'],'photos'=>$data['photos']),$where);

	 }else{
	 	$result=$this->db->update('our_team',array('id'=>$data['id'],'name'=>$data['name'],'position'=>$data['position'],'description'=>$data['description']),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/team_list');

	}
	public function delete_team($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_team($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Team members.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/team_list');
	}
	
}	 
