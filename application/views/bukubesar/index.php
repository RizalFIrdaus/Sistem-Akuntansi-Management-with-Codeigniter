<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 11</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo11 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 11) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 11) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo11 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo11 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo11 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo11 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo11 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo11), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo11), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo11 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo11), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo11), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>



<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 12</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo12 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 12) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 12) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo12 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo12 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo12 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo12 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo12 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo12), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo12), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo12 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo12), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo12), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>
                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 13</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo13 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 13) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 13) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo13 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo13 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo13 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo13 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo13 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo13), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo13), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo13 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo13), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo13), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 14</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo14 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 14) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 14) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo14 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo14 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo14 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo14 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo14 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo14), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo14), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo14 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo14), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo14), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 15</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo15 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 15) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 15) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo15 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo15 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo15 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo15 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo15 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo15), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo15), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo15 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo15), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo15), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 19</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo19 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 19) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 19) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo19 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo19 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo19 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo19 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>
                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo19 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo19), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo19), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo19 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo19), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo19), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 21</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo21 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 21) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 21) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo21 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo21 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo21 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo21 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo21 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo21), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo21), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo21 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo21), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo21), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 31</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo31 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 31) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 31) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo31 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo31 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo31 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo31 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo31 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo31), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo31), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo31 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo31), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo31), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 32</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo32 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 32) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 32) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo32 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo32 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo32 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo32 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo32 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo32), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo32), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo32 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo32), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo32), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 41</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo41 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 41) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 41) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo41 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo41 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo41 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo41 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo41 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo41), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo41), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo41 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo41), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo41), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 51</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo51 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 51) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 51) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo51 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo51 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo51 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo51 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo51 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo51), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo51), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo51 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo51), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo51), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 52</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo52 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 52) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 52) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo52 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo52 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo52 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo52 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo52 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo52), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo52), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo52 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo52), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo52), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 53</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo53 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 53) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 53) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo53 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo53 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo53 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo53 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo53 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo53), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo53), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo53 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo53), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo53), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 54</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo54 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 54) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 54) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo54 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo54 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo54 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo54 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo54 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo54), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo54), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo54 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo54), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo54), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 55</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo55 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 55) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 55) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo55 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo55 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo55 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo55 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo55 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo55), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo55), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo55 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo55), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo55), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 56</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo56 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 56) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 56) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo56 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo56 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo56 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo56 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo56 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo56), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo56), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo56 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo56), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo56), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 57</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo57 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 57) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 57) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo57 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo57 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo57 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo57 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo57 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo57), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo57), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo57 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo57), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo57), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-lg-12 col-sm-auto">
    <div class="tile">
        <h3 class="tile-title">No akun : 58</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $saldo58 = 0; ?>
                <?php foreach ($jurnal as $z) : ?>
                    <?php if ($z['ref'] == 58) : ?>
                        <?php break; ?>
                    <?php endif ?>
                <?php endforeach ?>

                <?php foreach ($jurnal as $i) : ?>
                    <?php if ($i['ref'] == 58) : ?>

                        <tr>
                            <td><?= $i['tanggal'] ?></td>
                            <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
                            <td><?= $i['ref'] ?></td>
                            <?php if ($i['debet'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>
                            <?php if ($i['kredit'] != 0) :   ?>
                                <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                            <?php else : ?>
                                <td></td>
                            <?php endif  ?>


                            <?php if ($z['debet'] > 0) : ?>
                                <?php $saldo58 += $i['debet']; ?>
                            <?php endif ?>
                            <?php if ($z['kredit'] > 0) : ?>
                                <?php $saldo58 += $i['kredit']; ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($i['kredit']) : ?>
                                    <?php $saldo58 -= $i['kredit'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['kredit'] > 0) :  ?>
                                <?php if ($i['debet']) : ?>
                                    <?php $saldo58 -= $i['debet'] ?>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if ($z['debet'] > 0) : ?>
                                <?php if ($saldo58 < 0) : ?>
                                    <td style="color: red;">
                                        (<?php echo "Rp." . number_format(abs($saldo58), 0, ",", ",") ?>)
                                    </td>
                                <?php else : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo58), 0, ",", ",") ?></td>
                                <?php endif ?>
                            <?php elseif ($z['kredit'] > 0) : ?>
                                <?php if ($saldo58 < 0) : ?>
                                    <td><?php echo "Rp." . number_format(abs($saldo58), 0, ",", ",") ?></td>
                                <?php else : ?>
                                    <td style="color:red">(<?php echo "Rp." . number_format(abs($saldo58), 0, ",", ",") ?>)</td>
                                <?php endif ?>

                            <?php endif ?>
                        <?php endif ?>

                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>


<?php

$data = [
    'kas' => $saldo11,
    'piutang' => $saldo12,
    'perlengkapan' => $saldo13,
    'sewadibayardimuka' => $saldo14,
    'peralatan' => $saldo15,
    'akumulasi' => $saldo19,
    'hutang' => $saldo21,
    'modal' => $saldo31,
    'prive' => $saldo32,
    'pendapatan' => $saldo41,
    'Bperlengkapan' => $saldo51,
    'Bgaji' => $saldo52,
    'Bsewa' => $saldo53,
    'Blistrik' => $saldo54,
    'Btelepon' => $saldo55,
    'Bair' => $saldo56,
    'Bpenyusutan' => $saldo57,
    'Brupa' => $saldo58





];
$this->session->set_userdata($data);
?>