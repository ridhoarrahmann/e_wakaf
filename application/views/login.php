
    <!-- Logo -->
    <div class="row logo">
        <img src="<?php echo base_url('') ?>assets/img/logoside.png" alt="" class="ms-auto me-auto logo">
    </div>

    <!-- choosing login -->
    <div class="row login-options-container ms-auto me-auto">
        <div class="col-md-4 login-options">
            <a href="<?= base_url('index.php/auth/admin_pusat_login') ?>">
            <div class="login-admin-pusat login-options-item">
                <img src="<?php echo base_url('') ?>assets/img/icon-login-admin.png" alt="">
                <p>Login Admin Pusat</p>
               
            </div>
            </a>
        </div>
        <div class="col-md-4 login-options">
            <a href="<?= base_url('index.php/auth/cabang_login') ?>">
            <div class="login-admin-cabang login-options-item">
                <img src="<?php echo base_url('') ?>assets/img/icon-login-admin.png" alt="">
                <p>Login Admin Cabang</p>
            </div>
        </a>
        </div>
        <div class="col-md-4 login-options">
        <a href="<?= base_url('index.php/auth/user_login')?>">
        
            <div class="login-donatur login-options-item">
                <img src="<?php echo base_url('') ?>assets/img/icon-donatur.png" alt="">
                <p>Login Donatur</p>
            </div>
            </a>
        </div>
        
    </div>
    <div class="register-btn-row">
    <div class="row">
        <div class="col-md-4">
            <a href="<?= base_url('index.php/auth/registration')?>"><button type="button" class="btn btn-primary btn-register">Register</button></a>
        </div>
    </div>
</div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>