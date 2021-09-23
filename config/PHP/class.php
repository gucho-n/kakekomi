<?php

//問１優斗さんは３２歳、恵さんは２８歳というプログラムを作ってください

class Human{
    public $name;
    public $age;

    public function call(){
        echo $this -> name,"です。",$this->age;

    }
}
    $yuto = new Human();
    $yuto->name = "yuuto";
    $yut0->age = 43;
    $yuto->call();
































//解答



// class Human{
//     public $name;
//     public $age;


//     public function Info(){
//         echo $this->name,'さんは',$this->age;
//     }
// }

// $yuto = new Human();

// $yuto->name="aaaa";
// $yuto->age=35;

// $yuto->Info();





// classない→引数、関数を書く
// classがい→生成、代入、呼び出し

//ゆうと、恵、ゆうとを交互でやってみて









// // Humanクラスを定義
// class Human{
//     public $name;    // プロパティの変数$nameを宣言
//     public $age;     // プロパティの変数$ageを宣言
   
//     public function Infomation(){   // メソッドのInfomationを定義
//         echo $this->name. 'さんは'. $this->age. '歳です';
//     }
//   }

// // クラスを呼び出し、インスタンス$PersonAと$PersonBを作成
// $PersonA = new Human();
// $PersonB = new Human();
 
// // インスタンス$PersonAに対して、クラス内のプロパティ$nameと$ageを設定
// $PersonA->name = 'Ami';
// $PersonA->age = '25';
 
// // インスタンス$PersonBに対して、クラス内のプロパティ$nameと$ageを設定
// $PersonB->name = 'Nana';
// $PersonB->age = '20';
 
// // インスタンス$PersonAと$PersonAそれぞれに対して、クラス内のメソッドを呼び出す
// $PersonA->Information();  // 'Amiさんは25歳です'と表示される
// $PersonB->Information();  // 'Nanaさんは20歳です'と表示される

// 反省ポイント9.17

// ,よく忘れる
// $yuto->の後を間違える

// 反省ポイント9.18

// $yuto->name=のイコールを忘れた
// new HumanのところをHuman.newにしてしまった。
// $this->name,を忘れる

// 反省ポイント9.19

// $this->nameを覚えていたことはよかったけれども、,＄this->の前後には,を入れると暗記すること

// 反省９.20
// Humanの後はカッコいらん

// https://webukatu.com/wordpress/blog/18143/

?>