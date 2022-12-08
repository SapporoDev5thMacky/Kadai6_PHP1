<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
<link rel="stylesheet" href="CSS/style.css">

<header>
    <h1>投資セミナー・アンケート</h1>
    </header>

<body>

<dl>
    <div class="inputarea">
    <form action="write.php" method="post" class="input">
    <dt>お名前</dt>
    <dd><input type="text" name="name" class="inputA"></dd>
    <dt>生年月日:</dt>
    <dd> <input type="date" name="birthdate" class="inputB"></dd>
        <dt>投資経験</dt>
        <dd> <select id="iv" name="iv" class="inputC">
        <option value="">投資経験</option>
        <option value="初めて">初めて</option>
        <option value="1～5年">1～5年</option>
        <option value="6から10年">6から10年</option>
        <option value="10年以上">10年以上</option></dd>
     </select>
     <dt>投資通貨</dt>
        <dd> <select id="tsuka" name="tsuka">
        <option value="">選択してください</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="AUD">AUD</option></dd>
     </select>
     <dt>外貨金額</dt>
    <dd><input id="amount" type="number" name="amount"></dd>


</div>
</dl>
     <input type="submit" value="送信" class="btn">
    </form>
    
</body>

</html>
