<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List_student</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.form-control{
			width: 300px;
			margin: 10px 10px 10px 400px;

		}
		#button{
			margin-left: 490px;
			margin-top: 10px;
		}
		#button2{
			width: 200px;
			margin-left: 430px;
			margin-top: 10px;
		}
		
	</style>

</head>
<body>
	<div class="container">
		<h1 class="text-center">LIST OF STUDENTS</h1>
		<form action="" method="POST" class="form-horizontal" role="form">
			<input type="text" name="search_value" id="input" class="form-control" placeholder="Nhap tu khoa tim kiem!">
			<div class="form-group">
				<div class="col-sm-5">
					<button name="action" value="search_student" type="submit" id="button" class="btn btn-primary">Search</button>
				</div>
				<div class="col-sm-5">
					<a href="?action=sortbyname"><button type="submit" id="button2" class="btn btn-primary">Sort by name</button></a>
				</div>
			</div>			
		</form>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Code</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Avatar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_student as $key => $value):?>
					<tr>
						<td> <?php echo $key; ?> </td>
						<td> <?php echo $value['code']; ?> </td>
						<td> <?php echo $value['name'];?> </td>
						<td> <?php echo $value['phone']; ?> </td>
						<td> <?php echo $value['email'];?> </td>
						<td> <img src="./public/image/<?php echo $value['avatar'];?>" alt="" height="70"> </td> 
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>