<div class="modal fade" id="detail_transaski" tabindex="-1" role="dialog" aria-labelledby="detail_transaskiTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detail_transaskiTitle">
                    Tambah Transaksi Baru!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/transaksi/crudtransaksi'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label>Kategori Barang</label>
                    <div class="input-group">
                        <select class="form-control select2" id="id_produk" name="id_produk" style="width: 100%;">
                            <?php foreach ($data_produk as $Data_produk) : ?>
                                <option value="<?= $Data_produk->id_produk ?>"><?= $Data_produk->nm_produk ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="form-control" placeholder="Nama Kategori" name="id_konsumen" id="id_konsumen" hidden>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jumlah Beli</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Jumlah Beli" name="jml_beli" id="jml_beli">
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga Nego</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Harga Nego" name="harga_nego" id="harga_nego">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" id="kirim_transaksi" name="kirim_transaksi" class="btn btn-primary">Kirim</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>