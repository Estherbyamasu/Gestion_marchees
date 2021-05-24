<?php
 class C_categorie extends CI_controller
 {
     public function __contruct()
     {
         parent::__contruct();
         $this->load->model('categorie_prix');
         $this->load->database();
       $this->load->library('session');
       $this->load->library('form_validation');

     }
   public function index (){
   $this->load->model('categorie_prix');
   $data=array();
   $data['categories']=$this->categorie_prix->list('categorie');

    $this->load->view('template/head');
    $this->load->view('template/sidebar');
    $this->load->view('categorie/V_index',$data);
    $this->load->view('template/footer');
    
      

    

   }






   public function indexh (){
  
 
     $this->load->view('template/head');
     $this->load->view('template/sidebar');
     $this->load->view('categorie/V_create');
     $this->load->view('template/footer');
     
       
 
     
 
    }




   public function create ()
   {
     $this->form_validation->set_rules('nom_categorie','nom_categorie','required');

     if($this->form_validation->run()==false){
            //$this->load->view('template/head');
            //$this->load->view('template/sidebar');
            //$this->load->view('categorie/v_create');
            //$this->load->view('template/footer');
            echo"gfjfjfgjfjfjgfjfgfjf";
     }else{
       $nom_categorie = $this->input->post('nom_categorie');
      
       $data = array(
        'nom_categorie' => $nom_categorie
      );
  
      $this->categorie_prix->inserer('categorie',$data);
      $this->session->set_flashdata('Insertion','<span class="alert alert-info"> Insertion reussi'.$pris.'</span>');
       redirect('C_categorie/index');
    }
  }
    
  public function delete($id){
    $data = array(
      'id_catgorie'=>$id
    );
    $this->categorie_prix->delete('categorie',$data);
    redirect('C_categorie/index');
    }
    public function edit($id){
      $this->load->model('categorie_prix');
      $donnee=array(
        'id_catgorie'=>$id
      );
      $data=array();
      $data['categorie'] = $this->categorie_prix->editer('categorie',$donnee);
      $this->load->view('template/head');
                $this->load->view('template/sidebar');
                $this->load->view('categorie/v_edit',$data);
                $this->load->view('template/footer');
    }
    public function updateC($id)
    {
      
      $nom_categorie = $this->input->post('nom_categorie');
      
      $donnee = array(
        'nom_categorie' => $nom_categorie
      );
    $this->categorie_prix->update('categorie','id_catgorie',$donnee,$id);
    redirect('C_categorie/index');
    }
     
}
?>