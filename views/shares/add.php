<!DOCTYPE html>
<html lang="en">

	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

	<body>  
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Share Something!</h3>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<label>Share Title</label>
						<input type="text" name="title" class="form-control" />
					</div>
					<div class="form-group">
						<label>Body</label>
						<textarea name="body" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Link</label>
						<input type="text" name="link" class="form-control" />
					</div>
					<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
					<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
				</form>
			</div>
		</div>

	</body>

</html>	