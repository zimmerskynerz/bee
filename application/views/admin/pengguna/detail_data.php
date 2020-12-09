<div class="modal fade" id="admin_detail" tabindex="-1" role="dialog" aria-labelledby="admin_detailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="admin_detailTitle">
                    Detail Admin!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('admin/pengguna/crudpengguna'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nm_lengkap" name="nm_lengkap" placeholder="Nama Lengkap" required>
                    <input type="number" hidden class="form-control" id="id_admin" name="id_admin" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Admin" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" id="reset_pass" name="reset_pass" class="btn btn-primary">Reset</button>
                <button type="submit" id="ubah_admin" name="ubah_admin" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Form Ajax Kategori Juri -->
<script type="text/javascript">
    $(document).on("click", "#detail_admin", function() {
        var id_admin = $(this).data('id_admin');
        var nm_lengkap = $(this).data('nm_lengkap');
        var email = $(this).data('email');
        var no_hp = $(this).data('no_hp');
        var alamat = $(this).data('alamat');
        $(".modal-body#detail_body #id_admin").val(id_admin);
        $(".modal-body#detail_body #nm_lengkap").val(nm_lengkap);
        $(".modal-body#detail_body #email").val(email);
        $(".modal-body#detail_body #no_hp").val(no_hp);
        $(".modal-body#detail_body #alamat").val(alamat);
    })
</script>