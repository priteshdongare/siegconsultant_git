<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
    }
   

    public function login()
    {
        
	  $this->form_validation->set_rules('username', 'Username', 'required');  
	  $this->form_validation->set_rules('password', 'Password', 'required');
	  if($this->form_validation->run())  
	  {  
		$username = $this->input->post('username');  
		$password = $this->input->post('password');
		$this->load->model('admin_model');
		if($this->admin_model->can_login($username, $password))  
		{  
        	$admindetails = $this->Admin_model->can_login($username, $password);
        // print_r($admindetails);die();
		  	$session_data = array(  
		  	    'id' =>   $admindetails -> id,
				'username'     =>   $admindetails -> username, 	           
				'password'  =>  $admindetails -> password
			); 
			
			if($this->session->set_userdata($session_data)){ 
				$this->session->set_flashdata('success', 'You have successfully!');
				redirect('admin/dashboard'); 
			} else{
				$this->session->set_flashdata('error', 'Please Enter Correct Email and Passowrd. ');
				redirect('user/login');
			}
			// redirect('admin/dashboard'); 
		  
		}
		else  
		{  
		  $msg = '<div class="alert alert-danger" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<strong>Opps !</strong> Please Enter Correct Email and Passowrd.
					</div>';
		  $this->session->set_flashdata('error', $msg);
		  redirect('user/login');  
		}  
	  }  
	  else  
	  {  
		$this->load->view('login');
		if( $this->session->userdata('id'))
		return redirect('admin/dashboard');
	  }  
	
	}

   
	public function index(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'index';
		$data['active_tab'] = 'home';
		$this->load->view('userformat/ui', $data);
	}
	public function about(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'about';
		$data['active_tab'] = 'our';
		$this->load->view('userformat/ui', $data);
	}
	public function team(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'team';
		$data['active_tab'] = 'our';
		$this->load->view('userformat/ui', $data);
	}
	public function ourbranches(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'ourbranches';
		$data['active_tab'] = 'our';
		$this->load->view('userformat/ui', $data);
	}
	public function manpower(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'manpower';
		$data['active_tab'] = 'Services';
		$this->load->view('userformat/ui', $data);
	}
	public function visaprocessing(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'visaprocessing';
		$this->load->view('userformat/ui', $data);
	}
	public function Industries(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'Industries';
		$data['active_tab'] = 'Industries';
		$this->load->view('userformat/ui', $data);
	}
	public function job(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'job';
		$data['active_tab'] = 'job';
		$data['list'] = $this->Admin_model->query('SELECT * FROM `job_post` order by id desc limit 0, 10','result_array'); 
		$this->load->view('userformat/ui', $data);
	}
	public function career(){
// 	     $this->load->helper('captcha');
// 		$vals = array(
//         //'word'          => 'Randdfdom word',
//         'img_path'      => './captcha-images2/',
//         'img_url'       => base_url().'captcha-images2/',
//         'font_path'     => './path/to/fonts/texb.ttf',
//         'img_width'     => '200',
//         'img_height'    => 40,
//         'expiration'    => 7200,
//         'word_length'   => 5,
//         'font_size'     => 50,
//         'img_id'        => 'Imageid',
//         'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

//         // White background and border, black text and red grid
//         'colors'        => array(
//                 'background' => array(255, 255, 255),
//                 'border' => array(255, 255, 255),
//                 'text' => array(0, 0, 0),
//                 'grid' => array(255, 40, 40)
// 		        )
// 		);

// 		$cap = create_captcha($vals);
// // 		print_r($cap);die();
// 		$image= $cap['image'];
// 		$data['captcha_image2']= $image;
// 		$captchaword= $cap['word'];
// 		$this->session->set_userdata('captchaword2',$captchaword);

 		
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'career';
		$data['active_tab'] = 'Work';
		$this->load->view('userformat/ui', $data);
	}
	
	public function careersubmit(){
	    if($this->input->post()){
		       $v = $this->input->post('captcha');
		       $ses = $this->session->userdata('captchaword2');
		       if($v==$ses){
		       $value = array();
		       $value['name']= $this->input->post('name');
		       $value['contact']= $this->input->post('contact');
		       $value['email']= $this->input->post('email');
		       $value['subject']= $this->input->post('subject');
		       $value['message']= $this->input->post('message');
					$v = $this->input->post('resume');
		        
				if(isset($_FILES) && !empty($_FILES['resume']['name']))
				{    
					$ret = $this->Admin_model->fileUpload($_FILES['resume'],'assets/resume/');
					if($ret['status'] && isset($ret['image_name']))
					{
						$value['resume'] = $ret['image_name'];
						
					}
				}
				
			
				if($this->Admin_model->insertData('work_with_us',$value)){
				    	 $config = Array(
                    	'protocol'  => 'smtp',
                    	'smtp_host' => 'siegconsultant.in',
                    	'smtp_port' =>  587,
                        'smtp_user' => 'noreply@siegconsultant.in', // change it to yours
                        'smtp_pass' => '37mhE^5}L4}G', //  enter passwordchange it to yours
                        'mailtype'  => 'html',
                        'charset'   => 'iso-8859-1',
                        'wordwrap'  => TRUE
                    );
                    
                    
                    $this->load->library('email', $config);
            		$this->email->set_newline("\r\n");
                    $this->email->from($config['smtp_user']);
                    $subject ="New Resume   ".$value['name'];
				    $message = ' To Owner Reicved New Resume
                    Name : '.$value['name'].'
                    Email :'.$value['email'].'
                    Mobile No : '.$value['contact'].'
                    Subject : '.$value['subject'].'
                    Message : '.$value['message'];
                    $pdfFilePath1 = base_url('assets/resume/'.$value['resume']);
                    $this->email->to('admin@siegconsultant.in');
                    $this->email->subject($subject);
                    $this->email->message($message); 
                     $this->email->attach($pdfFilePath1);
                    if($this->email->send()){
                	     $this->session->set_flashdata('success', 'Thank you for your application. Our team will get back to you soon.');
                 		        redirect('user/career');  
                		}else{
                			$this->session->set_flashdata('error', 'Something went to wrong ');
                		  }
				}
		       }else{
		           $this->session->set_flashdata('error', 'Captcha does not match');
		          redirect('user/career');
		       }
			}        
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'career';
		$data['active_tab'] = FALSE;
		$this->load->view('userformat/ui', $data);
	}
	
	public function contact(){
	    
	    $this->load->helper('captcha');
		$vals = array(
        //'word'          => 'Randdfdom word',
        'img_path'      => './captcha-images/',
        'img_url'       => base_url().'captcha-images/',
        'font_path'     => './path/to/fonts/texb.ttf',
        'img_width'     => '250',
        'img_height'    => 40,
        'expiration'    => 7200,
        'word_length'   => 5,
        'font_size'     => 50,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
		        )
		);

		$cap = create_captcha($vals);
		$image= $cap['image'];
		$data['captcha_image']= $image;
		$captchaword= $cap['word'];
		$this->session->set_userdata('captchaword',$captchaword);
//  		$this->load->view('contact',['captcha_image'=>$image]);
 		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'contact';
		$data['active_tab'] = 'contact';
		$this->load->view('userformat/ui',$data);
 		
	}
	public function contactsubmit(){
 		 
		if($this->input->post()){
		       $v = $this->input->post('captcha');
		       $ses = $this->session->userdata('captchaword');
		       if($v==$ses){
		       $value = array();
		       $value['name']= $this->input->post('name');
		       $value['contact']= $this->input->post('contact');
		       $value['email']= $this->input->post('email');
		       $value['subject']= $this->input->post('subject');
		       $value['message']= $this->input->post('message');
				
				$success = $this->Admin_model->insertData('contact',$value);
				if($success){
					$this->session->set_flashdata('success', 'Thank you for Contacting Us Our Executing will get back to you soon.');
					 redirect('user/contact');
				}
				else
				{
					$this->session->set_flashdata('error', 'Something went to wrong');
					 redirect('user/contact');
				}
		       }else{
		           $this->session->set_flashdata('error', 'Captcha does not match');
		          redirect('user/contact');
		       }
			}        
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'contact';
		$data['active_tab'] = FALSE;
		$this->load->view('userformat/ui', $data);
	}
	public function Searchresult(){
     if($this->input->get()){
		$title = $this->input->get('tjob');
		$country = $this->input->get('country');
	    $data['result'] =  $this->Admin_model->query('SELECT * FROM `job_post` WHERE `tjob` LIKE "%'.$title.'%" AND `country` LIKE "%'.$country.'%" AND `enable`=1','result_array');
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['active_tab'] = 'job';
		$data['_view'] = 'Searchresult';
		$this->load->view('userformat/ui', $data);
	}
	}
	public function Searchdes($id=0){
		if($id){
			$data['display'] = $this->Admin_model->query('SELECT * FROM job_post as a WHERE id ='.$id ,'row_array');
		}
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'Searchdes';
		$data['active_tab'] = 'job';
		$this->load->view('userformat/ui', $data);
	
	}

	public function familyvisa(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'familyvisa';
		$data['active_tab'] = 'Services';
		$this->load->view('userformat/ui', $data);
	}
	public function employmentvisaprocessing(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'employmentvisaprocessing';
		$data['active_tab'] = 'Services';
		$this->load->view('userformat/ui', $data);
	}
	public function childvisa(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'childvisa';
		$data['active_tab'] = FALSE;
		$this->load->view('userformat/ui', $data);
	}
	public function reentryextension(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'reentryextension';
		$data['active_tab'] = FALSE;
		$this->load->view('userformat/ui', $data);
	}
	public function termsconditions(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'termsconditions';
		$data['active_tab'] = FALSE;
		$this->load->view('userformat/ui', $data);
	}

	public function visitvisa(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'visitvisa';
		$data['active_tab'] = FALSE;
		$this->load->view('userformat/ui', $data);
	}
	
	public function Gallery(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'Gallery';
		$data['active_tab'] = 'Media';
		$this->load->view('userformat/ui', $data);
	}

	public function applynow($id=0){
        if($this->input->post()){
			$value = array();
			$value['job_id'] = $this->input->post('id');
			$value['name'] = $this->input->post('name');
			$value['contact'] = $this->input->post('contact');
			$value['appexperience'] = $this->input->post('ex');
			$value['email'] = $this->input->post('email');
			$v = $this->input->post('resume');
		    // print_r($_POST);die;
				if(isset($_FILES) && !empty($_FILES['resume']['name']))
				{
					$ret = $this->Admin_model->fileUpload($_FILES['resume'],'assets/resume/');
			 	//file is uploaded successfully then do on thing add entry to table
					if($ret['status'] && isset($ret['image_name']))
					{
						$value['resume'] = $ret['image_name'];
						
					}
				}
              
				if($this->Admin_model->insertData('job_application',$value)){
				    $data = $this->Admin_model->getData('job_post',array('id'=>$value['job_id']),'result_array'); 
				    
				     $config = Array(
                    	'protocol'  => 'smtp',
                    	'smtp_host' => 'siegconsultant.in',
                    	'smtp_port' =>  587,
                        'smtp_user' => 'noreply@siegconsultant.in', // change it to yours
                        'smtp_pass' => '37mhE^5}L4}G', //  enter passwordchange it to yours
                        'mailtype'  => 'html',
                        'charset'   => 'iso-8859-1',
                        'wordwrap'  => TRUE
                    );
                    
                    
                    $this->load->library('email', $config);
            		$this->email->set_newline("\r\n");
                    $this->email->from($config['smtp_user']);
                    $subject ="New Resume for ".$data[0]['tjob']." Applied ".$value['name'];
				    $message = ' To Owner Reicved New Resume
                    Name : '.$value['name'].'
                    Email :'.$value['email'].'
                    Mobile No : '.$value['contact'].'
                    Job Title : '.$data[0]['tjob'].'
                    Locaion : '.$data[0]['country'].'
                    Experience :'.$value['appexperience'];
                    $pdfFilePath1 = base_url('assets/resume/'.$value['resume']);
                    $this->email->to('admin@siegconsultant.in');
                    $this->email->subject($subject);
                    $this->email->message($message); 
                     $this->email->attach($pdfFilePath1);
                    if($this->email->send()){
                	$this->session->set_flashdata('success', 'Thank you for the application Us Our Executing will get back to you soon.');
                 		        redirect('user/applynow');  
                			}else{
                			$this->session->set_flashdata('error', 'Something went to wrong ');
                		  }
				}

			}

		$data['id'] = $id;
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'applynow';
		$data['active_tab'] = 'job';
		$this->load->view('userformat/ui', $data);
	}
	
	public function videos(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'videos';
		$data['active_tab'] = 'Media';
		$data['display'] = $this->Admin_model->query('SELECT * FROM video ' ,'result_array');
			$count = $this->Admin_model->query('SELECT count(id) FROM video ' ,'result_array');
		$config['base_url'] = 'https://siegconsultant.in/new/user/videos';
        $config['total_rows'] = $count[0]['count(id)'];
        $config['per_page'] = 9;
       $config["uri_segment"] = 3;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
    
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['link'] = $this->pagination->create_links();
		$this->load->view('userformat/ui', $data);
	}
	public function images(){
	    
	  
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'images';
		$data['active_tab'] = 'Media';
		$data['display'] = $this->Admin_model->query('SELECT * FROM media ' ,'result_array');
		$count = $this->Admin_model->query('SELECT count(id) FROM media ' ,'result_array');
        $config['base_url'] = 'https://siegconsultant.in/new/user/images';
        $config['total_rows'] = $count[0]['count(id)'];
        $config['per_page'] = 9;
       $config["uri_segment"] = 3;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
    
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['link'] = $this->pagination->create_links();
		$this->load->view('userformat/ui', $data);
	}
	public function documents(){
		$data['header'] = TRUE;
		$data['footer'] = TRUE;
		$data['_view'] = 'documents';
		$data['active_tab'] = 'Media';
		$data['display'] = $this->Admin_model->query('SELECT * FROM documents ' ,'result_array');
		$count = $this->Admin_model->query('SELECT count(id) FROM documents ' ,'result_array');
		$config['base_url'] = 'https://siegconsultant.in/new/user/documents';
        $config['total_rows'] = $count[0]['count(id)'];
        $config['per_page'] = 9;
       $config["uri_segment"] = 3;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
    
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['link'] = $this->pagination->create_links();
		$this->load->view('userformat/ui', $data);
	}
	
 public function forotpass(){
     $data = $this->Admin_model->query('SELECT * FROM admin_login ' ,'result_array');
     
      if($data){
                 $config = Array(
                    	'protocol'  => 'smtp',
                    	'smtp_host' => 'siegconsultant.in',
                    	'smtp_port' =>  587,
                        'smtp_user' => 'noreply@siegconsultant.in', // change it to yours
                        'smtp_pass' => '37mhE^5}L4}G', //  enter passwordchange it to yours
                        'mailtype'  => 'html',
                        'charset'   => 'iso-8859-1',
                        'wordwrap'  => TRUE
                    );
                    
                    
                    $this->load->library('email', $config);
            		$this->email->set_newline("\r\n");
                    $this->email->from($config['smtp_user']);
                    $subject ="Forgot Password ".$data[0]['username'];
		            $message = 'Dear  '.$data[0]['username'].' You have change password to admin panel Go to this link :'.base_url().'user/changepass';
                    $this->email->to($data[0]['email']);
                    $this->email->subject($subject);
                    $this->email->message($message); 
                    if($this->email->send()){
            	        $this->session->set_flashdata('success', 'Please Check The Register Email');
             		        redirect('user/login');  
            			}else{
            			$this->session->set_flashdata('error', 'Something went to wrong ');
        		    }
                    
      }
 }
 public function changepass(){
      if($this->input->server('REQUEST_METHOD') === 'POST')
          {
        $data = array();
        $admin=$this->input->post('admin');
        $new_password = $this->input->post('new_password');
        $data['password'] = md5($this->input->post('confirm_password'));
            //   $verify = $this->Admin_model->verifypass($old_pass);
            //   print_r($data);die();
        if(! empty($data)){
          if($this->Admin_model->updateData('admin_login',$data,array('id'=>1,'username'=>$admin))){
            $this->session->set_flashdata('success', 'Password changed successfully!');
          }
          else{
            $this->session->set_flashdata('error', 'Something went wrong, please try again later!');
          }
        }
          }
     $this->load->view('changepass');
 }




    

}
