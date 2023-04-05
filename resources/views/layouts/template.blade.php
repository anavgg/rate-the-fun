<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <livewire:styles>

</head>


<body class="bg-dark text-white">

<style>

        .search-input, .form-check-input {
            border: 2px solid #459C94;
            border-radius: 25px;
            transition: border-color 0.2s ease-in-out;
        }
    
        .search-input:focus{
            border-color: #00FFA1;
            outline: none;
        }

        .btn-custom{
        border: 2px solid #459C94;
        border-radius: 25px;
        transition: border-color 0.2s ease-in-out;
        border-color: #459C94;

      }

      .danger{
        border-color: #DF5658;
      }

      .btn-custom:hover {
        color: #00FFA1;
    }

    .card, .form{
        margin-top: 2rem;
        border: 3px solid #459C94;
    }

    

</style>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('movies.home') }}">
            <img src="{{ asset('img/eye.png') }}" alt="logo" class="d-inline-block align-top navbar-brand-img">
            <h5 class="ml-2 mb-0">RateTheFun</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('movies.home') }}" class="nav-link">Movies</a>
                </li>
            </ul>
            
            <livewire:search-dropdown>
               
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                               </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </li>

                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
  @yield('content')


  <footer>
        <div class="containerFooter d-flex justify-content-center">
            <p class="mr-3">
                made by @anavgg
            </p>
            <a href="https://github.com/" target="_blank" class="bi bi-github mr-2 link"></a>
            <a href="https://www.linkedin.com/in/ana-de-la-vega-591914172/" target="_blank" class="bi bi-linkedin mr-2 link"></a>
        </div>
    </footer>

    <livewire:scripts>
</body>
</html>