<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Message - MBC Laboratory</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
      max-width: 600px;
      margin: 0 auto;
      background-color: #f1f5f9;
      padding: 0;
    }

    .header {
      background-color: #ffffff;
      padding: 30px 20px 20px 20px;
      text-align: center;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      border-bottom: 1px solid #e2e8f0;
    }

    .header img {
      max-width: 160px;
      height: auto;
      display: block;
      margin: 0 auto 10px;
    }

    .header p {
      color: #1d4ed8;
      font-size: 20px;
      font-weight: bold;
      margin: 0;
    }

    .content {
      background-color: #ffffff;
      padding: 30px 20px;
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
    }

    .content p {
      margin-bottom: 20px;
    }

    .field {
      margin-bottom: 20px;
    }

    .field label {
      font-weight: bold;
      color: #1d4ed8;
      display: block;
      margin-bottom: 5px;
    }

    .field-content {
      background-color: #f8fafc;
      padding: 12px;
      border-radius: 6px;
      border-left: 4px solid #1d4ed8;
      font-size: 15px;
    }

    .footer {
      text-align: center;
      color: #64748b;
      font-size: 13px;
      margin: 25px 0;
    }
  </style>
</head>
<body>

  <div class="header">
    <img src="{{ asset('images/logo-mbc.png') }}" alt="MBC Laboratory Logo">
    <p>New Contact Message</p>
  </div>

  <div class="content">
    <p>You have received a new contact message from the official MBC Laboratory website:</p>

    <div class="field">
      <label>👤 Sender's Name:</label>
      <div class="field-content">{{ $contactData['name'] }}</div>
    </div>

    <div class="field">
      <label>📧 Email Address:</label>
      <div class="field-content">{{ $contactData['email'] }}</div>
    </div>

    <div class="field">
      <label>💬 Message:</label>
      <div class="field-content">{{ nl2br(e($contactData['message'])) }}</div>
    </div>

    <div class="field">
      <label>🕒 Sent At:</label>
      <div class="field-content">{{ now()->format('d M Y, H:i:s') }} WIB</div>
    </div>
  </div>

  <div class="footer">
    <p>This email was sent automatically by the MBC Laboratory system.</p>
    <p>Please reply directly to the sender's email address to respond.</p>
  </div>

</body>
</html>
