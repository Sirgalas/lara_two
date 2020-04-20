@extends('layouts.app')

@section('title'){{$one->subject}}@endsection

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
        <h3 class="hidden">hidden</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <article class="blog_item">
                        <div class="blog_image bottom30">
                            <img src="/images/blog-post.jpg" alt="blog">
                        </div>
                        <div class="blog_text">
                            <h5 class="uppercase marginbottom15">{{$one->message}}</h5>
                            <ul class="meta margintop15 bottom30">
                                <li class="uppercase time">Date: {{$one->created_at}}</li>
                            </ul>
                            <p class="bottom30">{{$one->message}}</p>
                            <span class="bottom30 posted"><i class="fa fa-edit"></i> Posted in News By {{$one->name}}.</span>
                        </div>
                        <div class="blog_share">
                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Share to friends:</strong>
                                    <ul>
                                        <li><a href="#."><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="media blog-reply">
                            <div class="media-left">
                                <a href="#."><img class="media-object" src="/images/author.png" alt="..."></a>
                            </div>
                            <div class="media-body">
                                <h5 class="marginbottom10">Artice by <a href="#.">Erentheme</a></h5>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                        <h4 class="marginbottom15 margintop40 uppercase heading"> Post comments</h4>
                        <a class="btn-form uppercase border-radius" href="{{route('contact-update',$one->id)}}" title="Редактировать">Редактировать</a>
                        <a class="btn-form uppercase border-radius" href="{{route('contact-delete',$one->id)}}" title="Удалить">Удалить</a>
                    </article>
                </div>
                <div class="col-sm-4">
                    <aside class="sidebar bottom30">
                        <h4 class="heading uppercase bottom30">Popular</h4>
                        @foreach($rands as $message)
                        <div class="wudget marginbottom15">
                            <div class="media posts">
                                <div class="media-left">
                                    <a href="{{route('contact-one',$message->id)}}"><img class="media-object" src="/images/post1.jpg" alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h5>{{$message->subject}}</h5>
                                    <span>{{$message->created_at}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
