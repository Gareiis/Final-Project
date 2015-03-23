@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="game-create-head">
	<h2>Create An Amazing Game</h2>
</div>
@endsection


@section('main_content')
	<form action="/wizard1">
		Game Type: <select name="" id="">
			<option value="RPG">Role Playing Game</option>
			<option value="FPS">First Person Shooter </option>
			<option value="RTS">Real Time Strategy</option>
			<option value="AA">Action Adventure</option>
			<option value="MMO">Massive Multiplayer Online</option>
		</select><br>
		<textarea placeholder="Write your game vision here" name="" id="" cols="100" rows="50"></textarea><br>
		<button>Next</button>
	</form>
@endsection