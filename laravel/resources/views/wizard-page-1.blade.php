@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="wizard-page1-head">
	<h2>Choose Your Game Format</h2>
</div>
@endsection


@section('main_content')
<div class="gallery">
	<div class="singleplayer">
		<h3>
			Singleplayer
		</h3>
		<div>
			Choosing Singleplayer means just that, your game can only be played by one person
		</div>
		<a href="wizard2"><img src="images/singleplayer.jpg" width="400" height="400" alt=""></a>
	</div>
	<div class="multiplayer">
		<h3>
			Multiplayer
		</h3>
		<div>
			Choosing Multiplayer means that multiple people can play your game, generally more than 2 people.
		</div>
		<a href="wizard2"><img src="images/multiplayer.png" width="400" height="400" alt=""></a>
	</div>	
	<div class="splitscreen">
		<h3>
			Co-op
		</h3>
		<div>
			Choosing Co-op means that your game is going to be played by you and a friend.
		</div>
		<a href="wizard2"><img src="images/splitscreen.jpg" width="400" height="400" alt=""></a>
	</div>	
	<div class="head-to-head">
		<h3>
			Head-To-Head
		</h3>
		<div>
			Choosing Head-To-Head means that your game pits players against each other in a 1v1 style.
		</div>
		<a href="wizard2"><img src="images/headtohead.jpg" width="400" height="400" alt=""></a>
	</div>
</div>
@endsection