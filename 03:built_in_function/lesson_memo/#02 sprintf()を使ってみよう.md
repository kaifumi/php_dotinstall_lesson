# sprintfの使いかた
例）$info = sprintf("[%s][%f]", $name, $score);
 - %s：文字列
 - %d：整数
 - %f：浮動小数

 - 表示幅の指定は「%の後ろに桁数」を書く
 - 小数点以下の表示数は「%の後ろの桁数」に続いて「.表示する小数点以下の数」を書く  
 e.g.) $info = sprintf("[%15s][%10.2f]", $name, $score);

 - 左詰め：%とその後ろの数字の間にマイナス記号を付ける
 - 0埋め：%とその後ろの数字の間に0を書く

 - sprintf：戻り値があり、代入など続く処理で使える
 - printf：戻り値がなく、ログの表示に使う