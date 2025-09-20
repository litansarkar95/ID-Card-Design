<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ID Card Design Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
  <style>
    :root {
      --primary: #3b82f6;
      --primary-dark: #2563eb;
      --primary-light: #dbeafe;
      --gray: #6b7280;
      --gray-light: #f3f4f6;
      --error: #dc2626;
      --error-light: #fef2f2;
      --success: #16a34a;
      --success-light: #f0fdf4;
      --warning: #f59e0b;
      --bg: #f9fafb;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: var(--bg);
      color: #1f2937;
      padding: 2rem;
      line-height: 1.5;
    }

    .form-container {
      max-width: 900px;
      margin: 0 auto;
      background: white;
      padding: 0;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .form-header {
      background: linear-gradient(135deg, #3b82f6, #2563eb);
      color: white;
      padding: 2.5rem 2rem;
      text-align: center;
    }

    .form-header h1 {
      color: white;
      font-size: 2rem;
      margin-bottom: 0.75rem;
      font-weight: 700;
    }

    .form-header p {
      color: #e0f2fe;
      font-size: 1.1rem;
      margin-bottom: 0;
    }

    .form-content {
      padding: 2rem;
    }

    .success-message {
      display: none;
      background: var(--success-light);
      color: var(--success);
      padding: 1.25rem;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
      border-left: 4px solid var(--success);
      font-weight: 500;
    }

    .success-message i {
      margin-right: 0.5rem;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }

    @media (min-width: 768px) {
      .form-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    .form-group {
      display: flex;
      flex-direction: column;
      position: relative;
    }

    label {
      font-weight: 600;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
    }

    label i {
      margin-right: 0.5rem;
      color: var(--primary);
      width: 20px;
    }


   

    .form-control {
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #d1d5db;
      border-radius: 0.5rem;
      transition: all 0.2s ease;
      width: 100%;
    }

    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
      outline: none;
    }

    .form-control.error {
      border-color: var(--error);
      background-color: var(--error-light);
    }

    .form-control.success {
      border-color: var(--success);
      background-color: var(--success-light);
    }

    .error-message {
      font-size: 0.85rem;
      color: var(--error);
      margin-top: 0.3rem;
      display: flex;
      align-items: center;
    }

    .error-message i {
      margin-right: 0.4rem;
    }

    select.form-control {
       padding: 0.75rem;
      appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 12px center;
      background-size: 16px;
    }

    .file-upload {
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .file-upload-label {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      border: 2px dashed #d1d5db;
      border-radius: 0.5rem;
      background-color: var(--gray-light);
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      flex-direction: column;
    }

    .file-upload-label:hover {
      border-color: var(--primary);
      background-color: var(--primary-light);
    }

    .file-upload-label i {
      font-size: 2rem;
      color: var(--primary);
      margin-bottom: 0.5rem;
    }

    .file-upload-label span {
      font-weight: 500;
    }

    .file-upload-input {
      position: absolute;
      left: -9999px;
    }

    .file-preview {
      margin-top: 1rem;
      display: none;
      text-align: center;
    }

    .file-preview img {
      max-width: 150px;
      max-height: 150px;
      border-radius: 0.5rem;
      border: 1px solid #d1d5db;
    }

    .file-preview p {
      margin-top: 0.5rem;
      font-size: 0.9rem;
    }

    .submit-btn {
      background: var(--primary);
      color: white;
      padding: 1rem 2.5rem;
      border: none;
      border-radius: 0.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 2rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3);
    }

    .submit-btn:hover {
      background: var(--primary-dark);
      box-shadow: 0 8px 16px rgba(59, 130, 246, 0.3);
      transform: translateY(-2px);
    }

    .submit-btn i {
      margin-left: 0.5rem;
    }

    .btn-container {
      text-align: center;
      position: relative;
    }

    .loading {
      display: none;
      width: 24px;
      height: 24px;
      border: 3px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      border-top-color: white;
      animation: spin 1s ease-in-out infinite;
      margin-left: 10px;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    .privacy-notice {
      font-size: 0.85rem;
      color: var(--gray);
      text-align: center;
      margin-top: 3rem;
      padding-top: 1.5rem;
      border-top: 1px solid #e5e7eb;
    }

    .privacy-notice a {
      color: var(--primary);
      text-decoration: none;
    }

    .privacy-notice a:hover {
      text-decoration: underline;
    }
    .header-5 {
      background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <?php if (isset($allPdt)) {
        foreach ($allPdt as $pdt) { ?>
    <div class="header-card">
       <div class="form-header header-5"> 
        <h2><i class="fas fa-tasks"></i> <?= $pdt->title ?></h2> 
       <p><?= $pdt->description ?></p>
      
      </div>

     
     

    <div class="form-content">
      <!-- <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i> Thank you! Your form has been submitted successfully.
      </div> -->

      

     <form action="<?= base_url() . "userformsubmit/$pdt->org_slug?v=$pdt->id" ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="organization_id" value="<?= $pdt->organization_id ?>">
          <input type="hidden" name="agent_id" value="<?= $pdt->agent_id ?>">
          <input type="hidden" name="id" value="<?= $pdt->id ?>">

          <div class="form-grid">

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
              'designation' => 'Designation',
              'department' => 'Department',
              'employee_id' => 'Employee ID',
              'index_no' => 'Index No',
              'class_roll' => 'Class Roll',
              'date_of_birth' => 'Date of Birth',
              'id_number' => 'ID No',
              'present_address_en' => 'Present Address ',
              'nationality' => 'Nationality',
            ];
            $requiredFields = ['name_en', 'mobile_no', 'email', 'date_of_birth', 'father_name_en', 'father_mobile_no', 'mother_name_en']; // উদাহরণ




           foreach ($fields as $field => $label) {
            $flag = "is_$field";
            if (property_exists($pdt, $flag) && $pdt->$flag == 1) {
              $isRequired = in_array($field, $requiredFields) ? 'required' : '';
              ?>
              <div class="form-group">
              <label for="<?= $field ?>"><?= $label ?></label>
              <input type="text" 
                class="form-control <?= form_error($field) ? 'error' : '' ?>"    name="<?= $field ?>"     id="<?= $field ?>"      value="<?= set_value($field) ?>" 
                <?= $isRequired ?>>
          
          <!-- Error Message -->
          <?php if(form_error($field)) : ?>
            <small class="error-message"><?= form_error($field) ?></small>
          <?php endif; ?>
        </div>

            <?php
            }
          }
          
          //dob
        


            // Dropdowns
            if ($pdt->is_class == 1) { ?>
              <div class="form-group">
                <label for="class">Class</label>
                <select name="class" id="class" class="form-control">
                  <option value="">Select</option>
                  <?php foreach ($allClass as $cls) {
                    echo "<option value='$cls->id'>$cls->name</option>";
                  } ?>
                </select>
              </div>
            <?php }

            if ($pdt->is_sections == 1) { ?>
              <div class="form-group">
                <label for="sections">Sections</label>
                <select name="sections" id="sections" class="form-control">
                  <option value="">Select</option>
                  <?php foreach ($allSect as $sect) {
                    echo "<option value='$sect->id'>$sect->name</option>";
                  } ?>
                </select>
              </div>
            <?php }

            if ($pdt->is_sessions == 1) { ?>
              <div class="form-group">
                <label for="sessions">Session</label>
                <select name="sessions" id="sessions" class="form-control">
                  <option value="">Select</option>
                  <?php foreach ($allSession as $session) {
                    echo "<option value='$session->id'>$session->name</option>";
                  } ?>
                </select>
              </div>
            <?php }

            if ($pdt->is_gender == 1) { ?>
              <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            <?php }

            if ($pdt->is_blood_group == 1) { ?>
              <div class="form-group">
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" id="blood_group" class="form-control">
                  <option value="">Select</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
                 <?php } ?>
       <?php
      $requiredFields = ['pic', 'signature']; // Ensure 'pic' আছে এখানে

      if ($pdt->is_photo == 1) {
        $isFileRequired = in_array('pic', $requiredFields) ? 'required' : '';
      ?>
        <div class="form-group">
          <label for="pic">Photo</label>
          <input type="file" class="form-control" name="pic" id="pic" <?= $isFileRequired ?>>
        </div>
      <?php } ?>


     <?php if ($pdt->is_signature == 1) { 
      $isFileRequired = in_array('signature', $requiredFields) ? 'required' : '';
    ?>
      <div class="form-group">
        <label for="signature">Signature</label>
        <input type="file" class="form-control" name="signature" id="signature" <?= $isFileRequired ?>>
      </div>
    <?php } ?>


          </div>

          <div class="btn-container">
            <button type="submit" class="submit-btn" id="submitBtn">
              Submit Application <i class="fas fa-paper-plane"></i>
              <div class="loading" id="loadingSpinner"></div>
            </button>
          </div>

          <div class="privacy-notice">
            <p>Design & Develop by: <span><a href="www.masteritsolution.com.bd" target="_blank">» Master IT Solution</a></span></p>
          </div>
        </form>

        <?php }
      } ?>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('dynamicForm');
      const submitBtn = document.getElementById('submitBtn');
      const loadingSpinner = document.getElementById('loadingSpinner');
      const successMessage = document.getElementById('successMessage');
      
      // File upload preview functionality
      const fileInputs = document.querySelectorAll('.file-upload-input');
      
      fileInputs.forEach(input => {
        input.addEventListener('change', function() {
          const previewId = this.id + '-preview';
          const preview = document.getElementById(previewId);
          
          if (this.files && this.files[0]) {
            const file = this.files[0];
            
            // Check file size (max 2MB)
            if (file.size > 2 * 1024 * 1024) {
              alert('File size must be less than 2MB');
              this.value = '';
              preview.style.display = 'none';
              return;
            }
            
            // Check file type
            if (!file.type.match('image.*')) {
              alert('Please select an image file');
              this.value = '';
              preview.style.display = 'none';
              return;
            }
            
            const reader = new FileReader();
            
            reader.onload = function(e) {
              preview.innerHTML = `<img src="${e.target.result}" alt="Preview"><p>${file.name}</p>`;
              preview.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
          }
        });
      });
      // Mobile No validation
const mobileInput = form.querySelector('#mobile_no');
if (mobileInput && mobileInput.value) {
  const mobilePattern = /^[0-9]{11}$/;
  if (!mobilePattern.test(mobileInput.value)) {
    isValid = false;
    mobileInput.classList.add('error');
    alert('Mobile number must be exactly 11 digits.');
  } else {
    mobileInput.classList.remove('error');
  }
}

      // Form submission handling
      form.addEventListener('submit', function(e) {
        // Basic validation
        let isValid = true;
        const requiredInputs = form.querySelectorAll('input[required], select[required]');
        
        requiredInputs.forEach(input => {
          if (!input.value.trim()) {
            isValid = false;
            input.classList.add('error');
          } else {
            input.classList.remove('error');
          }
        });
        
        // Email validation
        const emailInput = form.querySelector('input[type="email"]');
        if (emailInput && emailInput.value) {
          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(emailInput.value)) {
            isValid = false;
            emailInput.classList.add('error');
          } else {
            emailInput.classList.remove('error');
          }
        }
        
        if (!isValid) {
          e.preventDefault();
          alert('Please fill all required fields correctly.');
          return;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        loadingSpinner.style.display = 'inline-block';
        submitBtn.querySelector('i').style.display = 'none';
        
        // In a real application, you would let the form submit naturally
        // This is just for demonstration
        setTimeout(function() {
          // successMessage.style.display = 'block';
          // form.reset();
          // submitBtn.disabled = false;
          // loadingSpinner.style.display = 'none';
          // submitBtn.querySelector('i').style.display = 'inline-block';
        }, 2000);
      });
    });
  </script>
</body>
</html>

<script>
  $(function() {
    $( "#date_of_birth" ).datepicker({
      dateFormat: "yy-mm-dd",   // Date format in "yyyy-mm-dd" format
      setDate: new Date(),       // Set default date to today's date
      changeMonth: true,         // Allow changing the month
      changeYear: true           // Allow changing the year
    });
  });
</script>

