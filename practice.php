

<?php
// 課題1
    // $a = 3;
    // $b = 7;
    // echo $a + $b;


// 課題2
    // $array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月",];
    // echo $array_month[7];

// 課題3
    // $hello = "Hello,";
    // $name = "ミナト";
    // $world = "'s World!";

// echo $hello.$name.$world;

// 課題4
    // $tech_boost = "tech";
    // $tech_boost .= "boost";
    
    // echo $tech_boost;

// 課題5
    // $calender_2018 = [
    //     "January" => "1月",
    //     "February" => "2月",
    //     "March" => "3月",
    //     "April" => "4月",
    //     "May" => "5月",
    //     "June" => "6月",
    //     "July" => "7月",
    //     "August" => "8月",
    //     "September" => "9月",
    //     "October" => "10月",
    //     "November" => "11月",
    //     "December" => "12月",
    // ];
    
    // echo $calender_2018["December"];
    


// PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう

// 課題1
    $name = "ミナト";
    if ($name == "ミナト"){
        echo "私は あなたの名前 です";
    } else{
        echo "あなたの名前ではありません";
    }


// 課題2
    $total = 0;
    for ($i = 0; $i <= 1000; $i++){
        $total += $i;
    }

    echo $total;

// 課題3
    $fruits = array("banana", "peach", "orange", "apple", "grape");
    foreach($fruits as $ftuit){
        echo $ftuit;
        echo "\n";
    }
    
// 課題4    
    $start = 1;
    $end = 100;
    
    for($i = $start; $i <= $end; $i++){
        if($i % 5 == 0){
            echo $i;
            echo "\n";
        }
    }