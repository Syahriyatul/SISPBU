<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Posting</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.css" ?>">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
   <body>
    <p class="text-right">Selamat Datang Admin</p>
    <nav class="navbar navbar-static-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>

          </button>
          <a class="navbar-brand" href="#">Asik Surabaya</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">SPBU</a></li>
            <li><a href="#Hotel">Hotel</a></li>
            <li><a href="#SportCenter">Sport Center</a></li>
			<li><a href="#Kuliner">Kuliner</a></li>
			<li><a href="#Bengkel">Bengkel</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
	<img src="../../assets/img/header.jpg" alt="" style="width: 1400px; height: 450px;">
	
		<!-- Menu2
    ================================================== -->
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

	<nav class="navbar navbar-fixed-middle navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>

          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url()?>index.php/login/berandaAdmin">Beranda</a></li>
            <li><a href="<?php echo base_url()?>index.php/login/pencarianAdmin">Pencarian</a></li>
			<li class="active"><a href="<?php echo base_url()?>index.php/posting">Posting</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	
          <div class="container">
		    <h2>Menambahkan Informasi SPBU</h2>
            <div class="col-sm-8 blog-main">
			  <form class="form-horizontal" action="<?php echo base_url()?>index.php/posting/postingBaru" method = "POST">
			  <div class="form-group">
			  <label class="control-label col-sm-2">Kode: </label>
			  <div class="col-sm-10">
			  <input type="text" name="vkode_spbu" class="form-control" placeholder="" required autofocus>
			  </div>
			  </div>
			  <div class="form-group">
			  <label class="control-label col-sm-2">Lokasi: </label>
			  <div class="col-sm-10">
			  <input type="text" name="vlokasi_spbu" class="form-control" placeholder="" required autofocus>
			  </div>
			  </div>
			  <div class="form-group">
			  <label class="control-label col-sm-2">Fasilitas: </label>
			  <div class="col-sm-10">
			  <input type="text" name="vfasilitas_spbu" class="form-control" placeholder="" required autofocus>
			  </div>
			  </div>
			  <div class="form-group">
			  <label class="control-label col-sm-2">Produk: </label>
			  <div class="col-sm-10">
			  <input type="text" name="vproduk_spbu" class="form-control" placeholder="" required autofocus>
			  </div>
			  </div>
			  <div class="form-group">
			  <label class="control-label col-sm-2">Jam Operasional: </label>
			  <div class="col-sm-10">
			  <input type="text" name="vjam_spbu" class="form-control" placeholder="" required autofocus>
			  </div>
			  </div>
              <input type="submit" class="form-control" value = "Submit"/>
			  </form>
            </div><!--/.col-xs-6.col-lg-4-->
				

        <div class="col-sm-3 col-sm-offset-1 sidebar-offcanvas" id="sidebar">
		<h2>SPBU Terpopuler</h2>

          <div class="list-group">
            <a href="#" class="list-group-item">SPBU 54.601.82</a>
            <a href="#" class="list-group-item">SPBU 54.601.81</a>
            <a href="#" class="list-group-item">SPBU 54.601.46</a>
			
		<h2>Komentar Terakhir</h2>
          <div class="list-group">
            <a href="#" class="list-group-item">Tidak Antri</a>
            <a href="#" class="list-group-item">Musolahnya Bagus</a>
            <a href="#" class="list-group-item">Toiletnya Bersih</a>
            <a href="#" class="list-group-item">Pelayanan Buruk</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
  </body>
</html>
