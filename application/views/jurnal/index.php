<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
<a class="btn btn-danger mb-3 hapus" href="<?= base_url() ?>jurnal/hapus" role="button" onclick="return confirm('Semua data akan terhapus, apakan anda yakin ingin ?')">Hapus Data</a>
<?= $this->session->flashdata('message'); ?>
<?= $this->session->flashdata('delete'); ?>
<?= $this->session->flashdata('gagaltambah'); ?>
<?= $this->session->flashdata('gagaldelete'); ?>
<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">Jurnal Umum</h3>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $debet = 0; ?>
                <?php $kredit = 0; ?>
                <?php foreach ($jurnal as $data) : ?>

                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <?php if ($data['kredit'] != 0) : ?>
                            <td style="text-indent: 40px"><?= $data['uraian'] ?></td>
                        <?php else : ?>
                            <td><?= $data['uraian'] ?></td>
                        <?php endif ?>

                        <td><?= $data['ref'] ?></td>
                        <?php if ($data['debet'] != 0) :   ?>
                            <td><?php echo "Rp." . number_format($data['debet'], 0, ",", ",") ?></td>
                        <?php else : ?>
                            <td></td>
                        <?php endif  ?>
                        <?php if ($data['kredit'] != 0) :   ?>
                            <td><?php echo "Rp." . number_format($data['kredit'], 0, ",", ",") ?></td>
                        <?php else : ?>
                            <td></td>
                        <?php endif  ?>
                        <td style="font-style: italic; color:red;"><?= $data['keterangan'] ?></td>
                    </tr>
            </tbody>
            <?php $debet += $data['debet'] ?>
            <?php $kredit += $data['kredit'] ?>
            <?php $i++; ?>

        <?php endforeach ?>

        <tfoot>
            <tr>
                <th>Total</th>
                <th></th>
                <th></th>
                <th></th>
                <?php if ($debet != $kredit) : ?>
                    <?= $this->session->flashdata('balance'); ?>
                    <th style="color:red;"><?php echo "Rp." . number_format($debet, 0, ",", ",") ?></th>
                    <th style="color:red;"><?php echo "Rp." . number_format($kredit, 0, ",", ",") ?></th>
                <?php else : ?>
                    <th><?php echo "Rp." . number_format($debet, 0, ",", ",") ?></th>
                    <th><?php echo "Rp." . number_format($kredit, 0, ",", ",") ?></th>
                <?php endif ?>
                <th></th>
            </tr>
        </tfoot>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="<?= base_url() ?>jurnal/tambah" method="post">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                                    <small class="text-danger"><?= form_error('tanggal'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="uraian">Nama Akun</label>
                                    <select class="form-control" id="uraian" name="uraian">
                                        <option>-pilih-</option>
                                        <option>Kas</option>
                                        <option>Piutang</option>
                                        <option>Perlengkapan</option>
                                        <option>Sewa Dibayar Dimuka</option>
                                        <option>Peralatan</option>
                                        <option>Akumulasi Penyusutan</option>
                                        <option>Hutang Dagang</option>
                                        <option>Modal</option>
                                        <option>Prive</option>
                                        <option>Pendapatan</option>
                                        <option>Beban Perlengkapan</option>
                                        <option>Beban Gaji</option>
                                        <option>Beban Sewa</option>
                                        <option>Beban Listrik</option>
                                        <option>Beban Telepon</option>
                                        <option>Beban Air</option>
                                        <option>Beban Penyusutan</option>
                                        <option>Beban Rupa-rupa</option>
                                    </select>
                                    <small class="text-danger"><?= form_error('uraian'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="ref">Ref</label>
                                    <select class="form-control" id="ref" name="ref">
                                        <option>-pilih-</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>19</option>
                                        <option>21</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>41</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                    </select>
                                    <small class="text-danger"><?= form_error('ref'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="debet">Debet</label>
                                    <input type="text" class="form-control" id="debet" name="debet">
                                    <small class="text-warning"><?= form_error('debet'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="kredit">Kredit</label>
                                    <input type="text" class="form-control" id="kredit" name="kredit">
                                    <small class="text-warning"><?= form_error('kredit'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="kredit">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                                    <small class="text-danger"><?= form_error('keterangan'); ?></small>
                                </div>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Aktiva</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kewajiban</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Modal</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pendapatan</a>
                                        <a class="nav-link" id="v-pills-beban-tab" data-toggle="pill" href="#v-pills-beban" role="tab" aria-controls="v-pills-beban" aria-selected="false">Beban</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <table class="table table-striped table-light">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Akun</th>
                                                        <th scope="col">Nama Akun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($akun as $i) : ?>
                                                        <?php if ($i['no'] <= 19) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i['no'] ?></th>
                                                                <td><?= $i['nama'] ?></td>
                                                            </tr>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <table class="table table-striped table-light">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Akun</th>
                                                        <th scope="col">Nama Akun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($akun as $i) : ?>
                                                        <?php if ($i['no'] == 21) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i['no'] ?></th>
                                                                <td><?= $i['nama'] ?></td>
                                                            </tr>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <table class="table table-striped table-light">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Akun</th>
                                                        <th scope="col">Nama Akun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($akun as $i) : ?>
                                                        <?php if ($i['no'] == 31 || $i['no'] == 32) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i['no'] ?></th>
                                                                <td><?= $i['nama'] ?></td>
                                                            </tr>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <table class="table table-striped table-light">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Akun</th>
                                                        <th scope="col">Nama Akun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($akun as $i) : ?>
                                                        <?php if ($i['no'] == 41) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i['no'] ?></th>
                                                                <td><?= $i['nama'] ?></td>
                                                            </tr>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-beban" role="tabpanel" aria-labelledby="v-pills-beban-tab">
                                            <table class="table table-striped table-light">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No Akun</th>
                                                        <th scope="col">Nama Akun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($akun as $i) : ?>
                                                        <?php if ($i['no'] >= 51) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i['no'] ?></th>
                                                                <td><?= $i['nama'] ?></td>
                                                            </tr>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
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

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </div>
            </form>
        </div>
    </div>
</div>