<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="rcol-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div>
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Kelola Konsumen</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Tanggal Lahir</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">No HP</th>
                                            <th class="text-center">Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data_konsumen as $Data_konsumen) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no ?></td>
                                                <td class="text-center">
                                                    <span><img src="<?= base_url('assets/konsumen/' . $Data_konsumen->foto . '') ?>" class="profile-img" alt="avatar"></span>
                                                </td>
                                                <td><?= $Data_konsumen->nm_konsumen ?></td>
                                                <td style="text-align: center;"><?= date('d F Y', strtotime($Data_konsumen->tgl_lahir)) ?></td>
                                                <td><?= $Data_konsumen->email ?></td>
                                                <td><?= $Data_konsumen->no_hp ?></td>
                                                <td><?= $Data_konsumen->alamat ?></td>
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
</div>