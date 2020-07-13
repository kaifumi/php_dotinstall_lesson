# foreach
全ての値を一つずつ処理してくれるrubyのeachと同じ  
例）  
foreach ($scores as $key => $score) {  
　echo $key . ':' . $score . PHP_EOL;  
}

keyやvalueの部分の変数は自由に付けて良いが、  
わかりやすくそのままkeyや単数形が使われる