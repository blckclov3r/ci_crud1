<?php
	$this->load->view('includes/header.php');
?>
         
     <nav class="navbar navbar-dark bg-dark">
     	<a class="navbar-brand" href="#">Codeigneter</a>
     </nav>

     <br/>

     <div class="container">
     	<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Insert</button>
     	<table style="margin-top: .5rem;" class="table table-bordered table-striped">
     		<thead class="thead-dark">
     			<tr>
     				<th>#</th>
     				<th>FirstName</th>
     				<th>LastName</th>
     				<th>Role</th>
     				<th>Module</th>
     			</tr>
     		</thead>
     		<tbody>
     			<?php
     				foreach ($result as $row) { ?>
     					<tr>
		     				<td><?php echo $row->id; ?></td>
		     				<td><?php echo $row->firstName; ?></td>
		     				<td><?php echo $row->lastName; ?></td>
		  					<td><?php echo $row->role; ?></td>
		  					<td><a href="<?php echo site_url('CrudController/edit'); ?>/<?php echo $row->id;?>"><button class="btn btn-info">Edit</button></a> 
		  						<a href="<?php echo site_url('CrudController/delete'); ?>/<?php echo $row->id; ?>"><button class="btn btn-danger">Delete</button></a></td>
		     			</tr>	
     			<?php }
     			?>
     		</tbody>
     	</table>
     </div>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
     	<div class="modal-dialog" role="document">
     		<div class="modal-content">
     			<div class="modal-header">
     				<h5 class="modal-title">Insert Modal</h5>
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
     					<span aria-hidden="true">&times;</span>
     				</button>
     			</div>
     			<div class="modal-body">
     				<form method="POST" action="<?php echo site_url('CrudController/create'); ?>">
     					<div class="form-group">
     						<label for="firstName">FirstName</label>
     						<input type="text" class="form-control" name="firstName" placeholder="FirstName ...">
     					</div>
     					<div class="form-group">
     						<label for="lastName">LastName</label>
     						<input type="text" class="form-control" name="lastName" placeholder="LastName ...">
     					</div>
     					<div class="form-group">
     						<label for="role">Role</label>
     						<input type="text" class="form-control" name="role" placeholder="Role">
     					</div>
     					<button type="submit" class="btn btn-secondary">Submit</button>
     				</form>
     			</div>
     			<div class="modal-footer">
		        	<button type="button" class="close" data-dismiss="modal">x</button>
		      </div>
     		</div>
     	</div>
     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
 </html>