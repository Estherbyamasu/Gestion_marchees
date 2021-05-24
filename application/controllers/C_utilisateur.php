<?php

class C_utilisateur extends CI_controller{

public function index(){
    $this->load->model('M_utilisateur_place_client');
    $utilisateurs = $this->M_utilisateur_place_client->all('utilisateur');
    $data = array();
    $data['utilisateurs'] = $utilisateurs;
    
    $this->load->view('template/head');
    $this->load->view('template/sidebar');
    $this->load->view('utilisateur/V_index',$data);
    $this->load->view('template/footer');
}

public function EnregistrementUti(){

// $data['Titre']='Enregistrement des utilisateurs';

$this->form_validation->set_rules('nom_utilisateur','Nom','required');
$this->form_validation->set_rules('prenom_utilisateur','Prenom','required');
$this->form_validation->set_rules('cni','Cni','required');
$this->form_validation->set_rules('username','User Name','required');
$this->form_validation->set_rules('password','Mot de passe','required');
$this->form_validation->set_rules('profil','Profil','required');
$this->form_validation->set_rules('etat','Etat','required');
$this->form_validation->set_rules('email','Email','required');
 if($this->form_validation->run()==false){

    $this->load->view('template/head');
    $this->load->view('template/sidebar');
    $this->load->view('utilisateur/V_create');
    $this->load->view('template/footer');

 }else{
    //  $data['Titre']='Enregistrement des utilisateurs';

     $nom_utilisateur=$this->input->post('nom_utilisateur');
     $prenom_utilisateur=$this->input->post('prenom_utilisateur');
     $cni=$this->input->post('cni');
     $username=$this->input->post('username');
     $password=md5($this->input->post('password'));
     $profil=$this->input->post('profil');
     $etat=$this->input->post('etat');
     $email=$this->input->post('email');
     $data=array(
        'nom_utilisateur'=>$nom_utilisateur,
        'prenom_utilisateur'=>$prenom_utilisateur,
        'Cni'=>$cni,
        'username'=>$username,
        'password'=>$password,
        'profil'=>$profil,
        'etat'=>$etat,
        'email'=>$email,
     );

      $this->M_utilisateur_place_client->Insert('utilisateur',$data);
       $this->session->set_flashdata('Insertion_ut','<span class="alert alert-info">Insertion bien faite de '. $nom_utilisateur.' '.$prenom_utilisateur.'</span>');
       redirect('C_utilisateur/index');

    /*$this->load->view('Templates/Header');
    $this->load->view('UtilisateurView/UtilisateurView',$data);
    $this->load->view('Templates/Footer');*/
 }
 
}
public function delete($id){
   $donnee=array(
      'id_utilisateur'=>$id     	
   );
   $this->M_utilisateur_place_client->delete('utilisateur',$donnee);

   redirect('C_utilisateur/index');
 }
 public function edit($id){
    
   $this->load->model('M_utilisateur_place_client');
   $donnee=array(
      'id_utilisateur'=>$id      
     );
   // $utilisateurs = $this->M_utilisateur_place_client->all();
   $data = array();
   $data['utilisateurs'] =$this->M_utilisateur_place_client->getElement('utilisateur',$donnee);   
   $this->load->view('template/head');
    $this->load->view('template/sidebar');
    $this->load->view('utilisateur/V_edit',$data);
    $this->load->view('template/footer');
 }
 public function UpdateUti(){

   $id_utilisateur=$this->input->post('id_utilisateur');
   $nom_utilisateur=$this->input->post('nom_utilisateur');
   $prenom_utilisateur=$this->input->post('prenom_utilisateur');
   $cni=$this->input->post('cni');
   $username=$this->input->post('username');
   $password=md5($this->input->post('password'));
   $profil=$this->input->post('profil');
   $etat=$this->input->post('etat');
   $email=$this->input->post('email');
  
   $idutilisateur =array('id_utilisateur' =>$id_utilisateur );
   $donnee=array(
      'nom_utilisateur'=>$nom_utilisateur,
      'prenom_utilisateur'=>$prenom_utilisateur,
      'cni'=>$cni,
      'username'=>$username,
      'password'=>$password,
      'profil'=>$profil,
      'etat'=>$etat,
      'email'=>$email,
     );

   $data['utilisateurs']=$this->M_utilisateur_place_client->UpdateDate('utilisateur',$donnee,$idutilisateur);

   redirect('C_utilisateur/index');
}
}