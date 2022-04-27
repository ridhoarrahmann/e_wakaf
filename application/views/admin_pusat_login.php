<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/')?>admin-login.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="login-card">
        <div class="row">
            <div class="col-md-6 col1">
                <div class="logo ">
                <img src="<?= base_url('assets/')?>img/logo.png" alt="" class="">
            
            
                <h1>E-Wakaf</h1>
              </div>
            </div>
            <div class="col-md-6 col2">
                <div class="login-form-container">
                <h2>Admin Login</h2>
                <?= $this->session->flashdata('message');?>
                <form class="admin" method="post" action="<?= base_url('index.php/auth/admin_pusat_login') ?>">
                    <div class="login-form">
                    <input type="text" name="username" placeholder="username">
                    </div>
                    
                    <div class="login-form">
                    <input type="password" name="password" placeholder="Password">
                    </div>
                    
                    <div class="btn-login">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>