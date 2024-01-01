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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelayanan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#sasaran">Sasaran</a></li>
              <li><a class="dropdown-item" href="#waktu">Waktu Pelayanan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fs-5" href="#informasi">Informasi</a>
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
        <img src="./image/carosel1.jpg" class="w-100" alt="carosel">
      </div>
      <div class="carousel-item">
        <img src="./image/carosel2.jpg" class="w-100" alt="carosel">
      </div>
      <div class="carousel-item">
        <img src="./image/carosel3.jpg" class="w-100" alt="carosel">
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
      <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsa consequuntur eligendi fuga laudantium quo magnam exercitationem! Perspiciatis maxime asperiores repellat ipsam iste vel minus provident porro neque! Inventore maxime necessitatibus eveniet officiis minus architecto? Cum quisquam vero vitae reprehenderit saepe velit nesciunt dolorum culpa asperiores perferendis suscipit, sit consectetur totam ad vel sunt laborum quaerat architecto officiis nobis voluptatem exercitationem laboriosam tenetur? Amet cum harum quo sunt aut porro delectus, neque modi velit dolorum qui ratione provident deserunt nesciunt?</p>
    </div>
    <div id="visi" class="row text-center pt-5">
      <div class="col">
        <p class="fs-3 fw-semibold pt-3">Visi</p>
        <p class="fs-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, qui est ut neque consectetur deserunt cupiditate! Modi tenetur veniam dignissimos, volcom voluptatum fuga atque autem. Porro officia reprehenderit unde. Nobis, corrupti.</p>
      </div>
      <div class="col">
        <p class="fs-3 fw-semibold pt-3">Misi</p>
        <p class="fs-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, qui est ut neque consectetur deserunt cupiditate! Modi tenetur veniam dignissimos, skal sljsaj jlasjl voluptatum fuga atque autem. Porro officia reprehenderit unde. Nobis, corrupti.</p>
      </div>
    </div>
    <div id="motto" class="text-center pt-5">
      <p class="fs-4 fw-semibold pt-3">Motto</p>
      <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsa consequuntur eligendi fuga laudantium quo magnam exercitationem! Perspiciatis maxime asperiores repellat ipsam iste vel minus provident porro neque! Inventore maxime necessitatibus eveniet officiis minus architecto?</p>
    </div>
  </div>

  <!-- galery foto -->
  <div class="container text-center mt-5">
    <div class="row gy-5">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/carosel3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- pelayanan -->
  <div id="sasaran" class="container pt-5">
    <p class="fs-4 fw-semibold pt-3">Sasaran</p>
    <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsa consequuntur eligendi fuga laudantium quo magnam exercitationem! Perspiciatis maxime asperiores repellat ipsam iste vel minus provident porro neque! Inventore maxime necessitatibus eveniet officiis minus architecto?</p>
    <div id="waktu" class="pt-5">
      <p class="fs-4 fw-semibold text-center pt-3">waktu pelayanan</p>
      <table class="table table-striped">
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
                  <td>$data[waktu]</td>
              </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- maps -->
  <div id="informasi" class="container ratio ratio-21x9 mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2685030471307!2d113.85863397587424!3d-6.977612993023161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e5e2d4f03ced%3A0x95229aa3899310a!2sPUSKESMAS%20Pembantu%20Lalangon!5e0!3m2!1sid!2sid!4v1703507478593!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- footer -->
  <div id="contact" class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Puskesmas Pembantu Lalangon</h5>
      <p class="container card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat aspernatur facere minus illo consectetur repudiandae placeat eum sed? Debitis, nemo earum totam voluptate laboriosam molestias reprehenderit quisquam neque placeat?</p>
    </div>
    <div class="card-footer text-body-secondary">
      <p>&copy; copyright 2023 </p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>