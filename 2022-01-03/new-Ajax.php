<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<input type="text" id="name"> <br><br>
	<input type="text" id="email"><br><br>
	<input type="hidden" name="" id="hidden_user_id">
	<button id="btn">Save</button> 
	<button onclick="updateuserData()" id="update-btn" style="display: none;">Update</button><br><br>

	<!-- <div id="record"></div> -->
	<table border="1" width="100%">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Edit</td>
			<td>Delete</td>

		</tr>
		<tbody id="record">
			
		</tbody>
	</table>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		$(document).ready(function(){

			readRecords();


			$("#btn").click(function(){
			var name = $("#name").val();
			var email = $("#email").val();

			$("#name").val("");
			$("#email").val("");

			// alert(name);
			$.ajax({
				url:"handle.php",
				type:"post",
				data:{
					name:name,
					email:email
				},
				success:function(response){
					console.log(response);
					readRecords();

				}
			});

		});


		});
		function readRecords() {
			var record = "record";
			$.ajax({

				url:"handle1.php",
				type:"post",
				data:{
					record:record
				},
				success:function(response){
					// console.log(response);
					$('#record').html(response);
					// deleteRecord(id);
				}
			});
		}

		function deleteRecord(id){

				var id = id;
				// alert('ok');

				$.ajax({

				url:"delete.php",
				type:"post",
				data:{
					id:id
				},
				success:function(response){
					console.log(response);
					readRecords()
				}
			});
			
		}
		function editRecord(id){


			$('#hidden_user_id').val(id);
			var id = id;
			$.ajax({
				url:"edit.php",
				type:"post",
				data:{
					id:id
				},
				success:function(response){
					var user = JSON.parse(response);
					console.log(response);
					$("#name").val(user.name);
					$("#email").val(user.email);
				}

			});
			$('#btn').hide();
			$('#update-btn').show();
		}
		function updateuserData(){
			
			var name = $('#name').val();
			var email = $('#email').val();
			var hidden_id = $('#hidden_user_id').val();
			$('#name').val("");
			$('#email').val("");
			$('#hidden_user_id').val("");

			$.ajax({

				url:"update.php",
				type:"post",
				data:{
					name:name,
					email:email,
					hidden_id:hidden_id
				},
				success:function(response){
					console.log(response);
					readRecords();
					$('#update-btn').hide();
					// $('#btn').show();
				}

			});


			$('#update-btn').show();
			// $('#update-btn').hide();
			$('#btn').show();

		}


	</script>

</body>
</html>