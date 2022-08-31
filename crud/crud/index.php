<?php 
	include "insert.php";







 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>
<body>
	
	
	<div class="row my-5">
		<div class="col-md-6 offset-md-3">
			<?php 

				$db = new Insert();

				if(isset($_POST['save'])){
					$validate = $db->validation($_POST['name'], $_POST['email'], $_POST['status']);

					if($validate){
						$db->save();
					}
				
				}
			 ?>
				
			<form method="POST" class="mt-5">
				<div class="form-group">
					<label for="">Your Name:</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="">Your Email:</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<select name="status" id="" class="form-control mt-3">
						<option value="1">User</option>
						<option value="2">Subscriber</option>
						<option value="3">Admin</option>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary w-100 mt-5" type="submit" name="save">Save</button>
				</div>
			</form>


			<!-- Show data  -->

			 <table class="table mt-3">
			 	<tr>
			 		<th>#sl No</th>
			 		<th>Name</th>
			 		<th>Email</th>
			 		<th>Status</th>
			 		<th>Action</th>
			 	</tr>
			 	<?php 

					$result = $db->show();

					while($data = $result->fetch_assoc()){
						 $data['name'];
					
					 	echo '<tr>
					 		<td>'.$data['id'].'</td>
					 		<td>'.$data['name'].'</td>
					 		<td>'.$data['email'].'</td>
					 		<td>'.$data['status'].'</td>
					 		<td>
					 			<button class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></button>
								<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item'.$data['id'].'"><i class="fa-solid fa-trash"></i></button>
					 		</td>
					 	</tr>';

					 	?>




				



					<!-- Modal -->
					<div class="modal fade" id="item<?php echo $data['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					       	Are you sure to delete this item!
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
					        <a href="delete.php?uid=<?php echo $data['id'];?>" class="btn btn-danger" >Delete</a>
					      </div>
					    </div>
					  </div>
					</div>



				<?php

			 		}

			 	?>
			 </table>

		</div>
	</div>


			<!-- Button trigger modal -->
			<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Launch demo modal
			</button> --> 

			





	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>