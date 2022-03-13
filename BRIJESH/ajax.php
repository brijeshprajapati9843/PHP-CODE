<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="handle.php" id="form" enctype="multipart/form-data">
		first Name<input type="text" id="firstname" name="firstname"><br><br>
		Last Name<input type="text" id="lastname" name="lastname"><br><br>
		email<input type="text" id="email" name="email"><br><br>
		upload image<input type="file" id="image" name="image"><br><br>
		<input type="submit" value="Submit" onclick="demo()">
	</form>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		// $(document).ready(function(e){
		// 	$('#form').on('submit',function(e){
		// 		e.preventDefault();

		

		function demo(){
			var form = $('#form')[0];
			var formData = new FormData(form);
		
		
				var formData = new FormData(this);
				$.ajax({
					url:"handle.php",
					type:"post",
					data : formData,
					contentType : false,
					processData : false,
					success: function(data){
						console.log(data);
						$('#firstname').val('');
						$('#lastname').val('');
						$('#email').val('');
						$('#mobile').val('');
						$('#image').val('');
					}
				});
			// })
			}
		// });
	</script>
</body>
</html>