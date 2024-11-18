<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ID Card</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f3f3f3;
 
  justify-content: center;
  align-items: center;

  margin: 10;
}

.id-card-back {
  width: 350px;
  border: 2px solid #ff6600;
  border-radius: 10px;
  background: white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  text-align: center;
  padding: 10px;
  margin:5px;
  display: flex;
          justify-content: space-between;
          align-items: space-between;
          flex-direction: column;
}

.header {
  background-color: #ff6600;
  color: white;
  padding: 10px;
  font-size: 14px;
  text-transform: uppercase;
}

.main-content h3 {
  color: #ff6600;
  margin: 10px 0;
}

.main-content p {
  font-size: 12px;
  margin: 5px 0;
}

.qr-code {
  margin-top: 10px;
  width: 100px;
  height: 100px;
}

.footer {
  margin-top: 20px;
  font-size: 12px;
  color: gray;
}

#print-button {
        cursor: pointer;
        margin: 50px auto;
        border: none;
        border-radius: 5px;
        padding: 8px 16px;
        background-color: #56a79a;
        color: #fff;
        font-weight: bold;
        transform: translateX(180%);
      }

    
      @media print {
        @page {
          margin: 40px;
        }
        #print-button {
          display: none;
        }

        .page-a4 {
          width: max-content;
          height: 100%;
          margin: auto;
          page-break-after: always !important;
          /* overflow: hidden !important; */
          display: block !important;
          box-sizing: border-box !important;
          position: relative !important;
          /* margin: 0px; */
        }

        .admit-container {
          height: 100%;
        }

    }

    .id-card {
  width: 350px;
  border: 2px solid #ff6600;
  border-radius: 10px;
  background-color: white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  text-align: center;
}

.header {
  padding: 10px;
  background-color: #ff6600;
  color: white;
}

.header .logo {
  width: 50px;
  height: 50px;
}

.side-banner {
  position: absolute;
  background-color: #ff6600;
  color: white;
  writing-mode: vertical-rl;
  text-align: center;
  padding: 10px 5px;
  top: 0;
  left: 0;
  height: 100%;
  font-size: 14px;
}

.content {
  padding: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.photo-section {
  text-align: center;
  margin-bottom: 10px;
}

.photo-section .student-photo {
  width: 100px;
  height: 120px;
  border-radius: 5px;
  border: 2px solid #ddd;
}

.photo-section h3 {
  margin-top: 10px;
  color: #800080; /* Purple for the name */
}

.info-section {
  font-size: 14px;
  text-align: left;
  width: 80%;
}

.info-section p {
  margin: 5px 0;
}

.footer {
  padding: 10px;
  background-color: #ff6600;
  color: white;
  font-size: 12px;
}
</style>
<body>
<div id="selected-content">
<button id="print-button" onclick="printSelectedContent()">
        Print
      </button>
      <div class="page-a4">
   
   <!-- Students Identity Card  -->
   <div
     class="admit-container"
     style="
       display: grid;
       grid-template-columns: repeat(3, 1fr);
       justify-content: space-between;
       align-items: space-between;
       gap: 0.4rem;
       height: 100%;
       width: 100%;
     "
   >
    <?php
    if(isset($qr_images)){
     foreach($qr_images  as $qr){
    
    ?>
  <?php   
               
               if($this->input->post('side_id') == 'front_side' ){
               ?>
<div class="id-card">
    <div class="header">
      <!-- <img src="<?php echo base_url()."public/static/images/organization/".$qr['picture']; ?>" alt="College Logo" class="logo"> -->
        <h2><?php echo $qr['org_name']; ?></h2>
    </div>
 
    <div class="content">
      <div class="photo-section">
        <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="Student Photo" class="student-photo">
        <h3><?php echo $qr['name']; ?></h3>
      </div>
      <div class="info-section">
      <?php
                 if($this->input->post('gender') == 1){
        ?>
           <p><strong>Gender :</strong> <?php echo $qr['gender']; ?></p>
           <?php
        }
        ?>
           <?php   
               
               if($this->input->post('class') == 1){
               ?>
        <p><strong>Class:</strong> <?php echo $qr['class']; ?></p>
        <?php
        }
        ?>
        <?php
                 if($this->input->post('sections') == 1){
        ?>
        <p><strong>Section:</strong> <?php echo $qr['sections']; ?></p>
        <?php
        }
        ?>
        <!-- <p><strong>Shift:</strong> Day</p> -->
        <?php
                 if($this->input->post('class_roll') == 1){
        ?>
        <p><strong>Roll:</strong> <?php echo $qr['class_roll']; ?></p>
        <?php
        }
        ?>
        <?php
                 if($this->input->post('mobile_no') == 1){
        ?>
        <p><strong>Mobile No:</strong> <?php echo $qr['phone']; ?></p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="footer">
      <p><?php echo $qr['org_address']; ?></p>
    </div>
  </div>

<?php
               }else if($this->input->post('side_id') == 'back_side'){
?>

<div class="id-card-back">
    <div class="header">
      <p>If found please return to</p>
    </div>
    <div class="main-content">
      <h3><?php echo $qr['org_name']; ?></h3>
      <p><?php echo $qr['org_address']; ?></p>
      <p><?php echo $qr['website']; ?></p>
      <p><?php echo $qr['org_mobile_no']; ?></p>
      <p>কলেজ অ্যাপস ডাউনলোড করতে QR Code স্ক্যান করুন</p>
      <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
    </div>
    <div class="footer">
    <img src="<?php echo base_url()."public/static/images/organization/".$qr['signature_picture']; ?>" width="100px" height="50px" alt="College Logo" >
      <p>-------------------------------------------</p>
      <p><?php echo $qr['signature_name']; ?></p>
    </div>
  </div>



  <?php
    }  else if( $this->input->post('side_id') == 'both_side'){
?>


<div class="id-card">
    <div class="header">
      <!-- <img src="<?php echo base_url()."public/static/images/organization/".$qr['picture']; ?>" alt="College Logo" class="logo"> -->
        <h2><?php echo $qr['org_name']; ?></h2>
    </div>
 
    <div class="content">
      <div class="photo-section">
        <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="Student Photo" class="student-photo">
        <h3><?php echo $qr['name']; ?></h3>
      </div>
      <div class="info-section">
      <?php
                 if($this->input->post('gender') == 1){
        ?>
           <p><strong>Gender :</strong> <?php echo $qr['gender']; ?></p>
           <?php
        }
        ?>
           <?php   
               
               if($this->input->post('class') == 1){
               ?>
        <p><strong>Class:</strong> <?php echo $qr['class']; ?></p>
        <?php
        }
        ?>
        <?php
                 if($this->input->post('sections') == 1){
        ?>
        <p><strong>Section:</strong> <?php echo $qr['sections']; ?></p>
        <?php
        }
        ?>
        <!-- <p><strong>Shift:</strong> Day</p> -->
        <?php
                 if($this->input->post('class_roll') == 1){
        ?>
        <p><strong>Roll:</strong> <?php echo $qr['class_roll']; ?></p>
        <?php
        }
        ?>
        <?php
                 if($this->input->post('mobile_no') == 1){
        ?>
        <p><strong>Mobile No:</strong> <?php echo $qr['phone']; ?></p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="footer">
      <p><?php echo $qr['org_address']; ?></p>
    </div>
  </div>

  <div class="id-card-back">
    <div class="header">
      <p>If found please return to</p>
    </div>
    <div class="main-content">
      <h3><?php echo $qr['org_name']; ?></h3>
      <p><?php echo $qr['org_address']; ?></p>
      <p><?php echo $qr['website']; ?></p>
      <p><?php echo $qr['org_mobile_no']; ?></p>
      <p>বিস্তারিত জানতে  QR Code স্ক্যান করুন</p>
      <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
    </div>
    <div class="footer">
    <img src="<?php echo base_url()."public/static/images/organization/".$qr['signature_picture']; ?>" width="100px" height="50px" alt="College Logo" >
      <p>-------------------------------------------</p>
      <p><?php echo $qr['signature_name']; ?></p>
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
</div>
</div>
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