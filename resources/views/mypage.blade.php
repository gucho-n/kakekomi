@extends('layouts.base')
@section('contents')
<div class = "my-page-top-picture-wrapper">
  <div class="my-page-top-tab-wrapper">
      <p>色々</p>
  </div>
  <div class="my-page-top-picture-container">
  <p>色々</p>
  </div>
  <div class="my-page-myphoto-wrapper">
      <div class= my-page-myphoto-container>
        <img src="#" alt="#"> 
      </div>
      <div class= my-page-myname-container>
        <p class="my-page-myname">名前</p>
        <p class="my-page-profile-container">プロフィール</p>
      </div>
      <div class="my-page-main-wrapper">
          <div class="my-page-main-container">
              <div class="my-page-myhospital-wrapper">
                  <p class=my-page-myhospital-title>登録している病院</p>
              </div>
              <div class="my-page-recent-wrapper">
              <p class=my-page-recent-title>最近記入した口コミ</p>
              </div>
          </div>
          <article class="mypage-calendar-wrapper">
              <p class="mypage-calendar">カレンダー</p>
          </article>
      </div>    
 </div>

</div>


@endsection