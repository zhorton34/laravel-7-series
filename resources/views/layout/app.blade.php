<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Industrious by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <a class="logo" href="/">Industrious</a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        @include('sections.nav')
    </ul>
</nav>

@yield('content')

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="content">
            <section>
                <h3>Accumsan montes viverra</h3>
                <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
            </section>
            <section>
                <h4>Sem turpis amet semper</h4>
                <ul class="alt">
                    <li><a href="#">Dolor pulvinar sed etiam.</a></li>
                    <li><a href="#">Etiam vel lorem sed amet.</a></li>
                    <li><a href="#">Felis enim feugiat viverra.</a></li>
                    <li><a href="#">Dolor pulvinar magna etiam.</a></li>
                </ul>
            </section>
            <section>
                <h4>Magna sed ipsum</h4>
                <ul class="plain">
                    <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                    <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                    <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                    <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                </ul>
            </section>
        </div>
        <div class="copyright">
            &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
