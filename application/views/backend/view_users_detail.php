<!doctype html>
<html>
	<head>
		<title>Admin Page | View Invoice Detail</title>
		<!-- Load JQuery dari CDN -->
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	</head>
	<body>
		<?php $this->load->view('backend/admin_menu')?>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
                <h3>Items Ordered in Invoice > </h3>
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>username</th>
							<th>email</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						foreach($users as $user) : 
							?>
						<tr> 
							<td><?=$user->id?></td>
							<td><?=$user->username?></td>
							<td><?=$user->email?></td>

						</tr>
						<?php endforeach; ?>

					</tbody>

				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>
