<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="rcol-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="padding-top: 50px;">
            <div>
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Laporan Transaksi</h4>
                            </div>
                            <button type="button" class="btn btn-primary mb-1" style="position: absolute; right: 12px; top: 5px;" data-toggle="modal" data-target="#tambahAdmin" id="#tambahAdminScroll">
                                Laporan
                            </button>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Transaksi</th>
                                        <th class="text-center">Tanggal Bayar</th>
                                        <th class="text-center">Nama Konsumen</th>
                                        <th class="text-center">Nama Produk</th>
                                        <th class="text-center">Foto Bukti</th>
                                        <th class="text-center">Jumlah Produk</th>
                                        <th class="text-center">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_selesai as $Data_selesai) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td style="text-align: center;"><?= date('Ymd', strtotime($Data_selesai->tgl_transaksi)) ?><?= $Data_selesai->id_transaksi ?></td>
                                            <td><?= date('d F Y', strtotime($Data_selesai->tgl_bayar)) ?></td>
                                            <td><?= $Data_selesai->nm_konsumen ?></td>
                                            <td><?= $Data_selesai->nm_produk ?></td>
                                            <td class="text-center">
                                                <img src="<?= base_url('assets/') ?>bayar/<?= $Data_selesai->foto_bayar ?>" class="avatar2 zoom">
                                            </td>
                                            <td class="text-center"><?= $Data_selesai->jml_barang ?></td>
                                            <td class="text-right"><?= $Data_selesai->total_harga ?>,-</td>
                                            <!-- <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td> -->
                                        </tr>
                                        <?php $no++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/beranda/cek_laporan') ?>