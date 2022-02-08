// セレクトメニュー（施工事例ページ）

(function() {

  var select = document.getElementById('select_category');

  if (!select) return;

  select.addEventListener('change', function(event) {
    var target = event.currentTarget;
    if (target.value) location.href = target.value;
  });

})();
