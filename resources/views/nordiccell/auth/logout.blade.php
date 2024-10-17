@extends('nordiccell.layouts.app')
@section( 'title', 'Login')
@section('content')
<div class="content-wrapper">

			<div class="post-header">
				
<header class="hero hero--size-large hero--align-left">

	
    <div class="hero__text-wrap ">

        <h1 class="hero__title">Account</h1>

        
        
            </div>

	
</header>
			</div>

			

	<div class="content-main">

		<main>

			
			        				
					
					
<article id="article-9" class="post-wrapper post-9 page type-page status-publish hentry">

	
	<div class="post-content">

		<div class="woocommerce">

<div class="woocommerce-MyAccount-content">
	<div class="woocommerce-notices-wrapper"></div>
<div class="nor-row nor-row-navigation">
	<div class="nor-col-6">
		<h2>{{auth()->user()->customer_name}}</h2>
	</div>
	<div class="nor-col-6">
		<div class="wrapper-nav">
		<nav class="account">
		<a href="{{route('logout')}}">Log out</a>
		</nav>
		</div>
	</div>
</div>

</div>
</div>

	</div>

	
</article>

					
				        
			
			

		</main>

		
	</div>

			</div>
			@endsection
