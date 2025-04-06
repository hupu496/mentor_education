<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once FCPATH . 'vendor/autoload.php';
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;


	
class Homeservice extends CI_Controller {

	function __construct(){
	   parent::__construct();
	   //$this->load->model('Homeservice_model');
	  // $this->load->library('paging');
	   $this->perPage = 15;	
	}
	public function qrcode($data)
	{
				
				$this->load->library('ciqrcode');
		
				
				$hex_data   = bin2hex($data);
				$save_name  = time() . '.png';
		
			
				$dir = 'assets/qrcode/';
				if (!file_exists($dir)) {
					mkdir($dir, 0775, true);
				}
				
				$config['cacheable']    = true;
				$config['imagedir']     = $dir;
				$config['quality']      = true;
				$config['size']         = '1020';
				$config['black']        = array(255, 255, 255);
				$config['white']        = array(255, 255, 255);
				$this->ciqrcode->initialize($config);
		
				
				$params['data']     = $data;
				$params['level']    = 'L';
				$params['size']     = 10;
				$params['savename'] = FCPATH . $config['imagedir'] . $save_name;
				$this->ciqrcode->generate($params);
			
				$return = array(
					'content' => $data,
					'file'    => $dir.$save_name
				);
				return $return;
			}
	
	public function index()
	{   
		$data['services'] = $this->db->get_where('services',array('status'=>1))->result_array();
	    $data['sub_service'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
	    $data['blog'] = $this->db->get_where('blog',array('status'=>1))->result_array();
		$data['faqs'] = $this->db->get_where('faqs',array('status'=>1))->result_array();
		$data['testimonial'] = $this->db->get_where('testimonial',array('status'=>1))->result_array();
		$data['title']="Home";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/index',$data);
        $this->load->view('website/footer');
	}
	public function about()
	{
		$data['title']="About Us";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/about',$data);
        $this->load->view('website/footer');
       
	}
	public function privacy_policy()
	{
		$data['title']="Privacy Policy";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/privacy_policy',$data);
        $this->load->view('website/footer');
       
	}
	public function term_condition()
	{
		$data['title']="Term & Condition";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/term_condition',$data);
        $this->load->view('website/footer');
       
	}
	public function contact()
	{
		$data['title']="Contact Us";
		$data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/contact',$data);
        $this->load->view('website/footer');
       
	}
	public function admission_news()
	{
		$data['title']="Admission News";
		$this->load->view('website/top-section');
		$this->load->view('website/admission_news');
        $this->load->view('website/footer');
       
	}
	public function service()
	{
		$id = $this->uri->segment('3');
		$data['id'] = $id;
	    $data['title']="Services";
        $this->load->view('website/top-section',$data);
		$data['courses_desc'] = $this->Homeservice_model->get_courses_desc($id);
		$where = array('t2.id'=>$id);
		$data['subservice'] = $this->Homeservice_model->subservice($where);
		$this->load->view('website/courses',$data);
        $this->load->view('website/footer');
    }
	public function couselling()
	{
		$id = $this->uri->segment('3');
		$data['id'] = $id;
	    $data['title']="Services";
        $this->load->view('website/top-section',$data);
		$where = array('t2.id'=>$id);
		$data['subservice'] = $this->Homeservice_model->subservice($where);
		$this->load->view('website/courses',$data);
        $this->load->view('website/footer');
    }
	public function blog_description()
	{  
		$id = $this->uri->segment(2);   
		$data['title']="Blog Description";
		$data['blog_description'] = $this->db->get_where('blog',array('status'=>1,'id'=>$id))->row_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/blog_description',$data);
        $this->load->view('website/footer');
       
	}
       
    public function service_form()
	{
        $id = $this->input->post();
	    $data['title']="Service Form";
        $this->load->view('website/top-section',$data);
        $this->load->view('website/main-menu');
        $data['subservice'] = $this->db->get_where('sub_service',array('service_id'=>$id['id'],'status'=>1))->result_array();
        $data['service'] = $this->db->get_where('services',array('id'=>$id['id'],'status'=>1))->row_array();
		$this->load->view('website/service_form',$data);
        $this->load->view('website/footer');
        $this->load->view('website/bottom-script');
		    $this->load->view('website/bottom-section');
    }
	public function serviceorder() {
    header('Content-Type: application/json');

    // Validate input (Example: checking if name and mobile are provided)
    if (empty($this->input->post('name')) || empty($this->input->post('mobile'))) {
        echo json_encode(["status" => "error", "message" => "Name and Mobile are required!"]);
        return;
    }

    // Process form data here (e.g., insert into database)
    $data = [
        'name' => $this->input->post('name'),
        'mobile' => $this->input->post('mobile'),
        'service' => $this->input->post('service'),
        'state' => $this->input->post('state'),
        'query' => $this->input->post('query'),
        'created_at' => date("Y-m-d H:i:s")
    ];

    // Assuming a successful database insert
    $insert = $this->db->insert('service_orders', $data);

    if ($insert) {
        echo json_encode(["status" => "success", "message" => "Form submitted successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database error, please try again."]);
    }
}




    // ///////////////////

	public function meeting() {
    $data = $this->input->post();
    $data['added_on'] = date('Y-m-d');

    $query = $this->db->insert('meeting', $data);

    if ($query) {
        echo json_encode(["status" => "success", "message" => "Meeting saved successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Meeting save failed"]);
    }
    exit;
}
    public function contactsave(){
		$data = $this->input->post();
		$data['added_on'] = date('Y-m-d');
		$query = $this->db->insert('contact_us',$data);
		if($query){
			$this->session->set_flashdata("web_msg","Contact Save Successfully!!");
		}
		else{
			$this->session->set_flashdata('web_err_msg', "Contact Save failed ");
		}
		redirect('contact');
  }
  public function blog()
	{
	
		$data['title']="Blog";
		$this->load->view('website/top-section',$data);
		$data['blog'] = $this->db->get_where('blog',array('status'=>1))->result_array();
		$this->load->view('website/blog',$data);
        $this->load->view('website/footer');
       
	}
	public function our_team()
	{
		$data['title']="Our Team";
		$this->load->view('website/top-section',$data);
		$data['our_team']= $this->db->get_where('our_team',array('status'=>1))->result_array();
		$this->load->view('website/our_team',$data);
        $this->load->view('website/footer');
       
	}
	
    
}
