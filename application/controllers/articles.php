<?php
  class Articles extends MY_Controller{
      public function index(){
        //Get Articles
        $data['articles'] = $this->Article_model->get_articles('id','DESC','10');

        //Get menu items
        $data['menu_items'] = $this->Article_model->get_menu_items();

        //Load view
        $this->load->view('home',$data);
      }

      public function view($id){
       //Get menu items
       $data['menu_items'] = $this->Article_model->get_menu_items();

       //Get article
       $data['article'] = $this->Article_model->get_article($id);

       //load view
       $this->load->view('inner',$data);
    } 
  }
