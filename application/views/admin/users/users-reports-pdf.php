<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>General Invoice</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f8f9fa;
    }
    .invoice-container {
       
        background: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
    }
    h3 {
        font-weight: 600;
        margin-bottom: 0;
    }
    table th, table td {
        vertical-align: middle !important;
        font-size: 11px;
    }
    .img-circle {
        border-radius: 50%;
        object-fit: cover;
    }
    @media print {
        .btn-group { display: none !important; }
        body { background: #fff; }
        .invoice-container { border: none; }
    }

    @media print {
    @page {
        size: A4 landscape; /* landscape orientation */
        margin: 10mm;
    }

    body {
        background: #fff;
        font-size: 10px;
        zoom: 80%; /* Optional: shrink everything to fit page */
    }

    .invoice-container {
        border: none;
        box-shadow: none;
        margin: 0;
        padding: 0;
    }

    .btn-group {
        display: none !important;
    }

    table {
        font-size: 9px !important;
    }

    table th, table td {
        padding: 4px 6px !important;
        white-space: nowrap !important;
    }

}
@media print {
    .table-responsive {
        overflow: visible !important;
    }
}
table th, table td {
    padding: 4px 6px !important;
    vertical-align: top !important; /* Optional: top align করলে ফাঁকা কম দেখায় */
    font-size: 10px;
}

</style>
</head>
<body>

<div class="container-fluid invoice-container shadow-sm">
    <!-- Header -->
    <div class="text-center mb-3">
        <?php if(isset($allCat)){ foreach($allCat as $cat){ ?>
            <h3 class="text-uppercase"><?php echo $cat->name; ?></h3>
            <p class="mb-0">Mobile No: <?php echo $cat->mobile_no; ?> , Email: <?php echo $cat->email; ?> <br> <?php echo $cat->address; ?></p>
        <?php }} ?>
    </div>

    <!-- Title -->
    <div class="text-center fw-bold text-uppercase mb-3">  <?php if (!empty($allPdt[0])) echo $allPdt[0]->title; ?>
  <hr></div>
  <!-- Footer -->
    <footer class="text-center mt-4">
        <div class="btn-group btn-group-sm d-print-none">
            <a href="javascript:window.print()" class="btn btn-dark shadow-sm">
                <i class="fa fa-print"></i> Print & Download
            </a>
        </div>
    </footer><br>
    <!-- Table -->
    <div class="table-responsive">
     <table class="table table-bordered table-striped">
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
        'class_name' => 'Class Name',
        'class_roll' => 'Class Roll',
        'sessions_name' => 'Sessions',
        'date_of_birth' => 'Date of Birth',
        'blood_group' => 'Blood group',
        'id_number' => 'ID No',
        'nationality' => 'Nationality',
    ];
    ?>
    <thead class="table-light text-center">
        <tr>
            <th>SrNo</th>
            <?php foreach ($fields as $field => $label): ?>
                <?php $flag = "is_" . $field; ?>
                <?php if (!empty($allFields[0]->$flag)): ?>
                    <th class="text-center"><?= $label ?></th>
                <?php endif; ?>
            <?php endforeach; ?>
            <th>Picture</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 1;
        if (!empty($allPdt)) {
            foreach ($allPdt as $pdt) {
        ?>
        <tr>
            <td class="text-center"><?= $i++; ?></td>

            <?php foreach ($fields as $field => $label): ?>
                <?php $flag = "is_" . $field; ?>
                <?php if (!empty($allFields[0]->$flag)): ?>
                    <td class="text-center"><?= !empty($pdt->$field) ? $pdt->$field : '-' ?></td>
                <?php endif; ?>
            <?php endforeach; ?>

            <td class="text-center">
                <?php if (!empty($pdt->photo)): ?>
                    <img src="<?= base_url("public/static/images/users/" . $pdt->photo) ?>" width="40" height="40" class="img-circle" alt="">
                <?php else: ?>
                    <span>-</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php 
            }
        } else {
            echo '<tr><td colspan="' . (count($fields)+2) . '" class="text-center">No data found</td></tr>';
        }
        ?>
    </tbody>

</table>

    </div>

  
</div>

</body>
</html>
