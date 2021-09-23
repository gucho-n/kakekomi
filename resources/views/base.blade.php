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
                    <li class="tpoint-container top-list">Tポイント</li>
                    <li class="help-container top-list">ヘルプ</li>
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
        @yield
    </main>
</body>
</html>