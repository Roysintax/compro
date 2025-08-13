<?php
$query = mysqli_query($koneksi, "SELECT categorie.name, blogs. * FROM blogs
JOIN categorie ON categorie.id = blogs.id_category
ORDER BY blogs.id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
function changeIsActive($isActive)
{
    switch ($isActive) {
        case '1':
            $title = "<span class='badge bg-primary'>publish </span> ";
            break;
        default:
            $title = "<span class='badge bg-danger'>unpublish </span> ";
            break;
    }
    return $title;
}
?>

<div class="pagetitle">
    <h1>clients</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Clients</h5>
                    <div class="mb-3" align="right">
                        <a href="?page=tambah-clients" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>image</th>
                                <th>Status</th>
                            </tr>
                        </thread>
                        <tbody>
                            <?php foreach ($rows as $key => $row): ?>
                                <tr>
                                    <td><?php echo $key += 1  ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><img src="uploads/<?php echo $row['image']; ?>"></td>
                                    <td><?php echo $row['is_active'] ?></td>
                                    <td>
                                        <a
                                            href="?page=tambah-clients&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-success" ?> edit
                                        </a>
                                        <a
                                            onclick="return confirm('apakah anda yakin menghapus data ini')"
                                            href="?page=tambah-clients&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">
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
        <div class="col-sm-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Clients</h5>
                    <div class="mb-3" align="right">
                        <a href="?page=tambah-clients" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>image</th>
                                <th>Status</th>
                            </tr>
                        </thread>
                        <tbody>
                            <?php foreach ($rows as $key => $row): ?>
                                <tr>
                                    <td><?php echo $key += 1  ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><img src="uploads/<?php echo $row['image']; ?>"></td>
                                    <td><?php echo $row['is_active'] ?></td>
                                    <td>
                                        <a
                                            href="?page=tambah-clients&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-success" ?> edit
                                        </a>
                                        <a
                                            onclick="return confirm('apakah anda yakin menghapus data ini')"
                                            href="?page=tambah-clients&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">
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