
// ハンバーガーメニュー実装
const menubtn = document.getElementById('open_mobile_menu');
const closebtn = document.getElementById('close_mobile_menu');
const navmenu = document.getElementById('mobile_menu');
const floatbtn = document.getElementById('flow_btn');

function openMenu() {
  if (navmenu.className == '') {
    navmenu.classList.add('checked');
    floatbtn.classList.add('checked');

  } else {
    navmenu.classList.remove('checked');
    floatbtn.classList.remove('checked');
  }
}
menubtn.addEventListener('click', openMenu);
closebtn.addEventListener('click', openMenu);

// タブ実装

document.addEventListener('DOMContentLoaded', function(){
	// タブに対してクリックイベントを適用
	const tabs = document.getElementsByClassName('tab');
	for(let i = 0; i < tabs.length; i++) {
		tabs[i].addEventListener('click', tabSwitch, false);
	}

	// タブをクリックすると実行する関数
	function tabSwitch(){
		// タブのclassの値を変更
		document.getElementsByClassName('is-active')[0].classList.remove('is-active');
		this.classList.add('is-active');
		// コンテンツのclassの値を変更
		document.getElementsByClassName('is-show')[0].classList.remove('is-show');
		const arrayTabs = Array.prototype.slice.call(tabs);
		const index = arrayTabs.indexOf(this);
		document.getElementsByClassName('panel')[index].classList.add('is-show');
    
    if(document.getElementById("reform_content") != null) {
      var reformContent = document.getElementById('reform_content');
      reformContent.scrollIntoView({behavior: "smooth"});
    }
	};
}, false);

// 横スクロールボタンを実装
// 参考：https://fantastech.net/button-scroll#outline-2
jQuery(function() {
    var rightbutton = jQuery('.rightbutton')[0];
    var leftbutton = jQuery('.leftbutton')[0];
        //右へ
        rightbutton.addEventListener('click', function (e) {
			e.preventDefault();
        jQuery('.scroll-wpp').animate({
            scrollLeft: jQuery('.scroll-wpp').scrollLeft() + 280
        }, 300);
        return false;
        });
        //左へスクロールで表示
        jQuery('.scroll-wpp').scroll(function () {
            if(jQuery(this).scrollLeft() < jQuery('.construction_item_container').width() - jQuery('.scroll-wpp').width()) {
                jQuery(rightbutton).fadeIn();
            } else {
                jQuery(rightbutton).fadeOut();
            }
        });
        //左へ
        leftbutton.addEventListener('click', function (e) {
			e.preventDefault();
        jQuery('.scroll-wpp').animate({
            scrollLeft: jQuery('.scroll-wpp').scrollLeft() - 280
        }, 300);
        return false;
        });
        //右へスクロールで表示
        jQuery(leftbutton).hide();
        jQuery('.scroll-wpp').scroll(function () {
            if(jQuery(this).scrollLeft() > 0) {
                jQuery(leftbutton).fadeIn();
            } else {
                jQuery(leftbutton).fadeOut();
            }
        });
  });

  
// 最下部までスクロールしたらフローボタンを消す
const flowbtn = document.getElementById('flow_btn');

var bodyHeight;
var windowHeight;

function setScroll() {
    bodyHeight = document.body.clientHeight // bodyの高さを取得
    windowHeight = window.innerHeight // windowの高さを取得
}

window.onload = setScroll;
window.onresize = setScroll;

window.addEventListener('scroll', () => {
var bottomPoint = bodyHeight - windowHeight // ページ最下部までスクロールしたかを判定するための位置を計算
  var currentPos = window.pageYOffset // スクロール量を取得
  if (bottomPoint <= currentPos) { // スクロール量が最下部の位置を過ぎたかどうか
    flowbtn.classList.add('is-scrollEnd') 
  } else {
    flowbtn.classList.remove('is-scrollEnd')
  }
});
