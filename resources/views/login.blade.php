@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
    <form method="POST" action="{{ route('login') }}">
  <div class="mb-3">
    <label class="form-label">Username</label>
    @csrf <input type="text" name="username" class="form-control"
    value="{{ request()->cookie('username') ?? '' }}" required>
  </div>

  <div class="form-check mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" name="remember" class="form-check-input">
    <label class="form-check-label" for="rememberMe">Remember Me</label>
  </div>

  <button type="submit" class="btn  btn-warning w-100">
    Login
  </button>

  <div class="text-center mt-3">
    <a href="../index.php" class="text-white">Kembali ke beranda</a>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>


