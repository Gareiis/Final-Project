@extends('layout')


@section('sub-header')
	<div class="mission">
		<h2>Welcome to Fantasy Gaming</h2>
		<div>This is your first stop on the journey to create your very own video game.</div>
		</div>
	<div class="create">
		<a href="game-create">Create your dream game!</a>
	</div>
	<div class="lightbox1">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dolore nihil doloremque dicta blanditiis perferendis officiis consequuntur voluptate maxime fugiat rerum est numquam, porro repudiandae cupiditate mollitia culpa. Atque, ab!
	</div>	
	<div class="lightbox2">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dolore nihil doloremque dicta blanditiis perferendis officiis consequuntur voluptate maxime fugiat rerum est numquam, porro repudiandae cupiditate mollitia culpa. Atque, ab!
	</div>	
@endsection


@section('main_content')
	<div class="main-content">
		<div class="game-links">
			<div>
				<a href="/game-details/80">Game 1</a>
			</div>
			<div>
				<a href="/game-details/90">Game 2</a>
			</div>
			<div>
				<a href="/game-details">Game 3</a>
			</div>
			<div>
				<a href="/game-details">Game 4</a>
			</div>
			<div>
				<a href="/game-details">Game 5</a>
			</div>
			<div>
				<a href="/game-details">Game 6</a>
			</div>	
			<div>
				<a href="/game-details">Game 7</a>
			</div>	
			<div>
				<a href="/game-details">Game 8</a>
			</div>	
			<div>
				<a href="/game-details">Game 9</a>
			</div>
		</div>
	</div>
@endsection
