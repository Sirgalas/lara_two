@extends('layouts.app')

@section('title')Изменение сообщения @endsection
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
                    <form class="contact-form padding_bottom" method="post" action="{{route('contact-update-submit',$one->id)}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="exampleInputName2">Имя</label>
                                <input type="text" class="form-control" id="exampleInputName2" value="{{$one->name}}" name="name" placeholder="Введите имя">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" value="{{$one->email}}" name="email" placeholder="Ведите email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputSubject">Тема</label>
                                <input type="text" class="form-control" id="exampleInputSubject" value="{{$one->subject}}" name="subject" placeholder="Введите тему сообщения">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="message">Сообщение</label>
                                <textarea class="form-control" name="message"  placeholder="В ведите ваше сообщение здесь">{{$one->message}}</textarea>
                                <button type="submit" class="btn-form uppercase border-radius margintop40">Ообновить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="padding_bottom">
        <h3 class="hidden">hidden</h3>
        <div id="test" class="gmap3"></div>
    </section>
@endsection
