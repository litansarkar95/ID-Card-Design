<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Verification ID Card</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
 * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f4f7f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* ID Card Styles */
    .id-card {
        width: 300px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      text-align: center; /* Center the text */
    }

    /* Card header styling */
.card-header {
  background-color: #4CAF50;
  color: white;
  text-align: center;
  padding: 15px;
}

.card-header h1 {
  margin: 0;
  font-size: 20px;
}

.card-header p {
  margin: 5px 0 0;
  font-size: 14px;
}

    /* Image Section */
    .id-card .image {
        background-color: #4CAF50;
        padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .id-card .image img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* Text Section */
    .id-card .details {
      padding: 20px;
      background-color: #fff;
    }

    .details h2 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .details p {
      font-size: 14px;
      color: #555;
      margin: 2px 0;
    }

    .details .title {
      color: #888;
      font-size: 12px;
    }

    /* Bottom Section */
    .bottom {
      background-color: #f1f1f1;
      padding: 10px;
      font-size: 12px;
      text-align: center;
      color: #333;
    }
    .verified {
      font-size: 20px;
      color: green;
      margin-top: 10px;
    }
    </style>
<body>
    <?php
    if($allPdt){
        foreach($allPdt as $pdt){

        
    
    ?>
   <div class="id-card">
   <div class="card-header">
      <h1><?php echo $pdt->org_name; ?></h1>
      <p> ID Verification</p>
  
    </div>
    <!-- Image Section (Top) -->
    <div class="image">
      <img src="<?php echo base_url()."public/static/images/users/".$pdt->photo; ?>" alt="Profile Picture">
    </div>

    <!-- Details Section -->
    <div class="details">
      <h2><?php echo $pdt->name_en; ?></h2>
      <?php
                 if($pdt->class != NULL){
        ?>
      <p class="title">Class: <?php echo $pdt->class; ?></p>
      <?php
                 }
      ?>
      <?php
                 if($pdt->email != NULL){
        ?>
      <p>Email: <?php echo $pdt->email; ?></p>
      <?php
                 }
      ?>
      <p>Phone: <?php echo $pdt->mobile_no; ?></p>
    </div>
    <p class="verified">✔ Verified</p>
    <!-- Bottom Section -->
    <div class="bottom">
    <p>Valid Until: 2025-12-31</p>
    </div>
  </div>

  <?php
        }
    }else{
  ?>
  <h1>Sorry Not Found</h1>

<?php
    }
?>
</body>
</html>
