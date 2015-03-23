@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="wiz3-head">
	<h3>Describe The Rules Of Your Game</h3>
	<div>
		Here you can describe any specific rules you have for your game.  This can be anything you would like.
	</div>
</div>
@endsection


@section('main_content')
	<form action="wizard4" class="game-create">
		<textarea placeholder="Describe your rules" name="" id="" cols="100" rows="50"></textarea><br>
		<button>Next</button>
	</form>
@endsection