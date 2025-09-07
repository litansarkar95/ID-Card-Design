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
        max-width: 900px;
        background: #fff;
        padding: 20px;
        margin: 30px auto;
        border: 1px solid #dee2e6;
        border-radius: 8px;
    }
    h3 {
        font-weight: 600;
        margin-bottom: 0;
    }
    table th, table td {
        vertical-align: middle !important;
        font-size: 14px;
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
</style>
</head>
<body>

<div class="container-fluid invoice-container shadow-sm">
    <!-- Header -->
    <div class="text-center mb-3">
        <?php if(isset($allCat)){ foreach($allCat as $cat){ ?>
            <h3 class="text-uppercase"><?php echo $cat->name; ?></h3>
            <p class="mb-0"><?php echo $cat->mobile_no; ?> <br> <?php echo $cat->address; ?></p>
        <?php }} ?>
    </div>

    <!-- Title -->
    <div class="text-center fw-bold text-uppercase mb-3">List</div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light text-center">
                <tr>
                    <th>SrNo</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1; 
                if(isset($allPdt)){ foreach($allPdt as $pdt){ ?>
                <tr>
                    <td class="text-center"><?php echo $i++; ?></td>
                    <td><?php echo $pdt->name_en ?> <br><small class="text-muted"><?php echo $pdt->name_bn ?></small></td>
                    <td class="text-center"><?php echo $pdt->mobile_no ?></td>
                    <td><?php echo $pdt->email ?></td>
                    <td class="text-center">
                        <img src="<?php echo base_url()."public/static/images/users/$pdt->photo"?>" width="40" height="40" class="img-circle" alt="">
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4">
        <div class="btn-group btn-group-sm d-print-none">
            <a href="javascript:window.print()" class="btn btn-dark shadow-sm">
                <i class="fa fa-print"></i> Print & Download
            </a>
        </div>
    </footer>
</div>

</body>
</html>
