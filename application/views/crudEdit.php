<?php
	$this->load->view('includes/header.php');
?>
         
     <nav class="navbar navbar-dark bg-dark">
     	<a class="navbar-brand" href="#">Codeigneter</a>
     </nav>

     <br/>

     <div class="container">
     	<form method="POST" action="<?php echo site_url('CrudController/update'); ?>/<?php echo $row->id; ?>">
     		<div class="form-group">
     			<label for="firstName">FirstName</label>
     			<input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName;?>" placeholder="FirstName ...">
     		</div>
     		<div class="form-group">
     			<label for="lastName">LastName</label>
     			<input type="text" class="form-control" name="lastName" value="<?php echo $row->lastName; ?>" placeholder="LastName ...">
     		</div>
     		<div class="form-group">
     			<label for="role">Role</label>
     			<input type="text" class="form-control" name="role" value="<?php echo $row->role; ?>" placeholder="Role">
     		</div>
     		<button type="submit" class="btn btn-secondary">Submit</button>
     	</form>
     </div>

    

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
 </html>