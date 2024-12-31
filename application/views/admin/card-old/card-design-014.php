<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="utf-8" />
</head>

<body style="margin: 0;">
<button id="print-button" onclick="printSelectedContent()">
        Print
      </button>
<?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>

<?php   
               
               if($this->input->post('side_id') == 'front_side' ){
               ?>
<div id="p1" style="overflow: hidden; position: relative; background-color: white; width: 238px; height: 385px;">
<style class="shared-css" type="text/css" >
.t {
	transform-origin: bottom left;
	z-index: 2;
	position: absolute;
	white-space: pre;
	overflow: visible;
	line-height: 1.5;
}
.text-container {
	white-space: pre;
}
@supports (-webkit-touch-callout: none) {
	.text-container {
		white-space: normal;
	}
}
</style>
<style type="text/css" >

#t1_1{left:83px;bottom:58px;letter-spacing:-0.07px;}
#t2_1{left:141px;bottom:58px;}
#t3_1{left:149px;bottom:58px;}
#t4_1{left:34px;bottom:95px;letter-spacing:0.09px;}
#t5_1{left:68px;bottom:76px;letter-spacing:-0.01px;}
#t6_1{left:110px;bottom:76px;letter-spacing:-0.01px;}
#t7_1{left:59px;bottom:330px;letter-spacing:-0.21px;}
#t8_1{left:85px;bottom:316px;letter-spacing:-0.21px;}
#t9_1{left:5px;bottom:284px;letter-spacing:0.01px;}
#t10_1{left:70px;bottom:130px;letter-spacing:0.04px;}
#ta_1{left:89px;bottom:240px;letter-spacing:0.08px;}
#tb_1{left:10px;bottom:270px;letter-spacing:-0.52px;word-spacing:0.57px;}
#tc_1{left:164px;bottom:20px;letter-spacing:0.17px;}
#tc_2{left:164px;bottom:35px;letter-spacing:0.17px;}
#tc_3{left:164px;bottom:23px;letter-spacing:0.17px;}

.s0_1{font-size:12px;font-family:NotoSerifBengali-Bold_2d;color:#0C0432;}
.s1_1{font-size:12px;font-family:NotoSans-Bold_2e;color:#BB1D1D;}
.s2_1{font-size:12px;font-family:NotoSerifBengali-Bold_2d;color:#BB1D1D;}
.s3_1{font-size:18px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
.s4_1{font-size:11px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
.s10_1{font-size:11px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
.s5_1{font-size:17px;font-family:NotoSerifBengali-Bold_2d;color:#1E0C70;}
.s6_1{font-size:15px;font-family:NotoSerifBengali-Bold_2d;color:#1FAC59;}
.s7_1{font-size:15px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
</style>
<style id="fonts1" type="text/css" >

@font-face {
	font-family: NotoSans-Bold_2e;
	src: url("fonts/NotoSans-Bold_2e.woff") format("woff");
}

@font-face {
	font-family: NotoSerifBengali-Bold_2d;
	src: url("fonts/NotoSerifBengali-Bold_2d.woff") format("woff");
}

</style>

<div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg1" style="-webkit-user-select: none;"><object width="238" height="385" data="<?php echo base_url(); ?>public/assets/frame/backend_002.svg" type="image/svg+xml" id="pdf1" style="width:238px; height:385px; z-index: 0;"></object></div>
<div class="text-container"><span id="t1_1" class="t s0_1">রক্তের গ্রুপ : </span>:<span id="t2_1" class="t s1_1">B</span><span id="t3_1" class="t s2_1">+ </span>
<span id="t4_1" class="t s3_1"><?php echo $qr['name']; ?> </span>
<span id="t5_1" class="t s0_1">ড্রাইভার ( ঠিকাভিত্তিক ) </span>
<span id="t7_1" class="t s4_1">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
<span id="t8_1" class="t s4_1">অধ্যক্ষের কার্যালয় </span>
<span id="t9_1" class="t s5_1"><?php echo $qr['org_name']; ?></span>
<span id="t10_1" class="t s10_1"><img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>"  style="width:100px; height:100px; border:1px solid yellow;"></span>
<span id="ta_1" class="t s6_1">পরিচয়পত্র </span>
<span id="tb_1" class="t s4_1"><?php echo $qr['org_address']; ?> </span>
<?php
if($qr['signature_picture'] != NULL){
?>
<span id="tc_1" class="t s7_1"><img src="<?php echo base_url()."public/static/images/organization/".$qr['signature_picture']; ?>" width="50px" height="50px" alt="signature" >  </span>
<?php
}
?>
<span id="tc_2" class="t s7_1">-------------------------------------------  </span>
<span id="tc_3" class="t s7_1"><?php echo $qr['signature_name']; ?>   </span>

</div>

</div>









<?php
               }else if($this->input->post('side_id') == 'back_side'){
?>




<div id="p2" style="overflow: hidden; position: relative; background-color: white; width: 238px; height: 385px;">
<style class="shared-css" type="text/css" >
.t {
	transform-origin: bottom left;
	z-index: 2;
	position: absolute;
	white-space: pre;
	overflow: visible;
	line-height: 1.5;
}
.text-container {
	white-space: pre;
}
@supports (-webkit-touch-callout: none) {
	.text-container {
		white-space: normal;
	}
}
</style>
<style type="text/css" >

#t1_2{left:94px;bottom:315px;letter-spacing:-0.01px;}
#t2_2{left:20px;bottom:296px;letter-spacing:-0.16px;}
#t3_2{left:20px;bottom:283px;min-width:1em;}
#t4_2{left:22px;bottom:283px;letter-spacing:-0.2px;}
#t5_2{left:20px;bottom:270px;letter-spacing:-0.19px;}
#t6_2{left:20px;bottom:257px;letter-spacing:-0.2px;}
#t7_2{left:20px;bottom:245px;letter-spacing:-0.22px;}
#t8_2{left:83px;bottom:296px;}
#t9_2{left:83px;bottom:283px;}
#ta_2{left:83px;bottom:270px;}
#tb_2{left:97px;bottom:257px;}
#tc_2{left:100px;bottom:245px;}
#td_2{left:88px;bottom:296px;letter-spacing:-0.21px;}
#te_2{left:88px;bottom:283px;letter-spacing:-0.23px;}
#tf_2{left:88px;bottom:270px;letter-spacing:-0.26px;}
#tg_2{left:112px;bottom:270px;letter-spacing:-0.22px;}
#th_2{left:138px;bottom:270px;letter-spacing:-0.27px;}
#ti_2{left:176px;bottom:270px;}
#tj_2{left:179px;bottom:270px;letter-spacing:-0.29px;}
#tk_2{left:100px;bottom:257px;letter-spacing:-0.24px;}
#tl_2{left:110px;bottom:245px;letter-spacing:-0.35px;}
#tm_2{left:113px;bottom:245px;}
#tn_2{left:115px;bottom:245px;letter-spacing:-0.23px;}
#to_2{left:170px;bottom:245px;}
#tp_2{left:173px;bottom:245px;letter-spacing:-0.26px;}
#tq_2{left:191px;bottom:245px;}
#tr_2{left:194px;bottom:245px;letter-spacing:-0.26px;}
#ts_2{left:91px;bottom:216px;min-width:1em;}
#tt_2{left:94px;bottom:216px;letter-spacing:-0.01px;}
#tu_2{left:72px;bottom:198px;letter-spacing:0.09px;}
#tv_2{left:19px;bottom:187px;letter-spacing:0.09px;}
#tw_2{left:59px;bottom:176px;min-width:1em;}
#tx_2{left:61px;bottom:176px;letter-spacing:0.09px;}
#ty_2{left:4px;bottom:144px;letter-spacing:0.19px;}
#tz_2{left:52px;bottom:132px;letter-spacing:0.05px;}
#tz_3{left:52px;bottom:20px;letter-spacing:0.05px;}

.s0_2{font-size:16px;font-family:NotoSerifBengali-Bold_2f;color:#1FAC59;}
.s1_2{font-size:10px;font-family:NotoSerifBengali-Bold_2f;color:#000;}
.s2_2{font-size:10px;font-family:NotoSans-Bold_2g;color:#000;}
.s3_2{font-size:8px;font-family:NotoSerifBengali-Bold_2f;color:#000;}
.s4_2{font-size:17px;font-family:NotoSerifBengali-Bold_2f;color:#1E0C70;}
.s5_2{font-size:11px;font-family:NotoSerifBengali-Bold_2f;color:#000;}

.qr-code {
  margin-top: 10px;
  width: 100px;
  height: 100px;
}
</style>
<style id="fonts2" type="text/css" >

@font-face {
	font-family: NotoSans-Bold_2g;
	src: url("fonts/NotoSans-Bold_2g.woff") format("woff");
}

@font-face {
	font-family: NotoSerifBengali-Bold_2f;
	src: url("fonts/NotoSerifBengali-Bold_2f.woff") format("woff");
}

</style>
<div id="pg2Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg2" style="-webkit-user-select: none;"><object width="238" height="385" data="<?php echo base_url(); ?>public/assets/frame/backend_002.svg" type="image/svg+xml" id="pdf2" style="width:238px; height:385px; z-index: 0;"></object></div>
<div class="text-container"><span id="t1_2" class="t s0_2">তথ্যাবলি </span>
<span id="t2_2" class="t s1_2">যোগদান </span>
<span id="t3_2" class="t s1_2">নিজ মোবাইল </span>
<span id="t5_2" class="t s1_2">অফিস ইমেইল  </span>
<span id="t6_2" class="t s1_2">অফিস টেলিফোন  </span>
<span id="t7_2" class="t s1_2">অফিস ওয়েব সাইট</span>
<span id="t8_2" class="t s1_2">: </span>
<span id="t9_2" class="t s1_2">: </span>
<span id="ta_2" class="t s1_2">: </span>
<span id="tb_2" class="t s1_2">: </span>
<span id="tc_2" class="t s1_2">: </span>
<span id="td_2" class="t s1_2">19/06/2017 </span>
<span id="te_2" class="t s1_2"><?php echo $qr['phone']; ?> </span>
<span id="tf_2" class="t s2_2"><?php echo $qr['org_email']; ?></span>
<span id="tk_2" class="t s1_2"><?php echo $qr['org_mobile_no']; ?> </span>
<span id="tl_2" class="t s2_2"><?php echo $qr['website']; ?></span>
<span id="ts_2" class="t s0_2">নির্দেশাবলী</span>
<span id="tu_2" class="t s3_2">এই পরিচয়পত্র হস্তান্তরযোগ্য নহে , </span>
<span id="tv_2" class="t s3_2">পরিচয়পত্রটি পাওয়া গেলে নিন্মোক্ত ঠিকানায় কর্তৃপক্ষের নিকট  </span>
<span id="tw_2" class="t s3_2">অথবা নিকটস্থ পুলিশ ষ্টেশনে যোগাযোগ করুন । </span>
<span id="ty_2" class="t s4_2"><?php echo $qr['org_name']; ?> </span>
<span id="tz_2" class="t s5_2"><?php echo $qr['org_address']; ?></span>
<span id="tz_3" class="t s5_3"><img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code"></span>
</div>

</div>

<?php
   }  else if( $this->input->post('side_id') == 'both_side'){
?>



<!---------------- Start  Both --------------------------------------------->

<div id="p1" style="overflow: hidden; position: relative; background-color: white; width: 238px; height: 385px;">
<style class="shared-css" type="text/css" >
.t {
	transform-origin: bottom left;
	z-index: 2;
	position: absolute;
	white-space: pre;
	overflow: visible;
	line-height: 1.5;
}
.text-container {
	white-space: pre;
}
@supports (-webkit-touch-callout: none) {
	.text-container {
		white-space: normal;
	}
}
</style>
<style type="text/css" >

#t1_1{left:83px;bottom:58px;letter-spacing:-0.07px;}
#t2_1{left:141px;bottom:58px;}
#t3_1{left:149px;bottom:58px;}
#t4_1{left:34px;bottom:95px;letter-spacing:0.09px;}
#t5_1{left:68px;bottom:76px;letter-spacing:-0.01px;}
#t6_1{left:110px;bottom:76px;letter-spacing:-0.01px;}
#t7_1{left:59px;bottom:330px;letter-spacing:-0.21px;}
#t8_1{left:85px;bottom:316px;letter-spacing:-0.21px;}
#t9_1{left:5px;bottom:284px;letter-spacing:0.01px;}
#t10_1{left:70px;bottom:130px;letter-spacing:0.04px;}
#ta_1{left:89px;bottom:240px;letter-spacing:0.08px;}
#tb_1{left:10px;bottom:270px;letter-spacing:-0.52px;word-spacing:0.57px;}
#tc_1{left:164px;bottom:20px;letter-spacing:0.17px;}
#tc_2{left:164px;bottom:35px;letter-spacing:0.17px;}
#tc_3{left:164px;bottom:23px;letter-spacing:0.17px;}

.s0_1{font-size:12px;font-family:NotoSerifBengali-Bold_2d;color:#0C0432;}
.s1_1{font-size:12px;font-family:NotoSans-Bold_2e;color:#BB1D1D;}
.s2_1{font-size:12px;font-family:NotoSerifBengali-Bold_2d;color:#BB1D1D;}
.s3_1{font-size:18px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
.s4_1{font-size:11px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
.s10_1{font-size:11px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
.s5_1{font-size:17px;font-family:NotoSerifBengali-Bold_2d;color:#1E0C70;}
.s6_1{font-size:15px;font-family:NotoSerifBengali-Bold_2d;color:#1FAC59;}
.s7_1{font-size:15px;font-family:NotoSerifBengali-Bold_2d;color:#000;}
</style>
<style id="fonts1" type="text/css" >

@font-face {
	font-family: NotoSans-Bold_2e;
	src: url("fonts/NotoSans-Bold_2e.woff") format("woff");
}

@font-face {
	font-family: NotoSerifBengali-Bold_2d;
	src: url("fonts/NotoSerifBengali-Bold_2d.woff") format("woff");
}

</style>

<div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg1" style="-webkit-user-select: none;"><object width="238" height="385" data="<?php echo base_url(); ?>public/assets/frame/backend_002.svg" type="image/svg+xml" id="pdf1" style="width:238px; height:385px; z-index: 0;"></object></div>
<div class="text-container"><span id="t1_1" class="t s0_1">রক্তের গ্রুপ : </span>:<span id="t2_1" class="t s1_1">B</span><span id="t3_1" class="t s2_1">+ </span>
<span id="t4_1" class="t s3_1"><?php echo $qr['name']; ?> </span>
<span id="t5_1" class="t s0_1">ড্রাইভার ( ঠিকাভিত্তিক ) </span>
<span id="t7_1" class="t s4_1">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
<span id="t8_1" class="t s4_1">অধ্যক্ষের কার্যালয় </span>
<span id="t9_1" class="t s5_1"><?php echo $qr['org_name']; ?></span>
<span id="t10_1" class="t s10_1"><img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>"  style="width:100px; height:100px; border:1px solid yellow;"></span>
<span id="ta_1" class="t s6_1">পরিচয়পত্র </span>
<span id="tb_1" class="t s4_1"><?php echo $qr['org_address']; ?> </span>
<?php
if($qr['signature_picture'] != NULL){
?>
<span id="tc_1" class="t s7_1"><img src="<?php echo base_url()."public/static/images/organization/".$qr['signature_picture']; ?>" width="50px" height="50px" alt="signature" >  </span>
<?php
}
?>

<span id="tc_3" class="t s7_1"><?php echo $qr['signature_name']; ?>   </span>

</div>

</div>




<div id="p2" style="overflow: hidden; position: relative; background-color: white; width: 238px; height: 385px; margin-top: 10px;">
<style class="shared-css" type="text/css" >
.t {
	transform-origin: bottom left;
	z-index: 2;
	position: absolute;
	white-space: pre;
	overflow: visible;
	line-height: 1.5;
}
.text-container {
	white-space: pre;
}
@supports (-webkit-touch-callout: none) {
	.text-container {
		white-space: normal;
	}
}
</style>
<style type="text/css" >

#t1_2{left:94px;bottom:315px;letter-spacing:-0.01px;}
#t2_2{left:20px;bottom:296px;letter-spacing:-0.16px;}
#t3_2{left:20px;bottom:283px;min-width:1em;}
#t4_2{left:22px;bottom:283px;letter-spacing:-0.2px;}
#t5_2{left:20px;bottom:270px;letter-spacing:-0.19px;}
#t6_2{left:20px;bottom:257px;letter-spacing:-0.2px;}
#t7_2{left:20px;bottom:245px;letter-spacing:-0.22px;}
#t8_2{left:83px;bottom:296px;}
#t9_2{left:83px;bottom:283px;}
#ta_2{left:83px;bottom:270px;}
#tb_2{left:97px;bottom:257px;}
#tc_2{left:100px;bottom:245px;}
#td_2{left:88px;bottom:296px;letter-spacing:-0.21px;}
#te_2{left:88px;bottom:283px;letter-spacing:-0.23px;}
#tf_2{left:88px;bottom:270px;letter-spacing:-0.26px;}
#tg_2{left:112px;bottom:270px;letter-spacing:-0.22px;}
#th_2{left:138px;bottom:270px;letter-spacing:-0.27px;}
#ti_2{left:176px;bottom:270px;}
#tj_2{left:179px;bottom:270px;letter-spacing:-0.29px;}
#tk_2{left:100px;bottom:257px;letter-spacing:-0.24px;}
#tl_2{left:110px;bottom:245px;letter-spacing:-0.35px;}
#tm_2{left:113px;bottom:245px;}
#tn_2{left:115px;bottom:245px;letter-spacing:-0.23px;}
#to_2{left:170px;bottom:245px;}
#tp_2{left:173px;bottom:245px;letter-spacing:-0.26px;}
#tq_2{left:191px;bottom:245px;}
#tr_2{left:194px;bottom:245px;letter-spacing:-0.26px;}
#ts_2{left:91px;bottom:216px;min-width:1em;}
#tt_2{left:94px;bottom:216px;letter-spacing:-0.01px;}
#tu_2{left:72px;bottom:198px;letter-spacing:0.09px;}
#tv_2{left:19px;bottom:187px;letter-spacing:0.09px;}
#tw_2{left:59px;bottom:176px;min-width:1em;}
#tx_2{left:61px;bottom:176px;letter-spacing:0.09px;}
#ty_2{left:4px;bottom:144px;letter-spacing:0.19px;}
#tz_2{left:52px;bottom:132px;letter-spacing:0.05px;}
#tz_3{left:52px;bottom:20px;letter-spacing:0.05px;}

.s0_2{font-size:16px;font-family:NotoSerifBengali-Bold_2f;color:#1FAC59;}
.s1_2{font-size:10px;font-family:NotoSerifBengali-Bold_2f;color:#000;}
.s2_2{font-size:10px;font-family:NotoSans-Bold_2g;color:#000;}
.s3_2{font-size:8px;font-family:NotoSerifBengali-Bold_2f;color:#000;}
.s4_2{font-size:17px;font-family:NotoSerifBengali-Bold_2f;color:#1E0C70;}
.s5_2{font-size:11px;font-family:NotoSerifBengali-Bold_2f;color:#000;}

.qr-code {
  margin-top: 10px;
  width: 100px;
  height: 100px;
}
</style>
<style id="fonts2" type="text/css" >

@font-face {
	font-family: NotoSans-Bold_2g;
	src: url("fonts/NotoSans-Bold_2g.woff") format("woff");
}

@font-face {
	font-family: NotoSerifBengali-Bold_2f;
	src: url("fonts/NotoSerifBengali-Bold_2f.woff") format("woff");
}

</style>
<div id="pg2Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg2" style="-webkit-user-select: none;"><object width="238" height="385" data="<?php echo base_url(); ?>public/assets/frame/backend_002.svg" type="image/svg+xml" id="pdf2" style="width:238px; height:385px; z-index: 0;"></object></div>
<div class="text-container"><span id="t1_2" class="t s0_2">তথ্যাবলি </span>
<span id="t2_2" class="t s1_2">যোগদান </span>
<span id="t3_2" class="t s1_2">নিজ মোবাইল </span>
<span id="t5_2" class="t s1_2">অফিস ইমেইল  </span>
<span id="t6_2" class="t s1_2">অফিস টেলিফোন  </span>
<span id="t7_2" class="t s1_2">অফিস ওয়েব সাইট</span>
<span id="t8_2" class="t s1_2">: </span>
<span id="t9_2" class="t s1_2">: </span>
<span id="ta_2" class="t s1_2">: </span>
<span id="tb_2" class="t s1_2">: </span>
<span id="tc_2" class="t s1_2">: </span>
<span id="td_2" class="t s1_2">19/06/2017 </span>
<span id="te_2" class="t s1_2"><?php echo $qr['phone']; ?> </span>
<span id="tf_2" class="t s2_2"><?php echo $qr['org_email']; ?></span>
<span id="tk_2" class="t s1_2"><?php echo $qr['org_mobile_no']; ?> </span>
<span id="tl_2" class="t s2_2"><?php echo $qr['website']; ?></span>
<span id="ts_2" class="t s0_2">নির্দেশাবলী</span>
<span id="tu_2" class="t s3_2">এই পরিচয়পত্র হস্তান্তরযোগ্য নহে , </span>
<span id="tv_2" class="t s3_2">পরিচয়পত্রটি পাওয়া গেলে নিন্মোক্ত ঠিকানায় কর্তৃপক্ষের নিকট  </span>
<span id="tw_2" class="t s3_2">অথবা নিকটস্থ পুলিশ ষ্টেশনে যোগাযোগ করুন । </span>
<span id="ty_2" class="t s4_2"><?php echo $qr['org_name']; ?> </span>
<span id="tz_2" class="t s5_2"><?php echo $qr['org_address']; ?></span>
<span id="tz_3" class="t s5_3"><img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code"></span>
</div>

</div>






<!---------------- End  Both --------------------------------------------->

<?php
   }  
?>
<?php
    }

}
?>
</body>
</html>
<script>
      // Function to print the selected content
      function printSelectedContent() {
        // Hide the print button before printing
        document.getElementById("print-button").style.display = "none";

        // Print only the selected content
        window.print();

        // Show the print button after printing is done
        document.getElementById("print-button").style.display = "block";
      }
    </script>