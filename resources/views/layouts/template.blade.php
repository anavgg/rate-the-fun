<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('img/logo-1.png') }}" alt="" class="d-inline-block align-top navbar-brand-img logo-img" style="height: 30px;">
        <h5 class="ml-2 mb-0">RateTheFun</h5>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Movies</a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <div class="relative">
            <input type="text" class="form-control bg-gray-800 rounded-full w-100 px-4 py-2 focus:outline-none focus:shadow-outline" placeholder="Search">
          </div>
          <img src="{{ asset('img/icon.png') }}" alt="" class="ml-2" style="height: 25px;">
        </div>
      </div>
    </div>
  </nav>
  @yield('content')
</body>
</html>