<?php
class C_home extends CI_controller{

public function index(){

$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('V_home');
$this->load->view('template/footer');

}


}

?>