<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root {
      --primary: #3b82f6;
      --primary-dark: #2563eb;
      --gray: #6b7280;
      --error: #dc2626;
      --success: #16a34a;
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
    }

    .form-container {
      max-width: 900px;
      margin: 0 auto;
      background: white;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 1.75rem;
      text-align: center;
      margin-bottom: 0.25rem;
      color: #ef4444;
      font-weight: bold;
    }

    p {
      text-align: center;
      font-size: 1.1rem;
      color: #f59e0b;
      margin-bottom: 2rem;
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
    }

    label {
      font-weight: 500;
      margin-bottom: 0.4rem;
    }

    .form-control {
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #d1d5db;
      border-radius: 0.5rem;
      transition: all 0.2s ease;
    }

    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
      outline: none;
    }

    .form-control.error {
      border-color: var(--error);
    }

    .form-control.success {
      border-color: var(--success);
    }

    .error-message {
      font-size: 0.85rem;
      color: var(--error);
      margin-top: 0.3rem;
    }

    .success-message {
      display: none;
      background: #dcfce7;
      color: #166534;
      padding: 1rem 1.25rem;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
      border-left: 4px solid var(--success);
      font-weight: 500;
    }

    button {
      background: var(--primary);
      color: white;
      padding: 0.75rem 2rem;
      border: none;
      border-radius: 0.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease, box-shadow 0.3s ease;
      margin-top: 2rem;
    }

    button:hover {
      background: var(--primary-dark);
      box-shadow: 0 8px 16px rgba(59, 130, 246, 0.2);
    }

    .privacy-notice {
      font-size: 0.85rem;
      color: var(--gray);
      text-align: center;
      margin-top: 2rem;
      padding-top: 1rem;
      border-top: 1px solid #e5e7eb;
    }

    input[type="file"] {
      font-size: 0.9rem;
    }
    .form-header {
  background: linear-gradient(135deg, #3b82f6, #2563eb); /* Company theme gradient */
  color: white;
  padding: 2rem;
  border-radius: 0.75rem;
  margin-bottom: 2rem;
  text-align: center;
  box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
}

.form-header h1 {
  color: white;
  font-size: 2rem;
  margin-bottom: 0.5rem;
}

.form-header p {
  color: #e0f2fe;
  font-size: 1.1rem;
}

  </style>
</head>
<body>
  <div class="form-container">
    <div class="success-message" id="successMessage">
      ✅ Thank you! Your form has been submitted successfully.
    </div>

    <?php if (isset($allPdt)) {
      foreach ($allPdt as $pdt) { ?>

       <div class="form-header">
  <h1><?= $pdt->title ?></h1>
  <p><?= $pdt->description ?></p>
</div>


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
              'nationality' => 'Nationality',
            ];
            $requiredFields = ['name_en', 'mobile_no', 'email', 'date_of_birth']; // উদাহরণ




           foreach ($fields as $field => $label) {
            $flag = "is_$field";
            if (property_exists($pdt, $flag) && $pdt->$flag == 1) {
              $isRequired = in_array($field, $requiredFields) ? 'required' : '';
              ?>
              <div class="form-group">
                <label for="<?= $field ?>"><?= $label ?></label>
                <input type="text" class="form-control" name="<?= $field ?>" id="<?= $field ?>" value="<?= set_value($field) ?>" <?= $isRequired ?>>
                <?php if ($field === 'mobile_no') echo "<small class='error-message'>" . form_error('mobile_no') . "</small>"; ?>
              </div>
            <?php
            }
          }


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

          <div style="text-align: center;">
            <button type="submit">Submit</button>
          </div>

          <div class="privacy-notice">
            <p>Design & Develop by: <span><a href="www.masteritsolution.com.bd" target="_blank">» Master IT Solution</a></span></p>
          </div>
        </form>

      <?php }
    } ?>
  </div>
</body>
</html>


