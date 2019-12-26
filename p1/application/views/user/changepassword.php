<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
            <small></small>
        </h1>
        <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol> -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt=" User profile picture" alt="User profile picture">

                            <h3 class="profile-username text-center"><?= $user['name']; ?></h3>
                            <p class="text-muted text-center"><?= $user['email']; ?></p>
                            <h5 class="text-muted text-center">Member Since <?= date('d F Y', $user['date_created']); ?></h5>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                            <p class="text-muted">
                                Politeknik Negeri Lampung
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                            <p class="text-muted">Bandar Lampung</p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-sm-8 control-label">
                    <div class="tab-content">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('user/changepassword'); ?>" method="post">
                            <div class="form-group">
                                <br>
                                <label for="current_password" class="col-sm-3 control-label">Current Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <?= form_error('current_password', '<small class ="text-danger pl-3">', '<small>'); ?>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="form-group">
                                <label for="new_password1" class="col-sm-3 control-label">New Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                                    <?= form_error('new_password1', '<small class ="text-danger pl-3">', '<small>'); ?>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="form-group">
                                <label for="new_password2" class="col-sm-3 control-label">Repeat Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                                    <?= form_error('new_password2', '<small class ="text-danger pl-3">', '<small>'); ?>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-sm-offset-3 col-sm-11">
                                <button type="submit" class="btn btn-primary">Change Password !</button>
                            </div>
                        </form>
                    </div>
                </div>

        </section>
</div>
<!-- /.content-wrapper -->