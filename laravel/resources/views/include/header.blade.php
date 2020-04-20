<header>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars">
                    </i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="/images/logo.png" class="logo" alt="">
                </a>
            </div>
            <!-- End Header Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                    <li class="dropdown active">
                        <a href="{{route('home')}}" class="dropdown-toggle" data-toggle="dropdown">Главная</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">О нас</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Контакты</a>
                    </li>
                    <li>
                        <a href="{{route('contact-all')}}">Все обрашения</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
