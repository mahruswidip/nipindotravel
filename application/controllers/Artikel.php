<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
    }

    /*
     * Listing of artikel
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('artikel/index?');
        $config['total_rows'] = $this->Artikel_model->get_all_artikel_count();
        $this->pagination->initialize($config);

        $user_level = $this->session->userdata('user_level');
        $user_id = $this->session->userdata('user_id');

        $data['artikel'] = $this->Artikel_model->get_all_artikel($params);


        // echo '<pre>';
        // print_r($data['artikel']);
        // exit();

        $data['_view'] = 'artikel/index';
        $this->load->view('layouts/main', $data);
    }

    /*
    * Adding a new artikel
    */

    function view($id_artikel)
    {
        $data['artikel'] = $this->Artikel_model->get_artikel($id_artikel); // Call a method from your model to get data from the database
        $data['artikellain'] = $this->Artikel_model->get_all_artikel();
        // echo json_encode($data);
        // echo "<pre>";
        // print_r($data);
        $data['_view'] = 'artikel/view';
        $this->load->view('layouts/main', $data);
    }




    /*
     * Deleting artikel
     */
    function remove($id_artikel)
    {
        $artikel = $this->Artikel_model->get_artikel($id_artikel);

        $this->Artikel_model->delete_artikel($id_artikel);
        unlink(FCPATH . 'assets/images/artikel/' . $artikel['artikel_img']);
        redirect('artikel/index');
    }
}
