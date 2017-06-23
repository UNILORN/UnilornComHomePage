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
        <h1>Coming soon Profile ...</h1>
        <div class="container">
            <div class="profile">
                <div class="profileIcon">
                    <img src="/img/profile.png" alt="プロフィール画像">
                </div>
                <div class="profileHead">
                    <h2>unilorn</h2>
                </div>
                <div class="profileDetail">
                    <div class="profileTwitter"></div>
                    <div class="profileGithub"></div>
                    <div class="profileNiconico"></div>
                    <div class="profileInstagram"></div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection