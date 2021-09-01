@extends('front.layout.app')
@section('body')
    
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						    <form >
                                <div class="form-group">
                                    <input type="number" name="kg"class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Cân nặng của bạn?">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="height"class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Chiều cao của bạn?">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block"name="btn">result</button>
							</form>
							
							<?php
							
								if (isset($_GET['btn'])) {
									$kg = $_GET['kg'];
									$height = $_GET['height'];
									$total = totalCart($kg,$height);
									echo 'kq: ', $total;
								}
							   
							  
							 function totalCart($kg, $height){
								$result=1;
								$BMI = $kg / ($height*$height);
								$BMI= round($BMI,1);
							
								if($BMI>40){
									$result = $BMI.' -> Béo phì độ III cần liên hệ PT luật đẹp trai ngay';
								}else if (35 <= $BMI && $BMI < 40) {
									$result = $BMI.' -> Béo phì độ II cần liên hệ PT luật đẹp trai ngay';
								}else if (30 <= $BMI &&  $BMI < 35) {
									$result = $BMI.' -> Béo phì độ I cần liên hệ PT luật đẹp trai ngay';
								}else if (25 <=$BMI&& $BMI < 30) {
									$result = $BMI.' -> Thừa cân cần liên hệ PT luật đẹp trai ngay';
								}else if (18 <=$BMI&& $BMI < 25) {
									$result = $BMI.' -> Bình thường ';
								}
								else if (17 <=$BMI && $BMI < 18.5) {
									$result = $BMI.' -> Gầy độ I cần liên hệ PT luật đẹp trai ngay';
								}else if (16 <=$BMI && $BMI < 17) {
									$result = $BMI.' -> Gầy độ II cần liên hệ PT luật đẹp trai ngay';
								}else {
									$result = $BMI.' -> Gầy độ III cần liên hệ PT luật đẹp trai ngay';
								}
								return $result;
								// array_push($arr, $result);
							 }
							
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Gói tập luyện</h2>
					<p>Ngoài những gói tập cơ bản đến nâng cao Trung tâm thể dục thể hình Bodyfit còn cung cấp những gói tập đặc biệt cho từng yêu cầu và mong muốn của quý khách hàng.</p>
				    
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					@foreach ($packs as $post)
						
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">{{$post->post_category}}</h2>
							<div class="price"><sup class="currency">$</sup>{{$post->post_price}}<small>{{$post->post_month}}</small></div>
							<ul class="classes">
								<li>{{$post->post_cardio}}</li>
								<li class="color">{{$post->post_swimming}}</li>
								<li>{{$post->post_yoga}}</li>
								<li class="color">{{$post->post_zumba}}</li>
								<li>{{$post->post_massage}}</li>
								<li class="color">{{$post->post_boxing}}</li>
								<li>{{$post->post_category}}</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
					@endforeach
				</div>
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