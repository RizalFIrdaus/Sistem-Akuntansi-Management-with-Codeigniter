<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>Global Mobile</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <form method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="email">Email address</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email address" autocomplete="off" autofocus="autofocus" name="email" value="<?= set_value('email') ?>">
                                    <small class="text-danger"><?= form_error('email'); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
                                    <small class="text-danger"><?= form_error('password'); ?></small>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="<?= base_url('auth/register') ?>">Register an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>