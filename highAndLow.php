<?php
//array関数を使ってトランプの画像名を配列で作成し、cardsに代入
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
//1~13の範囲でランダム数値を1つ取得し、rightCardに代入
$rightCard=mt_rand(0,13);
//フォームのPOST送信データ（隠しフィールド）をleftCardに代入（同じカードを表示させるために）
$leftCard=$_POST["leftCard"];
?>

<html>
  <head>
    <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
  </head>
  <body>
   	<div align="center">
		  <font size="6">High&amp;Lowゲーム</font>
		  <hr>
		  <?php
        //7行目の変数を$cardsの添字に利用し、画像のファイル名を取得させ、トランプ画像を表示
        echo '<img src="./img/cards/',$cards[$leftCard],'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';//特殊文字を入れカード間隔を作成
			  //6行目でランダムに取得した数字を$cardsの添字に利用し、画像のファイル名を取得させ、トランプ画像を表示
        echo'<img src="./img/cards/',$cards[$rightCard],'"><br><br>';
			  //送信元のラジオボタンの選択をキーにして選択結果を表示
        echo'｢',$_POST["select"],'｣','を選択しました。<br><br>';

			    //右の数字が左の数字より大きい時は$resultにHighを代入
			    if($leftCard<$rightCard){
			      $result="High";
			    }
			    //そうではなく右の数字が左の数字より小さい時は$resultにLowを代入
			    elseif($leftCard>$rightCard){
            $result="Low";
			    }
			    //上記以外の場合、同じ数字の時は送信元のラジオボタンの選択情報を代入する。
			    else{
			      $result=$_POST["select"];
			    }

					//ラジオボタン（high、low）の選択情報と$resultの値が同じ場合勝ちを表示
			    if($result==$_POST["select"]){
			      echo'You Win!';
          }
          //ラジオボタン（high、low）の選択情報と$resultの値が違う場合負けを表示
          else{
            echo'You Lose...';
          }
      ?>

      <br><br>
      <a	href="index.php">もう一度挑戦</a>
		</div>
	</body>
</html>
