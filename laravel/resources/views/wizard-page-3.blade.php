@extends('layout')


@section('sub-header')
<div class="wiz3-head">
	<a href="/wizard2">Back</a>
	<h3>Describe The Rules Of Your Game</h3>
	<div>
		Here you can describe any specific rules you have for your game.  This can be anything you would like.
	</div>
</div>
@endsection


@section('main_content')
	<form action="/wizard3/add" method="POST" class="game-create">
		<input type="hidden" name="game_id" value="{{$game_id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<textarea placeholder="Describe your rules" name="rules" id="" cols="100" rows="50"></textarea><br>
		<button>Next</button>
	</form>
@endsection