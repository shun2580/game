<?php
//array関数を使ってトランプの画像名を配列で作成
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
//1~13の範囲でランダム数値を1つ取得し変数leftcardに代入
$leftCard=mt_rand(0,13);
?>

<html>
  <head>
  <meta http-equiv="Content-type"content="text/http;charset=UTF-8">
 	  <title>High&amp;Lowゲーム</title>
 	</head>

	<body>
 	  <form action="highAndLow.php"method="post">
 	    <div align="center">
 	      <font size="6">High&amp;Lowゲーム</font><br>
 			  <hr>
        <?php
          //6行目でランダムに取得した数字を$cardsの添字に利用し、画像のファイル名を取得させ、トランプ画像を表示
          echo'<img src="./img/cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';//特殊文字を入れる（カード間の間隔を作るため）
          echo'<img src="./img/cards/bg.png">';
        ?>
			  <br><br>

			  <!--ラジオボタンを表示名Highで設置、部品名をselectに設定（送信先の$_POSTのキーとして使用するため）-->
    	  <input type="radio"name="select"value="High">High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <!--ラジオボタンを表示名Lowで設置、部品名をselectに設定（送信先の$_POSTのキーとして使用するため）-->
			  <input type="radio"name="select"value="Low">Low<br><br>
 			  <!--送信の実行ボタンを表示名決定で設置-->
 			  <input type="submit"value="決定">
 			  <?php
 			    //6行目で取得したランダム数値を画面上には表示されない隠しフィールドにecho文で出力、部品名をleftCardに設定（送信先の$_POSTのキーとして使用するため）
 			    echo'<input type="hidden"name="leftCard"value="',$leftCard,'">';
 			  ?>
 		  </div>
 		</form>
 	</body>
</html>
