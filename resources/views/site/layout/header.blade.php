<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>CriptoMetaNFT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/logo.png') }}">

    
    <link rel="stylesheet" href="{{ url('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select2.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/login-register.css')}}">

    <meta name="theme-color" content="#fafafa">

    <style>
        .gradiente-text {
            font-size: 32px;
            font-weight: bold;
            background: linear-gradient(to right, #333333, #C4EB00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline;
        }
    </style>
</head>
@php
    $usuario = Session::get('usuario');
@endphp
<body class="loading">
    <div class="main digital-store">
        <nav class="border-bottom nav-ds smart-sticky">
            <div class="navigation-wrapper container flex-space-between align-items-center">
                <div class="nav-left-hand-part">
                    <div class="logo">
                        <a class="logo-link" href="#">
                            <div class="logo-img"><img src="{{ url('assets/img/logo.png') }}" alt="logo"></div>
                            <div class="logo-text">CriptoMetaNFT</div>
                        </a>
                    </div>
                    <!--  navigation menu -->
                    <ul class="navigation-menu">
                        <li class="menu-item"><a class="menu-link" href="{{route('home')}}">Home</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('home')}}">Market Place</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('nft.criar')}}">Create NFT</a></li>
                    </ul>
                    <!--  navigation menu -->
                </div>
                <!--mobile menu bottom panel-->
        
                <ul class="social-icons-list">
                <li class="social-icon"><a href="#"><svg class="crumina-icon">
                        <use xlink:href="#facebook-icon"></use>
                    </svg></a></li>
                <li class="social-icon"><a href="#"><svg class="crumina-icon">
                        <use xlink:href="#twitter-icon"></use>
                    </svg></a></li>
                <li class="social-icon"><a href="#"><svg class="crumina-icon">
                        <use xlink:href="#instagram-icon"></use>
                    </svg></a></li>
                <li class="social-icon"><a href="#"><svg class="crumina-icon">
                        <use xlink:href="#twitch-icon"></use>
                    </svg></a></li>
                <li class="social-icon"><a href="#"><svg class="crumina-icon">
                        <use xlink:href="#discord-icon"></use>
                    </svg></a></li>
                </ul>
                <div class="logo" style="margin-left: 80px;">
                    <img src="{{ url('assets/img/tanssi.png') }}" style=" height: 40px" alt="Scroll">
                </div>
            <!--/mobbile menu bottom panel-->
                <div class="nav-right-hand-part">
                    
                    @if(isset($usuario))
                        <!-- header user profile -->
                        <div class="header-user-profile cryptoki-notif-bttn" data-target="profile-dropdown">
                            <div class="user-meta">
                                <div class="user_name">{{$usuario['nome'] ?? ''}}</div>
                            </div>
                            <div class="avatar box-42">
                                <img src="{{ url('assets/img/avatar.png') }}" alt="avatar">
                            </div>
                            <div id="profile-dropdown" class="cryptoki-notif-target">
                                <div class="profile-dropdown-header"></div>
                                <div class="profile-dropdown-body">
                                    <div class="profile-heading">
                                        <div class="profile-avatar avatar box-26">
                                            <img src="{{ url('assets/img/avatar.png') }}" alt="avatar">
                                        </div>
                                    </div>
                                    <ul class="profile-menu">
                                    <li>
                                        <a href="{{route('usuario.index')}}">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#user-icon"></use>
                                            </svg>Profile
                                        </a>
                                    </li>
                                    <li><a href="{{route('home_site.index')}}"><svg class="crumina-icon">
                                                <use xlink:href="#wallet-icon"></use>
                                        </svg>My Collection</a>
                                    </li>
                                    <li>
                                        <a href="{{route('nft.criar')}}">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#picture-icon"></use>
                                            </svg>Create NFT
                                        </a>
                                    </li>
                                    <li class="logout">
                                        <a href="{{route('logout_site')}}">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#logout-icon"></use>
                                            </svg>Logout
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header user profile -->
                    @else
                        <div class="header-user-profile cryptoki-notif-bttn">
                            <a class="btn btn-wide btn-dark" href="{{route('login_site')}}">Login</a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
