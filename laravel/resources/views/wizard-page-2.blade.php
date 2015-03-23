@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="wizard-page1-head">
	<h2>Choose Your Game Objective</h2>
</div>
@endsection


@section('main_content')
<div class="gallery">
	<div class="search">
		<h3>
			Capture/Destory
		</h3>
		<div>
			Choosing Capture or Destroy means that the main objective in your game is to seek out and either capture or destroy something.
		</div>
		<a href="wizard3"><img src="images/destroy.jpg" width="400" height="400" alt=""></a>
	</div>
	<div class="Solve">
		<h3>
			Solve
		</h3>
		<div>
			Choosing Solve is essentially a puzzle type game, the main objective of your game is to solve whatever challenges or puzzles are presented.
		</div>
		<a href="wizard3"><img src="images/solve.jpg" width="400" height="400" alt=""></a>
	</div>	
	<div class="Explore">
		<h3>
			Explore
		</h3>
		<div>
			Choosing Explore means that the main objective in your game is to explore the world and discover everything there is to discover.
		</div>
		<a href="wizard3"><img src="images/explore.jpg" width="400" height="400" alt=""></a>
	</div>	
	<div class="head-to-head">
		<h3>
			Score
		</h3>
		<div>
			Choosing Score means that the main objective is to get the best possible score, highest rank, most points, etc.
		</div>
		<a href="wizard3"><img src="images/score.jpg" width="400" height="400" alt=""></a>
	</div>
</div>
@endsection