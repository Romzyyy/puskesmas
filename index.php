<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PUSKESMAS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold fs-4" href="#">PUSTU LALANGON</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#identitas">Identitas</a></li>
              <li><a class="dropdown-item" href="#visi">Visi Misi</a></li>
              <li><a class="dropdown-item" href="#motto">Motto</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#informasi">Informasi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelayanan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#sasaran">Sasaran</a></li>
              <li><a class="dropdown-item" href="#waktu">Waktu Pelayanan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- carosel -->
  <div id="carouselExampleAutoplaying" class="container carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner ratio ratio-16x9">
      <div class="carousel-item active">
        <img src="./image/carosel1.avif" class="w-100" alt="carosel">
      </div>
      <div class="carousel-item">
        <img src="./image/carosel2.avif" class="w-100" alt="carosel">
      </div>
      <div class="carousel-item">
        <img src="./image/carosel3.avif" class="w-100" alt="carosel">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- tentang -->
  <div id="identitas" class="container pt-5">
    <div>
      <p class="fs-4 fw-semibold pt-3">IDENTITAS</p>
      <p class="fs-5">PUSKESMAS Pembantu Lalangon
        2VC6+XF4, Jalan Raya, Ganjur, Lalangon, Manding, Sumenep Regency, East Java 69452, Indonesia
        Kabupaten Sumenep, Jawa Timur, 69452.</p>
      <p class="fs-5">Adanya Puskesmas Pembantu ini, menjadi bukti pentingnya kolaborasi lintas sektor termasuk dengan pihak swasta dalam kerangka pembangunan sektor kesehatan di tanah air. Mengingat sektor kesehatan turut berpengaruh untuk menjaga stabilitas perekonomian nasional. Kesehatan penting untuk menjaga perekonomian supaya tidak turun.</p>
      <p class="fs-5">Karenanya semuanya harus inklusif, saling berkolaborasi antara pemerintah, swasta dan organisasi kemasyarakatan. Kita tidak akan berhasil kalau pendekatannya ada pada program, harus memiliki pendekatan gerakan. Dengan adanya bantuan pembangunan Puskesmas Pembantu (Pustu), Menkes menyampaikan ucapan terima kasih kepada seluruh pihak yang telah berkontribusi bagi penyelesaian masalah kesehatan di Kec. Manding Kedepan, Menkes berharap kegiatan serupa bisa dilanjutkan di daerah lain di seluruh Indonesia.</p>
    </div>
    <div id="visi" class="row text-center pt-5">
      <div class="col">
        <p class="fs-3 fw-semibold pt-3">Visi</p>
        <p class="fs-5">Sumenep Unggul, Mandiri dan Sejahtera Bidang Kesehatan.</p>
      </div>
      <div class="col">
        <p class="fs-3 fw-semibold pt-3">Misi</p>
        <p class="fs-5 text-start">1. Membangun Kualitas Unggul dalam Sumber Daya Manusia di Bidang Administrasi dan Manajemen (Admen), Upaya Kesehatan Masyarakat (UKM), dan Upaya Kesehatan Perorangan (UKP).</p>
        <p class="fs-5 text-start">2. Melaksanakan proses Manajemen yang Berkesinambungan.</p>
        <p class="fs-5 text-start">3. Meningkatkan Sarana dan Prasarana.</p>
        <p class="fs-5 text-start">4. Mengutamakan Kerjasama tim dan Gotong Royong dalam Melaksanakan Program Kerja Puskesmas.</p>
        <p class="fs-5 text-start">5. Memperkuat Kerjasama Lintas Sektor dalam Membangun Kesehatan masyarakat.</p>
        <p class="fs-5 text-start">6. Membagun Kemandirian Masyarakat Hidup Sehat.</p>
      </div>
    </div>
    <div id="motto" class="text-center pt-5">
      <p class="fs-4 fw-semibold pt-3">Motto</p>
      <p class="fs-5">Bismillah Melayani dengan hati, anda sehat kami puas.</p>
    </div>
  </div>

  <!-- galery foto -->
  <div class="container text-center pt-5" id="informasi">
    <div class="row gy-5 pt-5">
      <?php
      include "config.php";
      $query = "SELECT * FROM galery";
      $result = mysqli_query($conn, $query);

      while ($image = mysqli_fetch_assoc($result)) {
        echo "
                <div class='col' role='button' data-bs-toggle='modal' data-bs-target='#modalCard{$image['id']}'>
                <div class='card' style='width: 18rem; height: 15rem;'>
                    <img src='admin/uploads/$image[file]' class='card-img-top' alt='...' style='height: 11rem;'>
                    <div class='card-body'>
                        <p class='card-text'>$image[title]</p>
                    </div>
                </div>
            </div>
            <div class='modal fade' id='modalCard{$image['id']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <form action='' method='post'  enctype='multipart/form-data'>
            <input type='hidden' name='id' value='{$image['id']}'>
                <div class='modal-dialog modal-dialog-centered'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>$image[title]</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <div class='w-full text-start'>
                                <img src='admin/uploads/$image[file]' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                  <p class='card-text text-start mt-4'>$image[description]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
                ";
      }
      ?>
    </div>
  </div>

  <!-- pelayanan -->
  <div id="sasaran" class="container pt-5">
    <p class="fs-4 fw-semibold pt-3">Sasaran</p>
    <p class="fs-5">UKP : Pasien/klien yang membutuhkan pelayanan pengobatan / pelayanan konseling</p>
    <p class="fs-5">UKM : Masyarakat sesuai dengan tujuan kegiatan program</p>
    <div id="waktu" class="pt-5">
      <p class="fs-4 fw-semibold text-center pt-3">waktu pelayanan</p>
      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Jenis Pelayanan</th>
            <th scope="col">Hari</th>
            <th scope="col">Waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "config.php";
          $no = 1;
          $query = mysqli_query($conn, "select * from jadwal") or die(mysqli_error($conn));
          while ($data = mysqli_fetch_array($query)) {
            echo "
              <tr>
                <th scope='row'>$no</th>
                  <td>$data[jenis]</td>
                  <td>$data[hari]</td>
                  <td>$data[waktu] WIB</td>
              </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- maps -->
  <div id="contact" class="container ratio ratio-21x9 mt-5 mb-5" style="height: 40rem;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2685030471307!2d113.85863397587424!3d-6.977612993023161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e5e2d4f03ced%3A0x95229aa3899310a!2sPUSKESMAS%20Pembantu%20Lalangon!5e0!3m2!1sid!2sid!4v1703507478593!5m2!1sid!2sid" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- footer -->
  <div class="card text-center mt-5">
    <div class="card-body">
      <h5 class="card-title">Puskesmas Pembantu Lalangon</h5>
      <p class="container card-text">PUSKESMAS Pembantu Lalangon 2VC6+XF4, Jalan Raya, Ganjur, Lalangon, Manding, Sumenep Regency, East Java 69452. <br> Bismillah Melayani dengan hati, anda sehat kami puas.</p>
    </div>
    <div class="card-footer text-body-secondary">
      <p>&copy; copyright 2023 </p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>