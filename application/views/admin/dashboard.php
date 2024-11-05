<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
   /* Custom Styling */
.quick-links {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 30px;
}
.header-left h4{
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: italic;
  font-size:30px;
}
.quick-link {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 220px;
  padding: 20px;
  background-color: #007bff; /* Original background */
  color: white;
  border-radius: 10px;
  text-align: center;
  text-decoration: none; /* Remove underline from links */
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border: 2px solid transparent; /* Border is initially transparent */
  font-family: "Oswald", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.quick-link:hover {
  background-color: #28a745; /* New background color on hover */
  color: #fff; /* Text color remains white */
  transform: translateY(-5px); /* Slight lift effect */

}

.quick-link i {
  font-size: 30px;
  margin-bottom: 10px;
}

.quick-link span {
  font-size: 16px;
}

.quick-link:focus {
  outline: none;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.8);
}

.quick-link:nth-child(1) {
  background-color: #007bff; /* Blue */
}

.quick-link:nth-child(2) {
  background-color: #28a745; /* Green */
}

.quick-link:nth-child(3) {
  background-color: #ffc107; /* Yellow */
}

.quick-link:nth-child(4) {
  background-color: #dc3545; /* Red */
}

.quick-link:nth-child(5) {
  background-color: #17a2b8; /* Cyan */
}

.quick-link:nth-child(6) {
  background-color: #6f42c1; /* Purple */
}

.quick-link:nth-child(7) {
  background-color: #e83e8c; /* Pink */
}

.quick-link:nth-child(8) {
  background-color: #fd7e14; /* Orange */
}

.quick-link:nth-child(9) {
  background-color: #6610f2; /* Indigo */
}

.quick-link:nth-child(10) {
  background-color: #343a40; /* Dark Gray */
}
.card-title{
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: italic;
  font-size:30px;
}
 /* Custom table styling */


 .custom-table {
      width: 100%;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
      margin: 20px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for a soft 3D effect */
    }

    /* Styling the table header */
    .custom-table thead {
      background-color: #4CAF50; /* Green background for header */
      color: #000;
    }

    .custom-table th {
      padding: 12px 15px;
      text-align: left;
      font-weight: bold;
      text-transform: uppercase; /* Uppercase text for header */
    }

    /* Styling the table rows */
    .custom-table tbody tr {
      border-bottom: 1px solid #ddd; /* Add a subtle border between rows */
    }

    .custom-table td {
      padding: 12px 15px;
      text-align: left;
    }

    /* Hover effect for rows */
    .custom-table tbody tr:hover {
      background-color: #f5f5f5; /* Light gray on hover */
    }

    /* Styling the last row to remove border */
    .custom-table tbody tr:last-child {
      border-bottom: none;
    }

    .grid-margin{
      margin-top:5rem;
    }

  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
               <h4>Quick Link</h4>
              </div>
              
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
               
                </div>
     
              </div>
            </div>
            <!-- first row starts here -->
            <div class="row">
            <div class="container">
  <div class="quick-links">
    <a href="<?php echo base_url(); ?>admin/organization" class="quick-link">
    <i class="fa-solid fa-building-ngo"></i>
      <span>Organization</span>
    </a>
    <a href="<?php echo base_url(); ?>admin/customfields" class="quick-link">
   <i class="fa-solid fa-person-military-pointing"></i>
      <span>Create Custom Fields </span>
    </a>
    <a href="<?php echo base_url(); ?>admin/customfields/list" class="quick-link">
    <i class="fa-brands fa-intercom"></i>
      <span>Custom Fields List</span>
    </a>
    <a href="<?php echo base_url(); ?>admin/users" class="quick-link">
    <i class="fa-solid fa-users"></i>
      <span>Users List</span>
    </a>
    <a href="<?php echo base_url(); ?>admin/card/custom/design" class="quick-link">
    <i class="fa-solid fa-id-card"></i>
      <span>Card Design</span>
    </a>

    <a href="<?php echo base_url(); ?>admin/card/card_design" class="quick-link">
    <i class="fa-solid fa-passport"></i>
      <span>Design Forment</span>
    </a>

    <a href="<?php echo base_url(); ?>admin/agents/create" class="quick-link">
    <i class="fa-solid fa-clipboard-question"></i>
      <span>Create Agent</span>
    </a>

    <a href="<?php echo base_url(); ?>admin/agents" class="quick-link">
    <i class="fa-solid fa-house-chimney-medical"></i>
      <span>Agent List</span>
    </a>
    <a href="#contact" class="quick-link">
    <i class="fa-solid fa-circle-h"></i>
      <span>Contact</span>
    </a>
    <a href="#contact" class="quick-link">
    <i class="fa-solid fa-paperclip"></i>
      <span>Contact</span>
    </a>
  </div>
</div>

          
         
            </div>
   
            <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title">Last Data List</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                

                      <table class="table custom-table text-dark ">
                        <thead>
                          <tr style=" background-color: #6f42c1;">
                          <th>Picture</th>
                            <th>Registration No</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Mobile No</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if(isset($allCus)){
                            foreach($allCus as $cus){
                          
                          ?>
                          <tr>
                          <td>
                              <?php
                              if($cus->photo != NULL){
                              ?>
                              <img src="<?php echo base_url()."public/static/images/users/{$cus->photo}"; ?>" class="mr-2" alt="image" /> 
                           <?php
                              }else{
                           ?>
                          <img src="<?php echo base_url()."public/static/images/users/0.png"; ?>" class="mr-2" alt="image" /> 
                      
                            <?php
                              }
                           ?>
                              </td>       
                              <td><?php echo $cus->registration_no; ?></td>  
                              <td><?php echo $cus->name_en; ?></td>
                              <td><?php echo $cus->father_name_en; ?></td>
                              <td><?php echo $cus->mobile_no; ?></td>
                            <td><?php echo $cus->email; ?></td>
                          </tr>
                          <?php
                            }
                          }
                          ?>
                   </tbody>
                      </table>
                    </div>
               
                  </div>
                </div>
              </div>
         
          </div>
          <!-- content-wrapper ends -->
     
          