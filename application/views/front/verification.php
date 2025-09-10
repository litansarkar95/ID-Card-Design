<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verification ID Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      width: 100%;
      max-width: 1200px;
    }

    /* ID Card Styles */
    .id-card {
      width: 100%;
      max-width: 780px;
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease;
    }
    
    .id-card:hover {
      transform: translateY(-5px);
    }

    /* Card header styling */
    .card-header {
      background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%);
      color: white;
      text-align: center;
      padding: 25px 20px;
      position: relative;
    }

    .card-header h1 {
      margin: 0;
      font-size: 24px;
      line-height: 1.2;
      font-weight: 600;
    }

    .card-header p {
      margin: 8px 0 0;
      font-size: 15px;
      opacity: 0.9;
    }

    /* Image Section */
    .id-card .image {
      padding: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to bottom, #2E7D32, #4CAF50);
      position: relative;
    }

    .id-card .image::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0 0h80v80H0V0zm20 20v40h40V20H20zm20 0v40h40V20H40z'%3E%3C/path%3E%3C/svg%3E");
      opacity: 0.1;
    }

    .id-card .image img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid white;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      position: relative;
      z-index: 1;
    }

    /* Details Section */
    .id-card .details {
      padding: 30px 25px;
      background-color: #fff;
    }

    .details h2 {
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 20px;
      color: #2c3e50;
      text-align: center;
      position: relative;
      padding-bottom: 12px;
    }

    .details h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 4px;
      background: linear-gradient(90deg, #4CAF50, #2E7D32);
      border-radius: 2px;
    }

    .detail-item {
      display: flex;
      justify-content: space-between;
      padding: 12px 0;
      position: relative;
    }

    .detail-item:not(:last-child)::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 1px;
      background: linear-gradient(to right, transparent 0%, #e0e0e0 15%, #e0e0e0 85%, transparent 100%);
    }

    .detail-item .label {
      font-weight: 500;
      color: #7f8c8d;
      min-width: 110px;
      text-align: left;
      font-size: 15px;
    }

    .detail-item .value {
      text-align: right;
      flex: 1;
      color: #2c3e50;
      font-weight: 500;
      font-size: 15px;
    }

    .verified {
      font-size: 18px;
      color: #4CAF50;
      margin: 20px 0;
      text-align: center;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .verified i {
      margin-right: 8px;
      font-size: 22px;
    }

    /* Address Section */
    .address {
      padding: 0 25px 25px;
      font-size: 15px;
      color: #666;
      text-align: center;
      line-height: 1.5;
    }

    /* Bottom Section */
    .bottom {
      background: linear-gradient(to right, #f1f1f1, #e0e0e0);
      padding: 18px;
      font-size: 14px;
      text-align: center;
      color: #555;
      margin-top: auto;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .id-card {
        max-width: 100%;
      }
      
      .details h2 {
        font-size: 24px;
      }
      
      .detail-item {
        flex-direction: column;
        text-align: center;
        padding: 15px 0;
      }
      
      .detail-item .label,
      .detail-item .value {
        text-align: center;
        min-width: auto;
      }
      
      .detail-item .label {
        margin-bottom: 5px;
        font-weight: 600;
        font-size: 14px;
      }
    }
    
    @media (max-width: 480px) {
      body {
        padding: 15px;
      }
      
      .id-card .image img {
        width: 110px;
        height: 110px;
      }
      
      .card-header {
        padding: 20px 15px;
      }
      
      .card-header h1 {
        font-size: 22px;
      }
      
      .details {
        padding: 25px 20px;
      }
      
      .details h2 {
        font-size: 22px;
      }
    }

       /* Toggle switch */
    .toggle-container {
      margin: 20px 0 30px;
    }

    .toggle-btn {
      padding: 12px 25px;
      background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%);
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .toggle-btn:hover {
      background: linear-gradient(135deg, #2E7D32 0%, #1B5E20 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <div class="container">
       <?php
    if($allPdt){
        foreach($allPdt as $pdt){

        
    
    ?>
    <!-- ID Card Example -->
    <div class="id-card">
      <div class="card-header">
        <h1><?php echo $pdt->org_name; ?></h1>
        <!-- <p>ID Card</p> -->
      </div>
      
      <div class="image">
        <img src="<?php echo base_url()."public/static/images/users/".$pdt->photo; ?>" alt="Profile Picture">
      </div>

      <div class="details">
        <h2><?php echo $pdt->name_en; ?></h2>
         <?php
          $fields = [
              'name_en' => 'Full Name',
              'name_bn' => 'নাম',
              'father_name_en' => "Father's Name",
              'father_name_bn' => 'পিতার নাম',
              'father_mobile_no' => "Father's Mobile No",
              'mother_name_en' => 'Mother Name',
              'mother_name_bn' => 'মায়ের নাম',
              'mother_mobile_no' => "Mother Mobile No",
              'mobile_no' => 'Mobile No.',
              'email' => 'Email',
              'village_en' => 'Village',
              'village_bn' => 'গ্রাম',
              'post_office_en' => 'Post Office',
              'post_office_bn' => 'পোস্ট অফিস',
              'upazila_en' => 'Upazila',
              'upazila_bn' => 'উপজেলা',
              'zilla_en' => 'Zilla',
              'zilla_bn' => 'জেলা',
              'permanent_address_en' => 'Permanent Address English',
              'designation' => 'Designation',
              'department' => 'Department',
              'employee_id' => 'Employee ID',
              'index_no' => 'Index No',
              'class' => 'Class ',
              'class_roll' => 'Class Roll',
              //'sections' => 'Sections',
              //'sessions'      => 'Sessions',
              'date_of_birth' => 'Date of Birth',
              'id_number' => 'ID No',
              'nationality' => 'Nationality',
              'blood_group' => 'Blood Group',
            ];
        


           foreach ($fields as $field => $label) {
            $flag = "is_$field";

  if (property_exists($pdt, $field) && !empty($pdt->$field)) {
        
              ?>
        <div class="detail-item">
          <span class="label"><?= $label ?>:</span>
          <span class="value"><?= htmlspecialchars($pdt->$field) ?></span>
        </div>
          <?php
  }
           
          }
        ?>
       
      
      <div class="verified">
        <i class="fas fa-check-circle"></i> Verified Student
      </div>
      
      
      
      <div class="bottom">
        <p>Master IT Solution | www.masteritsolution.com.bd</p>
      </div>
    </div>
       <?php
        }
    }else{
  ?>

 <div class="toggle-container">
      <button id="toggleView" class="toggle-btn">Sorry "Not Found" </button>
    </div>
<?php
    }
?>
  </div>

</body>
</html>