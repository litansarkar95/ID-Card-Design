<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ID Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Noto Sans Bengali', 'Roboto', sans-serif;
      background: #fff;
      margin: 0;
      padding: 20px;
    }

    .page {
      width: 8.27in;
      height: 11.69in;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 0.2in;
      margin: 0 auto;
    }

    .card {
      width: 3.375in;
      height: 2.125in;
      border: 1px solid #ddd;
      padding: 10px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      page-break-inside: avoid;
    }

    .front, .back {
      background-color: #fefefe;
    }

    .logo-section {
      text-align: center;
    }

    .logo {
      width: 40px;
      height: 40px;
    }

    .org-name {
      font-size: 14px;
      margin: 5px 0 2px;
    }

    .tagline {
      font-size: 10px;
      color: #555;
    }

    .photo-section {
      text-align: center;
      margin: 6px 0;
    }

    .user-photo {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 2px solid #ccc;
    }

    .info-section {
      font-size: 9px;
      line-height: 1.3;
    }

    .name {
      font-size: 12px;
      font-weight: bold;
      margin-bottom: 3px;
    }

    .qr-section {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
    }

    .qr {
      width: 35px;
      height: 35px;
    }

    .back h3 {
      font-size: 12px;
      margin-bottom: 5px;
    }

    .back ul {
      font-size: 9px;
      padding-left: 15px;
      margin: 0 0 6px;
    }

    .validity {
      font-size: 9px;
      margin-bottom: 8px;
    }

    .signature-section {
      text-align: center;
      margin-bottom: 5px;
    }

    .signature {
      width: 60px;
      height: auto;
    }

    .contact-section {
      font-size: 8px;
      color: #333;
      text-align: center;
    }

    .print-btn {
      display: block;
      margin: 20px auto;
      padding: 10px 25px;
      background: #007bff;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    @media print {
      .print-btn {
        display: none;
      }

      body {
        margin: 0;
        padding: 0;
        background: white;
      }

      .page {
        gap: 0;
      }

      .card {
        page-break-inside: avoid;
        break-inside: avoid;
      }
    }
  </style>
</head>
<body>

<button class="print-btn" onclick="window.print()">🖨️ প্রিন্ট করুন</button>

<div class="page">
  <!-- Front Side -->
  <div class="card front">
    <div class="logo-section">
      <img src="images/logo.png" alt="Logo" class="logo">
      <h2 class="org-name">প্রতিষ্ঠানের নাম</h2>
      <p class="tagline">স্লোগান বা tagline এখানে</p>
    </div>

    <div class="photo-section">
      <img src="images/user.jpg" alt="User Photo" class="user-photo">
    </div>

    <div class="info-section">
      <div class="name">মোঃ আরিফ হোসেন</div>
      <div>পদবি: শিক্ষার্থী</div>
      <div>ID: 123456</div>
      <div>রক্তের গ্রুপ: B+</div>
      <div>জন্ম তারিখ: ০১ জানুয়ারি ২০০৫</div>
      <div>ক্লাস: দশম</div>
      <div>রোল: ১০</div>
      <div>সেশন: ২০২৪-২৫</div>
    </div>

    <div class="qr-section">
      <img src="images/qr-code.png" alt="QR Code" class="qr">
    </div>
  </div>

  <!-- Back Side -->
  <div class="card back">
    <h3>শর্তাবলী</h3>
    <ul>
      <li>এই কার্ডটি সবসময় সাথে রাখতে হবে।</li>
      <li>হারিয়ে গেলে কর্তৃপক্ষকে জানাতে হবে।</li>
      <li>অন্য কাউকে প্রদান করা যাবে না।</li>
    </ul>

    <div class="validity">কার্ডের মেয়াদ: ৩১ ডিসেম্বর ২০২৫</div>

    <div class="signature-section">
      <img src="images/signature.png" alt="Signature" class="signature">
      <p>প্রধান শিক্ষক</p>
    </div>

    <div class="contact-section">
      <p>ইমেইল: info@example.com</p>
      <p>ওয়েবসাইট: www.example.com</p>
    </div>
  </div>

</div>

</body>
</html>
