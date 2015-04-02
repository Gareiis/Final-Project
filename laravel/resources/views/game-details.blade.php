@extends('layout')


@section('sub-header')
	<div class="game-details-head">
		<h2>About The Game</h2>
		<div>
			Here you can read about the details of this game.  Be sure to check in often to see if changes have been made.  You can also check out certain compenents of the game and even comment your own ideas!
		</div>
	</div>
@endsection


@section('main_content')
	<div class="game-details">
		@if (count($game->genre_id) == 1)
			<p>Role Playing Game</p>
		@endif	
		@if (count($game->genre_id) == 2)
			<p>First Person Shooter</p>
		@endif
		@if (count($game->genre_id) == 3)
			<p>Real Time Strategy</p>
		@endif
		@if (count($game->genre_id) == 4)
			<p>Action Adventure</p>
		@endif
		@if (count($game->genre_id) == 5)
			<p>Massive Multiplayer Online</p>
		@endif
			<p>{{$game->vision}}</p>
		@if (count($game->format_id) == 1)
			<p>Singleplayer</p>
		@endif
		@if (count($game->format_id) == 2)
			<p>Multiplayer</p>
		@endif
		@if (count($game->format_id) == 3)
			<p>Co-Op</p>
		@endif
		@if (count($game->format_id) == 4)
			<p>Head-To-Head</p>
		@endif
		@if (count($game->objective_id) == 1)
			<p>Capture/Destroy</p>
		@endif
		@if (count($game->objective_id) == 2)
			<p>Solve</p>
		@endif
		@if (count($game->objective_id) == 3)
			<p>Explore</p>
		@endif
		@if (count($game->objective_id) == 4)
			<p>Score</p>
		@endif
			<p>{{$game->rules}}</p>
		<p>{{$game->setting}}</p>
	</div>
	<div class="game-components">
		<h3>
			<a href="/plot">Plot</a>
		</h3>
		<h3>
			<a href="/combat">Combat</a>
		</h3>
		<h3>
			<a href="/items">Items</a>
		</h3>
		<h3>
			<a href="/npcs">Npc's</a>
		</h3>
	</div>
@endsection