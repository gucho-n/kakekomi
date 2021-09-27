@extends('layouts.base')
@section('contents')

<div class="makereview-wrapper">
    <article class="makereview-sidebar">
    <h1 class="makeview-sidebar-title">口コミを見る</h1>
    <p class="makeview-sidebar-titles">都道府県別</p>
    <div class="makeview-sidebar-containers">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>

    <p class="makeview-sidebar-titles">症状別</p>
    <div class="makeview-sidebar-containers">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>

    <p class="makeview-sidebar-titles">地図別</p>
    <div class="makeview-sidebar-map-container">
    
    </div>
    </article>
    <!-- 病院の検索結果を記述 -->
    <div class="result-main-wrapper">
        <div class="result-main-container">
            <h1 class="result-main-title">なんとか病院</h1>
            <div class="result-main-picture"><img src="#" alt="#"></div>
            <ul class="result-main-detail">
                <li>住所</li>
                <li>電話番号</li>
                <li>営業時間</li>
            </ul>
            <div class="result-main-review-container">
                <p>治療の結果</p>
                <p>待ち時間</p>
                <p>受付の対応</p>
            </div>

            <div class="result-main-review-map-container">

            </div>
        </div>
        
    </div>
</div>
@endsection