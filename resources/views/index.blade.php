<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      margin-top: 50px;
    }

    h1 {
      color: #FF6F61;
      text-align: center;
      margin-bottom: 30px;
    }

    .btn-add-user {
      margin-bottom: 20px;
    }

    .table {
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    th {
      background-color: #FF6F61;
      color: white;
      text-align: center;
    }

    td {
      text-align: center;
      vertical-align: middle;
    }

    .btn-primary {
      background-color: #4CAF50;
      border-color: #4CAF50;
    }

    .btn-primary:hover {
      background-color: #45a049;
      border-color: #45a049;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
  </style>
</head>

<body>
  <div class="container">
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <h1>List of Users</h1>
    <div class="d-flex justify-content-between align-items-center">
      <a href="/create" class="btn btn-success btn-add-user">Add User</a>
    </div>
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Work</th>
          <th>QR Code</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->lastname }}</td>
          <td>{{ $user->address }}</td>
          <td>{{ $user->phonenumber }}</td>
          <td>{{ $user->work }}</td>
          <td>
            <!-- QR Code Button -->
            <a href="{{ url('/qrcode/'.$user->id) }}" class="btn btn-primary">View QR Code</a>
          </td>
          <td>
            <!-- Delete Button -->
            <form action="{{ url('/users/'.$user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>