<div class="modal fade" id="tambahProduk" tabindex="-1" role="dialog" aria-labelledby="tambahProdukTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahProdukTitle">
                    Tambah Produk!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/produk/crudproduk'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" id="nm_produk" name="nm_produk" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Foto Produk</label>
                    <input type="file" class="form-control" id="foto_produk" name="foto_produk" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input type="number" class="form-control" id="harga_produk" name="harga_produk" placeholder="Harga Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Detail Produk</label>
                    <textarea type="text" class="form-control" id="detail_produk" name="detail_produk" placeholder="Detail Produk" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" id="simpan_produk" name="simpan_produk" class="btn btn-primary">Tambah</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>