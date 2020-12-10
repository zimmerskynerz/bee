<div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="tambahAdminTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahAdminTitle">
                    Tambah Admin!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/pengguna/crudpengguna'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nm_lengkap" name="nm_lengkap" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password Admin" required>
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
                <button type="submit" id="simpan_admin" name="simpan_admin" class="btn btn-primary">Tambah</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>