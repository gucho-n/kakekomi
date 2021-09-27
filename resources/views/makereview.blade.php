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
    <div class="makeview-main-wrapper">
            <h1 class="reviewplace-main-sick-selector-title">新規口コミを書く</h1>
            <div class="reviewplace-main-sick-wrapper">
                <div class="makeview-main-containers">
                    <p class="makeview-main-titles">病院名</p> 
                    <input type="text">          
                </div>

                <div class="makeview-main-containers">
                    <p class="makeview-main-titles">住所</p> 
                    <input type="text">              
                </div>

                <div class="makeview-main-containers">
                    <p class="makeview-main-titles">電話番号</p>      
                    <input type="text">         
                </div>

            </div>

    </div>

</div>


@endsection