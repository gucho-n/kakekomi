<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップ画面</title>

    <!-- リセットCSSを繋ぐ destyle.cssの導入-->
    <!-- https://github.com/nicolas-cusan/destyle.css/blob/master/destyle.css -->
    <link rel="stylesheet" href="{{ asset('css/base/destyle.css') }}">
    <!-- baseviewの大元の記述 -->
    <link rel="stylesheet" href="{{ asset('css/base/base.css') }}">    
    <!-- mypageのアクセスへの記述 -->
    <link rel="stylesheet" href="{{ asset('css/base/sidebar.css') }}">
    <!-- 継承先の記述 -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- mypageのアクセスへの記述 -->
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <!-- makereviewのアクセスへの記述 -->
    <link rel="stylesheet" href="{{ asset('css/makereview.css') }}">
    <!-- 場所から病院のアクセスへの記述 -->
    <link rel="stylesheet" href="{{ asset('css/findhospitalbyplace.css') }}">
    <!-- 病状から病院のアクセスへの記述 -->
    <link rel="stylesheet" href="{{ asset('css/findhospitalbysick.css') }}">
       <!-- 病院の結果への記述 -->
       <link rel="stylesheet" href="{{ asset('css/result.css') }}">


</head>

<body>
    <header class = "header-wrapper">
        <div class ="top-header-container">
            <div class="top-header-innner">
                <h1 class="title-logo">
                    <p>kakekomi</p>
                </h1>
                <ul class="welcome-container">
                    <li class="name-container">谷口　祐人さん</li>
                    <li class="tpoint-container top-list"><a href="#"　class="top-link">Tポイント</a> </li>
                    <li class="help-container top-list"><a href="#"　class="top-link">ヘルプ</a></li>
                </li>
            </div>
        </div>
        <nav class ="middle-header-container">
            <ul class="header-navgation">
                <li class="header-link"><a href="#">都道府県別</a> </li>
                <li class="header-link"><a href="#">症状別</a> </li>
                <li class="header-link"><a href="#">地図別</a> </li>
                <li class="header-link"><a href="#">QR</a> </li>
                <li class="header-link"><a href="#">マイページ</a></li>
                <li class="header-link"><a href="#">口コミを書く</a> </li>
                <li class="header-link"><a href="#">ログアウト</a> </li>           
            </ul>
        </nav>
    </header>
    <main>
        <!-- テンプレート使い回し -->
        @yield('contents')
    </main>
</body>
</html>