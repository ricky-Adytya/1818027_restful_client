
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Class Genshin extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost:8080/restful-api/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data 
    function index(){
        $data['datagenshin'] = json_decode($this->curl->simple_get($this->API.'/genshin'));
        
        $data['datagenshin'] = $data['datagenshin']->data ;
        $this->load->view('genshin',$data);
          
    }

    function pria(){
        $data['datagenshin'] = json_decode($this->curl->simple_get($this->API.'/genshin_pria'));
        
        $data['datagenshin'] = $data['datagenshin']->data ;
        $this->load->view('char_laki',$data);
      
    }

    function wanita(){
        $data['datagenshin']  = json_decode($this->curl->simple_get($this->API.'/genshin_wanita'));
        
        $data['datagenshin'] = $data['datagenshin']->data ;
        $this->load->view('char_perempuan',$data);    
           
    }
    
    // insert data 
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'Nama'      =>  $this->input->post('Nama'),
                'Kelangkaan'      =>  $this->input->post('Kelangkaan'),
                'Elemen'      =>  $this->input->post('Elemen'),
                'Senjata'      =>  $this->input->post('Senjata'),
                'Wilayah'      =>  $this->input->post('Wilayah'),
                'Gender'      =>  $this->input->post('Gender'),
                'url_char'=>  $this->input->post('url_char'));
            $insert =  $this->curl->simple_post($this->API.'/genshin', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('genshin');
        }else{
            $this->load->view('V_tambah');
        }
    }
    
    // edit data 
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'Nama'      =>  $this->input->post('Nama'),
                'Kelangkaan'      =>  $this->input->post('Kelangkaan'),
                'Elemen'      =>  $this->input->post('Elemen'),
                'Senjata'      =>  $this->input->post('Senjata'),
                'Wilayah'      =>  $this->input->post('Wilayah'),
                'Gender'      =>  $this->input->post('Gender'),
                'url_char'=>  $this->input->post('url_char'));
            $update =  $this->curl->simple_put($this->API.'/genshin', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('genshin');
        }else{
            $params =  $this->uri->segment(3);
            $params = $params - 1;
            $data['datagenshin'] = json_decode($this->curl->simple_get($this->API.'/genshin'));
            $data['datagenshin'] = $data['datagenshin']->data[$params] ;
            $this->load->view('V_edit',$data);       
        }
    }
    
    // // delete data 
    function delete($id){
        if(empty($id)){
            redirect('genshin');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/genshin', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('genshin');
        }
    }
}