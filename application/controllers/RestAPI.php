
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH .'/libraries/REST_Controller.php';
class RestAPI extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
    }

    public function rest_test_get($id = '0'){
        
         $result = $this->db->query("select * from job_application where id = '$id'")->row();

       echo  $this->response($result, REST_Controller::HTTP_OK); 
	}

    public function rest_submit_post(){
         $postdata = file_get_contents('php://input');
         if(! empty($postdata)){
            $response = [
                'status' => 'False',
                'Massage' => 'DATA ALLOW ONLY POST METHOD'
                ];
         echo  $this->response($response, REST_Controller::HTTP_OK); 
          die;
         }
        $data = [
            'job_id'=>$_POST['job_id'],
            'name'=>$_POST['name'],
            'contact'=>$_POST['contact'],
            'email'=>$_POST['email'],
            'appexperience'=>$_POST['appexperience'],
            'resume'=>$_POST['resume']
        ];

        $status = $this->db->insert('job_application',$data);
        if($status > 0){
            $response = [
            'status' => 'True',
            'Massage' => 'APPLICATION CREATED'
            ];
        }else{
            $response = [
                'status' => 'FAILED',
                'Massage' => 'APPLICATION NOT CREATED'
                ];
        }
    
       echo  $this->response($response, REST_Controller::HTTP_OK); 
	}
    public function rest_updated_put($id){

        $data = [
            'job_id'=>$this->put('job_id'),
            'name'=>$this->put('name'),
            'contact'=>$this->put('contact'),
            'email'=>$this->put('email'),
            'appexperience'=>$this->put('appexperience'),
            'resume'=>$this->put('resume')
        ];
        //   print_r($data);die;
        $status = $this->db->update('job_application',$data,['id' => $id]);
        if($status > 0){
            $response = [
            'status' => 'True',
            'Massage' => 'APPLICATION UPDATED'
            ];
        }else{
            $response = [
                'status' => 'FAILED',
                'Massage' => 'APPLICATION NOT UPDATED'
                ];
        }
    
       echo  $this->response($response, REST_Controller::HTTP_OK); 
	}
    public function rest_app_delete($id){

       
        $status = $this->db->delete('job_application',['id' => $id]);
        if($status > 0){
            $response = [
            'status' => 'True',
            'Massage' => 'APPLICATION DELETED'
            ];
        }else{
            $response = [
                'status' => 'FAILED',
                'Massage' => 'APPLICATION NOT DELETED'
                ];
        }
    
       echo  $this->response($response, REST_Controller::HTTP_OK); 
	}

}
?>