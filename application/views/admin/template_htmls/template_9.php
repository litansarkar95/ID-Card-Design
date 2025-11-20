<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
 
</head>

<style>


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    background: transparent;
    font-family: arial;

}

.main_container {
    width: 8.27in;
    max-height: 11.69in;
    display: flex;
    flex-wrap: wrap;
}

#wrapper {
    width: 8.27in;
    max-height: 11.69in;
    display: flex;
    flex-wrap: wrap;
}
.card-wrapper {
    display: flex;
    gap: 20px;       /* left-right space */
    align-items: flex-start;
}
/* CARD BOX */
.id-card {
    background: transparent;
    width: 2.125in;
    height: 3.375in;
    border: 1px solid red;
    box-sizing: border-box;
    text-align: center;
    display: flex;
    flex-direction: column;
}

/* LOGO TOP CENTER */
.logo {
    width: 35px;
    margin: 1px auto 1px auto;
}

/* HEADER TEXT */
.epz-title {
    font-size: 12px;
    font-weight: 700;
    margin: 0;
    color: #0b6b25;
}
.epz-sub {
    margin: 0;
    margin-bottom: 2px;
    font-size: 9px;
    color: #0b6b25;
}

/* PHOTO */
.photo-box {
    margin: 1px 0;
}
.photo {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border: 1px solid #000;
    border-radius: 5px;
}

/* NAME */
.name {
    background: #52BF7E;
    color: #000;
    font-size: 13px;
    font-weight: 800;
    padding: 4px 0;
    margin-top: 1px;
}

/* DESIGNATION */
.designation {
    background: #22a04a;
    color: #fff;
    font-size: 11px;
    padding: 3px 0;
    margin-top: 1px;
}
.names_sl{
     text-align: center;
     color: #5A19E0;
    font-size: 11px;
     font-weight: 800;

}
.names{
  text-align: center;
   font-weight: 800;
    font-size: 11px;
}
/* INFO TEXT */
.info {
    text-align: left;
    
    margin:0px;
    font-size: 9px;
}
.info p {
    font-size:11px;
    margin:0px;
}
.info strong {
    display: inline-block;
    width: 90px;
    font-size:11px;
    margin:0px;
}

/* SIGNATURE RIGHT SIDE */
.signature {
    display: flex;
    justify-content: flex-end;
    margin-top: auto;
}

.sign-box {
    text-align: center;
}
.sign {
    width: 120px;
}
.sign-text {
    border-top: 1px dashed #000;
    font-size: 9px;

}

/* FOOTER */
.footer {
    background-color: #0b6b25 !important;
    color: #fff;
    font-size: 11px;
    font-weight: bold;
    letter-spacing: 4px;
    padding: 4px 0;
    z-index: 999;
 
}

/* BACK SIDE CARD */
.back-card {
    background: transparent;
    width: 2.125in;
    height: 3.375in;
    border: 1px solid red;
    box-sizing: border-box;
    padding: 10px 8px;
    text-align: center;
    display: flex;
    flex-direction: column;
}

/* Title */
.back-card .title {
    font-size: 10px;
    font-weight: 700;
    color: #0b6b25;
}

/* Info text */
.back-card .tiny-text {
    font-size: 11px;
    text-align: justify;
 
line-height: 1.3em;

    color:#0647B5;
}

/* IF FOUND */
.back-card .title2 {
    font-size: 11px;
    font-weight: bold;
    color: #5A19E0;
}
.back-card .info{
  font-size: 11px;
}
/* Address Block */
.address-block {
    font-size: 10px;
    text-align: center;
    margin-bottom: auto;
}
.address-block h3{
      color: #5A19E0;  font-size: 11px;
}
.address-block hr{
    border:1px solid #000;
}
.address-block h4{
    font-size: 10px;
    
}
.address {
      font-size: 10px;
    font-weight: 600;
    margin:0px;
    padding:0px;
}

.main_container {
  width: 297 mm;
  margin: 0 auto;
}

.bar_code {
    width: 30px;
    height: 30px;
    object-fit: cover;
    display: block;      
    margin: 0 auto;     
}


  </style>
 
<body id="bodyPart">
            
    	<div class="main_container" id="data">
		<div id="">
<div class="card-wrapper">
       <div class="id-card">

    <!-- TOP LOGO -->
    <img src="<?php echo base_url(); ?>public/assets/card/009/img/bepza.png" class="logo">

    <!-- HEADER TEXT -->
    <h2 class="epz-title">Cumilla Export Processing Zone</h2>
    <p class="epz-sub">Old Airport Area, Cumilla-3500</p>

    <!-- PHOTO -->
    <div class="photo-box">
        <img src="<?php echo base_url()."public/static/assets/images/profile_design.png"; ?>" class="photo">
    </div>

    <!-- NAME + DESIGNATION -->
    <div class="name">BADRUL HASAN</div>
    <div class="designation">Proprietor</div>

    <!-- INFO SECTION -->
    <div class="info">
        <p class="names_sl">SL NO : 025/2025 </p>
        <p class="names">M/S : Rafrafin Enterprise </p>
        <p><strong>License No :</strong> COMEPZKA039</p>
        <p><strong>License Group :</strong> KA</p>
    </div>

    <!-- SIGNATURE (RIGHT SIDE) -->
    <div class="signature">
        <div class="sign-box">
            <img src="signature.png" class="sign">
            <p class="sign-text">Authority Signature</p>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">B E P Z A</div>

</div>
			
<div class="id-card back-card">

 

    <p class="tiny-text">
    This card is not transferable.
        The validity of the card shall remain effective in concurrence with the validity of the original license.
    </p>
      <div class="info">
     
        <p><strong>Contact No :</strong> 01819703740</p>
        <p><strong>Blood Group:</strong> B+</p>
        <p><strong>NID No:</strong> 487464454</p>
    </div>

    	<img src="<?php echo base_url() ?>qrcodes/hasan_mia_0_qr.png" alt="" class="bar_code">  

    <div class="address-block">
        <h3>IF FOUND PLEASE SEND TO:</h3>
        <hr>
        <h4 >Contact Address</h4>
        <p class="address">BEPZA Zone Office</p>
        <p class="address">Cumilla Export Processing Zone</p>
        <p class="address">Old Airport Area, Cumilla</p>
    </div>



</div>
</div>
		</div>
	
	</div>
	
</body>

</html>
