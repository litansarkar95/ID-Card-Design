<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel</title>
</head>
<body>
    <h1>Import Excel File</h1>
    
    <?php echo form_open_multipart('import/import_excel'); ?>
    
    <label for="excel_file">Select Excel file (XLSX):</label>
    <input type="file" name="excel_file" id="excel_file" accept=".xls, .xlsx" required>
    
    <button type="submit">Upload and Import</button>
    
    <?php echo form_close(); ?>
    
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>
</body>
</html>
