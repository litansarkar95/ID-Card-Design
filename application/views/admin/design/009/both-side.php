<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public2/assets/card/001/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
    width: 45px;
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
    margin-top: 1px;
    padding:0px 5px;
    font-size: 9px;
}
.info p {
    margin: 2px 0;
}
.info strong {
    display: inline-block;
    width: 70px;
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
    margin-top: 2px;
}

/* FOOTER */
.footer {
    background: #0b6b25;
    color: #fff;
    font-size: 11px;
    font-weight: bold;
    letter-spacing: 4px;
    padding: 4px 0;
    margin-top: 2px;
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
    font-size: 12px;
    font-weight: 700;
    color: #0b6b25;
    margin-bottom: 6px;
}

/* Info text */
.back-card .tiny-text {
    font-size: 12px;
    text-align: justify;
    margin-bottom: 10px;
 
line-height: 1.3em;

    color:#0647B5;
}

/* IF FOUND */
.back-card .title2 {
    font-size: 11px;
    font-weight: bold;
    color: #5A19E0;
    margin-bottom: 16px;
}
.back-card .info{
  font-size: 11px;
  margin-bottom:15px;
}
/* Address Block */
.address-block {
    font-size: 10px;
    text-align: center;
    margin-bottom: auto;
}
.address-block h3{
    margin-top:10px;
      color: #5A19E0;
}
.address-block hr{
    border:1px solid #000;
}
.address-block h4{
    margin:10px;
    font-size: 14px;
    
}
.address {
    margin: 1px 0;
    font-weight: 600;
}



/* PRINT STYLE */
@media print {
    body {
        background: none;
    }
    .id-card {
        box-shadow: none;
    }
}
@media print {
  .card-design-break {
    page-break-inside: avoid;
    break-inside: avoid;
  }

  .page {
    page-break-after: always;
    break-after: page;
  }

  /* Optional: Clean layout for print */
  .main_container {
    width: 100%;
  }

  body {
    margin: 0;
    padding: 0;
  }
}

/* Center the main container on screen and print */
.main_container {
  width: 297 mm;
  margin: 0 auto;
}
 .print-container {
          
        }
/* Style the print button */
.print-button {
  margin: 20px auto;
  display: block;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;  display: flex;
}
.bar_code {
    width: 60px;
    height: 60px;
    object-fit: cover;
    display: block;      /* গুরুত্বপূর্ণ */
    margin: 0 auto;      /* horizontal center */
}


/* Hide the print button when printing */
@media print {
  .print-button {
    display: none;
  }

  .main_container {
    margin: 0 auto;
    page-break-after: avoid;
  }

  .page {
    page-break-after: always;
    break-after: page;
  }

  .card-design-break {
    page-break-inside: avoid;
    break-inside: avoid;
  }
}


  </style>
 
<body id="bodyPart">
             <div class="print-container">
              <button onclick="window.print()" class="print-button"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/>
            </svg>Print</button>
            </div>
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
            <img src="<?php echo base_url()."public/static/assets/images/signature.png"; ?>" class="sign">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
<script>
  $(".fit-text").fitText(1.2, {
    minFontSize: '14px',
    maxFontSize: '32px'
  });
</script>