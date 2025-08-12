<?php
$query = mysqli_query($koneksi, "SELECT * FROM sliders ORDER BY id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<div class="pagetitle">
    <h1>slider</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Slider</h5>
                    <div class="mb-3" align="right">
                        <a href="?page=tambah-slider" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>No</th>
                                <th>gambar</th>
                                <th>judul</th>
                                <th>isi</th>
                            </tr>
                        </thread>
                        <tbody>
                            <?php foreach ($rows as $key => $row): ?>
                                <tr>
                                    <td><?php echo $key += 1  ?></td>
                                    <td><img src="uploads/<?php echo $row['image']; ?>"></td>
                                    <td><?php echo $row['tittle'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td>
                                        <a
                                            href="?page=tambah-slider&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-success" ?> edit
                                        </a>
                                        <a
                                            onclick="return confirm('apakah anda yakin menghapus data ini')"
                                            href="?page=tambah-slider&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">
                                            <i class="bi bi-eye"></i> delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>