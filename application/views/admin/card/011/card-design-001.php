<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ID Two</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	</head>
	<style>
		*{
	margin: 0;
	padding: 0;

}
body{
	background: #e3e3e3;
	font-family: arial;
}
 .print-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .print-btn {
            background: #008836;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .print-btn:hover {
            background: #006b2b;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
        
        .print-btn:active {
            transform: translateY(0);
        }
        
        .print-btn svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }
.main_container{
	width: 8.27in;
	max-height: 11.69in;


	
}

     .card-design-break {
    float:left;
}
.wrapper{

    /* width: 5.25cm;
    height: 8.28cm; */
   	width: 300px;
	height: 476px;
    margin: 5px;
    overflow: hidden;
    position: relative;
       
}
.front_part{
	background: #fff;
	width: 300px;
	height: 476px;
	margin: 10px;

	flex-direction: column;
	overflow: hidden;
	
}
.front_part .header_part {
	background: #fff;
	text-align: center;
	height: 50px;
	max-height: 50px;
	position: relative;
	overflow: hidden;
}
.front_part .header_shape1 {
	position: absolute;
	height: 200px;
	width: 247px;
	border-radius: 50%;
	background: #008836;
	right: -46px;
	top: -180px;
}

.front_part .green_shape {
	position: absolute;
	height: 200px;
	width: 349px;
	border-radius: 50%;
	top: -209px;
	border-bottom: 29px solid #7ec51b;
	left: -50px;
	transform: rotate(40deg);
	z-index: 1;
}
.front_part .green_shape::after {
	content: "";
	position: absolute;
	background: #7ec51b;
	z-index: 1;
	height: 200px;
	width: 315px;
	border-radius: 50%;
	bottom: -98px;
	left: -86px;
	transform: rotate(-16deg);
}
.front_part .white_line {
	position: absolute;
	height: 200px;
	width: 247px;
	border-radius: 50%;
	background: #008836;
	right: -46px;
	top: -180px;
	border: 10px solid #fff;
	z-index: 99;
}
.front_part .orange_shape {
	position: absolute;
	background: #fff;
	height: 200px;
	width: 319px;
	border-top: 49px solid #ff8000;
	left: -83px;
	top: -19px;
	border-radius: 50%;
	transform: rotate(6deg);
}
.front_part .orange_shape::after {
	content: "";
	position: absolute;
	background: #fff;
	height: 150px;
	width: 177px;
	left: 219px;
	top: -78px;
}

.front_part .body_part{
	background: #fefefe;
	padding: 0 30px 20px;
	height: 376px;
	box-sizing: border-box;
	text-align: center;
}
.front_part .brand_logo{
	width: 80px;
	margin-top: 5px;
	height: 20px;
}
.front_part .tagline{
	text-transform: uppercase;
	font-size: 10px;
	text-align: center;
}
.front_part .user_logo{
	display: inline-block;
	width: 100px;
	height: 120px;
	background: #fff;
	border-radius: 20px;
	border: 5px solid #e9a631;
	overflow: hidden;
	position: relative;
	margin-top: 20px;
}
.front_part .user_img{
	width: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	top: 0;
	height: 100%;
}

.front_part .body_part .title{
	text-align: center;
	color: #fa8b31;
	font-size: 20px;
	text-transform: uppercase;
	margin-top: 20px;
}
.front_part .body_part .title span{
	color: #1d7f34;
}
.front_part .body_part .designation{
	text-align: center;
	color: #000;
	font-size: 11px;
	text-transform: capitalize;
}
.front_part .user_info{
  	font-family: "Roboto", sans-serif;
	border: none;
	font-size: 15px;
	margin: 0 auto;
	margin-top: 20px;
	text-align: left;
	font-weight: bold;
}
.front_part .user_info td:first-child{
	text-transform: capitalize;
	color: #1d7f34;
}
.front_part .user_info tr:first-child td:first-child{
	text-transform: uppercase;
}
.front_part .footer_part{
	height: 50px;
}
.footer_inner {
	background: #fff;
	text-align: center;
	height: 50px;
	max-height: 50px;
	position: relative;
	overflow: hidden;
	transform: rotate(180deg);
}

.front_part .footer_inner .header_shape1 {
	position: absolute;
	height: 200px;
	width: 247px;
	border-radius: 50%;
	background: #008836;
	right: -46px;
	top: -180px;
}

.front_part .footer_inner .green_shape {
	position: absolute;
	height: 200px;
	width: 349px;
	border-radius: 50%;
	top: -209px;
	border-bottom: 29px solid #7ec51b;
	left: -50px;
	transform: rotate(40deg);
	z-index: 1;
}
.front_part .footer_inner .green_shape::after {
	content: "";
	position: absolute;
	background: #7ec51b;
	z-index: 1;
	height: 200px;
	width: 315px;
	border-radius: 50%;
	bottom: -98px;
	left: -86px;
	transform: rotate(-16deg);
}
.front_part .footer_inner .white_line {
	position: absolute;
	height: 200px;
	width: 247px;
	border-radius: 50%;
	background: #008836;
	right: -46px;
	top: -180px;
	border: 10px solid #fff;
	z-index: 99;
}
.front_part .footer_inner .orange_shape {
	position: absolute;
	background: #fff;
	height: 200px;
	width: 319px;
	border-top: 49px solid #ff8000;
	left: -83px;
	top: -19px;
	border-radius: 50%;
	transform: rotate(6deg);
}
.front_part .footer_inner .orange_shape::after {
	content: "";
	position: absolute;
	background: #fff;
	height: 150px;
	width: 177px;
	left: 219px;
	top: -78px;
}




.back_part{
	background: #fff;
	width: 300px;
	height: 476px;
	margin: 10px;
	display: flex;
	flex-direction: column;
	overflow: hidden;
}
.back_part .header_part {
	background: #fff;
	text-align: center;
	height: 50px;
	max-height: 50px;
	position: relative;
	overflow: hidden;
}
.back_part .header_shape1 {
	position: absolute;
	height: 200px;
	width: 247px;
	border-radius: 50%;
	background: #008836;
	right: -46px;
	top: -180px;
}

.back_part .green_shape {
	position: absolute;
	height: 200px;
	width: 349px;
	border-radius: 50%;
	top: -209px;
	border-bottom: 29px solid #7ec51b;
	left: -50px;
	transform: rotate(40deg);
	z-index: 1;
}
.back_part .green_shape::after {
	content: "";
	position: absolute;
	background: #7ec51b;
	z-index: 1;
	height: 200px;
	width: 315px;
	border-radius: 50%;
	bottom: -98px;
	left: -86px;
	transform: rotate(-16deg);
}
.back_part .white_line {
	position: absolute;
	height: 200px;
	width: 247px;
	border-radius: 50%;
	background: #008836;
	right: -46px;
	top: -180px;
	border: 10px solid #fff;
	z-index: 99;
}
.back_part .orange_shape {
	position: absolute;
	background: #fff;
	height: 200px;
	width: 319px;
	border-top: 49px solid #ff8000;
	left: -83px;
	top: -19px;
	border-radius: 50%;
	transform: rotate(6deg);
}
.back_part .orange_shape::after {
	content: "";
	position: absolute;
	background: #fff;
	height: 150px;
	width: 177px;
	left: 219px;
	top: -78px;
}

.back_part .body_part{
	background: #fefefe;
	padding: 0 30px 20px;
	height: 376px;
	box-sizing: border-box;
	text-align: center;
	position: relative;	
}
.back_part .brand_logo{
	width: 80px;
	margin-top: 5px;
	height: 20px;
	filter: grayscale(100%);
}
.back_part .tagline{
	text-transform: uppercase;
	font-size: 10px;
	text-align: center;
}

.back_part .header_logo{
	filter: grayscale(100%);
}
.back_part .user_info2{
	border: none;
	font-size: 15px;
	margin: 0 auto;
	margin-top: 30px;
	text-align: left;
	font-weight: normal;
	text-transform: capitalize;
}
.back_part .user_info2 tr:nth-child(4) p{
	margin-top: 20px;
}
.back_part .user_info2 tr:nth-child(4) td:first-child{
	color: #1d7f34;
}
.back_part .user_info2 tr:nth-child(5) td:first-child{
	color: #1d7f34;
}
.back_part .user_info2 tr:nth-child(4) td:nth-child(2){
	color: #8c8c8c;
}
.back_part .user_info2 tr:nth-child(5) td:nth-child(2){
	color: #8c8c8c;
}
.back_part .closing_txt{
	position: absolute;
	bottom: 10px;
	z-index: 9999;
	right: 30px;
	display: inline-block;
}
.back_part .closing_txt::after{
	content: "";
	height: 2px;
	background: #000;
	left: -5px;
	right: -5px;
	position: absolute;
}
.printBtn{
	padding: 10px 30px;
	font-size: 20px;
	background: #a4c735;
	color: #fff;
	margin: 10px;
	border: none;
	border-radius: 10px;
}
  @media print {
            .print-container {
             display: block;
            }
            
            body {
                padding: 0;
                background: white;
            }
            
            .main_container {
                margin-top: 0;
            }

			 .card-design-break:nth-child(4) {
					page-break-after: always;
						}
        }

@media print {
  .card-design-break:nth-of-type(4n) {
    page-break-after: always;
  }
}

		</style>
	<body id="bodyPart">
		 <div class="print-container">
        <button onclick="printPage()" class="print-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/>
            </svg>
            Print ID Cards
        </button>
    </div>
		<div class="main_container" id="data">
			<div id="wrapper">


			<?php
			
			for($i=1; $i<=10; $i++){
			?>
		<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>

					<?php
			}
					?>
							<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
							<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
							<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
				<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
					<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
				<div class="wrapper card-design-break ">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
<div class="wrapper card-design-break">

				
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					</div>
				
				<div class="back_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<table class="user_info2">
							<tr>
								<td class="left_col">
									<p>address here</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>e-mail here</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>contact here</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>joined date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>expire date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
						</table>
						<span class="closing_txt">Your sincerely</span>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>
			</div>
				<div id="wrapper">
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					

				
				<div class="back_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<table class="user_info2">
							<tr>
								<td class="left_col">
									<p>address here</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>e-mail here</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>contact here</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>joined date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>expire date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
						</table>
						<span class="closing_txt">Your sincerely</span>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>
			</div>
				<div id="wrapper">
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>

					

				
				<div class="back_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<table class="user_info2">
							<tr>
								<td class="left_col">
									<p>address here</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>e-mail here</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>contact here</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>joined date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>expire date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
						</table>
						<span class="closing_txt">Your sincerely</span>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>
			</div>
			<div id="wrapper">
				<div class="front_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<span class="user_logo">
							<img src="imgs/img_1_2.png" alt="" class="user_img">
						</span>
						<h3 class="title">your <span>name</span></h3>
						<h4 class="designation">your position</h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: 0000000000000</p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>
				<div class="back_part">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="imgs/img_2_3.png" alt="" class="brand_logo">
						<h4 class="tagline">tagline here</h4>
						<table class="user_info2">
							<tr>
								<td class="left_col">
									<p>address here</p>
								</td>
								<td class="right_col">
									<p>: 000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>e-mail here</p>
								</td>
								<td>
									<p>: O+</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>contact here</p>
								</td>
								<td>
									<p>: 00000000000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>joined date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>expire date</p>
								</td>
								<td>
									<p>: DD/MM/YYYY</p>
								</td>
							</tr>
						</table>
						<span class="closing_txt">Your sincerely</span>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			

			function printPage(){
				var body = document.getElementById("bodyPart").innerHTML;
				var data = document.getElementById("data").innerHTML;
				document.getElementById("bodyPart").innerHTML = data;
				window.print();
				document.getElementById("bodyPart").innerHTML = body;
				// alert(data);
			}
		</script>
	</body>
</html>