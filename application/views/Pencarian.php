<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Pencarian</title>
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
    <nav class="navbar navbar-fixed-top navbar-inverse">
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
            <li><a href="<?php echo base_url()?>">Beranda</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/Beranda/Pencarian"">Pencarian</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	
          <div class="row">
            <div class="col-sm-8 blog-main">
              <h2>Pencarian SPBU</h2>
			  <p>Wilayah<p><label for="inputWilayah" class="sr-only">Wilayah</label>
			  <input type="wilayah" id="inputWilayah" class="form-control" placeholder="Masukkan Nama Wilayah" required autofocus>
			  <p>Fasilitas<p><label for="inputFasilitas" class="sr-only">Fasilitas</label>
			  <input type="fasilitas" id="inputFasilitas" class="form-control" placeholder="Masukkan Jenis Fasilitas" required autofocus>
                <p><a class="btn btn-default" href="#" role="button">Cari</a></p>
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
