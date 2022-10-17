@extends('layouts.app')

@section('title')
    <title>バンドメンバー募集掲示板</title>
@endsection

@push('css')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endpush

<div class="cover mt-5">
    <ul class="carousel">
      <li><img src="../cover/cover1.jpg"></li>
      <li><img src="../cover/cover2.jpg"></li>
      <li><img src="../cover/cover3.jpg"></li>
      <li><img src="../cover/cover4.jpg"></li>
      <li><img src="../cover/cover5.jpg"></li>
    </ul>
    <div class="catch">
      バンドメンバー募集掲示板へようこそ！<br>
      <span class="subcatch">音楽の趣味が合う仲間が貴方をまっています。</span>
    </div>
</div>

@section('content')
    @if(Auth::check())
    <div class="container">
        @if($unreadCommentsCount > 0)
        <h4 class="d-grid col-10 alert alert-warning" role="alert">
            <div class="alert-link">あなたの投稿に{{ $unreadCommentsCount }}件の新着コメントがあります！</div>
        </h4>
        @endif
        <div class="member mt-5 mb-5">
            <div class="member-post row col-4">
                <a href="http://127.0.0.1:8000/posts/create" class="btn btn-primary btn-lg"><i class="fas fa-users"></i> メンバーを募集する</a>
            </div>
            <div class="member-search">
                <h4 class="text-center"><i class="fa-solid fa-magnifying-glass"></i> メンバーを検索する</h4>
                <div class="search-button">
                    <a href="http://127.0.0.1:8000/posts/prefSearch" class="btn btn-warning"><i class="fas fa-map-marker-alt"></i> 都道府県で探す</a>
                    <a href="http://127.0.0.1:8000/posts/partSearch" class="btn btn-success"><i class="fa-solid fa-guitar"></i> 募集パートで探す</a>
                </div>
            </div>
        </div>

        <div class="mb-5">
            @include('posts.posts')
        </div>

        <div class="mb-5">
            @include('comments.posts')
        </div>

        <div class="row">
            <div class="col-4 offset-5 mb-5">
                {!! link_to_route('logout.get','ログアウト',[],['class'=>'btn btn-danger btn-lg btn-block mb-5']) !!}
            </div>
        </div>

    @else
        <div class="row">
            <div class="up">
                <div class="d-grid gap-2 col-8 mx-auto">
                    {!! link_to_route('signup.get','新規登録はこちらから',[],['class'=>'btn btn-primary btn-lg btn-block']) !!}
                </div>
                <div class="d-grid gap-2 col-5 mx-auto mt-5">
                    {!! link_to_route('login','登録済の方はこちら（ログイン）',[],['class'=>'btn btn-link btn-lg btn-block']) !!}
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('carousel')
<script src="https://ssense.github.io/vue-carousel/js/vue-carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./js/carousel.js"></script>
<script src="./js/cover.js"></script>
<script src="./js/remove.js"></script>
@endpush

