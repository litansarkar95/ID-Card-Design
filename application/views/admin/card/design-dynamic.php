<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student ID Card</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
body{
  /* solid background */
  background: rgb(0,212,255);
  
  /* gradient background*/
  background: linear-gradient(45deg, rgba(0,212,255,1) 0%, rgba(11,3,45,1) 100%);    
  
  /* photo background */
  background-image: url(https://images.unsplash.com/photo-1619204715997-1367fe5812f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1889&q=80);
  background-size: cover;
  background-position: center;  
}
.id-card {

  
  display: flex;
  align-items: center;
  justify-content: center;    
  height: 100vh;  
}
.button-wrapper{
  top: 0;
  left:0;
}
.container {
  backdrop-filter: blur(16px) saturate(180%);
  -webkit-backdrop-filter: blur(16px) saturate(180%);
  background-color: rgba(17, 25, 40, 0.25);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.125);  
  padding: 38px;  
  filter: drop-shadow(0 30px 10px rgba(0,0,0,0.125));
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content:center;
  text-align: center;
  
}

.wrapper {
  width: 100%;
  height: 100%;
  
}

.banner-image {
 
    height: 100px;
    width: 100px;
  margin:0 auto;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255, 0.255)
}
.banner-image img{
 
 height: 100px;
 width: 100px;
 margin:0 auto;
 border-radius: 50%;
 border: 1px solid rgba(255,255,255, 0.255)
}
h1{
  font-family: 'Righteous', sans-serif;
  color: rgba(255,255,255,0.98);
  text-transform: uppercase;
  font-size: 1.1rem;
}
h2{
    font-family: 'Righteous', sans-serif;
  color: rgba(255,255,255,0.98);
  text-transform: uppercase;
  font-size: 1.3rem;
}
p {
  color: #fff;
  font-family: 'Lato', sans-serif;
  text-align: center;
  font-size: 0.8rem;
  line-height: 150%;
  letter-spacing: 2px;
  text-transform: uppercase;
}



.btn {
  border: none;
  padding: 12px 24px;
  border-radius: 24px;
  font-size: 12px;
  font-size: 0.8rem;  

  cursor: pointer;
}



.outline {
  background: transparent;
  color: rgba(0, 212, 255, 0.9);
  border: 1px solid rgba(0, 212, 255, 0.6);
  transition: all .3s ease;
  
}

.outline:hover{
  transform: scale(1.125);
  color: rgba(255, 255, 255, 0.9);
  border-color: rgba(255, 255, 255, 0.9);
  transition: all .3s ease;  
}


h3{
    color:#fff;
}
.website{
    text-transform: lowercase;
}
    </style>
<body>
<div class="button-wrapper"> 
  <button class="btn outline print-button" onclick="printCard()">Print</button>
 
  </div>
  <div class="id-card" id="idCard">
    

<div class="container">
    
 <div class="wrapper">
    <h2>Rodasi IT</h2>
   <div class="banner-image"> 
   <img src="<?php echo base_url()."public/static/images/users/b36bda80eacedd48bf3d460d0298c25d.JPG"; ?>"  />

   </div>
   <h1> Md Litan Sarkar</h1>
   <h3>Job Position<h3>
   <p>ID: 525710 <br/>
     Joing Date: 10/10/2024<br>
    Expire date: 28/10/2027
    </p>

    <img src="<?php echo base_url()."public/static/images/QR_code_for_mobile_English_Wikipedia.svg.png"; ?>"  width="100px"/>

    <p class="website">www.rodasiit.com</p>
  </div>
  </div>
    </div>
</div>

<script>
        function printCard() {
            const card = document.getElementById('idCard');
            const printWindow = window.open('', '', 'width=300,height=400');
            printWindow.document.write('<html><head><title>Print ID Card</title>');
            printWindow.document.write('<link rel="stylesheet" href="styles.css">'); // Link to the CSS file
            printWindow.document.write('</head><body>');
            printWindow.document.write(card.innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>
</body>
</html>
