<?php 
require_once __DIR__.'/api/functions.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		*
		{
			font-family: arial;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-sm-4">
				<form>
					<h3 class="my-4 text-center">Register Here</h3>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="name" placeholder="Enter Full Name">
		        	</div>
		        	<div class="input-group mb-3">
		        		<input type="text" class="form-control" id="email" placeholder="Enter Email">
		        	</div>
		        	 
		        	<input type="button" id="submit" value="Register" class="btn btn-primary form-control mb-5">
		         </form>
			</div>
			<div class="col-sm-8">
				<table class="table table-striped w-100 text-center">
				  <tr>
				  	<th>Id</th>
				  	<th>Name</th>
				  	<th>Email</th>
				  </tr>
				  <tbody id="records">

			      </tbody>
				</table>
			</div>
		</div>
	


	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>

	$(document).ready(function(){
       load_emp_data();

       $("#submit").click(function(){
         
        var name = $("#name").val();
        var email = $("#email").val();
            if(name==""){
                window.alert("Name is required");
            }

            
            if(email==""){
                window.alert("Email is required");
            }

            if(name!="" && email!=""){
                insert_emp_data(name,email);
            }
            
       })
});

function load_emp_data(){

    $.ajax({
        url:"<?php echo url('api/getemp.php')?>",
        type:"GET",
        success:function(response){
            if(response.status==true && response.code ==200){
                let output = ``;
                response.data.forEach(function(emp,index){
                    output = output +`                
            <tr>
                <td>${emp.id}</td>
                <td>${emp.name}</td>
                <td>${emp.email}</td>
            </tr>`;
                });

            $("#records").html(output);

            }else{
                console.log(response.message);
            }
        }
    });
    
}

function insert_emp_data(name,email){
    $.ajax({
        url:"<?php echo url('api/addemp.php'); ?>",
        type:"POST",
        data:{
            "name":name,
            "email":email,
        },
        success:function(response){
            if(response.code == 200 && response.status == true){
                window.alert(response.message);
                $("#name").val("");
                $("#email").val("");
            }else{
                window.alert(response.message);
                $("#name").val("");
                $("#email").val("");
            }
            load_emp_data();
        }
    })
}
	</script>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>