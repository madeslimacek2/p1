    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Laman Register</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" active ">
                        <a href="<?= base_url(); ?>auth">
                            <i class="material-icons">person</i> Sudah Punya Akun? Login!
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page register-page" filter-color="black" data-image="<?= base_url(); ?>assets/img/register.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card card-signup">
                            <h2 class="card-title text-center">Register</h2>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="card-content">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-rose">
                                                <i class="material-icons">timeline</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Tes 1</h4>
                                                <p class="description">
                                                    Coba
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-primary">
                                                <i class="material-icons">code</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Tes 2</h4>
                                                <p class="description">
                                                    Coba 2
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-info">
                                                <i class="material-icons">group</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Tes 3</h4>
                                                <p class="description">
                                                    Coba 3
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="social text-center">
                                    </div>
                                    <form class="form" method="post" action="<?= base_url('auth/registration'); ?>">
                                        <div class="card-content">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Full Name..." value="<?= set_value('name'); ?>">
                                                <?php echo form_error('name', '<small class ="text-danger pl-3">', '<small>'); ?>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <input type="text" id="email" name="email" class="form-control" placeholder="Email..." value="<?= set_value('email'); ?>">
                                                <?php echo form_error('email', '<small class ="text-danger pl-3">', '<small>'); ?>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <input type="password" id="password1" name="password1" placeholder="Password..." class="form-control" />
                                                <?php echo form_error('password1', '<small class ="text-danger pl-3">', '<small>'); ?>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <input type="password" id="password2" name="password2" placeholder="Confirm Password..." class="form-control" />
                                            </div>
                                            <!-- If you want to add a checkbox to this form, uncomment this code -->
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked> I agree to the
                                                    <a href="#something">terms and conditions</a>.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-primary btn-round">Register Account!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

    </ul>
    </div>
    </div>
    </body>