<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College ID Card</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
    <style>
              *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
      }  
      body {
            font-family: "Hind Siliguri", serif;
          
            font-weight: 300;
            font-style: normal;
            background-color: #f4f4f4;
        }
        .invo-buttons-wrap {
        display: flex;
	justify-content: center;
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
	border-radius: 24px 24px;
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
    cursor: pointer;
	-ms-flex-align: center;
}

@media print {
	.d-print-none {
		display: none !important;
	}

        .card-design-break {
            break-inside: avoid;  
        }
    .print-section > .card-design-break:nth-child(8) {
    page-break-after: always;
        }
        } 
       
        .card-design-break {
    float:left;
}
.print-section{
    width: 250mm;
            margin:10px auto;
           
     
            background: white;
}
        .id-card,
        .back-page {
            width: 198px;
            height: 312px;
            border: 1px solid #0d6efd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 2px 5px;
            
        
        }

        .id-card-header {
            background-color: #0d6efd;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .id-card-header h1 {
            font-size: 14px;
           text-align:center;
           font-family: "Noto Sans", serif;
           font-weight: 300;
           font-style: italic;
           font-weight:300;
        
           height:2.1rem;
        }

        .id-card-header p {
            margin: 5px 0;
            font-size: 14px;
        }

        .id-card-body {
            padding: 2px;
            text-align: center;
        }

        .id-card-body img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1px solid #0d6efd;
           
        }

        .id-card-body h2 {
            font-size: 13px;
            margin: 5px 0;
            font-family: "Playwrite AU SA", serif;
            text-align: center;
           
            letter-spacing: 1px;
  font-weight: 400;
  font-style: normal;
        }

        .id-card-body p {
            margin: 1px 0;
            font-size: 14px;
        }

        .id-card-footer {
            padding: 2px;
            border-top: 1px solid #0d6efd;
            font-size: 11px;
            color: #666;
            text-align: center;
            font-family: "Noto Sans", serif;
        }

        .id-card h3 {
            color: #0d6efd;
            text-align: center;
            font-size:14px;
            font-family: "Hind Siliguri", serif;
  font-weight: 400;
  font-style: italic;

        }
        .hr{
            width:70px;
            margin: 0 auto;
            color: #0d6efd;
            background: #0d6efd;
        }

        .back-page h3 {
            color: #0d6efd;
            text-align: center;
            font-size:13px;
            font-family: "Hind Siliguri", serif;
  font-weight: 300;
  font-style: italic;
        }

      

        .back-page p {
            font-size: 14px;
            color: #333;
            margin: .4rem;
            line-height: 1.5;
        }

        .back-page .qr-code {
            text-align: center;

        }

        .back-page .qr-code img {
            width: 70px;
            height: 70px;
        }

        .back_page_content {
            margin: .6rem;
           
        }
        .back_page_content p{
            font-family: "Noto Sans", serif;
            font-size:11px;
        }
        .address p{
            font-family: "Noto Sans", serif;
            font-size:11px;
            font-style: italic;
        }
        .print-button {
            margin: 20px 0;
        }

        @media print {
            body {
                background-color: #fff;
                margin: 0;
            }

            .id-card,
            .back-page {
                box-shadow: none;
                page-break-inside: avoid;
            }

            .container {
                flex-wrap: nowrap;
                justify-content: space-between;
            }

            .print-button {
                display: none;
            }
        }
    </style>
</head>

<body>
<!--- Print Button---> 
<div class="invo-buttons-wrap d-print-none">
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

                    </div>
<!--- End Print Button---> 
<div class="print-section invoice-content-wrap" id="download_section">
<?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>
    <div class="container">

    <?php   
               
               if($this->input->post('side_id') == 'front_side' ){
               ?>
                 <div class="id-card card-design-break">
            <div class="id-card-header">
                <h1><?php echo $qr['org_name']; ?> </h1>

            </div>
            <div class="id-card-body">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="Student Photo">

                <h3>পরিচয়পত্র</h3>
                <hr class="hr">
                <h2><?php echo $qr['name']; ?></h2>
                <?php
                 if($this->input->post('father_name_en') == 1){
                     ?>
         <p>Father Name: &nbsp;<?php echo $qr['father_name_en']; ?></p>
       
        <?php
        }
        ?>

<?php
                 if($this->input->post('mother_name_en') == 1){
                     ?>
         <p>Mother Name: &nbsp;<?php echo $qr['mother_name_en']; ?></p>
       
        <?php
        }
        ?>
                <?php
                 if($this->input->post('id_number') == 1){
                     ?>
                        <p>ID No : &nbsp; <?php echo $qr['id_number']; ?></p>
                        <?php
                            }
                            ?>
                                           <?php
                 if($this->input->post('is_class') == 1){
                     ?>
                        <p>Class  : &nbsp;&nbsp;<?php echo $qr['class']; ?></p>

                        <?php
        }
        ?>

<?php
                 if($this->input->post('is_class_roll') == 1){
                     ?>
                        <p>Class Roll : &nbsp;&nbsp;<?php echo $qr['class_roll']; ?></p>

                        <?php
        }
        ?>
                 <?php
                 if($this->input->post('mobile_no') == 1){
                     ?>
         <p>Mobile No: &nbsp;<?php echo $qr['phone']; ?></p>
       
        <?php
        }
        ?>
           
            </div>
            <div class="id-card-footer">
                <?php
                if($qr['org_email'] != NULL){
                ?>
                <p>ই-মেইল: <?php echo $qr['org_email']; ?></p>
                <?php
                }
                ?>
                <p>ফোন: <?php echo $qr['org_mobile_no']; ?></p>
             
            </div>
        </div>


<?php   
               
              }else if($this->input->post('side_id') == 'back_side'){
               ?>

<div class="back-page card-design-break">
            <div class="back_page_content">
                <h3>গুরুত্বপূর্ণ নির্দেশনা</h3>
                <hr class="hr">
                <p>১. পরিচয়পত্রটি সবসময় সাথে রাখুন।</p>
                <p>২. হারিয়ে গেলে নিকটস্থ প্রশাসনিক কার্যালয়ে জানাবেন।</p>
              
                <div class="address">
                <p><strong>যোগাযোগ:</strong><br><?php echo $qr['org_name']; ?><br> <?php echo $qr['org_address']; ?> </p>
                </div>
               
            </div>

            <div class="qr-code">
                <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code">
                <p>স্ক্যান করে বিস্তারিত দেখুন</p>
            </div>
        </div>
    </div>


<?php   
               
              }  else if( $this->input->post('side_id') == 'both_side'){
               ?>
        
        <div class="id-card card-design-break">
            <div class="id-card-header">
                <h1><?php echo $qr['org_name']; ?> </h1>

            </div>
            <div class="id-card-body">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="Student Photo">

                <h3>পরিচয়পত্র</h3>
                <hr class="hr">
                <h2><?php echo $qr['name']; ?></h2>
                <?php
                 if($this->input->post('father_name_en') == 1){
                     ?>
         <p>Father Name: &nbsp;<?php echo $qr['father_name_en']; ?></p>
       
        <?php
        }
        ?>

<?php
                 if($this->input->post('mother_name_en') == 1){
                     ?>
         <p>Mother Name: &nbsp;<?php echo $qr['mother_name_en']; ?></p>
       
        <?php
        }
        ?>
                <?php
                 if($this->input->post('id_number') == 1){
                     ?>
                        <p>ID No : &nbsp; <?php echo $qr['id_number']; ?></p>
                        <?php
                            }
                            ?>
                                           <?php
                 if($this->input->post('is_class') == 1){
                     ?>
                        <p>Class  : &nbsp;&nbsp;<?php echo $qr['class']; ?></p>

                        <?php
        }
        ?>

<?php
                 if($this->input->post('is_class_roll') == 1){
                     ?>
                        <p>Class Roll : &nbsp;&nbsp;<?php echo $qr['class_roll']; ?></p>

                        <?php
        }
        ?>
                 <?php
                 if($this->input->post('mobile_no') == 1){
                     ?>
         <p>Mobile No: &nbsp;<?php echo $qr['phone']; ?></p>
       
        <?php
        }
        ?>
           
            </div>
            <div class="id-card-footer">
                <?php
                if($qr['org_email'] != NULL){
                ?>
                <p>ই-মেইল: <?php echo $qr['org_email']; ?></p>
                <?php
                }
                ?>
                <p>ফোন: <?php echo $qr['org_mobile_no']; ?></p>
             
            </div>
        </div>

        <div class="back-page card-design-break">
            <div class="back_page_content">
                <h3>গুরুত্বপূর্ণ নির্দেশনা</h3>
                <hr class="hr">
                <p>১. পরিচয়পত্রটি সবসময় সাথে রাখুন।</p>
                <p>২. হারিয়ে গেলে নিকটস্থ প্রশাসনিক কার্যালয়ে জানাবেন।</p>
              
                <div class="address">
                <p><strong>যোগাযোগ:</strong><br><?php echo $qr['org_name']; ?><br> <?php echo $qr['org_address']; ?> </p>
                </div>
               
            </div>

            <div class="qr-code">
                <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code">
                <p>স্ক্যান করে বিস্তারিত দেখুন</p>
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
</body>

</html>