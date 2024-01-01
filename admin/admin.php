
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PUSKESMAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <img src="../image/image.jpg" class="img-fluid" alt="banner">
    </div>
    <div class="container mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalGalery">
            Add new
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalGalery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah galery</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" id="title" placeholder="title name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center mt-5">
            <div class="row gy-5">
                <div class="col" data-bs-toggle="modal" data-bs-target="#modalCard">
                    <div class="card" style="width: 18rem;">
                        <img src="../image/carosel1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text</p>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit galery</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="w-full text-start">
                                    <img src="../image/carosel1.jpg" class="card-img-top" alt="...">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">title</label>
                                        <input type="text" class="form-control" id="title" placeholder="title name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer row mt-2 mb-2 ">
                                <div class="col">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../image/carosel2.jpg" class="card-img-top" alt="...">
                        <div class="row mt-2 mb-2">
                            <div class="col">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../image/carosel3.jpg" class="card-img-top" alt="...">
                        <div class="row mt-2 mb-2">
                            <div class="col">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../image/carosel1.jpg" class="card-img-top" alt="...">
                        <div class="row mt-2 mb-2">
                            <div class="col">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="waktu" class="container pt-5">
        <p class="fs-4 fw-semibold text-center pt-3">waktu pelayanan</p>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">jenis pelayanan</th>
                    <th scope="col">hari</th>
                    <th scope="col">jam</th>
                    <th colspan="2" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <div class="col">
                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                    </div>
                    <div class="col">
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </div>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <div class="col">
                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                    </div>
                    <div class="col">
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </div>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <div class="col">
                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                    </div>
                    <div class="col">
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </div>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalJadwal">
            tambah jadwal
        </button>
        <div class="modal fade" id="modalJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah jadwal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <select class="form-select" aria-label="Default select example" name="jenis">
                            <option selected>pilih jenis pelayanan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="mb-3">
                            <label for="title" class="form-label">hari</label>
                            <input type="text" class="form-control" id="title" placeholder="title name" name="hari">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">jam</label>
                            <input type="text" class="form-control" id="title" placeholder="title name" name="waktu">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" name="savejadwal">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="card text-center mt-5">
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
<?php
require_once('../config.php');
if(isset($_POST['savejadwal'])){
    mysqli_query($conn, "INSERT INTO jadwal set 
    jenis = '$_POST[jenis]',
    hari = '$_POST[hari]',
    waktu = '$_POST[waktu]'") or die (mysqli_error($conn));
    header("location: admin.php");
}
?>