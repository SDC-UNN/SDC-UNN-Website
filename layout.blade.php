<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="/mg/favicon.ico">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/mdl/material.min.css">
<script type="text/javascript" href="/mdl/material.min.js"></script>
@yield('header')


</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<header class="mdl-layout__header">
		<div class="mdl-layout__header-row">
			<span class="mdl-layout-title">Victor | Platform </span>
			<div class="mdl-layout-spacer"></div>
			<nav class="mdl-navigation mdl-layout--large-screen-only">
				<a class="mdl-navigation__link" href="">Home</a>
				<a class="mdl-navigation__link" href="">Contact Us</a>
				<a class="mdl-navigation__link" href="">About Us</a>
			</nav>
		</div>
	</header>
	<div class="mdl-layout__drawer">
	<span class="mdl-layout-title">Another Nav Bar</span>
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="">Link</a>
			<a class="mdl-navigation__link" href="">Link2</a>
			<a class="mdl-navigation__link" href="">Link</a>
			<a class="mdl-navigation__link" href="">Link2</a>
		</nav>

	</div>
</div>
	@yield('content')
	@yield('footer')
</body>
</html>