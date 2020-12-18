<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <br>
        <div class="row" id="cancel-row">

            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Daftar Produk</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="container">
                            <div id="pricingWrapper" class="row">
                                <?php foreach ($data_produk as $Data_produk) : ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card stacked mt-5">
                                            <div class="card-header pt-0">
                                                <span class="card-price"><img src="<?= base_url('assets/produk/' . $Data_produk->foto_produk . '') ?>" width="86px" style="top: 1px;" alt=""></span>
                                                <h3 class="card-title mt-3 mb-1"><?= $Data_produk->nm_produk ?></h3>
                                                <p><?= $Data_produk->harga_produk ?></p>
                                            </div>
                                            <div class="card-body">
                                                <p><?= $Data_produk->detail_produk ?></p>
                                                <a href="<?= base_url('konsumen/chat/inbox') ?>" class="btn btn-block btn-primary">Pesan</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>