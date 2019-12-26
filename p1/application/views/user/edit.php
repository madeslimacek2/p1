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

                <div class="col-md-8">
                    <div class="nav-tabs-custom">
                        <?= form_open_multipart('user/edit'); ?>
                    </div>

                    <div class="tab-content">
                        <div class="active tab-pane" id="edit">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Full name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                        <?php echo form_error('name', '<small class ="text-danger pl-3">', '<small>'); ?>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="form-group">
                                    <label for="image" class="col-sm-2 control-label">Picture</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2 control-label">
                                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="92px" class="img-thumnail">
                                            </div>
                                            <div class="col-sm-1 control-label">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <br><br>
                                        <button type="submit" class="btn btn-primary">Edit data!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->


            <!-- /.row -->

        </section>
</div>
<!-- /.content-wrapper -->