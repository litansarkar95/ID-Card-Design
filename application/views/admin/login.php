<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo base_url(); ?>public/assets/css/main.css" rel="stylesheet" type="text/css"/>
</head>

<body>

  <!-- Video background -->
  <!-- <video autoplay muted loop class="video-background">
        <source src="<?php echo base_url(); ?>public/assets/videos/7187418_Group_Friends_1920x1080.mp4" type="video/mp4">
        <!-- Your browser does not support the video tag. -->
    <!-- </video> --> -->
    <div class="login-container">
        <div class="login-box">
            <!-- <img src="<?php echo base_url(); ?>public/static/images/logo.png" alt="Rodasi IT Logo" class="logo"> -->
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
                <p>Software by: <span><a href="https://masteritsolution.com.bd/" target="_blank">» Master IT Solution</a></span></p>
            </footer>
        </div>
    </div>
</body>
</html>
