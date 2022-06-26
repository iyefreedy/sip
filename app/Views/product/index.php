<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Supplier</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga Jual (Rp.)</th>
                        <th>Harga Beli (Rp.)</th>
                        <th>Supplier</th>
                        <th>Kuantitas</th>
                        <th>Berat</th>
                        <th>Isi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Harga Jual (Rp.)</th>
                        <th>Harga Beli (Rp.)</th>
                        <th>Supplier</th>
                        <th>Kuantitas</th>
                        <th>Berat</th>
                        <th>Isi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['selling_price'] ?></td>
                            <td><?= $product['buying_price'] ?></td>
                            <td><?= $product['supplier_name'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td><?= $product['weight'] ?></td>
                            <td><?= $product['volume'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>