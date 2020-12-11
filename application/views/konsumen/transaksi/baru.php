<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="rcol-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="padding-top: 50px;">
            <div>
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Kelola Transaksi Baru</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Transaksi</th>
                                        <th class="text-center">Tanggal Transaksi</th>
                                        <th class="text-center">Nama Konsumen</th>
                                        <th class="text-center">Nama Produk</th>
                                        <th class="text-center">Jumlah Produk</th>
                                        <th class="text-center">Total Harga</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_konfirmasi as $Data_konfirmasi) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td style="text-align: center;"><?= date('Ymd', strtotime($Data_konfirmasi->tgl_transaksi)) ?><?= $Data_konfirmasi->id_transaksi ?></td>
                                            <td><?= date('d F Y', strtotime($Data_konfirmasi->tgl_transaksi)) ?></td>
                                            <td><?= $Data_konfirmasi->nm_konsumen ?></td>
                                            <td><?= $Data_konfirmasi->nm_produk ?></td>
                                            <td class="text-center"><?= $Data_konfirmasi->jml_barang ?></td>
                                            <td class="text-right"><?= $Data_konfirmasi->total_harga ?>,-</td>
                                            <!-- <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td> -->
                                            <td style="text-align: center;">
                                                <a id="detail_konfirmasi" href="javascript:void(0);" class="bs-tooltip" data-toggle="modal" data-target="#konfirmasi_detail" data-placement="top" title="" data-original-title="Detail" data-id_transaksi="<?= $Data_konfirmasi->id_transaksi ?>" data-kode_transaksi="<?= date('Ymd', strtotime($Data_konfirmasi->tgl_transaksi)) ?><?= $Data_konfirmasi->id_transaksi ?>" data-id_produk="<?= $Data_konfirmasi->id_produk ?>" data-jml_barang="<?= $Data_konfirmasi->jml_barang ?>" data-total_harga="<?= $Data_konfirmasi->total_harga ?>" data-harga_produk="<?= $Data_konfirmasi->harga_produk ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </a>
                                            </td>
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
<?php $this->load->view('konsumen/transaksi/detail_data') ?>