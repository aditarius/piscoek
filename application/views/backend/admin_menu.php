<!-- Default stylesheets-->
    <link href="<?php echo base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo base_url();?>assets/css/colors/default.css" rel="stylesheet">
<nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><?=anchor(base_url(), 'Piscoek', ['class'=>'navbar-brand'])?>
          </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
	<?php if($this->session->userdata('username')) : ?>
      <ul class="nav navbar-nav navbar-left">
        <li><?=anchor('admin/products','Products')?></li>
        <li><?=anchor('admin/invoices','Invoices')?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
			<span style="line-height:50px;">
				<?php echo 'You Are: ' . $this->session->userdata('username');?>
			</span>
		</li>
		<li>
			<?php echo anchor('login/logout', 'Logout');?>
		</li>
      </ul>
	  <?php endif; ?>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
