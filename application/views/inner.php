<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>WELCOME | <?php echo $this->global_data['site_title'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/jumbotron-narrow.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <?php foreach($menu_items as $item):?>
            <li><a href="<?php echo base_url();?>articles/view/<?php echo $item->id;?>"><?php echo $item->title;?></a></li>
            <?php endforeach;?>

          </ul>
        </nav>
        <h3><img class="logo" src="<?php echo base_url();?>assets/img/<?php echo $this->global_data['logo'];?>" alt ="<?php echo $this->global_data['site_title'];?>"/></h3>
      </div>
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo $article->title;?></h1>
                <?php echo $article->body;?>
            </div>
        </div>

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
