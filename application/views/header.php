<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">

    <style>
       .logo img{
           width: 300px;
           height: 110px;
       }
       .logo{
           margin: 40px 0 0 0;
       }
       .login-options-container{
           
           width: 80%;
           height: 300px;
           margin-top: 20px;
       }
       .login-options{
         
           padding: 40px;
       }
       .login-options-item{
           background-color: #DC5C00;
           width: 210px;
           height: 190px;
           margin-left: auto;
           margin-right: auto;
           border-radius: 30px;
           display: flex;
           justify-content: center;
           align-items: center;
           flex-wrap: wrap;
       }
       .login-options-item img{
        width: 40%;
        height: 40%;
        
       }
       .login-options-item p{
           font-size: 19px;
           text-align: center;
           width: 100%;
           color: white;
           display: inline;
           margin-top: -45px;
           font-weight: 500;
       }
       .login-options-item:hover{
         transform: scale(1.1);
         transition-duration: 0.99s;
       }
       .btn-register{
           background-color: #DC5C00;
           border: none;
           width: 210px;
           height: 50px;
           border-radius: 40px;
       }
       .register-btn-row{
           margin: 0;
           display: flex;
           justify-content: center;
           margin-top: -20px;

       }
       .register-btn-row a{
           
       }
</style>
</head>
<body>