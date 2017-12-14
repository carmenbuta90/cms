<?php
class Categories extends MY_Controller{
  public function index(){
    $data['categories'] = $this->Article_model->get_categories('id','DESC');

    $data['main_content'] = 'admin/categories/index';
    $this->load->view('admin/layouts/main', $data);
  }

  public function add(){
    //Validation Rules
    $this->form_validation->set_rules('name','Name', 'trim|required|min_length[4]');

    if($this->form_validation->run() == FALSE){
      //views
      $data['main_content'] = 'admin/categories/add';
      $this->load->view('admin/layouts/main', $data);
    }else{
      //create data array
      $data = array(
        'name' => $this->input->post('name')
      );
      // categories table insert
      $this->Article_model->insert_category($data);

      //create message
      $this->session->set_flashdata('category_saved','Your category has been saved');

      //Redirect to page
      redirect('admin/categories');
    }
  }

  public function edit($id){
    //validation Rules
    $this->form_validation->set_rules('name','Name', 'trim|required|min_length[4]');

    if($this->form_validation->run() == FALSE){
      $data['category'] = $this->Article_model->get_category($id);

      //views
      $data['main_content']= 'admin/categories/edit';
      $this->load->view('admin/layouts/main', $data);
    }else{
      $data = array(
        'name' => $this->input->post('name')
      );

      //article table insert
      $this->Article_model->update_category($data,$id);

      //create message
      $this->session->set_flashdata('category_saved','Your category has been saved');

      //redirect to page
      redirect('admin/categories');
    }

  }

  public function delete($id){
    $this->Article_model->delete_category($id);

    //create message
    $this->session->set_flashdata('category_deleted','Your category has been deleted');
    redirect('admin/categories');
  }
}
