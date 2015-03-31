@extends('layout')



@section('sub-header')
<div class="wizard-page1-head">
	<h2>Choose Your Game Format</h2>
	<a href="/game-create">Back</a>
</div>
@endsection


@section('main_content')
	<div class="gallery">
		<form method="POST" action="/wizard1/add">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="game_id" value="{{$game_id}}">
			<div class="singleplayer">
				<h3>
					Singleplayer
				</h3>
				<div>
					Choosing Singleplayer means just that, your game can only be played by one person
				</div>
				<input name="format" value="1" type="image" src="/images/singleplayer.jpg" alt="Submit">
			</div>
			<div class="multiplayer">
				<h3>
					Multiplayer
				</h3>
				<div>
					Choosing Multiplayer means that multiple people can play your game, generally more than 2 people.
				</div>
				<input name="format" value="2" type="image" src="/images/multiplayer.png" alt="Submit">
			</div>	
			<div class="splitscreen">
				<h3>
					Co-op
				</h3>
				<div>
					Choosing Co-op means that your game is going to be played by you and a friend.
				</div>
				<input name="format" value="3" type="image" src="/images/splitscreen.jpg" alt="Submit">
			</div>	
			<div class="head-to-head">
				<h3>
					Head-To-Head
				</h3>
				<div>
					Choosing Head-To-Head means that your game pits players against each other in a 1v1 style.
				</div>
				<input name="format" value="4" type="image" src="/images/headtohead.jpg" alt="Submit">
			</div>
		</form>
	</div>
</div>
@endsection