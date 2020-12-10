<div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="tambahAdminTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahAdminTitle">
                    Laporan Transaksi!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/akun/laporan'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="row">
                    <div class="col col-sm-6">
                        <label for="bulan" class="form-control-label">Bulan</label>
                        <select class="form-control" name="bulan" id="bulan">
                            <option>-- Bulan --</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">Nopember</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col col-sm-6">
                        <label for="tahun" class="form-control-label">Tahun</label>
                        <select class="form-control" name="tahun" id="tahun">
                            <option>-- Tahun --</option>
                            <?php
                            $now = date('Y');
                            for ($tahun = $now; $tahun >= $now - 20; $tahun--) {
                                echo '
											<option value="' . $tahun . '">' . $tahun . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="cek_laporan" name="cek_laporan" class="btn btn-primary">Cek Laporan</button>
                <button type="submit" id="cetak_laporan" name="cetak_laporan" class="btn btn-primary">Cetak Laporan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>