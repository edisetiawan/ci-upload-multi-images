<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_detail_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $product_detail = $this->product_detail_model->get_all();

        $data = array(
            'product_detail_data' => $product_detail
        );

        $this->load->view('product_detail_list', $data);
    }

    public function read($id) 
    {
        $row = $this->product_detail_model->get_by_id($id);
        if ($row) {
            $data = array(
		'productdet_id' => $row->productdet_id,
		'productdet_images' => $row->productdet_images,
		'product_id' => $row->product_id,
	    );
            $this->load->view('product_detail_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product_detail'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('product_detail/create_action'),
	    'productdet_id' => set_value('productdet_id'),
	    'productdet_images' => set_value('productdet_images'),
	    'product_id' => set_value('product_id'),
	);
        $this->load->view('product_detail_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'productdet_images' => $this->input->post('productdet_images',TRUE),
		'product_id' => $this->input->post('product_id',TRUE),
	    );

            $this->product_detail_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('product_detail'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->product_detail_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('product_detail/update_action'),
		'productdet_id' => set_value('productdet_id', $row->productdet_id),
		'productdet_images' => set_value('productdet_images', $row->productdet_images),
		'product_id' => set_value('product_id', $row->product_id),
	    );
            $this->load->view('product_detail_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product_detail'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('productdet_id', TRUE));
        } else {
            $data = array(
		'productdet_images' => $this->input->post('productdet_images',TRUE),
		'product_id' => $this->input->post('product_id',TRUE),
	    );

            $this->product_detail_model->update($this->input->post('productdet_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('product_detail'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->product_detail_model->get_by_id($id);

        if ($row) {
            $this->product_detail_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('product_detail'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product_detail'));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('productdet_images', ' ', 'trim|required');
	$this->form_validation->set_rules('product_id', ' ', 'trim|required|numeric');

	$this->form_validation->set_rules('productdet_id', 'productdet_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Product_detail.php */
/* Location: ./application/controllers/Product_detail.php */