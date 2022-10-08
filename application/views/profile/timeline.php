<main class="app-content mx-auto">
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info"><img class="user-img" src="<?= base_url('assets/img/profile/') . $member['image'] ?> ">
                    <h4><?= $member['name'] ?></h4>
                    <?php if ($member['role_id'] == 1) : ?>
                        <p>Administrator</p>
                    <?php else : ?>
                        <p>Member</p>
                    <?php endif ?>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Timeline</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="user-timeline">
                    <div class="timeline-post">
                        <?= form_open_multipart('profile/timeline'); ?>
                        <div class="post-content">
                            <div class="form-group">
                                <p class="font-weight-normal">Create Post</p>
                                <textarea class="form-control area" id="comments" name="comments" rows="5" autofocus></textarea>
                                <small class="text-danger"><?= form_error('comments'); ?></small>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col">
                                <button type="submit" class="btn btn-primary float-right" style="width:8em;" name="btnTimeline">Post</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <?php foreach ($comment as $data) : ?>
                        <?php if ($data['comment'] == "019238219830192839018209381092809129083901241908312093910283948129083") : ?>
                        <?php else : ?>
                            <div class="timeline-post">
                                <div class="post-media"><a href="#"><img src="<?= base_url('assets/img/profile/') . $member['image'] ?>" width="50px" class="rounded-circle"></a>
                                    <div class="row">
                                        <div class="col">
                                            <div class="content">
                                                <h5><a href="#"><?= $member['name'] ?></a></h5>
                                                <p class="text-muted"><small><?= $data['date']  ?> at <?= $data['time'] ?></small></p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a class="btn btn-danger hapus" href="<?= base_url() ?>profile/hapus/<?= $data['id'] ?>" role="button" onclick="return confirm('Anda yakin ingin menghapus postingan ini ?')"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p><?= $data['comment'] ?> </p>
                                </div>
                            <?php endif ?>
                            </div>
                        <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>
</main>