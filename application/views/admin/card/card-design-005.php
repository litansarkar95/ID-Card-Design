<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id Card 5</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fauna+One&family=Shadows+Into+Light+Two&display=swap"
        rel="stylesheet">
</head>
<style>


    .print-section {
        width: 250mm;
            margin:10px auto;
            display: flex;
      flex-direction: row; /* Arrange items in a row */
      flex-wrap: wrap; 
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
    cursor: pointer;
	-ms-flex-align: center;
}

@media print {
	.d-print-none {
		display: none !important;
	}

}



/**  Design Part  */
     

         

    .font-side {
        background: white;
        width: 350px;
        height: 500px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: 2rem;
  
        box-shadow: 0 0 1.5px 0px #b9b9b9;
    }
    .bg {
        position: relative;
        left: -100px;

    }

    .circle1 {
        width: 550px;
        height: 550px;
        background-color: #EC3951;

    }

    .circle2 {
        width: 550px;
        height: 550px;
        background-color: #241F21;
        border-radius: 50%;
        position: absolute;
        top: -380px;

    }

    .circle3 {
        width: 550px;
        height: 550px;
        background-color: white;
        border-radius: 50%;
        position: relative;
        top: -350px;

    }

    .info {
        position: absolute;
        top: 5px;
        width: 100%;
    }

    .info_pic img {
        border: 2px solid #EC3951;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        position: relative;
        left: 50%;
        transform: translateX(-50%);

    }

    .details {
        padding: 0.4rem 1.5rem 0;
    }

    .details h2 {
        text-align: center;
        color: #EC3951;
        font-weight: bold;
        font-family: "Fauna One", serif;
        text-transform: uppercase;
        letter-spacing: .2rem;
    }

    .details p {
        text-align: center;
        font-family: "Fauna One", serif;
        font-style: italic;
        font-size: 14px;
        font-weight: 500;
    }

    .info h1 {
        text-align: center;
        font-family: "Shadows Into Light Two", serif;
        color: white;
        font-size: 26px;
        height: 90px;

    }

    .details-info {
        margin: 1rem;
        text-align: center;
        align-items: center;

    }

    .details-info h3 {
        text-align: justify;
        font-family: "Fauna One", serif;
        font-size: 16px;
    }

    .details-info label {
        color: darkslategray;


    }



    .details-info strong {
        padding-left: .3rem;
        margin: 1rem;
    }

    .barcode {
        text-align: center;

    }

    .barcode img {
        width: 200px;
        height: 70px;
        text-align: center;
    }

    .bg-info {
        background-color: #EC3951;
        padding: 10px;
        color: white;
        text-align: center;
        font-family: "Fauna One", serif;
        letter-spacing: 3px;

        display: block;
        height: 16px;
        /**  margin: 0 auto;
        width: 100%;
        position: fixed;
        bottom: -11px;
        **/

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
                <div class="print-section invoice-content-wrap" id="download_section">
              
			
			
           
<?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>
     
        
 
    <div class="font-side">
   

<div class="bg">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
</div>
<div class="info">
    <h1><?php echo $qr['org_name']; ?> </h1>
    <div class="info_pic">
        <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
    </div>


    <div class="details">
        <h2><?php echo $qr['name']; ?></h2>
        <?php
            if( $this->input->post('staff_or_student') != ''){
            ?>
        <p><?php   echo $this->input->post('staff_or_student');     ?></p>
        <?php
       }
            ?>
        <div class="details-info">
            <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
            <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
            <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>

        </div>


    </div>

    <div class="bg-info">
        <h4>www.labibait.com</h4>
    </div>
    <div class="barcode">
        <img src="barcode-illustration-isolated_23-2150584086.avif">
    </div>



</div>

</div>
 
<div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>



 
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>

    
<div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>


    
<div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>

   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>

   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div><div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>

   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div><div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   <div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>
   
    
<div class="font-side card-design-break">
   

   <div class="bg">
       <div class="circle1"></div>
       <div class="circle2"></div>
       <div class="circle3"></div>
   </div>
   <div class="info">
       <h1><?php echo $qr['org_name']; ?> </h1>
       <div class="info_pic">
           <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
       </div>
   
   
       <div class="details">
           <h2><?php echo $qr['name']; ?></h2>
           <?php
               if( $this->input->post('staff_or_student') != ''){
               ?>
           <p><?php   echo $this->input->post('staff_or_student');     ?></p>
           <?php
          }
               ?>
           <div class="details-info">
               <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
               <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
               <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>
   
           </div>
   
   
       </div>
   
       <div class="bg-info">
           <h4>www.labibait.com</h4>
       </div>
       <div class="barcode">
           <img src="barcode-illustration-isolated_23-2150584086.avif">
       </div>
   
   
   
   </div>
   
   </div>


  <?php
    }

}
?>
  

  </div>

</div>


	<!--Invoice Wrap End here -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jspdf.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/html2canvas.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>



</html>