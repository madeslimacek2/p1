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
                <a class="navbar-brand" href="../">Aplikasi Project Akademik</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="<?= base_url(); ?>auth/registration">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url(); ?>auth/forgotpassword">
                            <i class="material-icons">lock_open</i>Lupa Password
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="<?= base_url(); ?>assets/img/login.jpg">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="wrapper wrapper-full-page">
                    <div class="full-page lock-page" filter-color="black" data-image="">
                        <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
                        <div class="content">
                            <div class="card card-profile card-hidden">
                                <div class="card-avatar">
                                    <a href="">
                                        <img class="avatar" src="<?= base_url(); ?>assets/img/profile/forgot.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title"><?= $this->session->flashdata('message'); ?></h4>

                                    <div class="form-group label-floating">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth'); ?>">Back to login</a>
                                    </div>
    </form>
    </div>
    </form>
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
    </>
    </div>
</body>
</div>
</body>