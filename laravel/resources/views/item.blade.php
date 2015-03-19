@extends('layout')

@section('header')
@endsection

@section('sub-header')
<div class="item-head">
	<h2>Items</h2>
	<div>
		These are all the comments and ideas related to items.  The most popular of these will be right at the top.
	</div>
</div>
@endsection


@section('main_content')
<div class="comment">
	<div class="profile-picture">
		<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/profile.html"><img src="images/sample-profile.jpg" height="100" width="100" alt=""></a>
	</div>
	<div>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quos, sint libero cupiditate ut iste quidem quia. Unde adipisci dignissimos voluptates quae repudiandae, architecto, odio blanditiis pariatur exercitationem minima id.
	</div>
</div>
<div class="comment">
	<div class="profile-picture">
		<a href="file:///home/keith/sites/localhost/final-project-test/final-project-test/profile.html"><img src="images/sample-profile.jpg" height="100" width="100" alt=""></a>
	</div>
	<div>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quos, sint libero cupiditate ut iste quidem quia. Unde adipisci dignissimos voluptates quae repudiandae, architecto, odio blanditiis pariatur exercitationem minima id.
	</div>
</div>
<button>Add Comment</button>
@endsection