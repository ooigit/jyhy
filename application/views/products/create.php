<h2>Create a product item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('products/create') ?>

	<label for="title">Name</label><br />
	<input type="input" name="name" /><br />

	<label for="description">Description</label><br />
	<textarea name="description"></textarea><br />
					
	<input type="submit" name="submit" value="Submit" /> 
</form>
