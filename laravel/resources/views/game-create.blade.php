@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="game-create-head">
	<h2>Create An Amazing Game</h2>
</div>
@endsection


@section('main_content')
	<form method="POST" action="game-create/add">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Game Type: <select name="genre" id="">
			<option value="1">Role Playing Game</option>
			<option value="2">First Person Shooter </option>
			<option id="3">Real Time Strategy</option>
			<option value="4">Action Adventure</option>
			<option valeu="5">Massive Multiplayer Online</option>
		</select><br>
		<textarea placeholder="Write your game vision here" name="vision" id="" cols="100" rows="50"></textarea><br>
		<button>Next</button>
	</form>
@endsection