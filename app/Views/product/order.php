<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-3 text-gray-800">Order Produk</h1>

<?= view('Myth\Auth\Views\_message_block') ?>
<div class="card">
    <div class="card-body">
        <form action="<?= route_to('product/insert-order') ?>" method="POST">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Produk</label>
                <select class="form-control" id="product" name="product_id">
                    <option value="">-</option>
                    <?php foreach ($products as $product) : ?>
                        <option value="<?= $product['id'] ?>" data-price="<?= $product['buying_price'] ?>"><?= $product['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Kuantitas</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="0">
            </div>

            <input type="hidden" name="price" id="hiddenPrice" value="0">

            <div class="text-right font-weight-bold" id="sum">
                Total : Rp. <span></span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</div>

<script>
    document.getElementById("product").addEventListener("change", function() {
        var data = this.options[this.selectedIndex].getAttribute('data-price');
        var quantity = document.getElementById('quantity');

        sumPrice(data, quantity.value);
    });

    document.getElementById('quantity').addEventListener('input', function() {
        const product = document.getElementById('product');
        var data = product.options[product.selectedIndex].getAttribute('data-price');

        sumPrice(data, this.value)
    })

    function sumPrice(price, quantity) {
        const sum = document.getElementById('sum');
        const hiddenPrice = document.getElementById('hiddenPrice');

        const sumPriceQuantity = price * quantity;

        hiddenPrice.value = sumPriceQuantity;
        sum.children[0].textContent = sumPriceQuantity;
    }
</script>

<?= $this->endSection() ?>