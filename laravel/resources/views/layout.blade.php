<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<div class="hero">
		<header>
			@section('header')
				<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/index.html" class="logo">Fantasy Gaming</a>
				<nav>
					<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/sign-up.html">Sign Up</a>
					<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/sign-in.html">Log In</a>
					<a href="/logout">Log Out</a>
					<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/profile.html">Profile</a>
				</nav>
			@show
		</header>
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
					<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/profile.html">Profile</a>
				</nav>
			</footer>
		@show
	</div>
</body>
</html>