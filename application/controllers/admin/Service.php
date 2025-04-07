<?php defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Services";
		$data['breadcrumb'] = array('admin/service' =>'Dashboard');
 		//print_r($roles);die;
		$this->template->load('admin/service','add',$data);
	}

	
	public function insert_service(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/service/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  }
		unset($data['addservice']);
		$result = $this->Service_model->insert_service($data);
		if($result === true){
			$this->session->set_flashdata('msg',"Service Created Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/servilist');
	}
	public function service_edit(){
		$editid = $this->uri->segment('4');
	
		$where=array('id'=>$editid,'status'=>'1');
	    $data['edit_list'] = $this->Service_model->get_service($where,'single');
	   
		$this->template->load('admin/service','edit',$data);
	}
	public function service_update(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/service/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  } 
		  $run=$this->Service_model->serivce_edit_model($data);

		redirect('admin/service/servilist');
	}	
		
	public function servilist(){
		$data['title'] = "Service List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $servilist = $this->Service_model->get_service(array(),'all');
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','view',$data);
	}

		public function delete_servic(){
		$id = $this->input->post('id');
	    $result= $this->Service_model->delete_service($id);
	   // print_r ($result); die;
		if($result == true){
			echo "1";
		}
		else{
		 echo "0";
		}
	}
	// courses blog description
		
		public function courses_blog_desc(){
		$data['title'] = "Courses Blog Description";
		$data['breadcrumb'] = array('admin/service' =>'Dashboard');
		$data['sub_service'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
		$this->template->load('admin/service','courses_blog_desc',$data);
	}

	
	public function insert_courses_blog_desc(){
		$data = $this->input->post();
		$datas['subservice_id'] = $data['subservice_id'];
		$datas['Events'] = json_encode($data['Events']);
		$datas['Dates'] = json_encode($data['Dates']);
		$datas['Institution_type'] = json_encode($data['Institution_type']);
		$datas['Security_Money'] = json_encode($data['Security_Money']);
		$datas['Institution_type_refundable'] = json_encode($data['Institution_type_refundable']);
		$datas['Security_Money_refundable'] = json_encode($data['Security_Money_refundable']);
		$datas['second_event'] =   json_encode($data['second_event']);
		$datas['second_Date'] = 	  json_encode($data['second_Date']);
		$datas['third_event'] = 	  json_encode($data['third_event']);
		$datas['third_date'] = 	  json_encode($data['third_date']);
		$datas['round_1_events'] = json_encode($data['round_1_events']);
		$datas['round_1_dates'] =  json_encode($data['round_1_dates']);
		$datas['round_2_events'] = json_encode($data['round_2_events']);
		$datas['round_2_dates'] =  json_encode($data['round_2_dates']);
		$datas['Deemed_events'] =  json_encode($data['Deemed_events']);
		$datas['Deemed_dates'] =   json_encode($data['Deemed_dates']);
		$datas['added_on'] = date('Y-m-d');
		$result = $this->db->insert('courses_desc',$datas);
		if($result === true){
			$this->session->set_flashdata('msg',"Courses Description Created Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/courses_blog_desclist');
	}
	public function courses_blog_desc_edit(){
		$editid = $this->uri->segment('4');
	
	
		$where=array('id'=>$editid,'status'=>'1');
	    $data['edit_list'] = $this->db->get_where('courses_desc',$where)->row_array();
		$schedule_data = [
        "Events" => json_decode($data['edit_list']['Events'], true) ?? [],
        "Dates" => json_decode($data['edit_list']['Dates'], true) ?? [],
        "Institution_type" => json_decode($data['edit_list']['Institution_type'], true) ?? [],
        "Security_Money" => json_decode($data['edit_list']['Security_Money'], true) ?? [],
		"Institution_type_refundable" => json_decode($data['edit_list']['Institution_type_refundable'], true) ?? [],
		"Security_Money_refundable" => json_decode($data['edit_list']['Security_Money_refundable'], true) ?? [],
		"second_event" => json_decode($data['edit_list']['second_event'], true),
		"second_Date" => json_decode($data['edit_list']['second_Date'], true),
		"third_event" => json_decode($data['edit_list']['third_event'], true),
		"third_date" => json_decode($data['edit_list']['third_date'], true),
		"round_1_events" => json_decode($data['edit_list']['round_1_events'],true),
		"round_1_dates" => json_decode($data['edit_list']['round_1_dates'],true),
		"round_2_events" => json_decode($data['edit_list']['round_2_events'],true),
		"round_2_dates" => json_decode($data['edit_list']['round_2_dates'],true),
		"Deemed_events" => json_decode($data['edit_list']['Deemed_events'],true),
		"Deemed_dates" => json_decode($data['edit_list']['Deemed_dates'],true),
    ];
     $data['schedule'] = $schedule_data;
	 $data['id'] = $editid;
	 $this->template->load('admin/service','courses_blog_desc_edit',$data);
	}
	public function courses_blog_desc_update(){
		$data = $this->input->post();
		$editid = $this->input->post('id');
		$datas['Events'] = json_encode($data['Events']);
		$datas['Dates'] = json_encode($data['Dates']);
		$datas['Institution_type'] = json_encode($data['Institution_type']);
		$datas['Security_Money'] = json_encode($data['Security_Money']);
		$datas['Institution_type_refundable'] = json_encode($data['Institution_type_refundable']);
		$datas['Security_Money_refundable'] = json_encode($data['Security_Money_refundable']);
		$datas['second_event'] =   json_encode($data['second_event']);
		$datas['second_Date'] = 	  json_encode($data['second_Date']);
		$datas['third_event'] = 	  json_encode($data['third_event']);
		$datas['third_date'] = 	  json_encode($data['third_date']);
		$datas['round_1_events'] = json_encode($data['round_1_events']);
		$datas['round_1_dates'] =  json_encode($data['round_1_dates']);
		$datas['round_2_events'] = json_encode($data['round_2_events']);
		$datas['round_2_dates'] =  json_encode($data['round_2_dates']);
		$datas['Deemed_events'] =  json_encode($data['Deemed_events']);
		$datas['Deemed_dates'] =   json_encode($data['Deemed_dates']);
		$datas['added_on'] = date('Y-m-d');
		$result = $this->db->update('courses_desc',$datas,array('id'=>$editid,'status'=>1));
		if($result === true){
			$this->session->set_flashdata('msg',"Courses Description updated Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/courses_blog_desclist');
	}	
		
	public function courses_blog_desclist(){
		$data['title'] = "Courses blog List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['courses_blog_list'] = $this->Service_model->courses_blog_list(array('t1.status'=>1));	
		$this->template->load('admin/service','courses_blog_list',$data);
	}

	public function delete_scourses_blog_desc(){
		$editid = $this->uri->segment('4');
		$where=array('id'=>$editid,'status'=>'1');
	    $result= $this->db->delete('courses_desc',$where);
		if($result === true){
			$this->session->set_flashdata('msg',"Courses Deleted Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/courses_blog_desclist');
	}
	// end description
	public function review_list(){
		$data['title'] = "Customer List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $where = array('t1.status>='=>1);
		$servilist = $this->Homeservice_model->reviewlist($where);
		
       
		if(empty($servilist)){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','reviewlist',$data);
	

	}
	public function delete_order_list(){
		$id = $this->input->post('id');
	    $result= $this->Service_model->delete_order_list($id);
	    print_r($result);die;
		if($result == true){
			echo "1";
		}
		else{
		 echo "0";
		}
	}
	public function permdelete_order_list(){
		$id = $this->input->post('id');
	    $result= $this->Service_model->permdelete_order_list($id);
	 
		if($result == true){
			echo "1";
		}
		else{
		 echo "0";
		}
	}
	
	public function serviceorder_list(){
		$data['title'] = "Service Order List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$current_date = date('Y-m-d');
		$data['today'] = $this->db->get_where('serviceorder',array('added_on'=>$current_date))->num_rows();
		$data['all_order'] = $this->db->get_where('serviceorder',array('status'=>1))->num_rows();
		$serviceprovider = $this->db->get_where('serviceorder',array('status'=>1))->result_array();
		if(empty($serviceprovider)){
			$this->session->set_flashdata('msg',"Add data.");
			redirect('admin/dashboard/index');
		}
		$data['serviceroder'] = $serviceprovider;
		$this->template->load('admin/service','serviceorder_list',$data);
	}
	public function update_amount(){
		$data = $this->input->post();
		$id = $data['id'];
		$user_id = $data['user_id'];
		unset($data['id']);
		unset($data['user_id']);
		$where = array('id'=>$id,'user_id'=>$user_id);
		$this->db->where($where);
		$query = $this->db->update('service_order',$data);
		if($query == true){
			$this->session->set_flashdata('msg',"amount sent to customer.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('err_msg',"amount not to customer.");
			redirect($_SERVER['HTTP_REFERER']);

		}
	}
	public function paymentverify(){
		$id = $this->uri->segment(5);
		$status = $this->uri->segment(4);
		if($status == 'wrong'){
			$query = $this->db->update('booknow',array('order_status'=>3),array('id'=>$id));

		}else{

			$query = $this->db->update('booknow',array('order_status'=>2),array('id'=>$status));
		}
		
		
		if($query == true){
			$this->session->set_flashdata('msg',"Payment update verify!");
			
		}else{
           $this->session->set_flashdata('err_msg',"payment update not verify");
		}
        redirect('admin/service/serviceorder_list');
	}
	public function franch_paymentverify(){
		$id = $this->uri->segment(5);
		$status = $this->uri->segment(4);
		if($status == 'wrong'){
			$query = $this->db->update('franchise_book',array('order_status'=>3),array('id'=>$id));

		}else{

			$query = $this->db->update('franchise_book',array('order_status'=>2),array('id'=>$status));
		}
		
		
		if($query == true){
			$this->session->set_flashdata('msg',"Payment update verify!");
			
		}else{
           $this->session->set_flashdata('err_msg',"payment update not verify");
		}
        redirect('admin/service/franchise_list');
	}
	public function blockserviceorder_list(){
		$data['title'] = "block Service Order List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$blockserviceprovider = $this->Service_model->blockserviceorder_list(array('status'=>0), 'all');
		if(empty($blockserviceprovider)){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard/index');
		}
		$data['blockserviceprovider'] = $blockserviceprovider;
		$this->template->load('admin/service','blockorder_list',$data);
	}
	public function update_payment(){
		$id = $this->uri->segment('4');
		$data['payment_status'] = 3;
		$this->db->where('id',$id);
		$this->db->update('service_order', $data);
		redirect('admin/service/serviceorder_list');

	}
	public function review_update(){
		$id = $this->uri->segment(4);
		$query = $this->db->update('review',array('status'=>2),array('id'=>$id));
		if($query == true){
			$this->session->set_flashdata('msg',"Review will Be Show Customer Side.");
		}else{
			$this->session->set_flashdata('err_msg',"Review will Not Show Customer Side.");
		}
		redirect('admin/service/review_list');
	}
	
	// Controller function to return notification data (example: NotificationController.php)
    public function get_notifications() {
   
    $meeting = $this->db->get_where('meeting', array('notifications' => 1))->result_array();
	$serviceorder = $this->db->get_where('serviceorder', array('notifications' => 1))->result_array();
	$contact_us = $this->db->get_where('contact_us', array('notifications' => 1))->result_array();
    $totalMessages = count($meeting) + count($serviceorder) + count($contact_us);
    $data = [
        'totalMessages' => $totalMessages,
        'serviceorder' => $serviceorder,
        'meeting' => $meeting,
		'contact_us'=> $contact_us,
    ];

    echo json_encode($data);
}
public function mark_all_notifications_as_seen() {
    // Update the 'notification' field to 0 for all records in both tables
    $this->db->update('meeting', array('notifications' => 0));
    $this->db->update('serviceorder', array('notifications' => 0));
	$this->db->update('contact_us', array('notifications' => 0));

    // Respond with a success message
    echo json_encode(['status' => 'success']);
}

public function order_list(){
		$data['title'] = "Service Order";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $servilist = $this->Service_model->myorder(array(),'all');
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','orderlist',$data);
	}

public function couselling(){
	$data['title'] = "Couselling List";
	$data['breadcrumb'] = array('dashboard'=>'Dashboard');
	$data['datatable'] = true;
    $servilist = $this->Service_model->couselling(array(),'all');
	$data['servilist'] = $servilist;
	$this->template->load('admin/service','couselling',$data);

}
public function add_couselling(){
		$data['title'] = "Add Couselling";
		$data['breadcrumb'] = array('admin/service' =>'Dashboard');
 		//print_r($roles);die;
		$this->template->load('admin/service','add_couselling',$data);
	}
public function insert_couselling(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/couselling/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  }
		unset($data['addservice']);
		$result = $this->Service_model->insert_couselling($data);
		if($result === true){
			$this->session->set_flashdata('msg',"Created Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/couselling');
	}
	public function couselling_edit(){
		$editid = $this->uri->segment('4');
	
		$where=array('id'=>$editid,'status'=>'1');
	    $data['edit_list'] = $this->Service_model->get_couselling($where,'single');
	   
		$this->template->load('admin/service','edit_couselling',$data);
	}
	public function couselling_update(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/couselling/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  } 
		  $run=$this->Service_model->serivce_edit_model($data);

		redirect('admin/service/couselling');
	}	
	public function couselling_blog(){
		$data['title'] = "Couselling Blog";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$servilist = $this->db->get_where('couselling',array('status'=>1))->result_array();
		$data['servilist'] = $servilist;
		$this->template->load('admin/searchservice','couselling_blog',$data);
	}

	public function cousellingblog_list(){
		$data['title'] = "couselling Blog List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->cousellingblog_list();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/service','cousellingblog_list',$data);
	}
	public function insert_cousellingblog(){
	 $data = $this->input->post();
	 $datas['couselling_id'] = $data['couselling_id'];
	 $datas['heading'] = json_encode($data['heading']);
	 $datas['cousellingname'] = $data['cousellingname'];
	 $datas['description'] = json_encode($data['description']);
	 $datas['standard_plan_price'] = $data['standard_plan_price'];
	 $datas['preminum_plan_price'] = $data['preminum_plan_price'];
	 $datas['standard_text'] = json_encode($data['standard_text']);
	 $datas['premium_text'] = json_encode($data['premium_text']);
	 $datas['added_on'] = date('Y-m-d');
	 $result=$this->db->insert('couselling_blog',$datas);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Couselling Blog Created.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/service/cousellingblog_list');
} 
	public function edit_cousellingblog($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub Service Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['couselling_blog']= $this->db->get_where('couselling_blog',array('id'=>$id))->row_array();

		$schedule_data = [
        "heading" => json_decode($data	['couselling_blog']['heading'], true) ?? [],
        "description" => json_decode($data['couselling_blog']['description'], true) ?? [],
        "standard_text" => json_decode($data['couselling_blog']['standard_text'], true) ?? [],
        "premium_text" => json_decode($data['couselling_blog']['premium_text'], true) ?? [],  ];
     $data['schedule'] = $schedule_data;
	 $data['id'] = $id;

		
	$this->template->load('admin/service','edit_cousellingblog',$data);

	}
	public function update_couselling(){
	 $data = $this->input->post();
	 $datas['heading'] = json_encode($data['heading']);
	 $datas['cousellingname'] = $data['cousellingname'];
	 $datas['description'] = json_encode($data['description']);
	 $datas['standard_plan_price'] = $data['standard_plan_price'];
	 $datas['preminum_plan_price'] = $data['preminum_plan_price'];
	 $datas['standard_text'] = json_encode($data['standard_text']);
	 $datas['premium_text'] = json_encode($data['premium_text']);
	 $datas['added_on'] = date('Y-m-d');
	 $result=$this->db->update('couselling_blog',$datas,array('id'=>$data['id']));
	 if($result === true){
	  $this->session->set_flashdata('msg',"Couselling Blog update.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	
	redirect('admin/service/cousellingblog_list');

	}
	public function delete_couselling($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_couselling($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Sub Service.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/service/cousellingblog_list');
	}
	// admission blog
	public function admission_news(){
		$data['title'] = "Admisson News";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$servilist = $this->db->get_where('blog',array('status'=>1))->result_array();
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','admission_news',$data);
	}

	public function admissionnews_list(){
		$data['title'] = "Admission News List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->admissionnews_list();
		
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/service','admissionnews_list',$data);
	}
	public function insert_admissionnews(){
	 $data = $this->input->post();
	 $datas['blog_id'] = $data['blog_id'];
	 $datas['exam_name'] = $data['exam_name'];
	 $datas['Exam_Particulars'] = json_encode($data['Exam_Particulars']);
	 $datas['ExamDetails'] = json_encode($data['ExamDetails']);
	 $datas['Events'] = json_encode($data['Events']);
	 $datas['Dates'] = json_encode($data['Dates']);
	 $datas['EntranceExam'] = json_encode($data['EntranceExam']);
	 $datas['EligibilityCriteria'] = json_encode($data['EligibilityCriteria']);
	 $datas['Sections'] = json_encode($data['Sections']);
	 $datas['AllottedTime'] = json_encode($data['AllottedTime']);
	 $datas['Questions'] = json_encode($data['Questions']);
	 $datas['RegistrationProcess'] = json_encode($data['RegistrationProcess']);
	 $datas['DocumentsRequired'] = json_encode($data['DocumentsRequired']);
	 $datas['Nameprogram'] = json_encode($data['Nameprogram']);
	 $datas['Campus'] = json_encode($data['Campus']);
	 $datas['Seats'] = json_encode($data['Seats']);
	 $datas['Program'] = json_encode($data['Program']);
	 $datas['fee'] = json_encode($data['fee']);
	 $datas['added_on'] = date('Y-m-d');
	 $result=$this->db->insert('blog_desc',$datas);
	
	 if($result === true){
	  $this->session->set_flashdata('msg',"Admission Blog Created.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/service/admissionnews_list');
} 
	public function edit_admissionnews($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Admission news Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['blog_desc']= $this->db->get_where('blog_desc',array('id'=>$id))->row_array();

		$schedule_data = [
        "Exam_Particulars" => json_decode($data	['blog_desc']['Exam_Particulars'], true) ?? [],
        "ExamDetails" => json_decode($data['blog_desc']['ExamDetails'], true) ?? [],
        "Events" => json_decode($data['blog_desc']['Events'], true) ?? [],
        "Dates" => json_decode($data['blog_desc']['Dates'], true) ?? [],
		"EntranceExam" => json_decode($data['blog_desc']['EntranceExam'], true) ?? [], 
		"EligibilityCriteria" => json_decode($data['blog_desc']['EligibilityCriteria'], true) ?? [],
		"Sections" => json_decode($data['blog_desc']['Sections'], true) ?? [],
		"AllottedTime" => json_decode($data['blog_desc']['AllottedTime'], true) ?? [],
		"Questions" => json_decode($data['blog_desc']['Questions'], true) ?? [],
		"RegistrationProcess" => json_decode($data['blog_desc']['RegistrationProcess'], true) ?? [],  
		"DocumentsRequired" => json_decode($data['blog_desc']['DocumentsRequired'], true) ?? [],
		"Nameprogram" => json_decode($data['blog_desc']['Nameprogram'], true) ?? [],
		"Campus" => json_decode($data['blog_desc']['Campus'], true) ?? [], 
		"Seats" => json_decode($data['blog_desc']['Seats'], true) ?? [],
		"Program" => json_decode($data['blog_desc']['Program'], true) ?? [],
		"fee" => json_decode($data['blog_desc']['fee'], true) ?? [],  ];

     $data['schedule'] = $schedule_data;
	 $data['id'] = $id;

		
	$this->template->load('admin/service','admissionnews_edit',$data);

	}
	public function update_admissionnews(){
	 $data = $this->input->post();
	 $datas['id'] = $data['id'];
	 $datas['exam_name'] = $data['exam_name'];
	 $datas['Exam_Particulars'] = json_encode($data['Exam_Particulars']);
	 $datas['ExamDetails'] = json_encode($data['ExamDetails']);
	 $datas['Events'] = json_encode($data['Events']);
	 $datas['Dates'] = json_encode($data['Dates']);
	 $datas['EntranceExam'] = json_encode($data['EntranceExam']);
	 $datas['EligibilityCriteria'] = json_encode($data['EligibilityCriteria']);
	 $datas['Sections'] = json_encode($data['Sections']);
	 $datas['AllottedTime'] = json_encode($data['AllottedTime']);
	 $datas['Questions'] = json_encode($data['Questions']);
	 $datas['RegistrationProcess'] = json_encode($data['RegistrationProcess']);
	 $datas['DocumentsRequired'] = json_encode($data['DocumentsRequired']);
	 $datas['Nameprogram'] = json_encode($data['Nameprogram']);
	 $datas['Campus'] = json_encode($data['Campus']);
	 $datas['Seats'] = json_encode($data['Seats']);
	 $datas['Program'] = json_encode($data['Program']);
	 $datas['fee'] = json_encode($data['fee']);
	 $datas['added_on'] = date('Y-m-d');
	 $result=$this->db->update('blog_desc',$datas,array('id'=>$data['id']));
	 if($result === true){
	  $this->session->set_flashdata('msg',"Admission Blog update.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	
	redirect('admin/service/admissionnews_list');

	}
	public function delete_admissionnews($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_couselling($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Admission news.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/service/admissionnews_list');
	}

}	
