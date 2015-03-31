@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="game-details-head">
	<h2>About The Game</h2>
	<div>
		Here you can read about the details of this game.  Be sure to check in often to see if changes have been made.  You can also check out certain compenents of the game and even comment your own ideas!
	</div>
</div>
@endsection


@section('main_content')
	<div class="game-details">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, praesentium assumenda nesciunt deleniti, eveniet voluptates sunt quisquam nisi ducimus quam quasi cumque, obcaecati hic molestias. Ex adipisci, officia fugit eligendi.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut doloremque maxime tempora eveniet error quis quibusdam illum velit, provident numquam molestias qui possimus in, quae officiis, ipsam commodi autem.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi vitae debitis quidem ipsum consequatur repellat! Ad quo architecto, laboriosam voluptatem provident deserunt alias harum nihil laudantium voluptatibus eius ut optio.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem iusto atque deleniti sunt nihil repudiandae ea, officia voluptatibus eligendi neque quod deserunt odit doloribus doloremque rem error, enim tenetur. At?
		</p>
	</div>
	<div class="game-components">
		<h3>
			<a href="/plot">Plot</a>
		</h3>
		<h3>
			<a href="/combat">Combat</a>
		</h3>
		<h3>
			<a href="/items">Items</a>
		</h3>
		<h3>
			<a href="/npcs">Npc's</a>
		</h3>
	</div>
@endsection