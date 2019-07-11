@extends('layouts.app')

@section('title','About')



@section('content')


<div class="wrapper">

	<!-- start banner Area -->
	<section class="titlebar" style="background: url({{asset('public/images/banner/curve-5.png')}}) no-repeat scroll center center / cover;">
	    <h1 class="page-title">
	    	<span>Thank </span>
	    	you
	    </h1>
	    <div id="particles-js"></div>
	</section>
	<!-- End banner Area -->

		
	<section class="tag-line">
		<div class="container">
			<h2 class="tag-title">Thank you  for contacting us and we will reply as soon as possible.</h2>
			<p class="tag-description">If you need an urgent response, please call us on:</p>
			<h2 class="tag-title">(+91) 9712340450</h2>
		</div>
	</section>

	

</div>

@endsection

@section('javascript')
	<script>
	
	</script>
@endsection