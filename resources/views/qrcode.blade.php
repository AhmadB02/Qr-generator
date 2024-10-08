<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #4CAF50;
    }

    .qr-code {
      margin-bottom: 20px;
    }

    .download-button a {
      text-decoration: none;
    }

    .download-button button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .download-button button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>QR Code for {{ $user->name }}</h1>
    <div class="qr-code">
      {!! $qrCode !!}
    </div>
    <div class="download-button">
      <a>
        <button>Download QR Code</button>
      </a>
    </div>
  </div>
</body>

</html>