@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="sign-in-head">
	<h2>Log In</h2>
</div>
@endsection


@section('main_content')
	<main>
		<form action="" class="sign-in">
			Username:<input type="text"><br>
			Password:<input type="text"><br>
			<button>Log In</button>
		</form>
	</main>
@endsection