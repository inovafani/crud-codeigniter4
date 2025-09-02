<?php echo $this->extend('layouts/main') ?>
<?php echo $this->section('content') ?>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">Data Pegawai</h3>
        <a href="/pegawai/create" class="btn btn-dark">Tambah data</a>
    </div>
    <div class="pt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pegawai as $key => $row) { ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $row->nama_pegawai; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><?php echo $row->telepon; ?></td>
                        <td><?php echo $row->nama_jabatan; ?></td>
                        <td>
                            <form action="/pegawai/delete/<?= $row->id?>" method="post">
                                <a href="/pegawai/edit/<?= $row->id?>" class="btn btn-warning">Ubah</a>
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