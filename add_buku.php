<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>E-data - Aplikasi Daftar Buku</title>
    <style>
      body {
        overflow-x: hidden;
        background-color: #EFF6FD;
        font-family: 'Nunito Sans', sans-serif;
      }
      h1 {
          color: #363A43;
          font-weight: 800;
      }
      p {
          color: #75787E;
          padding-top: 3%;
      }
      .btn-danger{
          border: none;
          background-color: #FF5722;
          font-weight: 600;
      }
      .btn-primary{
          margin-left: 0px;
          font-weight: 600; 
          background-color: #00ADB5;
          border: none;
      }
      .btn-primary:hover{
          background-color: #0C7B93;      
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top: 3%;">
      <div class="row">
          <div class="col-md-12 text-center">
            <h1>Tambah Buku</h1>
          </div>
      </div>
      <div class="container-fluid" style="margin-top: 2%;">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="proses_add.php" enctype="multipart/form-data" >
              <section class="base">
                <div class="mb-3">
                  <label class="form-label">Judul</label>
                  <input class="form-control" type="text" name="judul" autofocus="" required="" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Pengarang</label>
                  <input class="form-control" type="text" name="pengarang" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Penerbit</label>
                  <input class="form-control" type="text" name="penerbit" required="" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Gambar</label>
                  <input class="form-control" type="file" name="gambar" required="" />
                </div>
                <div>
                  <button class="btn btn-primary" type="submit">Simpan Buku</button>
                  <button class="btn btn-danger" type="button" ... onclick="history.back();">Batal</button>
                </div>
              </section>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>