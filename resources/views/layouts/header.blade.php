<!DOCTYPE html>
<html> 
<head>
	<title>HARPA 4</title>

	<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>
<body>
	<div class="body">
			<nav>
				<ul>
				  @If (Auth::guest())
					<li><a style="border-right:1px solid #fdd100;" href="{{ url('/') }}">BERANDA</a></li>
					<li><a href="{{ url('/galeri') }}">GALERI</a></li>
					<li class="journey"><center><img href="index.php" align="center" class="logo" src="{{ asset('assets') }}/img/harpa.png" alt="harpa"></li></center>
					<li><a style="border-right:1px solid #fdd100;" href="{{ url('/anggota') }}">ANGGOTA</a></li>
					<li><a href="{{ url('/login') }}">LOGIN</a></li>
				  @else
				  	<li><a style="border-right:1px solid #fdd100;" href="{{ url('/') }}">BERANDA</a></li>
					<li><a href="{{ url('/galeri') }}">GALERI</a></li>
					<li class="journey"><center><img href="index.php" align="center" class="logo" src="{{ asset('assets') }}/img/harpa.png" alt="harpa"></li></center>
					<li><a style="border-right:1px solid #fdd100;" href="{{ url('/anggota') }}">ANGGOTA</a></li>
					<li><a href="{{ url('/logout') }}">LOGOUT</a></li>
				  @endif
				</ul>
			</nav>
	</div>
</body>
</html>