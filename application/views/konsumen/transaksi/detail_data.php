<div class="modal fade" id="konfirmasi_detail" tabindex="-1" role="dialog" aria-labelledby="konfirmasi_detailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="konfirmasi_detailTitle">
                    Detail Transaksi Baru!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('konsumen/transaksi/crudtransaksi'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" readonly placeholder="Nama Produk" required>
                    <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input type="number" class="form-control" readonly id="harga_produk" name="harga_produk" placeholder="Harga Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Beli</label>
                    <input type="number" class="form-control" id="jml_barang" name="jml_barang" placeholder="Detail Produk" readonly required>
                </div>
                <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" readonly name="total_harga" placeholder="Detail Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Bukti Transfer</label>
                    <input type="file" class="form-control" id="foto_bayar" name="foto_bayar" placeholder="Detail Produk" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" id="kirim_bukti" name="kirim_bukti" class="btn btn-success">Kirim Bukti</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Form Ajax Kategori Juri -->
<script type="text/javascript">
    $(document).on("click", "#detail_konfirmasi", function() {
        var id_transaksi = $(this).data('id_transaksi');
        var kode_transaksi = $(this).data('kode_transaksi');
        var id_produk = $(this).data('id_produk');
        var jml_barang = $(this).data('jml_barang');
        var total_harga = $(this).data('total_harga');
        var harga_produk = $(this).data('harga_produk');
        $(".modal-body#detail_body #id_transaksi").val(id_transaksi);
        $(".modal-body#detail_body #kode_transaksi").val(kode_transaksi);
        $(".modal-body#detail_body #id_produk").val(id_produk);
        $(".modal-body#detail_body #jml_barang").val(jml_barang);
        $(".modal-body#detail_body #total_harga").val(total_harga);
        $(".modal-body#detail_body #harga_produk").val(harga_produk);
    })
    $(document).ready(function() {
        $("#jml_barang").on("input", function() {
            var harga_produk = $('#harga_produk').val();
            var jml_barang = $('#jml_barang').val();
            var perkalian = harga_produk * jml_barang;
            $("#total_harga").val(perkalian);
        });
    });
</script>
<div class="modal fade" id="pembayaran_detail" tabindex="-1" role="dialog" aria-labelledby="pembayaran_detailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pembayaran_detailTitle">
                    Konfirmasi Pembayaran Transaksi!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('admin/transaksi/crudtransaksi'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" readonly placeholder="Nama Produk" required>
                    <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi" placeholder="Nama Produk" required>
                    <input type="text" class="form-control" hidden id="foto_bayar" name="foto_bayar" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input type="number" class="form-control" readonly id="harga_produk" name="harga_produk" placeholder="Harga Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Beli</label>
                    <input type="number" class="form-control" id="jml_barang" readonly name="jml_barang" placeholder="Detail Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" readonly name="total_harga" placeholder="Detail Produk" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" id="tolak_transaksi" name="tolak_transaksi" class="btn btn-danger">Tolak</button>
                <button type="submit" id="terima_transaksi" name="terima_transaksi" class="btn btn-primary">Terima</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", "#detail_pembayaran", function() {
        var id_transaksi = $(this).data('id_transaksi');
        var kode_transaksi = $(this).data('kode_transaksi');
        var id_produk = $(this).data('id_produk');
        var jml_barang = $(this).data('jml_barang');
        var total_harga = $(this).data('total_harga');
        var harga_produk = $(this).data('harga_produk');
        var foto_bayar = $(this).data('foto_bayar');
        $(".modal-body#detail_body #id_transaksi").val(id_transaksi);
        $(".modal-body#detail_body #kode_transaksi").val(kode_transaksi);
        $(".modal-body#detail_body #id_produk").val(id_produk);
        $(".modal-body#detail_body #jml_barang").val(jml_barang);
        $(".modal-body#detail_body #total_harga").val(total_harga);
        $(".modal-body#detail_body #harga_produk").val(harga_produk);
        $(".modal-body#detail_body #foto_bayar").val(foto_bayar);
    })
</script>
<div class="modal fade" id="proses_detail" tabindex="-1" role="dialog" aria-labelledby="proses_detailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="proses_detailTitle">
                    Konfirmasi Selesai Transaksi!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('admin/transaksi/crudtransaksi'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" readonly placeholder="Nama Produk" required>
                    <input type="text" class="form-control" hidden id="id_transaksi" name="id_transaksi" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input type="number" class="form-control" readonly id="harga_produk" name="harga_produk" placeholder="Harga Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Beli</label>
                    <input type="number" class="form-control" id="jml_barang" readonly name="jml_barang" placeholder="Detail Produk" required>
                </div>
                <div class="form-group">
                    <label for="">Nomer Resi</label>
                    <input type="text" class="form-control" id="no_resi" name="no_resi" placeholder="Nomor Resi Pengiriman" required>
                </div>
                <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" readonly name="total_harga" placeholder="Detail Produk" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" id="selesai_transaksi" name="selesai_transaksi" class="btn btn-primary">Selesai</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", "#detail_proses", function() {
        var id_transaksi = $(this).data('id_transaksi');
        var kode_transaksi = $(this).data('kode_transaksi');
        var id_produk = $(this).data('id_produk');
        var jml_barang = $(this).data('jml_barang');
        var total_harga = $(this).data('total_harga');
        var harga_produk = $(this).data('harga_produk');
        var foto_bayar = $(this).data('foto_bayar');
        $(".modal-body#detail_body #id_transaksi").val(id_transaksi);
        $(".modal-body#detail_body #kode_transaksi").val(kode_transaksi);
        $(".modal-body#detail_body #id_produk").val(id_produk);
        $(".modal-body#detail_body #jml_barang").val(jml_barang);
        $(".modal-body#detail_body #total_harga").val(total_harga);
        $(".modal-body#detail_body #harga_produk").val(harga_produk);
        $(".modal-body#detail_body #foto_bayar").val(foto_bayar);
    })
</script>