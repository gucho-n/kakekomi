<?php

// 問１　変数number100に,さらに100を追加するプログラムを作成せよ

$number = 100;

function add($number){

    $number = $number + 100;
    return $number;
}

echo $number = add($number);















// 解説

// ①外から中→仮引数と中、本引数と外を合わせる
// ②中から外→return　return＋代入を使う

// ①外から中→仮引数と中、本引数と外を合わせる
// 例ⅰ）
// $hon=30;
    
// function taniyan($kari){
    
//     echo $kari;
// }

// taniyan($hon);

// 参考
// https://arts-factory.net/function/


// ②中から外→return　return＋代入を使う
// 例2）  
// function taniyan($kari){
    
//     return $kari = $kari+100;
// }

// $kekka = taniyan($hon);

// echo $kekka;

//反省0920
// 呼び出すときはfunctionいらないって言ったでしょ

?>



