<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください。
function twotimes($number){
    return $number * 2;
}

echo twotimes(5);

//2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください。
function f($a,$b){
    return $a + $b;
}

echo f(2,3);

//3.arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function times_array($arr){
    $total = $arr[0];
    foreach((array)$arr as $a){
        $total *= $a;
    }
    return $total;
}

$arr = array(1,3,5,7,9);
echo times_array($arr);

//4.次のプログラムは、配列の中で一番大きい値を返す max_arrayという関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }   
    }
    return $max_number;
}

$arr = array(12,4,2,10,6);
echo max_array($arr);

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//・strip_tags 文字列からHTMLおよびPHPタグを取り除く。

$str = "<h1>ここは見出しです。</h1>";
echo strip_tags($str);

///・array_push 1つ以上の要素を配列の最後に追加する。

$fruits = ["apple","orange","melon"];
array_push($fruits, "banana","cherry");
print_r($fruits);

//・array_merge ひとつまたは複数の配列を結合する。

$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];

$array = array_merge($array1, $array2,$array3);
print_r($array);

//・time 現在のUnixタイムスタンプを返す。　・mktime 日付をUnixのタイムスタンプとして取得する。
$timestamp = time();
echo $timestamp ;

$timestamp = mktime(20,0,0,3,7,2020);
echo $timestamp;

///・date ローカルの日付／時刻を書式化する。

echo date('Y-m-d H:i:s');
echo '<br>';