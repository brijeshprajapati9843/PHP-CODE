<?php 

require_once __DIR__.'/query-builder/Query.php';



// $conn = mysqli_connect("localhost","root","","app2022");

extract($_POST);

if (isset($_POST['readRecord'])) {
	
	$data = '<table class="table table-bordered table-striped text-center">
		<tr class = "table-dark"> 	
			<th>No</th>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Edit Action</th>
			<th>Delete Action</th>
		</tr>';
			$query = new Query();
			$records = $query->select("*")->table("stdata")->allRecords();
		 	
		 	$number = 1;

		 	if ($records > 0) {
		 		foreach($records as $row){
				$data .= '<tr>

					<td>'.$number.'</td>
					<td>'.$row->id.'</td>
					<td>'.$row->name.'</td>
					<td>'.$row->email.'</td>
					<td>'.$row->phone.'</td>

					<td>
						<button onclick= "GetuserDetails('.$row->id.')" class = "btn btn-warning">Edit</button>
					</td>
					<td>
						<button onclick= "deleteuserDetails('.$row->id.')" class = "btn btn-danger">Delete</button>
					</td>

					</tr>';

					$number++;
		 	}
 			

		
			$data .= '</table>';
			echo $data;

		 	}else{

		 		 $data = "Record Not Found!!";
		 		 echo $data;
		 	}

		 	
	
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
	
	$query = new Query();
	if ($query->insert('stdata',[
		'name'=>$name,
		'email'=>$email,
		'phone'=>$phone,
	])) {
		echo "Successfully";
	}else{
		echo " error";
	}

}

if (isset($_POST['id'])) {
	
	$id = $_POST['id'];

	$query = new Query();
	if ($query->delete("stdata")->where('id',$id)->commit()) {
		echo "Delete Successfully.";
	}else{

		echo "Record Cannot Deleted!!";
	}

}





 ?>