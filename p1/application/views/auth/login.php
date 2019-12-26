<body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Aplikasi Monitoring Polinela</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="<?= base_url(); ?>auth/registration">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="">
                        <a href="<?= base_url(); ?>auth/forgotpassword">
                            <i class="material-icons">lock_open</i>Lupa Password
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form class="user" method="post" action="<?= base_url('auth'); ?>">
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="<?= base_url(); ?>assets/img/login.jpg">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form method="#" action="#">
                                    <div class="card card-login card-hidden">
                                        <div class="card-header text-center" data-background-color="rose">
                                            <h4 class="card-title">Login Page</h4>
                                            <div class="social-line">
                                                <a href="#btn" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#eugen" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                        <p class="category text-center">
                                            Classic Login~
                                        </p>
                                        <div class="card-content">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                                                    <?php echo form_error('email', '<small class ="text-danger pl-3">', '<small>'); ?>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password">
                                                    <?php echo form_error('password', '<small class ="text-danger pl-3">', '<small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="">Made Slimacek</a>, Politeknik Negeri Lampung
                        </p>
                    </div>
                </footer>
            </div>
        </div>
</body>
</div>
</body>