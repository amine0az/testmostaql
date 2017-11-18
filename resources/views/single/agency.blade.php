@extends('layouts.app')
@section('pageTitle', $agencies->name)
@section('content')
                <div class="sectionWrapper img-pattern">
					<div class="container">
						<div class="cell-7">
							<div class="row">
								<div class="block fx" data-animate="fadeInLeft">
									<h3 class="block-head">{{$agencies->name}}</h3>
									{!!$agencies->description_en!!}
								</div>
							</div>
						</div>
						<div class="cell-1"><br></div>
						<div class="cell-4 fx" data-animate="fadeInUp">
							<img alt="{{$agencies->name}}" src="/storage/{{$agencies->logo}}">
						</div>
					</div>
				</div>
                
				<div class="sectionWrapper img-pattern">
					<div class="container">
						<h3 class="block-head">Product of the agency</h3>
						<div class="portfolioGallery portfolio">
                            @foreach($products as $product)
							<div>
								<div class="portfolio-item">
									<div class="img-holder">
										<div class="img-over">
											<a href="/products/{{$product->slug}}" class="fx link"><b class="fa fa-link"></b></a>
											<a href="/storage/{{$product->image}}" class="fx zoom" data-gal="{{$product->image}}" title="{{$product->name}}"><b class="fa fa-search-plus"></b></a>
										</div>
										<img alt="{{$product->name}}" src="/storage/{{$product->image}}">
									</div>
									<div class="name-holder">
											<a href="/products/{{$product->slug}}" class="project-name">{{$product->name}}</a>
											<span class="project-options">{{$product->section}}</span>
										</div>
								</div>
							</div>
                            @endforeach
						</div>	
						<div class="clearfix"></div>
					</div>
				</div>

@endsection