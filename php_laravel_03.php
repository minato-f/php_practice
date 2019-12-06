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
    
    
    