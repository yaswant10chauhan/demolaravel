<!doctype html>
<html>
	<head>
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
	<title>Login(Bidder)</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="https://www.deal4loans.com/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all" />
	<script Language="JavaScript" Type="text/javascript" src="../scripts/common.js"></script>
	<link href="../includes/style1.css" rel="stylesheet" type="text/css">
	<style>
		.bidderclass {
			Font-family: Comic Sans MS;
			font-size: 13px;
		}
		.style1 {
			font-family: verdana;
			font-size: 12px;
			font-weight: bold;
			color: #084459;
		}
	</style>
	<Script Language="JavaScript">
		function validateMe(theFrm) {
			if (!checkData(theFrm.callerName, 'Name', 4))
			{
				return false;
			}
			if (!checkData(theFrm.Email, 'Email', 4))
			{
				return false;
			}
			var str = theFrm.Email.value
			var aa = str.indexOf("@")
			var bb = str.indexOf(".")
			var cc = str.charAt(aa)
			if (aa == -1)
			{
				alert("Please enter the valid Email Address");
				theFrm.Email.focus();
				return false;
			} else if (bb == -1)
			{
				alert("Please enter the valid Email Address");
				theFrm.Email.focus();
				return false;
			}
			if (!checkData(theFrm.PWD, 'Password', 3))
				return false;

			return true;
		}
	</Script>
	<style>
		body{background-color: #45B2D8;}
		.lms-navigation-bar {
			background: #0c4669;
			padding-bottom: .2rem;
			position: fixed;
			width: 100%;
			z-index: 999;
			min-height: 6.2rem;
			top: 0;
		}
		.lms-navigation-bar img{margin-top:1rem; }
		.lms-form{max-width:40rem; position: relative; padding:2rem;  min-height:20rem; border-radius:5px; background:#fff; margin:15rem auto;   -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);}
		.lms-form h1{font-size:1.6rem; font-weight: 600; margin:0rem auto 2rem; text-align: center; color: #173c52;}
		.lms-form input{ width:90%; margin:auto; display: block; border-radius:50px; height:50px; background:#e4edf1; padding-left: 1.5rem; border:none;  }
		.lms-form input:focus, .lms-form button{outline:none; }
		.lms-form button{ width:90%; margin:auto; display: block; border-radius:50px; height:50px; background:#0c4669 ; padding-left: 1.5rem; border:none; color:#fff;   }
		.lms-form span{display: block; width:100px; margin:2rem auto;}
		.lms-form span img{width:100px; height:100px; border: #b2dcec solid thin; border-radius:50px;   }
	</style>
	</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')
    </div>
</body>
</html>
