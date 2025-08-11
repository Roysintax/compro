<?php
//jikan data setting sudah ada maka update data tersebut
//Selain itu kalau belum ada maka insert data 
if (isset($_POST['simpan'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $fb = $_POST['fb'];
    $ig = $_POST['ig'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $querySettings = mysqli_query($koneksi, "SELECT * FROM settings LIMIT 1");
    if (mysqli_num_rows($querySettings) > 0) {
        $row = mysqli_fetch_assoc($querySettings);
        $update = mysqli_query($konek, "UPDATE setting SET 
        email = '$email' phone='$phone', address = '$address', ig='$ig', fb='$fb', twitter='$twitter', 
        linkedin = '$linkedin' WHERE id = '$id_setting'");
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO settings(email,phone,address,ig,fb,twitter,linkedin) VALUES ('$email','$phone','$address','$ig','$fb','$twitter','$linkedin')");
        if ($insert) {
            header("location:?page=setting&tambah=berhasil");
        }
    }
}
?>
<div class="pagetitle">
    <h1>Pengatura</h1>
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
                                <input type="number" name="number" id="" class="form-control" value="<?php echo isset($row['number']) ? $row['number'] : '' ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Alamat</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea type="address" name="address" id="" class="form-control" value="<?php echo isset($row['address']) ? $row['address'] : '' ?>">alamat</textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">fb</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="fb" name="fb" id="" class="form-control" value="<?php echo isset($row['fb']) ? $row['fb'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Ig</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="ig" name="ig" id="" class="form-control" value="<?php echo isset($row['ig']) ? $row['ig'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Linkedin</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="linkedin" name="linkedin" id="" class="form-control" value="<?php echo isset($row['linkedin']) ? $row['linkedin'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Twitter</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="twitter" name="twitter" id="" class="form-control" value="<?php echo isset($row['twitter']) ? $row['twitter'] : '' ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                                <label for="" class="form-label fw-bold">Logo</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="logo" name="logo">
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