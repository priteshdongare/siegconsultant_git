<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Admin extends CI_Controller {
    
    function __construct(){
        parent :: __construct();
        $this->load->model('Admin_model');
        if( ! $this->session->userdata('id') )
        return redirect('user/login');
    
    }


    public function changepass(){
	
      $this->form_validation->set_rules('current_password', 'Current Password', 'required');
      $this->form_validation->set_rules('new_password', 'New Password','required');
      $this->form_validation->set_rules('confirm_password', 'Confirm Password','required');
      if($this->input->server('REQUEST_METHOD') === 'POST')
          {
        $data = array();
              $old_pass= md5($this->input->post('current_password'));
        $new_password = $this->input->post('new_password');
        $data['password'] = md5($this->input->post('confirm_password'));
              $verify = $this->Admin_model->verifypass($old_pass);
        if($verify){
          if($this->Admin_model->updateData('admin_login',$data,array('id'=>1))){
            $this->session->set_flashdata('success', 'Password changed successfully!');
          }
          else{
            $this->session->set_flashdata('error', 'Something went wrong, please try again later!');
          }
        }
           
      }
      $data['header'] = TRUE;
      $data['sidebar'] = TRUE;
      $data['footer'] = TRUE;
      $data['_view'] = 'changepass';
      $data['meta_title'] = 'Change Password';
      $this->load->view('admin/admin_base/adminformt', $data);
    }
 
    public function logout()
    {
      $this->session->unset_userdata('id');
      return redirect('user/login');
    }

    function dashboard(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'dashboard';
		$data['meta_title'] = 'dashboard'; 
    $data['cust'] = $this->Admin_model->query('SELECT count(*) as counts FROM job_post ','result_array');
     $data['cust1'] = $this->Admin_model->query('SELECT count(*) as counts1 FROM job_application ','result_array');
     $data['cust2'] = $this->Admin_model->query('SELECT count(*) as counts2 FROM contact ','result_array');
		$this->load->view('admin/admin_base/adminformt', $data);
    }

    function jobpost(){

      if($this->input->post()){
        $value = $_POST;
        $success = $this->Admin_model->insertData('job_post',$value);
        if($success){

       $this->session->set_flashdata('success', 'ADD Data successfully!');
        // redirect();
      }else{
        $this->session->set_flashdata('error', 'Something went to wrong ');
      }
      }
      $data['header'] = TRUE;
      $data['sidebar'] = true;
      $data['footer'] = TRUE;
      $data['_view'] = 'jobpost';
      $data['meta_title'] = 'Job Post Form'; 
      $data['display'] = $this->Admin_model->query('SELECT nicename FROM country ','result_array');
      $this->load->view('admin/admin_base/adminformt', $data);
    }

    function jobpostlist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'jobpostlist';
		$data['meta_title'] = 'Job Post List'; 
		$data['list'] = $this->Admin_model->getData('job_post',array(),'result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }

    function contactlist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'contactlist';
		$data['meta_title'] = 'Contact Form List'; 
		$data['list'] = $this->Admin_model->getData('contact',array(),'result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }


    function jobapplicationlist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'job_application';
		$data['meta_title'] = 'Job Application List'; 
		$data['list'] = $this->Admin_model->query('SELECT d.tjob , c.* FROM job_application as c INNER JOIN job_post as d ON c.job_id = d.id','result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    function careerlist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'work_with_us';
		$data['meta_title'] = 'Career Application List'; 
		$data['list'] = $this->Admin_model->query('SELECT * FROM work_with_us','result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    function medialist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'medialist';
		$data['meta_title'] = 'Gallery List'; 
		$data['list'] = $this->Admin_model->query('SELECT * FROM media','result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    
    function videolist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'videolist';
		$data['meta_title'] = 'Video List'; 
		$data['list'] = $this->Admin_model->query('SELECT * FROM video','result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    
    function documentlist(){
    $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'documentlist';
		$data['meta_title'] = 'Documents List'; 
		$data['list'] = $this->Admin_model->query('SELECT * FROM documents','result_array'); 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    
        function DeleteAlbum($id=0){
          $data = $this->Admin_model->getData('media',array('id'=>$id),'row_array');
          $explode = explode(" ",$data['images']);
          foreach($explode as $view){
            unlink("assets/album/".$view);
          }
          
          if($data)
          {
            $this->Admin_model->deletData('media',array('id'=>$data['id']));
            $this->session->set_flashdata('success', 'deleted successfully!');
          }
          else
          {
            $this->session->set_flashdata('error', 'Data Not Found');
          }
          redirect('admin/medialist');
        }
        
        function Deletedocument($id=0){
          $data = $this->Admin_model->getData('documents',array('id'=>$id),'row_array');
          $explode = explode(" ",$data['pdf']);
          foreach($explode as $view){
            unlink("assets/documents/".$view);
          }
          
          if($data)
          {
            $this->Admin_model->deletData('documents',array('id'=>$data['id']));
            $this->session->set_flashdata('success', 'deleted successfully!');
          }
          else
          {
            $this->session->set_flashdata('error', 'Data Not Found');
          }
          redirect('admin/medialist');
        }

    function Enable($id=0){
      if(!empty($id)){
        $value['enable'] = 1;
        $data = $this->Admin_model->updateData('job_post',$value,array('id'=>$id));
        if($data){
         
          $this->session->set_flashdata('success', 'successfully enable job post');
          redirect('admin/jobpostlist');
          // redirect();
        }else{
          $this->session->set_flashdata('error', 'Something went to wrong ');
        }
       
       }
    }
    function Disabled($id=0){
      if(!empty($id)){
        $value['enable'] = 0;
        $data = $this->Admin_model->updateData('job_post',$value,array('id'=>$id));
        if($data){
         
          $this->session->set_flashdata('success', 'successfully Disabled job post');
          redirect('admin/jobpostlist');
          // redirect();
        }else{
          $this->session->set_flashdata('error', 'Something went to wrong ');
        }
       
       }
    }

    function jobdeleteappli($id=0){
  
      $data = $this->Admin_model->getData('job_application',array('id'=>$id),'row_array');
      //  print_r($data);die();
      if(unlink("assets/resume/".$data['resume']))
      {
        $this->Admin_model->deletData('job_application',array('id'=>$data['id']));
        $this->session->set_flashdata('success', 'deleted successfully!');
      }
      else
      {
        $this->session->set_flashdata('error', 'Data Not Found');
      }
      redirect('admin/jobapplicationlist');
    
    }
    function careerdelete($id=0){
  
      $data = $this->Admin_model->getData('work_with_us',array('id'=>$id),'row_array');
      //  print_r($data);die();
      if(unlink("assets/resume/".$data['resume']))
      {
        $this->Admin_model->deletData('work_with_us',array('id'=>$data['id']));
        $this->session->set_flashdata('success', 'deleted successfully!');
      }
      else
      {
        $this->session->set_flashdata('error', 'Data Not Found');
      }
      redirect('admin/jobapplicationlist');
    
    }
    function contactdelete($id=0){
  
      $data = $this->Admin_model->getData('contact',array('id'=>$id),'row_array');
      //  print_r($data);die();
      if($data)
      {
        $this->Admin_model->deletData('contact',array('id'=>$data['id']));
        $this->session->set_flashdata('success', 'deleted successfully!');
      }
      else
      {
        $this->session->set_flashdata('error', 'Data Not Found');
      }
      redirect('admin/contactlist');
    
    }

   function media(){
    if($this->input->post()){
    $info = array(); 
    $info['album'] = $this->input->post('album');
    if(isset($_FILES) && !empty($_FILES['images']['name']))
    {
      $ret = $this->Admin_model->multipleFileUpload($_FILES['images'],'assets/album/');
      if($ret['status'] && isset($ret['image_name']))
      {
        $impload = $ret['image_name'];
        $info['images'] = implode(" ",$impload);       
      }
      else
      {
        $this->session->set_flashdata('error', 'Unable to upload file. Please try later.');
      }
    }
    // print_r($info);die();
    if($this->Admin_model->insertData('media',$info)){
    
       $this->session->set_flashdata('success', 'ADD Data successfully!');
         redirect('Admin/media');
      }else{
        $this->session->set_flashdata('error', 'Something went to wrong ');
      }
           
         }
        $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'media';
		$data['meta_title'] = 'Gallery'; 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    
    
   function document(){
    if($this->input->post()){
    $info = array(); 
    $info['name'] = $this->input->post('name');
    if(isset($_FILES) && !empty($_FILES['pdffile']['name']))
    {
      $ret = $this->Admin_model->multipleFileUpload($_FILES['pdffile'],'assets/documents/');
      if($ret['status'] && isset($ret['image_name']))
      {
        $impload = $ret['image_name'];
        $info['pdf'] = implode(" ",$impload);       
      }
      else
      {
        $this->session->set_flashdata('error', 'Unable to upload file. Please try later.');
      }
    }
    // print_r($info);die();
    if($this->Admin_model->insertData('documents',$info)){
    
       $this->session->set_flashdata('success', 'ADD Data successfully!');
         redirect('Admin/media');
      }else{
        $this->session->set_flashdata('error', 'Something went to wrong ');
      }
           
         }
        $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'documents';
		$data['meta_title'] = 'Add Documents'; 
		$this->load->view('admin/admin_base/adminformt', $data);
    }
    
    
   function video(){
    if($this->input->post()){
    $info = array(); 
    $info['name'] = $this->input->post('name');
    $info['video'] = $this->input->post('video');
   
    if($this->Admin_model->insertData('video',$info)){
    
       $this->session->set_flashdata('success', 'ADD Data successfully!');
         redirect('Admin/media');
      }else{
        $this->session->set_flashdata('error', 'Something went to wrong ');
      }
           
         }
        $data['header'] = TRUE;
		$data['sidebar'] = true;
		$data['footer'] = TRUE;
		$data['_view'] = 'video';
		$data['meta_title'] = 'Add Documents'; 
		$this->load->view('admin/admin_base/adminformt', $data);
    }

      function Deletevideo($id=0){
          $data = $this->Admin_model->getData('video',array('id'=>$id),'row_array');
          if($data)
          {
            $this->Admin_model->deletData('video',array('id'=>$data['id']));
            $this->session->set_flashdata('success', 'deleted successfully!');
          }
          else
          {
            $this->session->set_flashdata('error', 'Data Not Found');
          }
          redirect('admin/videolist');
        }
  
 
  
  
  
  
  
  
  

	
}
