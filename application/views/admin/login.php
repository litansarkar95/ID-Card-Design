<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
        @import url("https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap");
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Rajdhani", sans-serif;
    background: linear-gradient(to right, #005596, #0b2e8e);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.login-box {
    background-color: #222;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 450px;
    text-align: center;
    color: #fff;
}

.logo {
    width: 150px;
    margin-bottom: 20px;
}

h2 {
    margin-bottom: 20px;
}

.input-field {
    margin-bottom: 15px;
    text-align: left;
}

.input-field label {
    display: block;
    margin-bottom: 5px;
}

.input-field input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
    font-size: 16px;
}

.options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.options a {
    color: #999;
    text-decoration: none;
}

.options input {
    margin-right: 5px;
}

.login-btn {
    width: 100%;
    padding: 10px;
    background-image: -webkit-linear-gradient(45deg, hsl(11, 92%, 31%), hsl(225, 99%, 61%));
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 18px;
    cursor: pointer;

}

footer p {
    margin-top: 20px;
    font-size: 12px;
}

footer span {
    color: #00ff88;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: none;  
    border-radius: 4px;
    margin-bottom: 10px;
    outline: none; 
}
.text-content  a {
	background-image: -webkit-linear-gradient(45deg, hsl(45, 99%, 61%), hsl(225, 99%, 61%));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
    font-size:42px;
    margin:20px;
    text-decoration: none;
}
.login-box-msg{
    background-image: -webkit-linear-gradient(45deg, hsl(45, 11%, 61%), hsl(000, 112%, 61%));
    height:30px;
    line-height:30px;
}
footer p{
    font-size:24px;
}
footer a{
    font-size:24px;
    color: #fff;
	text-decoration: none;
    background-image: -webkit-linear-gradient(45deg, hsl(45, 11%, 61%), hsl(000, 112%, 61%));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}

    </style>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="<?php echo base_url(); ?>public/static/images/logo.png" alt="Rodasi IT Logo" class="logo">
            <h1 class="text-content"><a href="<?php echo base_url(); ?>" >Administrator</a></h1>
            <form action="<?php echo base_url(); ?>authentication" method="post">
            <?php  $error =  $this->session->userdata('error'); 
    if($error){
    
    ?>
      <p class="login-box-msg" style="color:#842E4B">  <?php echo $this->session->userdata('error'); ?></p>
 
      <?php
     $this->session->unset_userdata('error'); 
                           
    }
      ?>
                <div class="input-field">
                    <label for="email">Username</label>
                    <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Username">
                    <span class="help-block small"><?php echo form_error('email'); ?></span>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"  placeholder="Password">
                    <span class="help-block small"><?php echo form_error('password'); ?></span>
                </div>
                <div class="options">
                    <label><input type="checkbox" name="remember"> Remember</label>
                    <a href="#">Lose Your Password?</a>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <footer>
                <p>Software by: <span><a href="https://www.rodasiit.com" target="_blank">» Rodasi IT</a></span></p>
            </footer>
        </div>
    </div>
</body>
</html>
