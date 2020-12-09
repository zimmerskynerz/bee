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
                                            <th class="text-center">aksi</th>
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
                                                <td style="text-align: center;"><?= date('d F Y', strtotime($Data_admin->tgl_lahir)) ?></td>
                                                <td><?= $Data_konsumen->email ?></td>
                                                <td><?= $Data_konsumen->no_hp ?></td>
                                                <td><?= $Data_konsumen->alamat ?></td>
                                                <!-- <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td> -->
                                                <td style="text-align: center;">
                                                    <a id="detail_konsumen" href="javascript:void(0);" class="bs-tooltip" data-toggle="modal" data-target="#konsumen_detail" data-placement="top" title="" data-original-title="Detail" data-id_konsumen="<?= $Data_konsumen->id_konsumen ?>" data-nm_konsumen="<?= $Data_konsumen->nm_konsumen ?>" data-email="<?= $Data_konsumen->email ?>" data-no_hp="<?= $Data_konsumen->no_hp ?>" data-alamat="<?= $Data_konsumen->alamat ?>">
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
</div>