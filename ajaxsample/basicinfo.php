
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>medicinetracker</title>
</head>

<body>
	<input id="name" type="text" placeholder="enter name" value="">
	<br>
	<input id="no" type="tel" placeholder="enter number" value="">
	<br>
	<input id="submit" type="submit">

	<div id='div1'>
	</div>
</body>

<script>
	$(document).ready(function(){
		$.ajax({
			method:'GET',
			url:'ajaxprocess.php'
		}).done(function (data) {
    $('#div1').html(data);
    });
    });
//-------------------------------------------------------------
	$(document).ready(function(){
    $("#submit").click(function(){
        var name=$("#name").val();
        var no=$("#no").val();
     $.ajax({
        method:'POST',
        url: 'submit.php',
        dataType:'JSON',
        data: {'name':name,'phone':no},
        success: function(value) {
                if (value.msg ==  "true") {
                      alert("inserted");
                }else{
                      alert("failed");
                }
      }

    }).done(function(){
    	$(document).ready(function(){
		$.ajax({
			method:'GET',
			url:'ajaxprocess.php'
		}).done(function (data) {
    $('#div1').html(data);
    });
    });
    });
    });
});
</script>