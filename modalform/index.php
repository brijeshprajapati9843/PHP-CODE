<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Student
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
        	<div class="input-group mb-3">
        		<input type="text" class="form-control" placeholder="Enter Full Name">
        	</div>
        	<div class="input-group mb-3">
        		<input type="text" class="form-control" placeholder="Enter Email">
        	</div>
        	 
        	<input type="submit" class="btn btn-primary form-control">
        </form>
      </div>
      
    </div>
  </div>
</div>

<table class="table table-striped w-100 text-center">
  <tr>
  	<th>Id</th>
  	<th>Name</th>
  	<th>Email</th>
  </tr>
  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  </tr>
</table>


	</div>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>