<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
            <!-- <small>it all starts here</small> -->
        </h1>
        <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Change Role & Active User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('admin/userupdate'); ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="id" class="col-sm-2 control-label"></label>
                        <div class="col-sm-6">
                            <input type="hidden" name="id" class="form-control" id="id" placeholder="ID User" value="<?= $byid['id']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="name" type="text" id="name" placeholder="Name" value="<?= $byid['name']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-6">
                            <input name="email" type="text" class="form-control" id="email" placeholder="Email" value="<?= $byid['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input name="image" type="hidden" class="form-control" id="image" placeholder="Image" value="<?= $byid['image']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input name="password" type="hidden" class="form-control" id="inputPassword3" placeholder="Password" value="<?= $byid['password']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role_id" class="col-sm-2 control-label">role_id</label>

                        <div class="col-sm-6">
                            <input name="role_id" type="text" class="form-control" id="role_id" placeholder="role_id" value="<?= $byid['role_id']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="is_active" class="col-sm-2 control-label">is_active</label>

                        <div class="col-sm-6">
                            <input name="is_active" type="text" class="form-control" id="is_active" placeholder="is_active" value="<?= $byid['is_active']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_created" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input name="date_created" type="hidden" class="form-control" id="date_created" placeholder="date_created" value="<?= $byid['date_created']; ?>">
                        </div>
                    </div>


                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-left">Edit</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->

</div>
<!-- /.box -->

</section>
<!-- /.content -->