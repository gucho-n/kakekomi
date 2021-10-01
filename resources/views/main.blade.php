<!-- layouts.baseを継承 -->
@extends('layouts.base')
@section('contents')
<div class = "main-header-inner-container">

</div>
<div class="main-header-search-wrapper">
    <div class="main-header-search-container">
        <div class="main-header-search">
            <div class="main-header-search-form">
                <input type="text" value="aa">
            </div>
        </div>
        
    </div>

</div>
<div class="main-wrapper" >

    <div class="main-information-wrapper main-wrappers">
        <p class="main-information-title main-titles">医療ニュース</p>
        <div class="main-information-container">
            <p>ここにニュースが流れる</p>
        </div>
    </div>
    <div class="main-prefetcure-wrapper main-wrappers">
        <p class="main-prefecture-title main-titles">都道府県別</p>
        <ul class="main-prefecture-container main-containers">
            <li class="has-sub">
                <a href="#">北海道</a>
                <ul class=""></ul>

            </li>
        </ul>
    </div>
    <div class="main-sick-wrapper main-wrappers">
        <p class="main-sick-title main-titles">症状別</p>
        <div class="main-sick-container main-containers"></div>
    </div>
    <div class="main-map-wrapper main-wrappers">
        <p class="main-map-title main-titles">地図別</p>  
        <div class="main-map-container"></div>  
    </div>

</div>

@endsection