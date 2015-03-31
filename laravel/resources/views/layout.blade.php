<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ url('css/home.css') }}">
	{{-- {{ HTML::style('css/home.css') }} --}}
</head>
<body>
	<div class="hero">
		@section('header')
			<header>
					<a href="/" class="logo">Fantasy Gaming</a>
					<nav>
						<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/sign-up.html">Sign Up</a>
						<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/sign-in.html">Log In</a>
						<a href="/logout">Log Out</a>
						<a href="profile">Profile</a>
					</nav>
			</header>
		@show
	</div>
	<div class="sub-header">
		@yield('sub-header')
	</div>
	<main>
		@yield('main_content')
	</main>
	<div class="foot">
		@section('footer')
			<footer>
				<nav>
					<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/sign-up.html">Sign Up</a>
					<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/sign-in.html">Log In</a>
					<a href="/logout">Log Out</a>
					<a href="profile">Profile</a>
				</nav>
			</footer>
		@show
	</div>
</body>
</html>