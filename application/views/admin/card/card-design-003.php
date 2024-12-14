<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id Card 3</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+NL+Guides&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>
<style>
    body {
        background-color: transparent;
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
        padding: 0;
        margin: 0;
    }

    .id-card-holder-back {

        align-items: center;
        text-align: center;
        float: left;
        gap: 10px;
        margin: .4rem;
        border: 1px solid black;
        width: 250px;
        height: 350px;
        position: relative;
        background: transparent;
        overflow: hidden;
        box-shadow: 0 0 1.5px 0px #b9b9b9;
    }

    .id-card-holder {

        align-items: center;
        text-align: center;
        float: left;
        gap: 10px;
        margin: .4rem;
        border: 1px solid black;
        width: 250px;
        height: 350px;
        position: relative;
        background: transparent;
        overflow: hidden;
        box-shadow: 0 0 1.5px 0px #55B993;
        
    }

    .id-card-holder::before {
        content: '';
        position: absolute;
        background-color: #55B993;
        width: 250px;
        height: 290px;
        top: -160px;
        left: 16px;
        z-index: -1;
        rotate: 45deg;
        border-bottom-right-radius: 75px;
        box-shadow: 0 0 1.5px 0px #55B993;
    }




    .id-card img {
        margin: 0 auto;
    }

    .header img {
        width: 100px;
        margin-top: 15px;
    }

    .photo img {
        width: 80px;
        margin-top: 15px;
        border-radius: 50%;
        height:80px;
    }

    .id-card h2 {
        font-size: 17px;
        margin: 5px 0;
        font-family: "Playwrite CU", cursive;
        color: #fff;


    }

    .id-card h3 {
        font-family: "Roboto Mono", monospace;
        font-size: 16px;
        margin-top: 1.5rem;
        font-weight: 700;
        color: #000;
    }

    .id-card h5 {
        font-size: 17px;
        margin: -4px;
        padding: 0;
        text-transform: uppercase;
        letter-spacing: 0.2rem;
        color: #fff;
        margin: auto;
        justify-content: center;
        letter-spacing: 1px;
        font-family: "Playwrite CU", cursive;

    }

    .id-card hr {
        width: 100px;
        border: 1px solid #55B993;
    }

    .content-test {
        padding: 10px auto;
       text-align:center;
       justify-content: center;
       margin:2rem ;
        font-family: "Roboto Mono", monospace;
    }

    .id-card h4 {
        font-size: 12px;
        margin: 2.5px 0;
        font-weight: 300;
        text-align: justify;

        text-justify: inter-word;

    }

    .box {
        background: linear-gradient(90deg, rgb(255, 248, 248), #55B993, rgb(255, 246, 246));
        width: 240px;
        margin: .9rem auto;


    }

    .bottom-color {
      background-color: #55B993;
    position: absolute; /* Positions the element at the bottom of its container */
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 25px; 
    text-align: center;
    color: white;

    }



    .bottom-color p {
        font-size: 13px;
        line-height:25px;
       


    }

    .id-card-hook:after {
        content: '';
        background-color: white;
        width: 47px;
        height: 6px;
        display: block;
        margin: 0px auto;
        position: relative;
        top: 6px;
        border-radius: 4px;
    }


    .id-card-tag:after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-top: 100px solid white;
        margin: -10px auto -30px auto;
        position: relative;
        top: -130px;
        left: -50px;
    }

    .header-back {
        margin: 0.6rem 1rem;
    }

    .header-back h2 {
        font-size: 14px;
        color: #000;
    }

    .header-back table tr td {
        font-size: 10px;
        text-align: justify;
    }

    .header-back table tr td:first-child(1) {
        color: #55B993;
    }

    .header-back p {
        font-size: 9px;
        text-align: justify;
    }

    .header-back img {
        height: 85px;
    }

    .address {
        text-align: center !important;
    }
</style>

<body>

<?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>
  <?php   
               
               if($this->input->post('side_id') == 'front_side' ){
               ?>

                   <!--- fontend start-->
    <div class="id-card-holder">
        <div class="id-card">
            <h2><?php echo $qr['org_name']; ?></h2>
            <div class="photo">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
            </div>
            <h3><?php echo $qr['name']; ?></h3>
            <div class="box">
                <h5>Student</h5>
            </div>


            <div class="content-test">
            <?php   
               
               if($this->input->post('class') == 1){
               ?>
        <h4><strong>Class:</strong> <?php echo $qr['class']; ?></h4>
        <?php
        }
        ?>
              
              <?php
                 if($this->input->post('sections') == 1){
        ?>
        <p><strong>Section:</strong> <?php echo $qr['sections']; ?></p>
        <?php
        }
        ?>
        <!-- <p><strong>Shift:</strong> Day</p> -->
        <?php
                 if($this->input->post('class_roll') == 1){
        ?>
        <h4><strong>Roll:</strong> <?php echo $qr['class_roll']; ?></h4>
        <?php
        }
        ?>
        <?php
                 if($this->input->post('mobile_no') == 1){
        ?>
        <h4><strong>Mobile No:</strong> <?php echo $qr['phone']; ?></h4>
        <?php
        }
        ?>
              
              <?php
                 if($this->input->post('blood_group') == 1){
        ?>
           <h4><strong>Blood Group :</strong> <?php echo $qr['blood_group']; ?></h4>
           <?php
        }
        ?>
              
                <?php
                 if($this->input->post('gender') == 1){
        ?>
           <h4><strong>Gender :</strong> <?php echo $qr['gender']; ?></h4>
           <?php
        }
        ?>
            </div>
            <!-- <div class="bottom-color">
                <p>www.labibait.com</p>
            </div> -->

        </div>

    </div>
    <!-- fontend end-->

<?php   
               
              }else if($this->input->post('side_id') == 'back_side'){
               ?>
<!-- backend start-->
<div class="id-card-holder-back">
        <div class="id-card">
            <div class="header-back">
                <h2>তথ্যাবলি </h2>
                <table>
                    <tr>
                        <td>যোগদান : </td>
                        <td> 19/06/2017 </td>
                    </tr>
                    <tr>
                        <td>অফিস ইমেইল : </td>
                        <td> <?php echo $qr['org_email']; ?> </td>
                    </tr>
                    <tr>
                        <td>অফিস টেলিফোন : </td>
                        <td> <?php echo $qr['org_mobile_no']; ?> </td>
                    </tr>
                    <tr>
                        <td>অফিস ওয়েব সাইট : </td>
                        <td> <?php echo $qr['website']; ?> </td>
                    </tr>
                </table>
                <h2>নির্দেশাবলী</h2>
                <p>এই পরিচয়পত্র হস্তান্তরযোগ্য নহে , পরিচয়পত্রটি পাওয়া গেলে নিন্মোক্ত ঠিকানায় কর্তৃপক্ষের নিকট অথবা
                    নিকটস্থ পুলিশ ষ্টেশনে যোগাযোগ করুন । </p>
                <h2><?php echo $qr['org_name']; ?></h2>
                <p class="address"><?php echo $qr['org_address']; ?> </p>
                <div class="">
                <p class="address">বিস্তারিত জানতে  QR Code স্ক্যান করুন</p>
                <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
                </div>
            </div>


        </div>
    </div>

<?php   
               
              }  else if( $this->input->post('side_id') == 'both_side'){
               ?>


    <!--- fontend start-->
    <div class="id-card-holder">
        <div class="id-card">
            <h2><?php echo $qr['org_name']; ?></h2>
            <div class="photo">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
            </div>
            <h3><?php echo $qr['name']; ?></h3>
            <div class="box">
                <h5>Student</h5>
            </div>


            <div class="content-test">
            <?php   
               
               if($this->input->post('class') == 1){
               ?>
        <h4><strong>Class:</strong> <?php echo $qr['class']; ?></h4>
        <?php
        }
        ?>
              
              <?php
                 if($this->input->post('sections') == 1){
        ?>
        <p><strong>Section:</strong> <?php echo $qr['sections']; ?></p>
        <?php
        }
        ?>
        <!-- <p><strong>Shift:</strong> Day</p> -->
        <?php
                 if($this->input->post('class_roll') == 1){
        ?>
        <h4><strong>Roll:</strong> <?php echo $qr['class_roll']; ?></h4>
        <?php
        }
        ?>
        <?php
                 if($this->input->post('mobile_no') == 1){
        ?>
        <h4><strong>Mobile No:</strong> <?php echo $qr['phone']; ?></h4>
        <?php
        }
        ?>
              
              <?php
                 if($this->input->post('blood_group') == 1){
        ?>
           <h4><strong>Blood Group :</strong> <?php echo $qr['blood_group']; ?></h4>
           <?php
        }
        ?>
              
                <?php
                 if($this->input->post('gender') == 1){
        ?>
           <h4><strong>Gender :</strong> <?php echo $qr['gender']; ?></h4>
           <?php
        }
        ?>
            </div>
            <!-- <div class="bottom-color">
                <p>www.labibait.com</p>
            </div> -->

        </div>

    </div>
    <!-- fontend end-->
    <!-- backend start-->
    <div class="id-card-holder-back">
        <div class="id-card">
            <div class="header-back">
                <h2>তথ্যাবলি </h2>
                <table>
                    <tr>
                        <td>যোগদান : </td>
                        <td> 19/06/2017 </td>
                    </tr>
                    <tr>
                        <td>অফিস ইমেইল : </td>
                        <td> <?php echo $qr['org_email']; ?> </td>
                    </tr>
                    <tr>
                        <td>অফিস টেলিফোন : </td>
                        <td> <?php echo $qr['org_mobile_no']; ?> </td>
                    </tr>
                    <tr>
                        <td>অফিস ওয়েব সাইট : </td>
                        <td> <?php echo $qr['website']; ?> </td>
                    </tr>
                </table>
                <h2>নির্দেশাবলী</h2>
                <p>এই পরিচয়পত্র হস্তান্তরযোগ্য নহে , পরিচয়পত্রটি পাওয়া গেলে নিন্মোক্ত ঠিকানায় কর্তৃপক্ষের নিকট অথবা
                    নিকটস্থ পুলিশ ষ্টেশনে যোগাযোগ করুন । </p>
                <h2><?php echo $qr['org_name']; ?></h2>
                <p class="address"><?php echo $qr['org_address']; ?> </p>
                <div class="">
                <p class="address">বিস্তারিত জানতে  QR Code স্ক্যান করুন</p>
                <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
                </div>
            </div>


        </div>
    </div>

    <?php
  

}
?>
  <?php
    }

}
?>
</body>

</html>