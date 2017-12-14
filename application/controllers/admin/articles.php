<?php

class Articles extends MY_Controller{
    public function index(){
      //get articles
        $data['articles'] = $this->Article_model->get_articles('id','DESC',10);

         //get categories
        $data['categories'] = $this->Article_model->get_categories('id','DESC',5);

          //get users
        $data['users'] = $this->User_model->get_users('id','DESC', 5);

        //load view
        $data['main_content'] = 'admin/articles/index';
        $this->load->view('admin/layouts/main', $data);


    }

    public function add(){
        //Validation Rules
        $this->form_validation->set_rules('title', 'Title','trim|required|min_length[4]');
        $this->form_validation->set_rules('body', 'Body','trim|required');
        $this->form_validation->set_rules('is_published', 'Publish','required');
        $this->form_validation->set_rules('category', 'Category','required');

        $data['categories'] = $this->Article_model->get_categories();
        $data['users'] = $this->User_model->get_users();
        //$data['groups   '] = $this->User_model->get_groups();

        if($this->form_validation->run()== FALSE){
            //views
            $data['main_content'] = 'admin/articles/add';
            $this->load->view('admin/layouts/main', $data);

        }else{
            //Create articles data array
            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category'),
                'user_id' => $this->input->post('user'),
                'access' => $this->input->post('access'),
                'is_published' => $this->input->post('is_published'),
                'in_menu' => $this->input->post('in_menu'),
                'order' => $this->input->post('order')
            );

            //Articles table insert
            $this->Article_model->insert($data);

            //Create message
            $this->session->set_flashdata('article_saved', 'Your article have been saved');

            //redirect to page
            redirect('admin/articles');

        }

    }


    public function edit($id){
        //Validation Rules
        $this->form_validation->set_rules('title', 'Title','trim|required|min_length[4]');
        $this->form_validation->set_rules('body', 'Body','trim|required');
        $this->form_validation->set_rules('is_published', 'Publish','required');
        $this->form_validation->set_rules('category', 'Category','required');

        $data['categories'] = $this->Article_model->get_categories();

        $data['users'] = $this->User_model->get_users();

        $data['article'] = $this->Article_model->get_article($id);

         if($this->form_validation->run()== FALSE){
            //views
            $data['main_content'] = 'admin/articles/edit';
            $this->load->view('admin/layouts/main', $data);

        }else{
            //Create articles data array
            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category'),
                'user_id' => $this->input->post('user'),
                'access' => $this->input->post('access'),
                'is_published' => $this->input->post('is_published'),
                'in_menu' => $this->input->post('in_menu'),
                'order' => $this->input->post('order')
            );

            //Articles table insert
            $this->Article_model->update($data, $id);

            //Create message
            $this->session->set_flashdata('article_saved', 'Your article have been saved');

            //redirect to page
            redirect('admin/articles');
    }


}
        public function publish($id){
            $this->Article_model->publish($id);

            $this->session->set_flashdata('article_published','Your article has been published');

            redirect('admin/articles');
        }
            public function unpublish($id){
            $this->Article_model->unpublish($id);

            $this->session->set_flashdata('article_unpublished','Your article has been unpublished');

            redirect('admin/articles');
        }

         public function delete($id){
            $this->Article_model->delete($id);

            $this->session->set_flashdata('article_deleted','Your article has been deleted');

            redirect('admin/articles');
        }
}
