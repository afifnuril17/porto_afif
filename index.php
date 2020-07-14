<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset=" utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portofolio Afif</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="navbar-brand page-scroll">Afif Nuril Ihsan</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#portofolio" class="page-scroll">Portofolio</a></li>
          <li><a href=" #contact" class="page-scroll">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=" jumbotron text-center">
    <img src="img/afifnuril.jpg">
    <p>Web Developer | 3D Modelling | Game Developer
  </div>

  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p>Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
        </div>

        <div class="col-sm-5">
          <p>Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
        </div>

      </div>
    </div>
  </section>

  <section class="portofolio" id="portofolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Portofolio</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portofolio/treasure.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portofolio/ar1.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portofolio/animasi.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portofolio/protonsavvy.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portofolio/treasure.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portofolio/treasure.png">
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Contact</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label>No Telpon</label>
              <input type="telp" class="form-control" placeholder="Nomor Telepon">
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <select class="form-control">
                <option>--Pilih Kategori--</option>
                <option>Web Developer</option>
                <option>3D Modelling</option>
                <option>Game Developer</option>
              </select>
            </div>
            <div class="form-group">
              <label>Pesan</label>
              <textarea class="form-control " rows="10" placeholder="Tulis Pesan"></textarea>
            </div>
            <div class="form-grup">
              <button class="btn btn-primary from-control" type="submit">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; Copyright 2020 | Build by Afif</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script src="js/script.js"></script>
</body>

</html>