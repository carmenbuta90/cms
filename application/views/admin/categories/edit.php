<form method="post" action="<?php echo base_url();?>admin/categories/edit/<?php echo $category->id; ?>">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Edit Category</h1>
                    </div>
                    <div class="col-md-6">
                        <input type="submit" name="submit" id="page_submit" class="btn btn-default" value="Submit">
                        <a href="<?php echo base_url();?>admin/categories"  class="btn btn-default" >Close</a>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                            <li><a  href="<?php echo base_url();?>admin/categories"><i class="fa fa-pencil"></i>Categories</a></li>
                             <li><a class="active" href="<?php echo base_url();?>admin/categories/edit"><i class="fa fa-plus-sqare-o"></i>Edit category</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    <div class="form-group ">
                        <label>Category name</label>
                         <input type="text" name="name" class="form-control" value="<?php echo $category->name;?>">
                    </div>
                    </div>
                </div><!--row-->
</form>
