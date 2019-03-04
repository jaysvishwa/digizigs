
<div class="main-menu-area" data-spy="affix" data-offset-top="100">
	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand logo" href="{{route('apphome')}}">
		      	<img src="{{asset('public/images/DZ-Logo.png')}}" alt="" style="height: 30px;">
		      </a>
		    </div>
		    <div class="collapse navbar-collapse" id="primary-menu">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="{{route('apphome')}}">Home</a></li>
                <li><a href="#service-page">Service</a></li>
                <li><a href="#feature-page">Features</a></li>
                <li><a href="#digital-page">Digital</a></li>                         
                <li><a href="#about-page">About</a></li>
                <li><a href="#blog-page">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
		      </ul>
			</div>
	  	</div>
	</nav>
</div>