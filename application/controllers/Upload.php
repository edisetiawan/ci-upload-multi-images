<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('product_detail_model');
        $this->load->library('form_validation');
    }

 public function index()
 {
  $this->load->view('upload_form_multi_2');
 }
 
 public function create_action() 
    {

            $data = array(
                        array('productdet_images' => "ayooo-coding.jpg",'product_id' => '12'),
                        array('productdet_images' => "hello-dunia.jpg",'product_id' => '12'),
                        array('productdet_images' => "working-the-worl.jpg",'product_id' => '12'),
                          );

            foreach ($data as $key => $value):

            $data1=array('productdet_images' => $value['productdet_images'],'product_id'=>$value['product_id'] );
            
            $this->product_detail_model->insert($data1);
          
            endforeach;

            redirect(site_url('product_detail'));


    }

  public function save()    //ujicoba array multidimensi   OKE FIX
    {

        $data=array(array('productdet_images' => 'nafa.jpg','product_id'=>'102999'),
                    array('productdet_images' => 'anisa.jpg','product_id'=>'102999'),
                    array('productdet_images' => 'rara.jpg','product_id'=>'102999'),
            );
        foreach ($data as $key => $value) {
    
            $data1=array('productdet_images' => $value['productdet_images'],'product_id'=>$value['product_id'] );

            $this->product_detail_model->insert($data1);
        
        }
            redirect(site_url('product_detail'));
    }



 function do_upload_multi()
 {        
             $this->load->library('upload');
  
      //Configure upload.
             $this->upload->initialize(array(
                    "allowed_types" => "gif|jpg|png|jpeg",
                    "upload_path"   => "./uploads/"
             ));
        
             //Perform upload.
             if($this->upload->do_upload("images")) {
                 $uploaded = $this->upload->data();
          /*       echo '<pre>';
                 var_export($uploaded);
                 echo '</pre>';*/
                foreach ($uploaded as $key => $value) {
                  # code...
                  $data1=array('productdet_images' => $value['file_name'],'product_id'=>'12' );

                  $this->product_detail_model->insert($data1);

                }
                redirect(site_url('product_detail'));

             }else{
   die('GAGAL UPLOAD');
      }
 }
}