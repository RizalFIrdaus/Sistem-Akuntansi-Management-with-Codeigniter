<div class="row">
    <div class="col-lg-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <p class="lead text-center">PT Elektronik</p>
                <p class="h2 text-center">LAPORAN RUGI LABA</p>
                <p class="lead text-center">Periode 31 September 2020</p>
                <hr>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Pendapatan</p>
                        <p class="float-right"><?= "Rp." . number_format($Lpendapatan, 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p style="text-indent: 25px;">Beban Perlengkapan</p>
                        <p style="text-indent: 25px;">Beban Gaji</p>
                        <p style="text-indent: 25px;">Beban Sewa</p>
                        <p style="text-indent: 25px;">Beban Listrik</p>
                        <p style="text-indent: 25px;">Beban Telepon</p>
                        <p style="text-indent: 25px;">Beban Air</p>
                        <p style="text-indent: 25px;">Beban Penyusutan</p>
                        <p style="text-indent: 25px;">Beban Rupa-Rupa</p>
                    </div>
                    <div class="col-lg-6">
                        <p><?= "Rp." . number_format($LBperlengkapan, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBgaji, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBsewa, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBlistrik, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBtelepon, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBair, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBpenyusutan, 0, ",", ","); ?></p>
                        <p><?= "Rp." . number_format($LBrupa, 0, ",", ","); ?></p>
                    </div>
                </div>

                <?php $Tbeban  = $LBperlengkapan + $LBgaji + $LBsewa + $LBlistrik + $LBtelepon + $LBair + $LBpenyusutan + $LBrupa ?>
                <div class="row">
                    <div class="col">
                        <p class="float-right">(<?= "Rp." . number_format($Tbeban, 0, ",", ","); ?>)</p>
                    </div>
                </div>
                <hr>
                <?php $Tlaba  = $Lpendapatan - $Tbeban ?>
                <div class="row font-weight-bold">
                    <div class="col">
                        <p>Laba</p>
                    </div>
                    <div class="col">
                        <p class="float-right"><?= "Rp." . number_format($Tlaba, 0, ",", ","); ?></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <p class="lead text-center">PT Elektronik</p>
                <p class="h2 text-center">PERUBAHAN MODAL</p>
                <p class="lead text-center">Periode 31 September 2020</p>
                <hr>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Modal per 1 September 2020</p>
                        <p class="float-right"><?= "Rp." . number_format($Lmodal, 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Laba</p>
                        <p class="float-right"><?= "Rp." . number_format($Tlaba, 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Prive</p>
                        <p class="float-right">(<?= "Rp." . number_format($Lprive, 0, ",", ","); ?>)</p>
                    </div>
                </div>

                <hr>
                <?php $Tmodal = $Lmodal + $Tlaba - $Lprive ?>
                <div class="row font-weight-bold">
                    <div class="col">
                        <p>Modal per 1 September 2020</p>
                    </div>
                    <div class="col">
                        <p class="float-right"><?= "Rp." . number_format($Tmodal, 0, ",", ","); ?></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg">
        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <p class="lead text-center">PT Elektronik</p>
                <p class="h2 text-center">NERACA</p>
                <p class="lead text-center">Periode 31 September 2020</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <hr>
                <p class="h4 text-center">AKTIVA</p>
                <hr>
                <div class="row">
                    <div class="col">
                        <p class="float-left font-weight-bold">Aktiva Lancar</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Kas</p>
                        <p class="float-right"><?= "Rp." . number_format(abs($Lkas), 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Piutang Dagang</p>
                        <p class="float-right"><?= "Rp." . number_format(abs($Lpiutang), 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Perlengkapan</p>
                        <p class="float-right"><?= "Rp." . number_format(abs($Lperlengkapan), 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Sewa dibayar dimuka</p>
                        <p class="float-right"><?= "Rp." . number_format(abs($Lsewadibayardimuka), 0, ",", ","); ?></p>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <p class="float-left font-weight-bold">Aktiva Tetap</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Peralatan Fotografi</p>
                        <p class="float-right"><?= "Rp." . number_format(abs($Lperalatan), 0, ",", ","); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Akumulasi Penyusutan</p>
                        <p class="float-right">(<?= "Rp." . number_format(abs($Lakumulasi), 0, ",", ","); ?>)</p>
                    </div>
                </div>
                <hr>
                <?php $aktiva = $Lkas + $Lpiutang + $Lperlengkapan + $Lsewadibayardimuka + $Lperalatan - $Lakumulasi ?>
                <div class="row">
                    <div class="col">
                        <p class="float-right font-weight-bold"><?= "Rp." . number_format($aktiva, 0, ",", ","); ?></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <hr>
                <p class="h4 text-center">PASSIVA</p>
                <hr>
                <div class="row">
                    <div class="col">
                        <p class="float-left font-weight-bold">Hutang</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Hutang Dagang</p>
                        <p class="float-right"><?= "Rp." . number_format(abs($Lhutang), 0, ",", ","); ?></p>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <p class="float-left font-weight-bold">Modal</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="float-left">Modal PT Elektronik</p>
                        <p class="float-right"><?= "Rp." . number_format($Tmodal, 0, ",", ","); ?></p>
                    </div>
                </div>
                <hr>
                <?php $passiva = $Tmodal + $Lhutang ?>
                <div class="row">
                    <div class="col">
                        <p class="float-right font-weight-bold"><?= "Rp." . number_format($passiva, 0, ",", ","); ?></p>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>