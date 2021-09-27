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
    <div class="findplace-main-wrapper">
        <div class="findplace-main-place-container">
            <p>かながわけん>相模原市</p>
        </div>       
        <div class="findplace-main-sick-selector-container">
            <div class="findplace-main-containers">
            <!-- datalist,option用を挿入する -->
            <label for="sick-select" class="findplace-sick-select">病状を選択してください</label>
            <input type="text" id="sick-list" name="sick-select"> 
                <datalist id="sick-list">
                    <option value="谷口クリニック">
                    <option value="野村クリニック">
                </datalist>
            
        </div>
         <ul class="findplace-result-container">
             <li class="findplace-results">住所</li> 
             <li class="findplace-results">住所</li> 
             <li class="findplace-results">住所</li> 
        </ul>
        <!-- Googleマップ実装予定 -->
        <ul class="findplace-map-container">
             <li class="findplace-results">地図</li> 
         
        </ul>


    </div>

</div>


@endsection