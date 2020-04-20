@extends('layouts.app')

@section('title')Все сообщения@endsection

@section('preview')
    <section class="page_header header_layout3 padding">
        <div class="container">
            <div class="header_content padding">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="uppercase">news & BLOG 3 columns</h1>
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
                        <li class="active">Все сообщения</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section id="blog" class="padding_bottom margintop30">
        <h3 class="hidden">kgjmklfdg</h3>
        <div class="container">
            <div class="row">
                @foreach($messages as $message)

                    <div class="col-sm-4">
                        <article class="blog_item bottom_half">
                            <div class="blog_image">
                                <img src="/images/blog-1.jpg" alt="blog">
                                <a href="blog_post.html"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="blog_text">
                                <ul class="meta margintop15 marginbottom15">
                                    <li class="uppercase"><a href="{{route('contact-one',$message->id)}}">{{$message->subject}}</a></li>
                                    <li class="uppercase">BY: {{$message->name}}</li>
                                </ul>
                                <h5 class="uppercase">{{$message->email}}</h5>
                                <ul class="meta margintop15 marginbottom15">
                                    <li class="uppercase time">{{$message->ceated_at}}</li>
                                </ul>
                                <p>{{$message->message}}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
