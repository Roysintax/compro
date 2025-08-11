<?php
$query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<div class="pagetitle">
    <h1>Data User</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Users</h5>
                    <div class="mb-3" align="right">
                        <a href="?page=tambah-user" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thread>
                        <tbody>
                            <?php foreach ($rows as $key => $row): ?>

                                <tr>
                                    <td><?php echo $key += 1  ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <a
                                            onclick="return confirm('apakah anda yakin menambah data ini')"
                                            href="?page=tambah-user&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-success">
                                            <i class="bi bi-eye"></i> edit
                                        </a>
                                        <a
                                            onclick="return confirm('apakah anda yakin menghapus data ini')"
                                            href="?page=tambah-user&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">
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