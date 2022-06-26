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
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($suppliers as $supplier) : ?>
                        <tr>
                            <td><?= $supplier['name'] ?></td>
                            <td><?= $supplier['address'] ?></td>
                            <td>
                                <a href="<?= base_url() ?>/supplier/delete/<?= $supplier['id'] ?>" class="btn btn-danger" role="button"><i class="fas fa-trash fa-fw fa-xs"></i></a>
                                <a href="<?= base_url() ?>/supplier/delete/<?= $supplier['id'] ?>" class="btn btn-warning" role="button"><i class="fas fa-edit fa-fw fa-xs"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>