<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print Selected Content</title>
    <!-- General Style Both Print and Screen Display -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Open+Sans:wght@400;500;600&family=Poiret+One&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap");

      /* 
       font-family: 'Montserrat', sans-serif;
  font-family: 'Open Sans', sans-serif;
  font-family: 'Poiret One', cursive;
  font-family: 'Poppins', sans-serif;
  font-family: 'Roboto', sans-serif;
       */
      * {
        font-family: "Montserrat", sans-serif;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
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
    </style>

    <!-- Screen display -->
    <style>
      @media screen {
        #print-button {
          display: block !important;
        }

        .page-a4 {
          width: max-content;
          padding: 30px;
          height: 100%;
          margin: 30px auto;
          border: 2px solid #56a79a;
          border-radius: 5px;
        }

        .admit-container {
          height: 100%;
        }

        .admit {
          width: 380px !important;
          height: 100% !important;
          padding: 8px auto 0px !important;
          border: 1px solid #333;
          border-radius: 5px;
          display: flex;
          justify-content: space-between;
          align-items: space-between;
          flex-direction: column;
        }

        .space-item {
          display: flex;
          justify-content: space-between;
          align-items: center;
          width: 340px;
          margin-inline: auto;
        }
        .space-item > label {
          font-size: 15px !important;
          font-weight: bold !important;
        }
        .space-item > input {
          outline: none;
          border: none;
          border-bottom: 1px dotted #333;
          font-size: 14px !important;
          font-weight: bold;
          text-transform: uppercase;
          background-color: transparent !important;
        }
      }
    </style>

    <!-- Print Display -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Open+Sans:wght@400;500;600&family=Poiret+One&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap");

      /* 
       font-family: 'Montserrat', sans-serif;
  font-family: 'Open Sans', sans-serif;
  font-family: 'Poiret One', cursive;
  font-family: 'Poppins', sans-serif;
  font-family: 'Roboto', sans-serif;
       */
      * {
        font-family: "Montserrat", sans-serif;
        box-sizing: border-box;

        padding: 0;
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

        .admit {
          width: 380px !important;
          height: 100% !important;
          padding: 8px auto 0px !important;
          border: 1px solid #333;
          border-radius: 5px;
          display: flex;
          justify-content: space-between;
          align-items: space-between;
          flex-direction: column;
        }

        .space-item {
          display: flex;
          justify-content: space-between;
          align-items: center;
          width: 340px;
          margin-inline: auto;
        }
        .space-item > label {
          font-size: 15px !important;
          font-weight: bold !important;
        }
        .space-item > input {
          outline: none;
          border: none;
          border-bottom: none !important;
          font-size: 14px !important;
          font-weight: bold;
          text-transform: uppercase;
          background-color: transparent !important;
        }
      }
    </style>
  </head>
  <body>
    <!-- Button to trigger printing -->

    <!-- Content to be printed -->
    <div id="selected-content">
      <button id="print-button" onclick="printSelectedContent()">
        Print
      </button>

      <?php
   if(isset($allPdt)){
    foreach($allPdt as $pdt){
   
   ?>
      <div class="page-a4">
        <!-- Students Identity Card  -->
        <div
          class="admit-container"
          style="
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            justify-content: space-between;
            align-items: space-between;
            gap: 2rem;
            height: 100%;
            width: 100%;
          "
        >
          <!-- Identity-card -1 Start -->
          <div class="admit">
            <div class="header-section">
              <div style="padding: 10px 1px 0.5rem 1px">
                <img
                  class="logo-in-print"
                  src="./images/motherland-logo.png"
                  style="width: 100%"
                  alt=""
                />
              </div>
              <div
                class="session"
                style="
                  text-align: right;
                  margin-top: 0px;
                  margin-right: 15px;
                  font-weight: bold !important;
                  color: brown;
                "
              >
                <p>SESSION</p>

                <p style="color: #000 !important">2023-24</p>
              </div>
            </div>

            <div class="content-section">
              <div
                class="img-id"
                style="
                  text-align: center;
                  margin-top: -10px;
                  margin-bottom: 5px;
                "
              >    <?php   
                if($pdt->dis_photo == 1){
               
                ?>
                <img
                  style="
                    width: 160px;
                    height: 160px;
                    border-radius: 50%;
                    border: 3px solid #56a79a;
                    object-fit: cover;
                    object-position: top;
                  "
                  src="<?php echo base_url()."public/static/images/users/{$pdt->photo}"; ?>"
                  alt=""
                />

                <?php
                }
                ?>
              </div>
              <div class="student-details">
                <h3
                  style="
                    font-size: 21px;
                    text-transform: uppercase;
                    text-align: center;
                    font-weight: bold !important;
                    padding:5px;
                  "
                >
                <?php   
                if($pdt->dis_name_en == 1){
                    echo $pdt->name_en;
                }
                ?>
                </h3>
                <h3
                  style="
                    font-size: 21px;
                    text-transform: uppercase;
                    text-align: center;
                    font-weight: bold !important;
                    padding:5px;
                  "
                >
                <?php   
                if($pdt->dis_name_bn == 1){
                    echo $pdt->name_bn;
                }
                ?>
                </h3>
                <div
                  class="student-form"
                  style="margin-bottom: 10px; line-height: 25px"
                >

                <?php   
                if($pdt->dis_father_name_en == 1){
                
                ?>
                  <div class="space-item">
                    <label>Father's Name </label>
                    <input
                      readonly
                      required
                      type="text"
                      value=": &nbsp; <?php echo   $pdt->father_name_en;?>"
                      style="width: 182px"
                    />
                  </div>

                  <?php
                }
                  ?>
                  <div class="space-item">
                    <label>Mother's Name </label>
                    <input
                      readonly
                      required
                      type="text"
                      value=": &nbsp; KUSUM KUMARI"
                      style="width: 182px"
                    />
                  </div>
                  <div class="space-item">
                    <label>Class </label>
                    <input
                      readonly
                      required
                      type="text"
                      value=": &nbsp; 1st-A"
                      style="width: 182px"
                    />
                  </div>
                  <div class="space-item">
                    <label>D.O.B </label>
                    <input
                      readonly
                      required
                      type="text"
                      value=": &nbsp; 21/02/2013"
                      style="width: 182px"
                    />
                  </div>
                  <div class="space-item">
                    <label>Address </label>
                    <input
                      readonly
                      required
                      type="text"
                      value=": &nbsp; KHANPUR"
                      style="width: 182px"
                    />
                  </div>
                  <div class="space-item">
                    <label>M.No. </label>
                    <input
                      readonly
                      required
                      type="text"
                      value=": &nbsp; 9411809570"
                      style="width: 182px"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="institute-address footer-section">
              <p
                style="
                  font-size: 12px;
                  font-weight: bold;
                  text-align: center;
                  border-top: 2px solid #333;
                  padding: 5px 0;
                "
              >
                Vill.Kutubpur Gawri, Jalilpur (Bijnor) U.P.-246725 <br />
                Cont. No. 9719461053, 9719461356
              </p>
            </div>
          </div>

          <!-- Identity-card -1 End -->
       
          <!-- Identity-card -2 Start -->
         
          <!-- Identity-card -2 End -->
      
          <!-- Identity-card -2 End -->
        </div>
      </div>
<?php
    }

}
?>

      <!-- Students Fee Receipt -->
    </div>

    <!-- Your JavaScript file -->
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
  </body>
</html>
