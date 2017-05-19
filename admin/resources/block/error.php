
<?php if (!empty($error)) { ?>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<ul>
		<?php foreach ($error as $item) { ?>
		<li><?php echo $item; ?></li>
		<?php } ?>
	</ul>
	<br>
</div>
<?php } ?>