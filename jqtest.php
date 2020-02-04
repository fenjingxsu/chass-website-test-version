<head> <script
src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script> <script type="text/javascript"> $(document).ready(function(){
$("button").dblclick(function(){ $("p").toggle(); });
$("button").click(function(){ $("p").show(2000); }); }); </script> </head>

<body>
<h2>This is a heading</h2>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<button>Click me</button>
</body>

</html>