<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Piscoek</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url();?>assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
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
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><?=anchor(base_url(), 'Piscoek', ['class'=>'navbar-brand'])?>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                <ul class="dropdown-menu">
          <li><?php echo anchor(base_url(), 'Home');?></li>
                </ul>
              </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu">
                  
                  <?php if($this->session->userdata('username')) { ?>
  <li><div style="line-height:50px;">You Are : <?=$this->session->userdata('username')?></div></li>
  <li><?php echo anchor('login/logout', 'Logout');?></li>
<?php } else { ?>
  <li><?php echo anchor('login', 'Login');?></li>
<?php } ?>

                  
                </ul>
        
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
                <ul class="dropdown-menu" role="menu">
                      
            <li>
      <?php
        $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
        $text_cart_url .= ' Shopping Cart: '. $this->cart->total_items() .' items';
      ?>
      <?=anchor('welcome/cart', $text_cart_url)?>
    </li>
                </ul>
              </li>
              <!--li.dropdown.navbar-cart-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
              <!--        span.icon-basket-->
              <!--        |-->
              <!--        span.cart-item-number 2-->
              <!--    ul.dropdown-menu.cart-list(role='menu')-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Short striped sweater-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Colored jewel rings-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                .cart-sub-totle-->
              <!--                    strong Total: $476.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
              <!--li.dropdown-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
              <!--    ul.dropdown-menu(role='menu')-->
              <!--        li-->
              <!--            .dropdown-search-->
              <!--                form(role='form')-->
              <!--                    input.form-control(type='text', placeholder='Search...')-->
              <!--                    |-->
              <!--                    button.search-btn(type='submit')-->
              <!--                        i.fa.fa-search-->
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Checkout</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th class="hidden-xs">No</th>
					<th class="hidden-xs">Product</th>
					<th class="hidden-xs">Jumlah</th>
					<th class="hidden-xs">Harga</th>
					<th class="hidden-xs">Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td class="product-title font-alt"><?= $items['name'] ?></td>
					<td><?= $items['qty'] ?></td>
					<td align="right" class="product-title font-alt"><?= number_format($items['price'],0,',','.') ?></td>
					<td align="right" class="product-title font-alt"><?= number_format($items['subtotal'],0,',','.') ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td align="right" colspan="4" class="hidden-xs">Total Harga </td>
					<td align="right" class="product-title font-alt"><?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>
		</table>
		<div align="center">
			<?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-round btn-d']) ?> 
			<?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-round btn-d']) ?> 
			<?= anchor('order','Proceed to Check Out',['class'=>'btn btn-success']) ?>
			
		</div>
        </section>
        <hr class="divider-w">
        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Manfaat Mengonsumsi Cokelat</h2>
              </div>
            </div>
            <div class="row multi-columns-row post-columns wo-border">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Mencegah penyakit jantung</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>Sebuah cokelat bar dapat membantu  untuk mencegah penyakit jantung karena mengandung beberapa bahan kimia yang membuat sistem kardiovaskular berjalan lancar. Terutama dark chocolate dapat mengurangi risiko serangan jantung dengan prosentase hampir 50% dan penyakit koroner sebesar 10%. Jadi bukan sebuah masalah mengkonsumsi sebuah bar atau sepotong cokelat sehari-hari!</p>
                  </div>
                  
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Menurunkan tekanan darah</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>Sama seperti sayuran yang memiliki warna yang gelap, coklat juga memiliki sifat dan manfaat yang mirip. Coklat mengandung flavonoid yang merupakan antioksidan. Antioksidan membantu menurunkan tekanan darah dengan memproduksi oksida nitrat. Hal ini juga menyeimbangkan hormon dalam tubuh.</p>
                  </div>

                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Menurunkan kolesterol</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>Makan coklat juga membantu Anda dalam menurunkan kolesterol jahat alias LDL. Disamping menurunkan LDL cokalt juga meningkatkan kolesterol baik atau HDL.</p>
                  </div>

                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Anti depresan</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>Coklat bisa menjadi teman ketika mengalami masalah dan sedang down. Hal ini karena cokelat mengandung serotonin yang merupakan anti depresan alami.</p>
                  </div>

                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Meningkatkan sirkulasi darah</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>Flavonoid, seperti yang disebutkan sebelumnya, hadir dalam cokelat dan mereka juga membantu dalam meningkatkan sirkulasi darah selama 2-3 jam setelah Anda mengkonsumsinya. Dengan melebarkan pembuluh darah di otak, flavonoid meningkatkan aliran darah.</p>
                  </div>

                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
     
                  </div>
                  <div class="post-entry">
                    <p>Keuntungan lain dari mengkonsumsi cokelat adalah bahwa hal itu membantu dalam menghambat penuaan. Hal ini dapat menghambat kerutan prematur atau garis yang menunjukkan penuaan di wajah. Coklat mengandung antioksidan alami untuk menundanya.</p>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row client">
              <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="<?php echo base_url();?>assets/images/logo.jpg" alt="Client Logo"/></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About piscoek</h5>
                  <p>Surabaya, Jawa Timur. Indonesia</p>
                  <p>Phone: +628993789772</p>Instagram: @pisangcoklatmeler
                </div>
              </div>
                         
             
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;Piscoek, All Rights Reserved</p>
              </div>
              
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="<?php echo base_url();?>assets/lib/jquery/dist/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/wow/dist/wow.js"></script>
    <script src="<?php echo base_url();?>assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo base_url();?>assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="<?php echo base_url();?>assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?php echo base_url();?>assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="<?php echo base_url();?>assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/lib/smoothscroll.js"></script>
    <script src="<?php echo base_url();?>assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url();?>assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>