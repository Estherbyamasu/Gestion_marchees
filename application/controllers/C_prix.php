<?php
class C_prix extends CI_Controller{
 public function __contruct()
     {
         parent::__contruct();
         $this->load->model('categorie_prix');
         $this->load->database();
       $this->load->library('session');
       $this->load->library('form_validation');
     }

  public function index(){
    $this->load->model('categorie_prix');
    
    $data= array();
     $data['pris'] = $this->categorie_prix->list('prix');
    $this->load->view('template/head');
    $this->load->view('template/sidebar');
    $this->load->view('prix/v_index',$data);
    $this->load->view('template/footer');
  }


   public function create ()
   {
     $this->form_validation->set_rules('prix','Prix','required');

     if($this->form_validation->run()==false){
            $this->load->view('template/head');
            $this->load->view('template/sidebar');
            $this->load->view('prix/v_create');
            $this->load->view('template/footer');
     }else{
       $prix = $this->input->post('prix');
      
       $data = array(
        'prix' => $prix
      );
    $this->categorie_prix->inserer('prix',$data);
    $this->session->set_flashdata('Insertion','<span class="alert alert-info"> Insertion reussi'.$pris.'</span>');
     redirect('C_prix/index');
  }
}
      public function delete($id){
      $data = array(
        'id_prix'=>$id
      );
      $this->categorie_prix->delete('prix',$data);
      redirect('C_prix/index');
      }

public function edit($id){
  $this->load->model('categorie_prix');
  $donnee=array(
    'id_prix'=>$id
  );
  $data=array();
  $data['prix'] = $this->categorie_prix->editer('prix',$donnee);
  $this->load->view('template/head');
            $this->load->view('template/sidebar');
            $this->load->view('prix/v_edit',$data);
            $this->load->view('template/footer');
}
public function updateP($id)
{
  
  $prix = $this->input->post('prix');
  
  $donnee = array(
    'prix' => $prix
  );
$this->categorie_prix->update('prix','id_prix',$donnee,$id);
redirect('C_prix/index');
}

}

   ?>
