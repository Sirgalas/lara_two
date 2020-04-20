@extends('layouts.app')

@section('title')Контакты@endsection
@section('preview')
    <!--Page Header-->
    <section class="page_header padding">
        <div class="container">
            <div class="header_content padding">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="uppercase"> Contact us</h1>
                        <p>Typi non habent claritatem insitam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('breadcrumbs')
    <!-- Breadcrumbs -->
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}">Главная</a>
                        </li>
                        <li class="active">Контакты</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <!--Contact Us-->

    <section id="contact" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="uppercase heading bottom30">Отправте ваше сообщение</h3>
                    <form class="contact-form padding_bottom" method="post" action="{{route('contact-form')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="exampleInputName2">Имя</label>
                                <input type="text" class="form-control" id="exampleInputName2" name="name" placeholder="Введите имя">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Ведите email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputSubject">Тема</label>
                                <input type="text" class="form-control" id="exampleInputSubject" name="subject" placeholder="Введите тему сообщения">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="message">Сообщение</label>
                                <textarea class="form-control" name="message" placeholder="В ведите ваше сообщение здесь"></textarea>
                                <button type="submit" class="btn-form uppercase border-radius margintop40">Отправть</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="contact_detail padding_bottom">
                        <h3 class="uppercase heading bottom30">Get office info.</h3>
                        <p class="bottom30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accum</p>
                        <div class="address bottom30">
                            <i class="fa fa-map-marker"></i>
                            <h5 class="uppercase">Our Address</h5>
                            <p>1234 Heaven Stress, Beverly Hill.</p>
                        </div>
                        <div class="address bottom30">
                            <i class="fa  fa-phone"></i>
                            <h5 class="uppercase">Phone Number</h5>
                            <p>1234 Heaven Stress, Beverly Hill.</p>
                        </div>
                        <div class="address">
                            <i class="fa fa-envelope-o"></i>
                            <h5 class="uppercase">Email Address</h5>
                            <p>Email: <a href="#.">Erentheme@gmail.com</a>
                            </p>
                            <p>Email: <a href="#.">Erentheme@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding_bottom">
        <h3 class="hidden">hidden</h3>
        <div id="test" class="gmap3"></div>
    </section>
@endsection
