<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Users</h4>
                <p><b><?= count($users) ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>Uploades</h4>
                <p><b><?= count($jurnal) ?></b></p>
            </div>
        </div>
    </div>





    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Data Account</h3>
            <div class="row">
                <?php foreach ($users as $data) : ?>
                    <div class="col-md-4 mb-3">

                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center">
                                <img src="<?= base_url('assets/img/profile/') . $data['image'] ?>" width="100px;" class="rounded-circle">
                                <a href="<?= base_url() ?>seek/profile/<?= $data['name'] ?>">
                                    <h5 class="card-title mt-2"><?= $data['name'] ?></h5>
                                </a>
                                <?php if ($data['role_id'] == "1") : ?>
                                    <h6 class="card-subtitle mb-2 text-muted">Administrator</h6>
                                <?php else : ?>
                                    <h6 class="card-subtitle mb-2 text-muted">Member</h6>
                                <?php endif ?>
                                <p class="card-text"><?= $data['email'] ?></p>
                                <?php if ($data['role_id'] == "1") : ?>
                                    <h6 class="mb-2 text-muted">Administrator since <?= date('d F Y', $data['date_created']) ?></h6>
                                <?php else : ?>
                                    <h6 class="mb-2 text-muted">Member since <?= date('d F Y', $data['date_created']) ?></h6>
                                <?php endif ?>
                            </div>
                        </div>

                    </div>
                <?php endforeach ?>
            </div>
            <div class="embed-responsive embed-responsive-16by9">

            </div>
        </div>
    </div>
</div>