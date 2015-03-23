@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="wiz3-head">
	<h3>
		What Is The Setting Of Your Game?
	</h3>
	<div>
		Here you can describe your games setting.  What universe does it take place in?  What time period? 
	 </div>
</div>
@endsection


@section('main_content')
	<form action="/profile" class="game-create">
		<textarea placeholder="Describe your setting" name="" id="" cols="100" rows="50"></textarea><br>
		<button>Finish</button>
	</form>
@endsection