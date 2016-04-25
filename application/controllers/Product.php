<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $product = $this->product_model->get_all();

        $data = array(
            'product_data' => $product
        );

        $this->load->view('product_list', $data);
    }

    public function read($id) 
    {
        $row = $this->product_model->get_by_id($id);
        if ($row) {
            $data = array(
		'product_id' => $row->product_id,
		'product_name' => $row->product_name,
		'product_price' => $row->product_price,
		'prodcut_images' => $row->prodcut_images,
	    );
            $this->load->view('product_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('product/create_action'),
    	    'product_id' => set_value('product_id'),
    	    'product_name' => set_value('product_name'),
    	    'product_price' => set_value('product_price'),
    	    'prodcut_images' => set_value('prodcut_images'),
	);
        $this->load->view('product_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
    		'product_name' => $this->input->post('product_name',TRUE),
    		'product_price' => $this->input->post('product_price',TRUE),
    		'prodcut_images' => $this->input->post('prodcut_images',TRUE),
	    );

            var_export($data);
/*
            $this->product_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('product'));*/
        }
    }
    
    public function save()    //ujicoba array multidimensi
    {
        $data=array(array('product_name' => 'sepatu','product_price'=>'102999','prodcut_images'=>'gambar.png'),
                    array('product_name' => 'sepatu','product_price'=>'102999','prodcut_images'=>'gambar12.jpg'),
                    array('product_name' => 'sepatu','product_price'=>'102999','prodcut_images'=>'gambar1234.jpg'),
            );
        //echo "<pre>";
        //var_export($data);
        //echo "</pre>";
        foreach ($data as $key => $value) {
            # code... 
            $this->product_model->insert($value);
        }
           // $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('product'));
    }



    public function update($id) 
    {
        $row = $this->product_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('product/update_action'),
        		'product_id' => set_value('product_id', $row->product_id),
        		'product_name' => set_value('product_name', $row->product_name),
        		'product_price' => set_value('product_price', $row->product_price),
        		'prodcut_images' => set_value('prodcut_images', $row->prodcut_images),
	    );
            $this->load->view('product_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('product_id', TRUE));
        } else {
            $data = array(
		'product_name' => $this->input->post('product_name',TRUE),
		'product_price' => $this->input->post('product_price',TRUE),
		'prodcut_images' => $this->input->post('prodcut_images',TRUE),
	    );

            $this->product_model->update($this->input->post('product_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('product'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->product_model->get_by_id($id);

        if ($row) {
            $this->product_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('product'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product'));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('product_name', ' ', 'trim|required');
	$this->form_validation->set_rules('product_price', ' ', 'trim|required');
	$this->form_validation->set_rules('prodcut_images', ' ', 'trim|required');

	$this->form_validation->set_rules('product_id', 'product_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */