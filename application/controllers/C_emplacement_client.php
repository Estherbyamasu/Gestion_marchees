<?php

class C_emplacement_client  extends CI_Controller
{

     public function index(){
        $this->load->model('M_utilisateur_place_client');
        $data = array();
        $data['emplacement_clients'] = $this->M_utilisateur_place_client->all('emplacemt_client');
        
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('emplacement_client/V_index',$data);
        $this->load->view('template/footer');
    }

    public function create(){

        $data['clients']=$this->M_utilisateur_place_client->all('client');
        $data['emplacements']=$this->M_utilisateur_place_client->all('emplacement');

        //$this->form_validation->set_rules('client',' client','required');
        $this->form_validation->set_rules('client','client','required');
        $this->form_validation->set_rules('emplacement','emplacement','required');
        $this->form_validation->set_rules('date_entree','date_entree','required');
        $this->form_validation->set_rules('date_sortie','date_sortie','required');
        if($this->form_validation->run()==false){

            $this->load->view('template/head');
             $this->load->view('template/sidebar');
             $this->load->view('emplacement_client/V_create',$data);
             $this->load->view('template/footer');
	    
        }else{

        $idclient=$this->input->post('client');
        $idchambre=$this->input->post('emplacement');
        $dateArrive=$this->input->post('date_entree');
        $dateDepart=$this->input->post('date_sortie');

        $donnee=array(
           'id_client'=>$idclient,
           'id_emplacement'=>$idchambre,
           'date_entree'=>$dateArrive,
           'date_sortie'=>$dateDepart,
         
        );

        $this->M_utilisateur_place_client->Insert('emplacemt_client',$donnee);

        $data['message']='<span class="alert alert-info"> Insertion faite avec success </span>';
        $this->session->set_flashdata($data);

        redirect('C_emplacement_client/index',$data);
	}

}

public function edit($id){
        
    $data['clients']=$this->M_utilisateur_place_client->all('client');
    $data['emplacements']=$this->M_utilisateur_place_client->all('emplacement');

    $donnee=array(' id_emplacemt_client'=>$id);
    $data['emplacement_clients']=$this->M_utilisateur_place_client->GetElement('emplacemt_client',$donnee);
    
    //print_r($data);
       
             $this->load->view('template/head');
             $this->load->view('template/sidebar');
             $this->load->view('emplacement_client/V_edit',$data);
             $this->load->view('template/footer');
}


public function update(){
    $Id=$this->input->post('id_emplacemt_client');
    $donne=array('id_emplacemt_client'=>$Id);

    $Idclient=$this->input->post('client');
    $Idemplacement=$this->input->post('emplacement');
    $dateEntree=$this->input->post('date_entree');
    $dateSortie=$this->input->post('date_sortie');
   

    $data=array(
       'id_client'=>$Idclient,
       'id_emplacement'=>$Idemplacement,
       'date_entree'=>$dateEntree,
       'date_sortie'=>$dateSortie,
       
    );
    
    $designation=$this->M_utilisateur_place_client->UpdateDate('emplacemt_client',$data,$donne);
    if($designation==1){

    $data['message']='<span class="alert alert-info"> La modification est faite avec success </span>';
    $this->session->set_flashdata($data); 

    }
    else{
   $data['message']='<span class="alert alert-danger"> Pas de modification faite </span>';
    $this->session->set_flashdata($data);  
    }
    redirect('C_emplacement_client/index');
}

public function delete($id){
    $data=array('id_emplacemt_client'=>$id);

    $designation=$this->M_utilisateur_place_client->delete('emplacemt_client',$data);

    if($designation==1){

       $data['message']='<span class="alert alert-info"> La suppression est faite avec success </span>';
       $this->session->set_flashdata($data); 

       }
       else{
      $data['message']='<span class="alert alert-danger"> Pas de suppression faite </span>';
       $this->session->set_flashdata($data);  
       }
       redirect('C_emplacement_client/index');
    
  }


}






?>