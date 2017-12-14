<?php if($this->session->flashdata('category_saved')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_saved');?>
<?php endif;?>
<?php if($this->session->flashdata('category_deleted')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted');?>
<?php endif;?>
<h1 class="page-header">Categories</h1>
          <a href="<?php echo base_url();?>admin/categories/add" class="btn btn-success pull-right">Add category</a><br>
          <div class="table-responsive">
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th width="70">#</th>
                                  <th>Name</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach($categories as $category):?>
                              <tr>
                                  <td><?php echo $category->id;?></td>
                                  <td><?php echo $category->name;?></td>
                                  <td><a href="<?php echo base_url();?>admin/categories/edit" class="btn btn-primary" >Edit</a>
                                      <a href="<?php echo base_url();?>admin/categories/delete" class="btn btn-danger" >Delete</a></td>
                              </tr>
                              <?php endforeach;?>
                          </tbody>
                      </table>
                  </div>
          </div>
