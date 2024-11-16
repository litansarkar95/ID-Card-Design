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
               
               if($this->input->post('side_id') == 'back_side'){
               ?>
<div class="id-card-back">
    <div class="header">
      <p>If found please return to</p>
    </div>
    <div class="main-content">
      <h3>PRINCIPAL ABUL KALAM MAZUMDER MOHILA COLLEGE</h3>
      <p>Bagmara, Laksam, Cumilla.</p>
      <p>www.pakmmc.edu.bd</p>
      <p>01309105961</p>
      <p>কলেজ অ্যাপস ডাউনলোড করতে QR Code স্ক্যান করুন</p>
      <img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="QR Code" class="qr-code">
    </div>
    <div class="footer">
      <p>-------------------------------------------</p>
      <p>Principal</p>
    </div>
  </div>

<?php
               }else if($this->input->post('side_id') == 'front_side'){
?>
  <?php
    }
?>
<div class="id-card">
    <div class="header">
      <img src="logo-placeholder.png" alt="College Logo" class="logo">
      <h2>PRINCIPAL ABUL KALAM MAZUMDER MOHILA COLLEGE</h2>
    </div>
 
    <div class="content">
      <div class="photo-section">
        <img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="Student Photo" class="student-photo">
        <h3><?php echo $qr['name']; ?></h3>
      </div>
      <div class="info-section">
        <p><strong>Class:</strong> Eleven</p>
        <p><strong>Group:</strong> Science</p>
        <p><strong>Section:</strong> A</p>
        <p><strong>Shift:</strong> Day</p>
        <p><strong>Roll:</strong> <?php echo $qr['class_roll']; ?></p>
        <p><strong>Cell:</strong> <?php echo $qr['mobile_no']; ?></p>
      </div>
    </div>
    <div class="footer">
      <p>202300651003</p>
    </div>
  </div>
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