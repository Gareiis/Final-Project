@extends('layout')

@section('header')
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="Javascript/final.js"></script>
@endsection

@section('sub-header')
<div class="plot-head">
	<div class="plot-head">
		<h2>Plot</h2>
		<div>
			These are all the comments and ideas related to the game's plot.
		</div>
	</div>
</div>
@endsection


@section('main_content')
<div class="comments">
	<div class="comment">
		<div class="profile-picture">
			<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/profile.html"><img src="images/sample-profile.jpg" height="100" width="100" alt=""></a>
		</div>
		@foreach ($comments as $comment)
		<div>{{$comment->comment_body}}</div>
		@endforeach
	</div>
	<div class="comment">
		<div class="profile-picture">
			<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/profile.html"><img src="images/sample-profile.jpg" height="100" width="100" alt=""></a>
		</div>
		<div>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quos, sint libero cupiditate ut iste quidem quia. Unde adipisci dignissimos voluptates quae repudiandae, architecto, odio blanditiis pariatur exercitationem minima id.
		</div>
	</div>
</div>

	<header>
		<form method="POST" action="/plot/addcomment" class="compose">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<textarea placeholder="Write new comment..." cols="50" rows="10" name="comment_body"></textarea>
			<div>
			<button>Comment</button>
			</div>
		</form>
	</header>
	

	<script id="template-compose" type="text/x-handlebars-template">
		<form class="compose">
			<textarea placeholder="Write new comment..."></textarea>
			<div>
				<button>Send</button>
			</div>
		</form>
	</script>
@endsection