<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Check</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Signature Check</h1>
    <input type="file" id="fileInput" accept="image/png">
    <canvas id="signatureCanvas" style="display:none;"></canvas>
    <div id="result"></div>
    <img id="uploadedImage" alt="Uploaded Signature" style="max-width: 100%; margin-top: 20px;">
    <script >

        // script.js
document.getElementById('fileInput').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file && file.type === 'image/png') {
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = new Image();
            img.onload = function () {
                // Display the uploaded image
                document.getElementById('uploadedImage').src = e.target.result;

                const canvas = document.getElementById('signatureCanvas');
                const ctx = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);

                const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const data = imageData.data;

                // Analyze the pixel data
                const threshold = 128; // Brightness threshold
                let darkPixelCount = 0;

                for (let i = 0; i < data.length; i += 4) {
                    const r = data[i];
                    const g = data[i + 1];
                    const b = data[i + 2];

                    // Calculate brightness
                    const brightness = (r + g + b) / 3;

                    if (brightness < threshold) {
                        darkPixelCount++;
                    }
                }

                const isSignature = darkPixelCount / (canvas.width * canvas.height) > 0.5; // 50% dark pixels
                document.getElementById('result').innerText = isSignature ? 'This looks like a signature!' : 'This does not look like a signature.';
            };
            img.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        alert('Please upload a valid PNG image.');
    }
});

    </script>
</body>
</html>
