@extends('layout')

@section('content')

<!-- Banner -->
	<div id="banner" class="container">
		<section>
			<p>This is <strong>Phase Shift</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
				<a href="#" class="button medium">Read More</a>
		</section>
	</div>

	<!-- Extra -->
	<div id="extra">
		<div class="container">
			<div class="row no-collapse-1">

				@foreach ($cards as $image)							
					<section class="4u"> <a href="#" class="image featured"><img src="{{$image->img_filename}}" alt=""></a>
						<div class="box">
							<p>{{$image->body}}</p>
							<a href="#" class="button">Read More</a> 
						</div>
					</section>
				@endforeach
							
			</div>
		        <div class="row no-collapse-1">
								
			        @foreach ($cards as $image)							
				        <section class="4u"> <a href="#" class="image featured"><img src="{{$image->img_filename}}" alt=""></a>
					        <div class="box">
						        <p>{{$image->body}}</p>
						        <a href="#" class="button">Read More</a> 
					        </div>
				        </section>
			        @endforeach

			    </div>
		</div>
	</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
								
					<!-- Content -->
					<div class="6u">
						<section>
							<ul class="style">
								<li class="fa fa-wrench">
									<h3>Integer ultrices</h3>
									<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
								<li class="fa fa-leaf">
									<h3>Aliquam luctus</h3>
									<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
							</ul>
						</section>
					</div>
						<div class="6u">
							<section>
								<ul class="style">
									<li class="fa fa-cogs">
										<h3>Integer ultrices</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
									<li class="fa fa-road">
										<h3>Aliquam luctus</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
