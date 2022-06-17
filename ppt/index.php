<html dir="rtl">
<head>
<title>ppt FAB</title>
<script src="jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("msg.php");
        setInterval(function() {
            $("#div_refresh").load("msg.php");
        }, 1000);
    });
 
</script>
</head>
<body>
    <div id="div_refresh"></div>
</body>
</html>