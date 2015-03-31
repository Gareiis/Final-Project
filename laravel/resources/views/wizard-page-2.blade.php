@extends('layout')



@section('sub-header')
<div class="wizard-page1-head">
	<h2>Choose Your Game Objective</h2>
	<a href="/wizard1">Back</a>
</div>
@endsection


@section('main_content')
<div class="gallery">
	<form action="/wizard2/add" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="game_id" value="{{$game_id}}">
		<div class="search">
			<h3>
				Capture/Destory
			</h3>
			<div>
				Choosing Capture or Destroy means that the main objective in your game is to seek out and either capture or destroy something.
			</div>
			<input name="objective" value="1" type="image" src="/images/destroy.jpg" alt="Submit">
		</div>
		<div class="Solve">
			<h3>
				Solve
			</h3>
			<div>
				Choosing Solve is essentially a puzzle type game, the main objective of your game is to solve whatever challenges or puzzles are presented.
			</div>
			<input name="objective" value="2" type="image" src="/images/solve.jpg" alt="Submit">
		</div>	
		<div class="Explore">
			<h3>
				Explore
			</h3>
			<div>
				Choosing Explore means that the main objective in your game is to explore the world and discover everything there is to discover.
			</div>
			<input name="objective" value="3" type="image" src="/images/explore.jpg" alt="Submit">
		</div>	
		<div class="Score">
			<h3>
				Score
			</h3>
			<div>
				Choosing Score means that the main objective is to get the best possible score, highest rank, most points, etc.
			</div>
			<input name="objective" value="4" type="image" src="/images/score.jpg" alt="Submit">
		</div>
	</form>
</div>
@endsection