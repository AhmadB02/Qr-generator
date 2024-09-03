<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://unsplash.com/photos/people-sitting-on-chair-in-front-of-table-while-holding-pens-during-daytime-KdeqA3aTnBY') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      margin-bottom: 1.5rem;
      color: #333333;
    }

    .form-group label {
      font-weight: 600;
      color: #555555;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004080;
    }

    .btn-primary:focus,
    .btn-primary.focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2 class="text-center">Admin Login</h2>
    <form method="POST" action="{{ route('admin.login') }}">
      @csrf
      <div class="form-group mb-3">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</body>

</html>