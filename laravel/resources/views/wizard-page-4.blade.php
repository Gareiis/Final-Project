@extends('layout')


@section('sub-header')
<div class="wiz3-head">
	<a href="/wizard3">Back</a>
	<h3>
		What Is The Setting Of Your Game?
	</h3>
	<div>
		Here you can describe your games setting.  What universe does it take place in?  What time period? 
	 </div>
</div>
@endsection


@section('main_content')
	<form class="gamesetting" method="POST" action="/wizard4/add" class="game-create">
		<input type="hidden" name="game_id" value="{{$game_id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<textarea placeholder="Describe your setting" name="setting" id="" cols="100" rows="50"></textarea><br>
		<button>Finish</button>
	</form>
@endsection