<!DOCTYPE html>
<html>
<head>
	<title>ajax tutorial</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<form  method="POST" id="myForm">
		<input type="text" name="name" id="name"><br>
		<input type="text" name="age" id="age"><br>
		<button>click me</button>
	</form>
<script type="text/javascript">
	$('#myForm').submit(function(e){
        e.preventDefault();
        var fdata = new FormData(this); 
        $.ajax({
            url: 'ajax.php',
            data: fdata,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data) {
            	console.log(data);
            }
        });
    });
</script>


</body>
</html>