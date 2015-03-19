@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="sign-up-head">
	<h2>Create Your Profile</h2>
</div>
@endsection


@section('main_content')
	<form action="" class="sign-up">
		First Name:<input type="text"><br>
		Last Name:<input type="text"><br>
		Email:<input class="email-input" type="email"><br>
		Username:<input type="text"><br>
		Password:<input type="text"><br>
		<button>Submit</button>
	</form>
@endsection