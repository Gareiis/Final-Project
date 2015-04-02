@extends('layout')

{{-- @section('header') --}}
{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="Javascript/final.js"></script> --}}
{{-- @endsection --}}

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
	{{-- {{dd($comments)}} --}}
	@foreach ($comments as $c)
		<div class="comment">
			<div>
				<div>{{$c->comment_body}}</div>
			</div>
		</div>
	@endforeach
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