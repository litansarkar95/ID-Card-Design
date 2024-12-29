<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College ID Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 630px;
            margin-bottom: 20px;
        }

        .id-card,
        .back-page {
            width: 300px;
            height: 450px;
            border: 2px solid #0d6efd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 10px 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .id-card-header {
            background-color: #0d6efd;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .id-card-header h1 {
            font-size: 18px;
            margin: 0;
        }

        .id-card-header p {
            margin: 5px 0;
            font-size: 14px;
        }

        .id-card-body {
            padding: 20px;
            text-align: center;
        }

        .id-card-body img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #0d6efd;
            margin-bottom: 15px;
        }

        .id-card-body h2 {
            font-size: 16px;
            margin: 10px 0;
        }

        .id-card-body p {
            margin: 1px 0;
            font-size: 14px;
        }

        .id-card-footer {
            padding: 5px;
            border-top: 2px solid #0d6efd;
            font-size: 12px;
            color: #666;
            text-align: center;
        }

        .id-card h3 {
            color: #0d6efd;
            text-align: center;
            margin: 0;
            padding: 0;

        }

        .back-page h3 {
            color: #0d6efd;
            text-align: center;

        }

        hr {
            width: 30px;
            color: #0d6efd;
            background-color: #0d6efd;
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
            width: 100px;
            height: 100px;
        }

        .back_page_content {
            margin: 0 1.5rem;
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
<button class="print-button" onclick="window.print()">Print ID Card</button>

<?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>
    <div class="container">

    <?php   
               
               if($this->input->post('side_id') == 'front_side' ){
               ?>


<?php   
               
              }else if($this->input->post('side_id') == 'back_side'){
               ?>


<?php   
               
              }  else if( $this->input->post('side_id') == 'both_side'){
               ?>
        
        <div class="id-card">
            <div class="id-card-header">
                <h1><?php echo $qr['org_name']; ?></h1>

            </div>
            <div class="id-card-body">
                <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="Student Photo">

                <h3>পরিচয়পত্র</h3>
                <hr>
                <h2><?php echo $qr['name']; ?></h2>
                <p>রোল নম্বর: <?php echo $qr['class_roll']; ?></p>
                <p>শ্রেণী: <?php echo $qr['class']; ?></p>
                <p>বিভাগ: <?php echo $qr['sections']; ?></p>
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
                <p>ঠিকানা: <?php echo $qr['org_address']; ?></p>
            </div>
        </div>

        <div class="back-page">
            <div class="back_page_content">
                <h3>গুরুত্বপূর্ণ নির্দেশনা</h3>
                <p>১. পরিচয়পত্রটি সবসময় সাথে রাখুন।</p>
                <p>২. হারিয়ে গেলে নিকটস্থ প্রশাসনিক কার্যালয়ে জানাবেন।</p>
                <p>৩. এর অপব্যবহার করলে কঠোর শাস্তি প্রদান করা হবে।</p>
                <p>৪. শিক্ষার্থীকে যথাযথ আচরণ বজায় রাখতে হবে।</p>
                <p><strong>যোগাযোগ:</strong><br> <?php echo $qr['org_address']; ?></p>
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
   
</body>

</html>