@extends('layout')


@section('sub-header')
<div class="profile-head">
	<h2>Welcome To Your Profile Page</h2>
</div>
@endsection


@section('main_content')
<div class="profle">
	<div class="profile-pic">
		<img src="images/sample-profile.jpg" height="250" width="250" alt="">
	</div>
	<div class="user-details">
		<div>Username: Gareiis</div>
		<div>Likes: Movies, Gaming, Coding</div>
		<div>Dislikes: Bad Games</div>
	</div>
</div>
@endsection