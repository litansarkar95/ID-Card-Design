<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Design</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fauna+One&family=Shadows+Into+Light+Two&display=swap"
        rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        
    }

    body {
        background: black;
       
    }

    .container {
      
        overflow: hidden;
        display: flex;
      flex-wrap: wrap;  /* Allow wrapping of items */
      gap: 10px;
      width:800px;
      margin:0 auto;
    }
    .item {
   
    }
    .font-side {
        background: white;
        width: 350px;
        height: 500px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin:2rem;
      
    }

    .font-side::after {
        content: '';
      
        display: block;
        background-color: #fff;
    
        border-radius: 0 5px 5px 0;
    }

    .bg {
        position: relative;
        left: -100px;

    }

    .circle1 {
        width: 550px;
        height: 550px;
        background-color: #EC3951;

    }

    .circle2 {
        width: 550px;
        height: 550px;
        background-color: #241F21;
        border-radius: 50%;
        position: absolute;
        top: -380px;

    }

    .circle3 {
        width: 550px;
        height: 550px;
        background-color: white;
        border-radius: 50%;
        position: relative;
        top: -350px;

    }

    .info {
        position: absolute;
        top: 30px;
        width: 100%;
    }

    .info_pic img {
        border: 2px solid #EC3951;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        position: relative;
        left: 50%;
        transform: translateX(-50%);

    }

    .details {
        padding: 0.4rem 1.5rem 0;
    }

    .details h2 {
        text-align: center;
        color: #EC3951;
        font-weight: bold;
        font-family: "Fauna One", serif;
        text-transform: uppercase;
        letter-spacing: .2rem;
    }

    .details p {
        text-align: center;
        font-family: "Fauna One", serif;
        font-style: italic;
        font-size: 14px;
        font-weight: 500;
    }

    .info h1 {
        text-align: center;
        font-family: "Shadows Into Light Two", serif;
        color: white;
        font-size: 26px;
        height: 90px;

    }

    .details-info {
        margin: 1rem;
        text-align: center;
        align-items: center;

    }

    .details-info h3 {
        text-align: justify;
        font-family: "Fauna One", serif;
        font-size: 16px;
    }

    .details-info label {
        color: darkslategray;


    }



    .details-info strong {
        padding-left: .3rem;
        margin: 1rem;
    }

    .barcode {
        text-align: center;

    }

    .barcode img {
        width: 200px;
        height: 70px;
        text-align: center;
    }

    .bg-info {
        background-color: #EC3951;
        padding: 10px;
        color: white;
        text-align: center;
        font-family: "Fauna One", serif;
        letter-spacing: 3px;

        display: block;
        height: 16px;
        /**  margin: 0 auto;
        width: 100%;
        position: fixed;
        bottom: -11px;
        **/

    }

    /**  Back Side **/

    /* .back-side is the main container */
    .back-side {
        background: #241F21;
        width: 350px;
        height: 500px;
        margin-top: 2rem;
        overflow: hidden;
        border-radius: 10px;
     
        position: relative;
        font-family: "Fauna One", serif;
    }

    .back-details-info {
        padding: 20px;
    }

    .back-details-info,
    .back-details-address {
        z-index: 1;
        position: relative;


    }

    .back-side h4 {
        margin: 0px 20px;

        font-size: 14px;
        font-weight: 100;
    }



    .back-side strong {
        font-weight: 600;
    }

    .circle5 {
        width: 550px;

        height: 550px;

        background-color: #fff;
        border-radius: 50%;
        position: absolute;
        bottom: -295px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 0;
    }

    .back_bg {
        position: relative;
        z-index: 0;

    }

    .back-details-address-return {
        background-color: #EAEAEA;


    }

    .back-details-address-return h3 {
        margin: .5rem;
        text-align: center;
        font-family: "Shadows Into Light Two", serif;
    }

    .back-details-address-return p {
        margin: .5rem;
        text-align: center;
        font-weight: 100;

    }

    .back-details-address-return h4 {
        text-align: center;

    }

    .return {
        margin: 0px 20px;
        padding: 10px;
        list-style: 10px;
        line-height: 20px;
        font-family: "Shadows Into Light Two", serif;

    }

    .qr-code-img {
        text-align: center;
        align-items: center;
    }

    .qr-code-img img {
        width: 100px;
        height: 100px;
        margin-top: .5rem;
        text-align: center;
    }


    @media print {
        .container {
           
        }
       }
</style>

<body>
<button class="btn btn-primary" style="width:150px" id="print-button" onclick="printSelectedContent()"><span
class="fa fa-print"></span> Print</button>
    <div class="container">
        
    <?php
        if(isset($allPdt)){
            foreach($allPdt as $pdt){
        
        ?>
        <div class="font-side item">


            <div class="bg">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>
            <div class="info">
                <h1>Web Code Pro Ltd </h1>
                <div class="info_pic">
                    <img src="b36bda80eacedd48bf3d460d0298c25d.JPG">
                </div>


                <div class="details">
                    <h2>Riya Sharma</h2>
                    <p>Web Designder</p>
                    <div class="details-info">
                        <h3><label>ID No </label><strong>: &nbsp; 15442</strong></h3>
                        <h3><label>Blood </label><strong>: &nbsp;&nbsp;A+</strong></h3>
                        <h3><label>Phone</label><strong>: &nbsp;01829107469</strong></h3>

                    </div>


                </div>

                <div class="bg-info">
                    <h4>www.labibait.com</h4>
                </div>
                <div class="barcode">
                    <img src="barcode-illustration-isolated_23-2150584086.avif">
                </div>



            </div>

        </div>

        <!-- Start Backside-->

        <div class="back-side item">
            <div class="back-details-info">
                <h4><Strong>Phone</Strong>: 0128726262</h4>
                <h4><Strong>Blood Group</Strong>: AB+</h4>
                <h4><Strong>Emergency</Strong>: 0128726262</h4>
                <h4><Strong>Address</Strong>: 12/A Dhaja Tangail, Bangaldesh</h4>
            </div>


            <div class="back_bg">
                <div class="circle5"></div>
            </div>

            <div class="back-details-address">
                <div class="back-details-address-return">
                    <p class="return">If Found please Return The Card or Contact</p>

                    <h3>M Hasan High School</h3>
                    <p>Ploat ussh hdsgsgsd sadjksdghdsg asdhsddsdgsa sasdagdags</p>
                    <h4><Strong>Phone</Strong>: 0128726262</h4>
                    <h4><Strong>Blood Group</Strong>: AB+</h4>
                </div>
                <div class="qr-code-img">
                    <img src="md_litan_sarkar_vcard.png">
                </div>
            </div>




        </div>
        <?php
            }
        }
        ?>


        <!-- End Backside-->
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