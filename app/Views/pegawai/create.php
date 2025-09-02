<?php echo $this->extend('layouts/main') ?>
<?php echo $this->section('content') ?>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">Tambah Data Pegawai</h3>
        <a href="/pegawai" class="btn btn-dark">Kembali</a>
    </div>
    <div class="pt-3">
       <form action="/pegawai/store" method="post">
        <?php echo csrf_field(); ?>
       <div class="mb-3">
        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
       </div>
       <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
       </div>
       <div class="mb-3">
        <label for="telepon" class="form-label">No Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon">
       </div>
       <div class="mb-3">
        <label for="" class="form-label">Jabatan</label>
        <select name="jabatan_id" id="" class="form_control">
            <?php foreach ($jabatan as $j) { ?>
                <option value="<?= $j->id; ?>"><?= $j->nama_jabatan; ?></option>
            <?php } ?>
        </select>
       </div>
       <button type="submit" class="btn btn-dark">Simpan</button>
       </form>
    </div>
</div>

<?php echo $this->endSection() ?>