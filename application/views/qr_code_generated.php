  <!-- Loop through each QR code image and display it -->
  <?php if (!empty($qr_code_images)): ?>
            <div class="qr-codes">
                <?php foreach ($qr_code_images as $index => $image): ?>
                    <div class="qr-code">
                        <h3>QR Code for User <?php echo $index + 1; ?></h3>
                        <img src="<?php echo base_url($image); ?>" alt="Generated QR Code for User <?php echo $index + 1; ?>">

                        <!-- Optional: Display user details like name -->
                        <div class="user-info">
                            <strong>User <?php echo $index + 1; ?>:</strong><br>
                            Name: <?php echo ucwords(str_replace('_', ' ', basename($image, '_vcard.png'))); ?><br>
                            Email: <?php echo ucfirst(explode('@', $users[$index]['email'])[0]); ?><br>
                            Phone: <?php echo $users[$index]['phone']; ?><br>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No QR codes generated yet.</p>
        <?php endif; ?>