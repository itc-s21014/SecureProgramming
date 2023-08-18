<body>
<div id="name" data-name="&lt;/script&gt;&lt;script&ht;alert(document.cookie)//"></div>
<script>
  var div = document.getElementById('name');
  var txt = div.dataset.name;
  display_length({"name": "徳丸"});
  div.textContent = txt + 'の文字数は' + txt.length + '文字です';
  function display_length(obj) {
    var name = obj.name;
  }

</script>
</body>
