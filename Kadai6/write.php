<?php

$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$iv = $_POST['iv'];
$tsuka = $_POST['tsuka'];
$amount = $_POST['amount'];
// $JPY = $amount*137

if ($tsuka === "USD") {
    $JPY = $amount*137;
} else if($tsuka === "GBP"){
    $JPY = $amount*166;
} else if($tsuka === "EUR"){
    $JPY = $amount*144;
}else{$JPY = $amount*92;}


// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file,$amount .$tsuka .$iv . $name . $birthdate . "\n");
fclose($file);
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
      
<table border="2">
　<tr>
　　<th>項目</th>
　　<th>回答</th>
　</tr>
　<tr>
　　<td>名前</td>
　　<td><?php echo $name ?></td>
　</tr>
　<tr>
　　<td>誕生日</td>
　　<td><?php echo $birthdate ?></td>
　</tr>
　<tr>
　　<td>投資経験</td>
　　<td><?php echo $iv ?></td>
　</tr>
　<tr>
　　<td>通貨</td>
　　<td><?php echo $tsuka ?></td>
　</tr>
　<tr>
　　<td>外貨金額</td>
　　<td><?php echo number_format($amount) ?></td>
　</tr>
　<tr>
　　<td>日本円</td>
　　<td><?php echo  number_format($JPY) ?></td>
　</tr>
</table>
     


        
    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
request.open('GET', 'API');
   request.responseType = 'json';
   request.onload = function () {
        data = this.response;
        console.log(data["data"][0]);
        // document.write(data['data']);
 
   request.onload = function () {
        data = this.response;
        console.log(data["data"][0]);
 
        for(let i=2; i<data['data'].length; i++){
            rank = data['data'][i][0];
            kuni = data['data'][i][1];
            original = data['data'][i][2];
            tsuuka = data['data'][i][3];
            rate = data['data'][i][4];
            amount = tsuuka * rate

     const html = '<tr><th>'+tsuuka+'</th><td>'+amount+'</td><td>'+JPY+"万円"+'</td></tr>';
    $("#table").append(html);
    $("#japan").text(data['data'][0][0]);
  }
   }
   </script> -->
</html>