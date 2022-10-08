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
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header">Register an Account</div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url() ?>auth/register">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md">
                                        <div class="form-label-group">
                                            <label for="name">Nickname</label>
                                            <input type="text" id="name" class="form-control" placeholder="Nickname" autocomplete="off" name="name" autofocus="autofocus" value="<?= set_value('name') ?>">
                                            <small class="text-danger"><?= form_error('name'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="email">Email address</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email address" autocomplete="off" name="email" value="<?= set_value('email') ?>">
                                    <small class="text-danger"><?= form_error('email'); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" placeholder="Password" autocomplete="off" name="password">
                                            <small class="text-danger"><?= form_error('password'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <label for="confirmPassword">Confirm password</label>
                                            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" autocomplete="off" name="confirmPassword">
                                            <small class="text-danger"><?= form_error('confirmPassword'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Register</button>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="<?= base_url('auth/index') ?>">Login Page</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>