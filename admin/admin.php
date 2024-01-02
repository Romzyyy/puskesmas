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
    <form action="" method="post" enctype="multipart/form-data">
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
                                <input class="form-control" type="file" id="formFile" name="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">title</label>
                                <input type="text" class="form-control" id="title" placeholder="title name" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type='text' class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name='addGalery'>Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <div class="container text-center mt-5">
        <div class="row gy-5">
            <?php
            include "../config.php";
            $query = "SELECT * FROM galery";
            $result = mysqli_query($conn, $query);

            while($image = mysqli_fetch_assoc($result)){
                echo "
                <div class='col' data-bs-toggle='modal' data-bs-target='#modalCard'>
                <div class='card' style='width: 18rem; height: 15rem;'>
                    <img src='uploads/$image[file]' class='card-img-top' alt='...' style='height: 11rem;'>
                    <div class='card-body'>
                        <p class='card-text'>$image[title]</p>
                    </div>
                </div>
            </div>
                ";
            }
            ?>
            
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
        </div>
    </div>
    </div>

    <div id="waktu" class="container pt-5">
        <p class="fs-4 fw-semibold text-center pt-3">waktu pelayanan</p>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">jenis pelayanan</th>
                    <th scope="col">hari</th>
                    <th scope="col">jam</th>
                    <th colspan="2" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $no = 1;
                $query = mysqli_query($conn, "select * from jadwal") or die(mysqli_error($conn));
                while ($data = mysqli_fetch_array($query)) {
                    echo "
                        <tr>
                            <th scope='row'>$no</th>
                            <td>$data[jenis]</td>
                            <td>$data[hari]</td>
                            <td>$data[waktu]</td>
                            <div class='col'>
                                 <td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal{$data['id']}'>Edit</button></td>
                            </div>
                            <form action='' method='post'>
                                <div class='col'>
                                    <input type='hidden' name='id' value='{$data['id']}'>
                                    <td><button type='submit' class='btn btn-danger' name='delete'>Delete</button></td>
                                </div>
                            </form>
                        </tr>
                        
                        <!-- Edit Modal -->
                        <form action='' method='post'>
                            <div class='modal fade' id='editModal{$data['id']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Tambah jadwal</h1>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <input type='hidden' name='id' value='{$data['id']}'>
                                        <select class='form-select' id='jenis' aria-label='Default select example' name='jenis' value='{$data['jenis']}>
                                            <option selected>pilih jenis pelayanan</option>
                                            <option value='rawat jalan'>rawat jalan</option>
                                            <option value='rawat inap'>rawat inap</option>
                                            <option value='chek darah'>chek darah</option>
                                        </select>
                                        <div class='mb-3'>
                                            <label for='hari' class='form-label'>hari</label>
                                            <input type='text' class='form-control' id='hari' placeholder='title name' name='hari' value='{$data['hari']}'>
                                        </div>
                                        <div class='mb-3'>
                                            <label for='waktu' class='form-label'>jam</label>
                                            <input type='text' class='form-control' id='waktu' placeholder='title name' name='waktu' value='{$data['waktu']}'>
                                        </div>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary' name='update'>Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        ";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalJadwal">
            tambah jadwal
        </button>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="modal fade" id="modalJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah jadwal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select class="form-select" id="jenis" aria-label="Default select example" name="jenis">
                                <option selected>pilih jenis pelayanan</option>
                                <option value="rawat jalan">rawat jalan</option>
                                <option value="rawat inap">rawat inap</option>
                                <option value="chek darah">chek darah</option>
                            </select>
                            <div class="mb-3">
                                <label for="hari" class="form-label">hari</label>
                                <input type="text" class="form-control" id="hari" placeholder="title name" name="hari">
                            </div>
                            <div class="mb-3">
                                <label for="waktu" class="form-label">jam</label>
                                <input type="text" class="form-control" id="waktu" placeholder="title name" name="waktu">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="savejadwal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
include "../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addGalery'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle file upload
    $targetDir = "uploads/";

    // Generate a unique filename
    $uniqueFilename = uniqid() . "." . pathinfo($_FILES["formFile"]["name"], PATHINFO_EXTENSION);

    $targetFile = $targetDir . $uniqueFilename;

    // Check for file upload errors
    if ($_FILES["formFile"]["error"] > 0) {
        echo "Terjadi kesalahan saat mengunggah file: " . $_FILES["formFile"]["error"];
        exit();
    }

    // Check if file is selected
    if (!empty($_FILES["formFile"]["name"])) {
        if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, now insert data into the database
            // Hanya menyimpan nama file ke database, bukan nama lengkapnya
            $query = "INSERT INTO galery (title, description, file) VALUES ('$title', '$description', '$uniqueFilename')";
            if (mysqli_query($conn, $query)) {
                // Close the modal after successful data insertion
                echo '<script>window.location.href = "admin.php";</script>';
                exit();
            } else {
                echo "Error inserting data into the database: " . mysqli_error($conn);
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    } else {
        echo "Silakan pilih file.";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['savejadwal'])) {
    mysqli_query($conn, "INSERT INTO jadwal set 
    jenis = '$_POST[jenis]',
    hari = '$_POST[hari]',
    waktu = '$_POST[waktu]'") or die(mysqli_error($conn));
    echo '<script>window.location.href = "admin.php";</script>';
    exit();
} else {
    echo "Form not submitted";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Hapus data dari database berdasarkan ID
    mysqli_query($conn, "DELETE FROM jadwal WHERE id = $id") or die(mysqli_error($conn));

    // Redirect kembali ke halaman admin.php setelah menghapus data
    echo '<script>window.location.href = "admin.php";</script>';
    exit();
} else {
    echo "Invalid request";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id']; // Use $_POST instead of $_GET for security reasons

    // Fetch the data based on the ID
    $query = mysqli_query($conn, "SELECT * FROM jadwal WHERE id = $id") or die(mysqli_error($conn));
    $data = mysqli_fetch_array($query);

    // Perform update operation
    // Replace the following lines with your actual update logic
    $newJenis = $_POST['jenis'];
    $newHari = $_POST['hari'];
    $newWaktu = $_POST['waktu'];

    mysqli_query($conn, "UPDATE jadwal SET jenis='$newJenis', hari='$newHari', waktu='$newWaktu' WHERE id=$id") or die(mysqli_error($conn));

    // Redirect to admin.php after update
    echo '<script>window.location.href = "admin.php";</script>';
    exit();
} else {
    echo "Invalid edit";
}
?>