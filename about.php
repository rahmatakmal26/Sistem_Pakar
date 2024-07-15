<?php $page = 'about' ?>
<html lang="en">

<head>
  <?php include('head.php') ?>
  <style>
    .content {
      margin-top: 5%;
      margin-right: 5%;
      margin-left: 5%;
      /* background-color: red; */
      /* max-width: 1170px; */
    }

    .section {
      padding-top: 6px;
      padding-left: 15px;
      width: 100%;
      margin-bottom: 2%;
      /* background-color: yellow; */
    }
  </style>
</head>

<body class="scroll">
  <?php include('navbar.php'); ?>
  <div class="content">
    <div class="container d-flex justify-content-between">
      <div class="section">
        <br></br><br></br>
        <img src="assets/gambar/logoutu.png" alt="logoutu.png" class="logo-bio">
        <br></br><br></br>
        <p class="h1-bio">Sistem Pakar Diagnosa Penyakit Tanaman Cabai dengan Metode<i> Forward Chaining</i></p>
        <div class="biodata">
          <button type="button" class="btn btn-primary btn-bio" style="font-weight: 500;" data-toggle="modal" data-target="#modalPengembang">
            Pengembang Website
          </button>
         
          <button type="button" class="btn btn-primary btn-bio" style="font-weight: 500;" data-toggle="modal" data-target="#modalDosbing">
            Dosen Pembimbing
          </button>
        </div>
        <div class="container">
          <p class="deskripsi-bio">
            Sistem pakar diagnosa Penyakit Tanaman Cabai ini mampu melakukan diagnosa awal dengan memanfaatkan pengetahuan yang bersumber dari pakar serta berdasarkan berbagai macam studi literatur. Penelitian ini menggunakan metode <i>forward chaining</i> sebagai mesin inferensi dan menggunakan metode <i>certainty factor</i> untuk menghitung tingkat kepercayaan pakar terhadap hasil diagnosis yang diberikan oleh sistem.
          </p>
        </div>
        <!-- Modal Pengembang Web -->
        <div class="modal fade" id="modalPengembang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Biodata Pengembang Web</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <table style="width: 95%" align="center">
                  <tr>
                    <img src="assets/image/fotoku1.png" style="width: 200px;display:block;margin:auto" alt="fotoku1.png">
                    <br>
                  </tr>
                  <tr>
                                        <td style="width: 40%;"><h6>Nama</h6></td>
                                        <td style="width: 5%"><h6>:</h6></td>
                                        <td><h6>Rahmat Akmal</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Tempat, Tanggal Lahir</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Cot Darat, 07 januari 2003</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Prodi</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Teknologi informasi</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Agama</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Islam</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Alamat</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6 style="text-align:justify">Desa Cot Darat, Meulaboh, Aceh Barat</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>No. HP</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>085247044821</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Email</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>rahmatakmal26@gmail.com</h6></td>
                                    </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background-color: #ddba8d" data-dismiss="modal">Tutup</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Modal dosbing -->
        <div class="modal fade" id="modalDosbing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dosen Pembimbing</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <table style="width: 95%" align="center">
                <tr>
                                        <td style="width: 40%;"><h6>Dosen Pembimbing 1</h6></td>
                                        <td style="width: 5%"><h6>:</h6></td>
                                        <td><h6>Sanusi,S.Pd., M.Kom.</h6></td>
                                    </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background-color: #ddba8d" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>