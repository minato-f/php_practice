PHP/Laravel 04 関数を理解しよう

課題1
    function two_times($num){
        return $num*2;
    }
    
    echo two_times(4);
    
課題2
    function a_plus_b($a,$b){
        return $a + $b;
    }
    
    echo a_plus_b(7,7);
    
課題3
    function product($arr){
        $resulut = 1;
        foreach($arr as $num){
            $resulut *= $num;
        }
        return $resulut;
    }
    
    echo product(array(1, 3, 5 ,7, 9));
    
課題4
    function max_array($arr){
        $max_number = $arr[0];
        foreach($arr as $a){
            if ($max_number <= $a){
                $max_number = $a;
            }
        }
        return $max_number;
    }
        echo max_array(array(1, 3, 5 ,7, 9));
    
課題5
・strip_tags（HTMLタグやPHPタグを削除できる）

    $html_body = 'テスト<br><p>テスト</p><strong>テスト</strong>';
    $html_body = strip_tags($html_body);
    echo $html_body;

・array_push（渡された変数を配列の最後に追加する）

    $animals = ['cat','dog','horse'];
    array_push($animals,'monkey');
    print_r($animals);  
    
・array_merge（配列の要素の最後に別の配列を結合する）
    $colors_1 = ['red','green'];
    $colors_2 = ['blue','black'];
    $colors_3 = ['pink','white'];
    
    $all_colors = array_merge($colors_1,$colors_2,$colors_3);
    
    print_r($all_colors);
    
・time（入力時のUNIXタイムスタンプを取得できる）
    echo time();
    
・mktime（指定した日時のUNIXタイムスタンプを取得できる）    
    $the_time = mktime(11,11,11,11,11,2011);
    echo $the_time;
    
・date（指定された日時を任意の形式でフォーマットし、日付文字列を表す）
    echo date('Y/m/d');