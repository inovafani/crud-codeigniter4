<?php echo $this->extend('layouts/main') ?>
<?php echo $this->section('content') ?>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">Data Jabatan</h3>
        <a href="/jabatan/create" class="btn btn-dark">Tambah data</a>
    </div>
    <div class="pt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($jabatan as $key => $row) { ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $row->nama_jabatan; ?></td>
                        <td><?php echo $row->deskripsi_jabatan; ?></td>
                        <td>
                            <form action="/jabatan/delete/<?= $row->id?>" method="post">
                                <a href="/jabatan/edit/<?= $row->id?>" class="btn btn-warning">Ubah</a>
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php echo $this->endSection() ?>