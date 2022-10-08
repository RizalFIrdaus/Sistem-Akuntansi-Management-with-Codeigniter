<main class="app-content mx-auto">
    <div class="row user">
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="user-timeline">

                    <?php foreach ($seek as $data) : ?>
                        <?php if ($data['comment'] == "019238219830192839018209381092809129083901241908312093910283948129083") : ?>
                        <?php else : ?>
                            <div class="timeline-post">
                                <div class="post-media"><a href="<?= base_url() ?>seek/profile/<?= $data['name'] ?>"><img src="<?= base_url('assets/img/profile/') . $data['image'] ?>" width="50px" class="rounded-circle"></a>
                                    <div class="row">
                                        <div class="col">
                                            <div class="content">
                                                <h5><a href="<?= base_url() ?>seek/profile/<?= $data['name'] ?>"><?= $data['name'] ?></a></h5>
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