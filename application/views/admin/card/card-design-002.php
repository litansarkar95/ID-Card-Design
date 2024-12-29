<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset="utf-8" />
</head>

<body style="margin: 0;">

    <style>
        body {
            font-family: arial;
            font-size: 11px
        }

        h2 {
            font-family: arial;
        }

        h3 {
            font-family: arial;
            text-align: center;
            font-size: 18px;
            color: #990066;
            margin: 10px
        }

        .fixd {
            
        }

        .page-size {
        
        }

        .card_size {
         
        }

        .seat_plan tr {
            border: 1px dashed
        }

        .seat_plan td {
            border: 1px dashed
        }

        .seat_area {
            position: relative;
            border: 1px solid;
            width: 5.25cm;
            height: 8.28cm;
            margin: 5px;
        }

        .seat_area h2 {
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            margin: 0px;
            padding: 0px
        }

        .seat_area p {
            font-size: 12px;
            text-align: center;
            margin: 0
        }

        .clear {
            clear: both;
        }

        .name_address_left {
            width: 70%;
            float: left;
            font-size: 10px;
            margin-left: 5%
        }

        ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }

        /*li{margin:-1px 0px;}*/
     

      
        .roll {
            width: 25%;
            float: left;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
        }

        .r {
            border: 2px solid;
            margin: 5px;
        }

        .r hr {
            margin: 2px 0px;
            border: 1px solid
        }

        .card_head,
        .id_number {
            float: left;
            width: 15%;
            height: 100px;
        }

        .rotate {
            background: #E67E22;
            color: #fff;
            padding: 3px;
            transform: rotate(-90deg);
            margin-top: 39px;
            width: 100px;
            font-size: 12px;
            text-align: center;
            font-weight: bold
        }

        .rotate1 {
            margin-left: -43px;
        }

        .rotate2 {
            margin-left: -34px;
        }

        .pf {
            float: left;
            width: 70%
        }

      ul li{
        padding:2px;
      }

      ul {
    margin-left: 10px;
    margin-top: 2rem;
    padding-left: 0;  
}

li {
    display: flex;
  
    
}

.a, .b {
    display: inline-block; 

}

.a {
    width: 100px;

}

.b {
    flex-grow: 1; 
}

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .chart img {
            width: 100px
        }

        .head_sign img {
            height: 40px
        }

        .seat_area h2 {
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            margin: 0px;
            padding: 0px;
        }

        h2 {
            display: block;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
        }

        @media print {
        .container {
            position: relative;
            height: 200px; /* Set a height to allow positioning */
            background: #f0f0f0;
        }
        .bottom-bar {
            height: 12px;
            background: #E67E22;
            position: absolute;
            bottom: 0;
            width: 100%;
        }  }
    </style>

    <button class="btn btn-primary" style="width:150px" id="print-button" onclick="printSelectedContent()"><span
            class="fa fa-print"></span> Print</button>
            <?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
 
    ?>

    <div id="id_card" style="">
        <div class="page-size ">
            <div class="card_size">
                <table class="seat_plan">
                    <tbody>
                        <tr>
                        <?php
                if( $this->input->post('side_id') == 'front_side'){
              ?>
  <td>
                                <div class="seat_area ">
                                    <div style="text-align:center;">
                                        <table style="width:100%;">
                                            <tbody>
                                                <tr style="border: none;">
                                                    <td style="border:0px solid black !important;">
                                                        <img style="height:50px; margin-top:5px;margin-left:5px;"
                                                            src="/site_photos/logo/ins_short_logoaab3238922bcc25a6f606eb525ffdc56ins_logoc51ce410c124a10e0db5e4b97fc2af39IMG-20230404-WA00041.jpg"
                                                            alt="">
                                                    </td>
                                                    <td colspan="2" style="border:0px solid black !important;">
                                                        <h2 style="font-size:12px; color:#E67E22"><?php echo $qr['org_name']; ?></h2>
                                                    </td>


                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="margin-top:5px; height:100px; text-align:center;" class="">
                                        <div class="card_head">
                                            <div class="rotate rotate1">IDENTITY CARD</div>
                                        </div>
                                        <div class="pf">
                                            <img style="height: 96px; width: 90px; border:1px solid gray; padding: 1px;"
                                                src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
                                        </div>
                                        <div class="id_number">
                                            <div class="rotate rotate2"><?php echo $qr['id_number']; ?></div>
                                        </div>
                                    </div>
                                    <div style="height: 113px; margin-top:10px" class="" >
                                        <h3><?php echo $qr['name']; ?></h3>
                                  
                                        <ul style="margin-left: 10px; margin-top: 1rem;">
                                        <li><span class="a">Class </span> <span class="b">: <?php echo $qr['class']; ?></span></li>
                                    
                                        <li><span class="a">Section </span><span class="b">: <?php echo $qr['sections']; ?></span></li>
                                        <li><span class="a">Roll </span><span class="b">: <?php echo $qr['class_roll']; ?></span></li>
                                        <li><span class="a">Blood </span><span class="b">: <?php echo $qr['blood_group']; ?></span></li>
                                        <li><span class="a">Gender </span><span class="b">: <?php echo $qr['gender']; ?></span></li>
                                        <li><span class="a">Cell </span><span class="b">: <?php echo $qr['phone']; ?></span></li>
                                    </ul>

                                    </div>
                                    <div  class="bottom-bar" style="height: 12px; background: #E67E22;  position: absolute; bottom: 0; width: 100%;"></div>

                                </div>
                            
                            </td>
<?php
   }  else if( $this->input->post('side_id') == 'back_side'){
?>
   <td>
                                <div class="seat_area ">
                                    <div
                                        style="text-align:center; font-size:14px;  padding: 5px; color:#fff; background:#E67E22; ">
                                        If found please return to</div>
                                    <hr style="border:2px solid #000; margin:0px; margin-top:3px">
                                    <div style="height:45px; text-align:center; padding:3px 3px 0px 3px">
                                        <h2 style="font-size:14px; color:#000"><?php echo $qr['org_name']; ?></h2>
                                    </div>
                                    <div style="margin-top:0px; height:57px; text-align:center; z-index:999"
                                        class="fixd">
                                        <p><?php echo $qr['org_address']; ?></p>
                                        <p><?php echo $qr['website']; ?></p>
                                        <p><?php echo $qr['org_mobile_no']; ?> </p>
                                    </div>
                                    <div style="margin-top:0px; height:100px; text-align:center;" class="chart fixd">

                                    <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
                                    </div>
                                    <div style="margin-top:0px; height:62px; text-align:center" class="fixd head_sign">
                                        <div style="width:10px; height:10px; text-align:center; margin:auto" class="signa">
                                        <img src="<?php echo base_url()."public/static/images/organization/".$qr['signature_picture']; ?>" width="40px" height="50px" alt="signature" > 
                                        </div>
                                  
                                        <div style="width:100px; text-align:center; margin:auto">
                                            
                                            <div style="height: 20px;">&nbsp;</div>
                                            
                                            <hr style="border:1px dashed #000; margin:0px; padding:0px 15px" ;="">
                                            <?php echo $qr['signature_name']; ?> 
                                        </div>
                                    </div>
                                    <div style="height:12px; background:#E67E22"></div>
                                </div>
                            </td>

                        <?php
                    }  else if( $this->input->post('side_id') == 'both_side'){
                  ?>
                            <td>
                                <div class="seat_area ">
                                    <div style="text-align:center;">
                                        <table style="">
                                            <tbody>
                                                <tr style="border: none;">
                                                    <td style="border:0px solid black !important;">
                                                        <img style="height:50px; margin-top:5px;margin-left:5px;"
                                                            src="/site_photos/logo/ins_short_logoaab3238922bcc25a6f606eb525ffdc56ins_logoc51ce410c124a10e0db5e4b97fc2af39IMG-20230404-WA00041.jpg"
                                                            alt="">
                                                    </td>
                                                    <td colspan="2" style="border:0px solid black !important;">
                                                        <h2 style="font-size:12px; color:#E67E22"><?php echo $qr['org_name']; ?></h2>
                                                    </td>


                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="margin-top:5px; height:100px; text-align:center;" class="">
                                        <div class="card_head">
                                            <div class="rotate rotate1">IDENTITY CARD</div>
                                        </div>
                                        <div class="pf">
                                            <img style="height: 96px; width: 90px; border:1px solid gray; padding: 1px;"
                                                src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>">
                                        </div>
                                        <div class="id_number">
                                            <div class="rotate rotate2"><?php echo $qr['id_number']; ?></div>
                                        </div>
                                    </div>
                                    <div style="height: 113px; margin-top:10px" class="" >
                                        <h3><?php echo $qr['name']; ?></h3>
                                  
                                        <ul style="margin-left: 10px; margin-top: 1rem;">
                                        <li><span class="a">Class </span> <span class="b">: <?php echo $qr['class']; ?></span></li>
                                    
                                        <li><span class="a">Section </span><span class="b">: <?php echo $qr['sections']; ?></span></li>
                                        <li><span class="a">Roll </span><span class="b">: <?php echo $qr['class_roll']; ?></span></li>
                                        <li><span class="a">Blood </span><span class="b">: <?php echo $qr['blood_group']; ?></span></li>
                                        <li><span class="a">Gender </span><span class="b">: <?php echo $qr['gender']; ?></span></li>
                                        <li><span class="a">Cell </span><span class="b">: <?php echo $qr['phone']; ?></span></li>
                                    </ul>

                                    </div>
                                    <div  class="bottom-bar" style="height: 12px; background: #E67E22;  position: absolute; bottom: 0; width: 100%;"></div>

                                </div>
                            
                            </td>
                            
                            <td>
                                <div class="seat_area fixd">
                                    <div
                                        style="text-align:center; font-size:14px;  padding: 5px; color:#fff; background:#E67E22; ">
                                        If found please return to</div>
                                    <hr style="border:2px solid #000; margin:0px; margin-top:3px">
                                    <div style="height:45px; text-align:center; padding:3px 3px 0px 3px">
                                        <h2 style="font-size:14px; color:#000"><?php echo $qr['org_name']; ?></h2>
                                    </div>
                                    <div style="margin-top:0px; height:57px; text-align:center; z-index:999"
                                        class="fixd">
                                        <p><?php echo $qr['org_address']; ?></p>
                                        <p><?php echo $qr['website']; ?></p>
                                        <p><?php echo $qr['org_mobile_no']; ?> </p>
                                    </div>
                                    <div style="margin-top:0px; height:100px; text-align:center;" class="chart fixd">

                                    <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
                                    </div>
                                    <div style="margin-top:0px; height:62px; text-align:center" class="fixd head_sign">
                                        <div style="width:10px; height:10px; text-align:center; margin:auto" class="signa">
                                        <img src="<?php echo base_url()."public/static/images/organization/".$qr['signature_picture']; ?>" width="40px" height="50px" alt="signature" > 
                                        </div>
                                  
                                        <div style="width:100px; text-align:center; margin:auto">
                                            
                                            <div style="height: 20px;">&nbsp;</div>
                                            
                                            <hr style="border:1px dashed #000; margin:0px; padding:0px 15px" ;="">
                                            <?php echo $qr['signature_name']; ?> 
                                        </div>
                                    </div>
                                    <div style="height:12px; background:#E67E22"></div>
                                </div>
                            </td>

                            <?php
   }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
  
    </div>
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