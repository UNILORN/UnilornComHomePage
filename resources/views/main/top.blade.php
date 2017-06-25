@extends('main.common.app')

@section('head')
    <script src="/js/main/top.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
@endsection

@section('title',config('column.SiteName'))

@section('content')

<main>
    <div class="mainContents top1 sitetop">
        <h1>unilorn.com</h1>
    </div>
    <div class="mainContents top2">
        <h1>Welcome!!</h1>
    </div>
    <div class="mainContents top3">
        <h1>Profile</h1>
        <div class="container profileWarp">
            <div class="profile">
                <div class="profileIcon">
                    <img src="/img/profile.png" alt="プロフィール画像">
                </div>
                <div class="profileHead">
                    <h2>UNILORN</h2>
                </div>
                <div class="profileDetail">
                    <div class="profileDetailLink icon-twitter">
                        <a href="http://twitter.com/yuuiro_1552">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="profileDetailLink icon-qiita">
                        <a href="http://qiita.com/UNILORN">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="profileDetailLink icon-github">
                        <a href="https://github.com/UNILORN">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainContents top4">
        <div class="itemList">
            <div class="itemListItem item-bg1">
                <h2>Instagram</h2>
            </div>
            <div class="itemListItem item-bg2">
                <a href="#">
                    <h2>YouTube</h2>
                </a>
            </div>
            <div class="itemListItem item-bg3">
                <h2 style="font-size: 30px">Biography Comming soon...</h2>
            </div>
            <div class="itemListItem item-bg4">
                <h2>test</h2>
            </div>
            <div class="itemListItem item-bg5">
                <h2>niconico</h2>
            </div>
            <div class="itemListItem item-bg6">
                <h2>test</h2>
            </div>
        </div>
    </div>
    <div class="mainContents contentsFotter">
        <h1>Copyright 2017 unilorn.com</h1>
    </div>
</main>

@endsection