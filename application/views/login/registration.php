<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:"poppins", sans-serif;
    }

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url(<?php echo base_url('/public/img/img/ss.jpg')?>);
        background-size: cover;
        background-position: center;
    }

    .wrapper{
        width: 420px;
        height: 550px;
        background: transparent;
        border: 2px solid rgba(225, 225, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0,0,0,.1);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
    }

    .wrapper h2 {
          font-size: 36px;
          text-align: center;
    }

    .logo {
          font-size: 18px;
          font-weight: bold;
          text-align: center;
    }
    .wrapper .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        background: #fff;        ;
        margin: 30px 0;
        backdrop-filter: blur(20px);
    }

    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(225, 225, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: black;
        padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder{
        color: black;
    }

    .input-box i{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }

    .wrapper .remember-forgot{
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
    }

    .remember-forgot label input{
        accent-color: #fff;
        margin-right: 3px;
    }
     
    .remember-forgot a{
        color: #fff;
        text-decoration: underline;
    } 

    .remember-forgot a:hover{
        text-decoration: underline;
    }

    .wrapper .btn{
        width: 100%;
        height: 60%;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 22px;
        color: #333;
        font-weight: 600;
        font: optional;
    }

    .wrapper .login-link{
        font-size: 16px;
        text-align: left;
        margin-top: 20px;
        color: white;
        }

    
</style>
<body>
    
    <div class="wrapper">

<div class="logo">
    <p><img src="<?php echo base_url();?>public/img/img/logo.jpg" style="width:50px; alignment:left;"></img>
    <div class="col-lg-6">
     SK Hospital</p>
</div>
    <br>
    <form action="<?php echo base_url().'register_c/save'; ?>" method="post">
        <h2>Register</h2>
        <div><?php// echo $msg;?></div>
        <div class="input-box">
            <input type='text' name="name" placeholder="name" required>
            <i class='bx bxs-user'></i>
        </div>
        
        <div class="input-box">
            <input type="email" name="email" placeholder="email" required>
        </div>

        <div class="input-box">  
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>    

        <button type="submit" class="btn"> Register </button>

        <br>
        <div class="login-link">
            <p><b>Already have an account?   <a href="<?php echo base_url().'Login/index';?>">
            Login</a></b></p>
        </div>

    </form>
</div>   
</body>
</html>