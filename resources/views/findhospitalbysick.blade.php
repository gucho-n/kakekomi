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
    <div class="findsick-main-wrapper">
        <h1 class="findsick-main-title">
        なんとか病    
        </h1>   
    
        <label for="pref-select">県名を選んでください:</label>

        <select name="pets" id="pref-select">
            <option value="">--Please choose an option--</option>
            <option value="kanagawa">神奈川県</option>
            <option value="aichi">愛知県</option>
        </select>
        <!-- 検索結果を表示させる -->
        <div class="findsick-main-sick-selector-container">
            <ul class="findsick-main-sick-rank-container">
                <li class="findsick-main-sick-rank-lists">いちい</li>
                <li class="findsick-main-sick-rank-lists">2位</li>
                <li class="findsick-main-sick-rank-lists">2位</li>
            </ul>
        
        </div>
        <!-- Googleマップ実装予定 -->
        <div class="findsick-map-container">
             <p class="findsick-results">地図</p> 
         
        </div>


    </div>

</div>


@endsection