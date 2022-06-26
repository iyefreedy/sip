<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-3 text-gray-800">Tambah Data Supplier</h1>

<div class="card">
    <div class="card-body">
        <form action="<?= route_to('supplier/insert') ?>" method="POST">
            <div class="form-group">
                <label for="nameFormControl">Nama Supplier</label>
                <input type="text" class="form-control" name="name" id="nameFormControl">
            </div>
            <div class="form-group">
                <label for="addressFormControl">Alamat Supplier</label>
                <textarea class="form-control" name="address" id="addressFormControl" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>