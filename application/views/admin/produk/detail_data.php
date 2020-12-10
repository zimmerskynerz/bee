<div class="modal fade" id="produk_detail" tabindex="-1" role="dialog" aria-labelledby="produk_detailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="produk_detailTitle">
                    Detail Produk!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('admin/produk/crudproduk'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" id="nm_produk" name="nm_produk" placeholder="Nama Produk" required>
                    <input type="text" class="form-control" hidden id="id_produk" name="id_produk" placeholder="Nama Produk" required>
                    <input type="text" class="form-control" hidden id="foto_produk_lama" name="foto_produk_lama" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Foto Produk</label>
                    <input type="file" class="form-control" id="foto_produk" name="foto_produk">
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
                <button type="submit" id="hapus_produk" name="hapus_produk" class="btn btn-danger">Hapus</button>
                <button type="submit" id="ubah_produk" name="ubah_produk" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Form Ajax Kategori Juri -->
<script type="text/javascript">
    $(document).on("click", "#detail_produk2", function() {
        var id_produk = $(this).data('id_produk');
        var nm_produk = $(this).data('nm_produk');
        var foto_produk_lama = $(this).data('foto_produk');
        var harga_produk = $(this).data('harga_produk');
        var detail_produk = $(this).data('detail_produk');
        $(".modal-body#detail_body #id_produk").val(id_produk);
        $(".modal-body#detail_body #nm_produk").val(nm_produk);
        $(".modal-body#detail_body #foto_produk_lama").val(foto_produk_lama);
        $(".modal-body#detail_body #harga_produk").val(harga_produk);
        $(".modal-body#detail_body #detail_produk").val(detail_produk);
    })
</script>