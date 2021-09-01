@extends('front.layout.app')
@section('body')

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/news-1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	</header>

	
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Read Our Blog</h2>
					<p>We understand that for many of our members, exercise plays a huge part of your physical and mental wellbeing. And we believe that taking care of that right now has never been more important. To better support you as we get back to the gym, we will be updating our blog regularly to provide you with workout ideas (for the gym and home), wellbeing and nutrition content.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md"> 
				@foreach ($blogs as $post)
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="storage/images/blog/{{$post->post_image}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>{{$post->post_title}}</a></h3>
							<span class="posted_on">{{$post->created_at}}</span>
							<span class="comment"><a href="">2<i class="icon-speech-bubble"></i></a></span>
							<p>{{$post->post_content}}</p>
							<a href="{{$post->post_link}}" class="btn btn-primary">Read More</a>
						</div> 		
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	

	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(frontend/images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
				</div>
			</div>
		</div>
	</div>
	@endsection