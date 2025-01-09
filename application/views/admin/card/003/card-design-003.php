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

    .print-section {
        width: 210mm;
            margin: auto;
        
            background: white;
         
    }

   @media print {
        .card-design-break {
            break-inside: avoid;  
        }
    .print-section > .card-design-break:nth-child(1) {
    page-break-after: always;
  }
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
        margin: 0.4rem ;
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

    .invo-buttons-wrap {
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 26px;
	background: #FFF;
	box-shadow: 0px 25px 20px -20px rgba(18, 21, 28, 0.25);
	width: fit-content;
	padding: 2px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
}
   
.invo-btns {
	display: inline-flex;
	align-items: center;
	margin: 0 1px;
}
.invo-buttons-wrap .invo-btns .print-btn {
	background: #EF4444;
	padding: 12px 24px;
	border-radius: 24px 0px 0px 24px;
	display: flex;
	align-items: center;
	color: white;
}

.invo-buttons-wrap  a {
    text-decoration: none;
}
.invo-buttons-wrap .invo-btns .download-btn {
	background: #00D061;
	padding: 12px 24px;
	border-radius: 0px 24px 24px 0px;
	display: -webkit-inline-box;
	display: -ms-inline-flexbox;
	display: inline-flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
}

@media print {
	.d-print-none {
		display: none !important;
	}

}
</style>

<body>
        <div class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
</div>
            
				<!--Print-download content end here -->
                <div class="print-section invoice-content-wrap" >
              
			
			
           
<?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>
    
        
  <?php   
               
               if($this->input->post('side_id') == 'front_side' ){
               ?>

                     <!--- fontend start-->
    <div class="id-card-holder card-design-break">
        <div class="id-card">
            <h2><?php echo $qr['org_name']; ?></h2>
            <div class="photo">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
            </div>
            <h3><?php echo $qr['name']; ?></h3>
            <?php
            if( $this->input->post('staff_or_student') != ''){
            ?>
            <div class="box">
                <h5>  <?php
            echo $this->input->post('staff_or_student');
            ?></h5>
            </div>
            <?php
       }
            ?>

            <div class="content-test">
                 <!---Start father name  -->
            <?php   
               
               if($this->input->post('father_name_en') == 1){
               ?>
        <h4><strong>Father Name:</strong> <?php echo $qr['father_name_en']; ?></h4>
        <?php
        }
        ?>

        <!---End father name  -->

          <!---Start father name  -->
          <?php   
               
               if($this->input->post('father_name_bn') == 1){
               ?>
        <h4><strong>পিতার নাম :</strong> <?php echo $qr['father_name_bn']; ?></h4>
        <?php
        }
        ?>

        <!---End father name  -->

           <!---Start mother name  -->
           <?php   
               
               if($this->input->post('mother_name_en') == 1){
               ?>
        <h4><strong>Mother Name :</strong> <?php echo $qr['mother_name_en']; ?></h4>
        <?php
        }
        ?>

        <!---End mother name  -->

          <!---Start ID  -->
          <?php   
               
               if($this->input->post('id_number') == 1){
               ?>
        <h4><strong>ID NO :</strong> <?php echo $qr['id_number']; ?></h4>
        <?php
        }
        ?>

        <!---End ID  -->

            <!---Start mother name  -->
            <?php   
               
               if($this->input->post('mother_name_bn') == 1){
               ?>
        <h4><strong>মাতার নাম :</strong> <?php echo $qr['mother_name_bn']; ?></h4>
        <?php
        }
        ?>

        <!---End mother name  -->

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
<div class="id-card-holder-back card-design-break">
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
    <div class="id-card-holder card-design-break">
        <div class="id-card">
            <h2><?php echo $qr['org_name']; ?></h2>
            <div class="photo">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
            </div>
            <h3><?php echo $qr['name']; ?></h3>
            <?php
            if( $this->input->post('staff_or_student') != ''){
            ?>
            <div class="box">
                <h5>  <?php
            echo $this->input->post('staff_or_student');
            ?></h5>
            </div>
            <?php
       }
            ?>

            <div class="content-test">
                 <!---Start father name  -->
            <?php   
               
               if($this->input->post('father_name_en') == 1){
               ?>
        <h4><strong>Father Name:</strong> <?php echo $qr['father_name_en']; ?></h4>
        <?php
        }
        ?>

        <!---End father name  -->

          <!---Start father name  -->
          <?php   
               
               if($this->input->post('father_name_bn') == 1){
               ?>
        <h4><strong>পিতার নাম :</strong> <?php echo $qr['father_name_bn']; ?></h4>
        <?php
        }
        ?>

        <!---End father name  -->

           <!---Start mother name  -->
           <?php   
               
               if($this->input->post('mother_name_en') == 1){
               ?>
        <h4><strong>Mother Name :</strong> <?php echo $qr['mother_name_en']; ?></h4>
        <?php
        }
        ?>

        <!---End mother name  -->

          <!---Start ID  -->
          <?php   
               
               if($this->input->post('id_number') == 1){
               ?>
        <h4><strong>ID NO :</strong> <?php echo $qr['id_number']; ?></h4>
        <?php
        }
        ?>

        <!---End ID  -->

            <!---Start mother name  -->
            <?php   
               
               if($this->input->post('mother_name_bn') == 1){
               ?>
        <h4><strong>মাতার নাম :</strong> <?php echo $qr['mother_name_bn']; ?></h4>
        <?php
        }
        ?>

        <!---End mother name  -->

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
  
    <div class="id-card-holder-back card-design-break">
    <div id="download_section" >
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
                        <td> ওয়েব সাইট : </td>
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

    </div>


    <?php
  

}
?>
  <?php
    }

}
?>
  



</div>


	<!--Invoice Wrap End here -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jspdf.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/html2canvas.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>