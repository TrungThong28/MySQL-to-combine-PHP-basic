<?php 
	include ('connection.php');

	if (!empty($_GET['page'])) {

		$page = $_GET['page'];
	} else {
		$page = 1;
	}

	$keyword = null;
	if (isset($_GET['keyword'])) {
		$keyword = $_GET['keyword'];
	}

	$url = 'index.php?';

	$limit = 3;
	$offset = ($page - 1) * $limit;


	$sqlTotal = "SELECT count(*) AS total FROM users";

	$sql = "SELECT * FROM users LIMIT $limit OFFSET $offset";

	//Tim kiem
	if ($keyword != null) {

		$sqlTotal = "SELECT count(*) AS total FROM users WHERE username LIKE '%{$keyword}%'";

		$sql = "SELECT * FROM users WHERE username LIKE '%{$keyword}%' LIMIT $limit OFFSET $offset";

		$url = 'index.php?keyword='. $keyword . '&';
	}

	$resultTotal = $connection->query($sqlTotal);
	$totalRecord = $resultTotal->fetch_assoc()['total'];
	$totalPage = ceil($totalRecord / $limit);


	
	$result = $connection->query($sql);
	$users = [];
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$users[] = $row;
		}
	} else {
		echo 'No result';
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Learn MySQL</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	
 </head>
 <body>
 	<div class="container">
 		<div class="row">
			<div class="col-md-12">
			<form action="" method="GET" class="form-inline" role="form">
				<div class="form-group">
					<label class="sr-only" for="">Từ khóa</label>
					<input type="text" name="keyword" class="form-control" id="" value="<?php echo $keyword ?>" placeholder="Từ khóa">
				</div>
				<button type="submit" class="btn btn-primary">Tìm kiếm</button>
			</form>

 			<div class="col-md-12">
 				<table class="table table-hover">
 					<thead>
 						<tr>
 							<th>ID</th>
 							<th>Username</th>
 							<th>Password</th>
 							<th>Gender</th>
 							<th>Address</th>
 							<th>Action</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php foreach ($users as $key): ?>
 						<tr>
 							<td><?php echo $key['id']; ?></td>
 							<td><?php echo $key['username']; ?></td>
 							<td><?php echo $key['password']; ?></td>
 							<td><?php echo $key['gender'] == 1? 'Male' : 'Female' ?></td>
 							<td><?php echo $key['address']; ?></td>
 							<td>
 								<a href="edit.php?id=<?php echo $key['id']; ?>"><i class="btn btn-warning">Sửa</i></a>
 							</td>
 						</tr>
 						<?php endforeach ?>
 					</tbody>
 				</table>
 				<div>
 					<a href="register.php" class="btn btn-success">Thêm mới</a>
 				</div>
 				<ul class="pagination">
 					<?php if ($page > 1): ?>
						<li><a href="<?php echo $url ?>page=<?php echo $page - 1 ?>">&laquo;</a></li>
 					<?php endif; ?>
 					
 					<?php for ($i=1; $i < $totalPage; $i++) { 
 						?>
 					<li class="<?php echo $page == $i? 'active' : '' ?>"><a href="<?php echo $url ?>page=<?php echo $i ?>"><?php echo $i ?></a></li>
 					<?php
 					   }?>

 					<?php if ($page < $totalPage): ?>
 						<li><a href="<?php echo $url ?>page=<?php echo $page + 1 ?> ?>">&raquo;</a></li>
 					<?php endif ?>
 					
 				</ul>
 			</div>
 		</div>
 		
 	</div>
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </body>
 </html>