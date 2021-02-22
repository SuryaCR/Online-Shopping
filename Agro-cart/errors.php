<?php if(count($errors) > 0) : ?>
	<div>
		<?php foreach($errors as $error) : ?>
			<?php echo "<script>alert('$error');</script>" ?>
		<?php endforeach ?>
	</div>
<?php endif ?>