<main class="app-content mx-auto">
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info"><img class="user-img" src="<?= base_url('assets/img/profile/') . $seekHead['image'] ?> ">
                    <h4><?= $seekHead['name'] ?></h4>
                    <?php if ($seekHead['role_id'] == 1) : ?>
                        <p>Administrator</p>
                    <?php else : ?>
                        <p>Member</p>
                    <?php endif ?>
                </div>

                <div class="cover-image"></div>
            </div>
        </div>
        <div class=" col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Timeline</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="user-timeline">

                    <?php foreach ($seek as $data) : ?>
                        <?php if ($data['comment'] == "019238219830192839018209381092809129083901241908312093910283948129083") : ?>
                        <?php else : ?>
                            <div class="timeline-post">
                                <div class="post-media"><a href="#"><img src="<?= base_url('assets/img/profile/') . $seekHead['image'] ?>" width="50px" class="rounded-circle"></a>
                                    <div class="row">
                                        <div class="col">
                                            <div class="content">
                                                <h5><a href="#"><?= $data['name'] ?></a></h5>
                                                <p class="text-muted"><small><?= $data['date']  ?> at <?= $data['time'] ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p><?= $data['comment'] ?> </p>
                                </div>

                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>
</main>