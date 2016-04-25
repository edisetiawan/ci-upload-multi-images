<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
   /* function __construct()
    {
        parent::__construct();
        $this->load->helper('array');
    }*/

public function index()
		{
		/*$this->data->produk=array(
			array('nama' => 'sepatu','harga'=>'1000' ),
			array('nama' => 'kemeja','harga'=>'3000' ),
			array('nama' => 'hem','harga'=>'2000' ),
			array('nama' => 'topi','harga'=>'5000' ),
			);*/
		$data=array(array('nama' => 'sepatu','harga'=>'102999'),
					array('nama' => 'sepatu','harga'=>'12000'),
					array('nama' => 'sepatu','harga'=>'1111'),
			/*array('nama' => 'kemeja','harga'=>'3000' ),
			array('nama' => 'hem','harga'=>'2000' ),
			array('nama' => 'topi','harga'=>'5000' ),*/
			);
        var_export($data);
		//$this->load->view('Test_view',$data);

/*
			$data=array (array (
    'file_name' => '11006462_338287823042770_6395671112782424421_n4.jpg',
    'file_type' => 'image/jpeg',
    'file_path' => 'C:/xampp/htdocs/harviacode/multiple-upload/uploads/',
    'full_path' => 'C:/xampp/htdocs/harviacode/multiple-upload/uploads/11006462_338287823042770_6395671112782424421_n4.jpg',
    'raw_name' => '11006462_338287823042770_6395671112782424421_n4',
    'orig_name' => '11006462_338287823042770_6395671112782424421_n.jpg',
    'client_name' => '11006462_338287823042770_6395671112782424421_n.jpg',
    'file_ext' => '.jpg',
    'file_size' => 5.589999999999999857891452847979962825775146484375,
    'is_image' => true,
    'image_width' => 168,
    'image_height' => 168,
    'image_type' => 'jpeg',
    'image_size_str' => 'width="168" height="168"',
  ),
  array (
    'file_name' => '12553023_1071623359558243_5505888275407091917_n3.jpg',
    'file_type' => 'image/jpeg',
    'file_path' => 'C:/xampp/htdocs/harviacode/multiple-upload/uploads/',
    'full_path' => 'C:/xampp/htdocs/harviacode/multiple-upload/uploads/12553023_1071623359558243_5505888275407091917_n3.jpg',
    'raw_name' => '12553023_1071623359558243_5505888275407091917_n3',
    'orig_name' => '12553023_1071623359558243_5505888275407091917_n.jpg',
    'client_name' => '12553023_1071623359558243_5505888275407091917_n.jpg',
    'file_ext' => '.jpg',
    'file_size' => 78.0400000000000062527760746888816356658935546875,
    'is_image' => true,
    'image_width' => 960,
    'image_height' => 944,
    'image_type' => 'jpeg',
    'image_size_str' => 'width="960" height="944"',
  ), 
  array (
    'file_name' => 'bukitmasin2.png',
    'file_type' => 'image/png',
    'file_path' => 'C:/xampp/htdocs/harviacode/multiple-upload/uploads/',
    'full_path' => 'C:/xampp/htdocs/harviacode/multiple-upload/uploads/bukitmasin2.png',
    'raw_name' => 'bukitmasin2',
    'orig_name' => 'bukitmasin2.png',
    'client_name' => 'bukitmasin2.png',
    'file_ext' => '.png',
    'file_size' => 210.5,
    'is_image' => true,
    'image_width' => 354,
    'image_height' => 256,
    'image_type' => 'png',
    'image_size_str' => 'width="354" height="256"',
  ),
)*/

		//$this->load->view('Test_view');
			//echo "hello";
		}



}
