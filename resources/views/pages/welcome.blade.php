@extends('layouts.master')

@section('content')

<!-- Карусель -->
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
  <!-- Индикаторы для карусели -->
  <ol class="carousel-indicators">
    <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>   
  <!-- Слайды карусели -->
  <div class="carousel-inner">
    <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
    <div class="active item">
      <h2>Слайд №1</h2>
      <div class="carousel-caption">
        <h3>Заголовок 1 слайда</h3>
        <p>Текст (описание) 1 слайда...</p>
      </div>
    </div>
    <!-- Слайд №2 -->
    <div class="item">
      <h2>Slide 2</h2>
      <div class="carousel-caption">
        <h3>Second slide label</h3>
        <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
      </div>
    </div>
    <!-- Слайд №3 -->
    <div class="item">
      <h2>Slide 3</h2>
      <div class="carousel-caption">
        <h3>Third slide label</h3>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <!-- Навигация для карусели -->
  <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
  <a class="carousel-control right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Modern Business
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>
@endsection