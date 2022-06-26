<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-3 text-gray-800">Tambah Data Produk</h1>

<?= view('Myth\Auth\Views\_message_block') ?>
<div class="card">
    <div class="card-body">
        <form action="<?= route_to('product/insert') ?>" method="POST">
            <div class="form-group">
                <label for="nameFormControl">Nama Produk</label>
                <input type="text" class="form-control" name="name" id="nameFormControl">
            </div>

            <div class="form-group">
                <label for="priceFormControl">Harga Beli Produk</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" id="price" class="form-control" name="buying_price" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="priceFormControl">Harga Jual Produk</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" id="price" class="form-control" name="selling_price" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="weightFormControl">Berat Produk</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="weight" id="weightFormControl" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">gram</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="volumeFormControl">Isi Produk</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="volume" id="volumeFormControl" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">pcs</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Supplier Produk</label>
                <select class="form-control" id="exampleFormControlSelect1" name="supplier_id">
                    <option value="">-</option>
                    <?php foreach ($suppliers as $supplier) : ?>
                        <option value="<?= $supplier['id'] ?>"><?= $supplier['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script>
    document.getElementById("price").addEventListener("input", function() {

        // const formatter = new Intl.NumberFormat("id-ID", {
        //     style: 'currency',
        //     currency: 'IDR'
        // });
        // console.log(formatter.format(parseFloat(this.value)));
        // this.value = formatter.format(parseFloat(this.value));

        // const value = this.value.replace(/,/g, '');
        // console.log(value);
        // this.value = parseFloat(value).toLocaleString('id-ID', {
        //     style: 'decimal',
        //     maximumFractionDigits: 2,
        //     minimumFractionDigits: 2
        // });
    });
</script>

<?= $this->endSection() ?>