<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url("dokter/tambah"); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Dokter</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($dokter as $u) { ?>

                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $u["nama_dokter"]; ?></td>
                                    <td>
                                        <a href="<?= base_url() . "dokter/edit/" . $u["id_dokter"]; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url() . "dokter/hapus/" . $u["id_dokter"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>