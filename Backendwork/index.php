<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	
	<div class="container-fluid">
		<!-- ############ Header ############# -->
		<div class="row text-center ">
		<div class="alert alert-info text-danger" role="alert">
   			<h1>AJAX CRUD OPERATION</h1>
		</div>
		</div>
		<!-- ############ Header ############# -->

		<div class="row justify-content-center">
			<div class="col-sm-10">
		
		<!-- Button trigger modal -->
		 <div class="d-flex justify-content-end">
		 	<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
		  Add Student
		</button>
		 </div>

		 <h2 class="text-danger">All Records</h2>
		 <div id="records_contant">
		 	
		 </div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Save Data in Database</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <!-- <form > -->
		        	<label for="name">Name :</label>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="name" placeholder="Enter Name">
		        	</div>
		        	<label for="name">Email :</label>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="email" placeholder="Enter Email">
		        	</div>
		        	<label for="name">Phone :</label>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="phone" placeholder="Enter phone">
		        	</div>
		        	 
		        	 <!-- <button type="button" class="btn btn-success" id="save" onclick="addData()">Save Data</button> -->
		        <!-- </form> -->
		      </div>
		        <div class="modal-footer">
		        <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick="adduserData()">Save</button>
	
		      </div>
		    </div>
		  </div>
		</div>



		<!-- Modal -->


		<!-- ######### update modal ########## -->

		<div class="modal fade" id="update_user_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">update Data in Database</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <!-- <form > -->
		        	<label for="update_name">Name :</label>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="update_name" placeholder="Enter Name">
		        	</div>
		        	<label for="update_email">Email :</label>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="update_email" placeholder="Enter Email">
		        	</div>
		        	<label for="update_phone">Phone :</label>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="update_phone" placeholder="Enter phone">
		        	</div>
		        	 
		        	 <!-- <button type="button" class="btn btn-success" id="save" onclick="addData()">Save Data</button> -->
		        <!-- </form> -->
		      </div>
		        <div class="modal-footer">
		        <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick="updateuserData()">Update</button>
		        <input type="hidden" name="" id="hidden_user_id">
	
		      </div>
		    </div>
		  </div>
		</div>

		<!-- ######### update modal ########## -->

		</div>
		</div>
		<!-- Modal -->



	</div>


	<script src="js/bootstrap.js"></script>
	<!-- <script src="js/jquery.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>

		$(document).ready(function(){
			readRecords();

		});

		function readRecords(){
			var readRecord = "readRecord";
			$.ajax({
				url:"addData.php",
				type:"post",
				data:{readRecord:readRecord},
				success:function(data,status){
					$("#records_contant").html(data);
					// console.log(data)
				},

			});
		}

		function adduserData() {
				
			// alert("welcome")
			var name = $("#name").val();
			var email = $("#email").val();
			var phone = $("#phone").val();

			$("#name").val("");
			$("#email").val("");
			$("#phone").val("");
			
		
			$.ajax({

				url:"addData.php",
				type:"post",
				data:{
					name:name,
					email:email,
					phone:phone,
					
				},
				success:function(data,status){
					// console.log(response)
					readRecords();
				},
			});
		}

		function deleteuserDetails(id){
			var id = id;

			$.ajax({

				url:"addData.php",
				type:"post",
				data:{
					id:id
					
				},
				success:function(data,status){
					console.log(data)
					readRecords();
				},

			});

		}


		function GetuserDetails(id){
			// var id = id;

			$("#hidden_user_id").val(id);

			$.post("updateData.php",{
				id:id
			},function(data,status){
				var user = JSON.parse(data);
				$("#update_name").val(user.name);
				$("#update_email").val(user.email);
				$("#update_phone").val(user.phone);
				// console.log(data)
			}

			);

			$("#update_user_modal").modal("show");
			 

		}


		function updateuserData(){

			// var id = id;

			var st_name = $("#update_name").val();
			var st_email = $("#update_email").val();
			var st_phone = $("#update_phone").val();
			// alert(st_name);
			var hidden_user_id = $("#hidden_user_id").val();
			
		
			$.post("edit.php",{

				hidden_user_id:hidden_user_id,
				st_name:st_name,
				st_email:st_email,
				st_phone:st_phone
			},function(data,status){
				$("#update_user_modal").modal("hide");
				readRecords();
			}


			);

		}

		
	</script>

</body>
</html>