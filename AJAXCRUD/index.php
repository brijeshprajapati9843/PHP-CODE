<?php 

require_once __DIR__.'/functions.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD IN AJAX</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="alert alert-danger" role="alert">
		  <h4 class="text-center">Student Management System With AJAX</h4>
		</div>
		<div class="col-sm-4">
			<div class="alert alert-info" role="alert">
			  <h5 class="text-center">Add Student Record</h5>
			</div>

		 
			<form id="myform"> 
				<label for="nameid">Full Name</label>
				<input type="text" id="nameid" class="form-control mb-2" placeholder="Enter Full Name">
			 
		 		<label for="emailid">Email</label>
				<input type="text" id="emailid" class="form-control mb-2" placeholder="Enter Email">
			 
			 	<label for="phoneid">Phone</label>
				<input type="text" id="phoneid" class="form-control mb-2" placeholder="Enter Phone no">
			 	
			 	<label for="classid">Class</label>
				<input type="text" id="classid" class="form-control mb-3" placeholder="Enter Class">
			 	
			 	 
			 	<input type="button" value="Register" id="submitid" class="btn btn-success fw-bold">
			 	<input type="button" value="Update" style="display:none;" id="updateid" class="btn btn-warning fw-bold">
			</form>
			<div id="success" class="mt-3"></div>
			<!-- <div id="error" class=""></div> -->
			<!-- <div class="alert alert-danger" role="alert">
  				
			</div> -->
		</div>
		<div class="col-sm-8">
			<div class="alert alert-info" role="alert">
			  <h5 class="text-center">Show All Student Records</h5>
			</div>

			<table class="table table-success table-striped text-center">
  				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Class</th>
					 
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tbody id="records">
					
				</tbody>
				
  			</table>
		</div>

	</div>

</div>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 -->
<script>
	
	$(document).ready(function(){
		
		// Ajax Request for show data
		function showdata() {
			$.ajax({
				url:"getdata.php",
				type:"GET",
				dataType:"json",
				success:function(response){

					// console.log(response);

					if (response != "") {
						let output = "";
					response.forEach(function(st,index){
						// console.log(st.name);

						output = output+`<tr>
						<td>${st.id}</td>
						<td>${st.name}</td>
						<td>${st.email}</td>
						<td>${st.phone}</td>
						<td>${st.class}</td>
						<td><a href="javascript:handleEdit('${st.id}');" class="btn btn-warning btn-sm">Edit</a></td>
						<td><a href="javascript:handleDelete('${st.id}');" class="btn btn-danger btn-sm">Delete</a></td>
						</tr>`;
					});
					$("#records").html(output);

					}else{
						console.log("No Record Found!!");
					}
				},
			})
		}
		showdata();


function handleEdit(id)
	{
		$("#updateid").show();
	    $("#submitid").hide();
	    $("#hidden-id").remove();

	    get_data(id);
	}

	function get_data(id)
	{
	    $.ajax({
	        url : "<?php echo url('/getone.php')  ?>",
	        type : "POST",
	        data : {
	            'id': id
	        },
	        success : function(response)
	        {
	             
                // console.log(response.data);
                
                let name = response.name;
                let email = response.email;
                let phone = response.phone;
                let classe = response.class;
                let  id   =    response.id;
                $("#name").val(name);
                $("#email").val(email);
                $("#form").append(`<input type="text" id="hidden-id" value="${id}"> `)
	            
	        },
	    });
	}


		

		// Ajax Request for insert data

		$("#submitid").click(function(e){
			e.preventDefault();
			console.log("Clicked submit Button");

			var name = $("#nameid").val();
			var email = $("#emailid").val();
			var phone = $("#phoneid").val();
			var classe = $("#classid").val();
			 

		 	mydata = {name:name,email:email,phone:phone,class:classe };
	
		$.ajax({
			url:"addData.php",
			type:"POST",
			data:JSON.stringify(mydata),
			success:function(response){
				// console.log(response);
				msg = `<div class="alert alert-success" role="alert">${response}</div>`;
				$("#success").html(msg);

				$("#myform")[0].reset();
				showdata();
			},
		});

	});

	


		// Ajax Request for Deleting data

		// $("#records").on("click",".btn-del",function(){
		// 	let id = $(this).attr("sid");
		// 	// console.log(id);

		// 	mydata = {sid: id};
		// 	mythis = this;

		// 	$.ajax({

		// 		url:"deleteData.php",
		// 		type:"POST",
		// 		data:JSON.stringify(mydata),
		// 		success:function(response){
		// 			msg = `<div class="alert alert-success" role="alert">${response}</div>`;
		// 			$("#success").html(msg);
		// 			showdata();
		// 			// $(mythis).closest("tr").fadeOut();
					
		// 		},
		// 	});
		// });


		



			// Ajax Request for Updating data

		// 	$("#records").on("click",".btn-edit",function(){
		// 	let id = $(this).attr("sid");
		// 	// console.log(id);

		// 	mydata = {sid: id};

		// 	$.ajax({

		// 		url:"updateData.php",
		// 		type:"POST",
		// 		dataType:"json",
		// 		data:JSON.stringify(mydata),
		// 		success:function(response){
					 
		// 			$("#nameid").val(response.name);
		// 			$("#emailid").val(response.email);
		// 			$("#phoneid").val(response.phone);
		// 			$("#classid").val(response.class);
					
		// 		},
		// 	});
		// });
});
</script>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>