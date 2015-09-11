<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ClubOn.kz - ЗаКлубон!</title>
<!-- css -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Club On.kz</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/about.html">О клубе</a>
                    </li>
                  <!--   <li>
                        <a href="services.html">Забронировать</a>
                    </li> -->
                    <li>
                        <a href="/contacts.html">Контакты</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Караоке <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Form login -->
                   <!--  <form class="navbar-form navbar-right" role="search" method="post" action="/auth/login">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="email"  value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
                    </form> -->
                    
                    @unless (Auth::check())
                        <li><a href="/auth/login">Войти</a></li>
                    @endunless
                    <li><a href="/auth/logout">Выйти</a></li>
                    <li><a href="/auth/register">Регистрация</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- content -->
	<div class="container contentbar">
		@if(Session::has('flash_message'))
		<div class="alert">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		{{ Session::get('flash_message') }}
		</div>
		@endif

		@yield('content')
		<hr/>
	
	<!-- end content -->
	
	<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ClubOn.kz 2015</p>
                </div>
            </div>
        </footer>
</div>
<!-- /.container -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>