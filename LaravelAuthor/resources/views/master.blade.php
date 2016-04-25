<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Website for author Shane Arbuthnott: Books, News and Reviews.">
    <!-- May want to augment this later with list of book titles? -->
	<meta name="keywords" content="Shane Arbuthnott, Author, Books, Blog">
	<meta name="author" content="Chris Arbuthnott">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link href="{{ asset('/css/site.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    
    @yield('endOfHead')
    
</head>
<body>
	<div id="centeringContainer">
		<div id="centeredContainer">
			@include('partials.header')
			@yield('content')
			@include('partials.footer')
		</div>
	</div>

	<!-- jquery and other whole site scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	{!! Html::script('js/site.js') !!}
    @yield('endOfBody')
    
</body>
</html>