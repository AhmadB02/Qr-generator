<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      margin-top: 50px;
      max-width: 600px;
      background-color: #fff;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h1 {
      color: #0066cc;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group label {
      font-weight: bold;
      color: #333;
    }

    .form-control {
      border-radius: 4px;
    }

    .btn-submit {
      display: block;
      width: 100%;
      margin-top: 20px;
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-submit:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Add New User</h1>
    <form action="/post" method="post">
      @csrf
      <div class="form-group mb-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group mb-3">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" required>
      </div>
      <div class="form-group mb-3">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="form-group mb-3">
        <label for="phonenumber">Phone:</label>
        <input type="number" class="form-control" id="phone" name="phonenumber" required>
      </div>
      <div class="form-group mb-3">
        <label for="work">Work:</label>
        <input type="text" class="form-control" id="work" name="work" required>
      </div>
      <button type="submit" class="btn btn-success btn-submit">Submit</button>
    </form>
  </div>
</body>

</html>