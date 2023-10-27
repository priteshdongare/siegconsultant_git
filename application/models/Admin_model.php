<?php
class Admin_model extends Ci_Model {

    function insertData($tablename,$data){
        return $this->db->insert($tablename,$data);
    }

    public function updateData($tableName,$data,$where)
    {
        return $this->db->update($tableName,$data,$where);
    }

    function deletData($tablename,$where){
        return $this->db->delete($tablename,$where);
    }
    public function getData($tableName,$where,$rowResult,$or='id',$set='desc')
    {
        return $this->db->order_by($or,$set)->get_where($tableName,$where)->$rowResult();
    }

    public function query($sql,$rowResult)
    {
        return $this->db->query($sql)->$rowResult();
    }
    function verifypass($old_pass){
      $this->db->where('password', $old_pass);
      $query = $this->db->get('admin_login');
       if($query->num_rows() > 0){
          return 1;
       }
       else{
          return 0;
       }
    }    

    function pass($id){
      $this->db->where('id',$id);
      return $data = $this->db->get('admin_login')->row_array();
    }

   
  
  function can_login($username, $password)  // Admin Authentication
      {  
        $q=$this->db->where(['username'=>$username,'password'=>md5($password)])
        ->get('admin_login');
       
//select * from users where username=$username and password=$password
 
    if($q->num_rows())     
    {
    return $q->row();
    }   
    else
    {
      return false;
    }
      }
      
  // ******************Admin Profile************** 
      
          public function get_user_data($username, $password)  
      {
        $this->db->where('username', $username);  
        $this->db->where('password',$password);  
        $query = $this->db->get('admin_login');
        return $query->result();
      }	
  
      function fileUpload($data,$path='assets/images/',$cstm=false,$creat_thumb=false)
    {
        if(!is_dir($path))
        {
            mkdir($path);
        }
        $ret = false;
        $arr = array();
        //set actual path for image
        $target_dir = '';
        $image_type = strtolower(pathinfo($data['name'],PATHINFO_EXTENSION));
        $image_name = rand(99,10).date('Ymdhis').'.'.$image_type;
        if($image_type =='jpg'|| $image_type =='jpeg' || $image_type =='png' || $image_type =='gif' || $image_type =='bmp' || $image_type =='mp4'||$image_type =='pdf'||$image_type =='docx'||$image_type =='dot')
          $ret =true;

        if($cstm)
            $ret = true;
        /*if($data['size']> 2000000)
          $ret = false;*/
        if($ret)
          if(move_uploaded_file($data['tmp_name'],$path.$image_name))
          {
            //check wheather the person ask for watermark or not if do below
            if($creat_thumb)
            {
                $arr['image_name'] = $this->create_watermark($path.$image_name,$image_type,$path);
            }
            else
                $arr['image_name'] = $image_name;
            $success = " New record added successfully.";
          }
          else
            $success = "Can not upload file.";
        else
          $success = "Unable to add record.";
        $arr['status'] = $ret;
        $arr['message'] = $success;
        return $arr;
    }

    function unlinkImage($file)
  {
      if(file_exists($file))
          return unlink($file);
      else
          return true;
  }
  
     //upload Multiple Images
    function multipleFileUpload($data,$path='assets/images/',$creat_thumb=false)
    {
        if(!is_dir($path))
        {
            mkdir($path);
        }
        $ret = false;
        $arr = array();
        //set actual path for image
        $target_dir = '';
        for($i=0;$i<count($data['name']);$i++)
        {    
            $image_type = strtolower(pathinfo($data['name'][$i],PATHINFO_EXTENSION));
            $image_name = rand(99,10).date('Ymdhis').'.'.$image_type;
            if($image_type =='jpg'|| $image_type =='jpeg' || $image_type =='png' || $image_type =='pdf' || $image_type =='bmp')
              $ret =true;
            /*if($data['size']> 2000000)
              $ret = false;*/
              if(!file_exists($path))
                mkdir($path);
            if($ret)
              if(move_uploaded_file($data['tmp_name'][$i],$path.$image_name))
              {
                if($creat_thumb)
                {
                    $arr['image_name'][$i] = $this->create_watermark($path.$image_name,$image_type,$path);
                }
                else
                    $arr['image_name'][$i] = $image_name;
                $success[$i] = " New record added successfully.";
              }
              else
                $success[$i] = "Can not upload file.";
            else
              $success[$i] = "Unable to add record.";
        }
        $arr['status'] = $ret;
        $arr['message'] = $success;
        return $arr;
    }
 
}

?>