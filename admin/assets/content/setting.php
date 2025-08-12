<?php
//jikan data setting sudah ada maka update data tersebut
//Selain itu kalau belum ada maka insert data 
$querySettings = mysqli_query($koneksi, "SELECT * FROM settings LIMIT 1");
$row = mysqli_fetch_assoc($querySettings);

if (isset($_POST['simpan'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $fb = $_POST['fb'];
    $ig = $_POST['ig'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];

    if (!empty($_FILES['logo']['name'])) {
        $logo = $_FILES['logo']['name'];
        $path = "upload/";
        if (!is_dir($path)) mkdir($path);

        $logo_name = time() . "-" . basename($logo);
        $target_files = $path . $logo_name;
        if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_files)) {
            //jika gambar ada maka gambar sebelumnya akan diganti dengan gambar baru
            if (!empty($row['logo'])) {
                unlink($row['logo']);
            }
        }
    }

    if ($row) {
        $id_setting = $row['id'];
        $update = mysqli_query($koneksi, "UPDATE settings SET 
        email = '$email', 
        phone='$phone',
        logo = '$logo_name',
        address = '$address', ig='$ig', fb='$fb', twitter='$twitter', 
        linkedin = '$linkedin' WHERE id = '$id_setting'");
        if ($update) {
            header("location:?page=setting&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO settings(email,phone,address,ig,fb,twitter,linkedin,logo) VALUES ('$email','$phone','$address','$ig','$fb','$twitter','$linkedin', '$$logo_name')");
        if ($insert) {
            header("location:?page=setting&tambah=berhasil");
        }
    }
}
?>
<div class="pagetitle">
    <h1>Pengaturan</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengaturan</h5>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">email</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" id="" class="form-control" value="<?php echo isset($row['email']) ? $row['email'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">No Telp</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="phone" name="phone" id="" class="form-control" value="<?php echo isset($row['phone']) ? $row['phone'] : '' ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Alamat</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea type="address" name="address" id="" class="form-control"><?php echo isset($row['address']) ? $row['address'] : '' ?></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">fb</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="url" name="fb" id="" class="form-control" value="<?php echo isset($row['fb']) ? $row['fb'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Ig</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="url" name="ig" id="" class="form-control" value="<?php echo isset($row['ig']) ? $row['ig'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Linkedin</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="url" name="linkedin" id="" class="form-control" value="<?php echo isset($row['linkedin']) ? $row['linkedin'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Twitter</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="url" name="twitter" id="" class="form-control" value="<?php echo isset($row['twitter']) ? $row['twitter'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Logo</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="file" name="logo">
                                <img class="mt-2" src="upload/<?php echo isset($row['logo']) ? $row['logo'] : '' ?>" width="100">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary" name="simpan">simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</section>