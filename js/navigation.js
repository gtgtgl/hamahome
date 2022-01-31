// 参考：https://coco-factory.jp/ugokuweb/move01/5-1-1/
// ドロップダウンの設定を関数でまとめる
function mediaQueriesWin(){
	var width = jQuery(window).width();
	if(width <= 1029) {//横幅が768px以下の場合
	  jQuery(".has-child>a").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
	  jQuery(".has-child>a").on('click', function() {//has-childクラスがついたaタグをクリックしたら
		var parentElem =  jQuery(this).parent();// aタグから見た親要素の<li>を取得し
		jQuery(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
		jQuery(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
		return false;//リンクの無効化
	  });
	}else{//横幅が768px以上の場合
	  jQuery(".has-child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
	  jQuery(".has-child>a").removeClass('active');//activeクラスを削除
	  jQuery('.has-child').children('ul').css("display","");//スライドトグルで動作したdisplayも無効化にする
	}
  }
  
  // ページがリサイズされたら動かしたい場合の記述
  jQuery(window).resize(function() {
	mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
  });
  
  // ページが読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on('load',function(){
	mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
  });