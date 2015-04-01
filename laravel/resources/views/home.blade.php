@extends('layout')
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ url('css/home.css') }}">
	{{-- {{ HTML::style('css/home.css') }} --}}
	<link href='http://fonts.googleapis.com/css?family=Lato:300,700|Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>

@section('sub-header')
	<div class="mission">
		<h2>Welcome to Fantasy Gaming</h2>
		<div>This is your first stop on the journey to create your very own video game.</div>
		</div>
	<div class="lightbox1">
		Our mission here at Fantasy Gaming is very simple, we want you to be able to create the game of your dreams. To get started click create your dream game below!  Or if you want to check out some games that are already in production click on one below.
	</div>	
	<div class="lightbox2">
		Don't worry if you don't have a fully completed idea for your game, thats what we are here for!  Once you get started our step by step wizard will walk you through the basic setup for a game.  After that our community will provide you with feedback and ideas for your game with comments!
	</div>	
@endsection
@section('banner')
	<div class="banner">
		<div class="create">
			<a href="/game-create">Create your dream game!</a>
		</div>
	</div>
@endsection
@section('main_content')
	<div class="main-content">
		@foreach($games as $g)
			<div class="game-links">
				<div>
					<a href="/game-details/90">Extreme Puzzle Mastery</a>
				</div>
				<div>
					<a href="/game-details">Sniper Elite</a>
				</div>
				<div>
					<a href="/game-details">How To Slay Your Dragon</a>
				</div>
				<div>
					
						<a href="/game-details/1">{{$g->name}}</a>
				
				</div>
			</div>
		@endforeach
	</div>
@endsection
