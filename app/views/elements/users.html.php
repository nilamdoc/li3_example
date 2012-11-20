<div class="btn-group">
	<button class="btn">Users</button>
	<button class="btn dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<li><?php echo $this->html->link('Add','users/add'); ?> </li>
		<li><?php echo $this->html->link('List','users/'); ?></li>
	</ul>
</div>


<?php $this->scripts('<script src="/bootstrap/js/jquery.js"></script>'); ?>
<?php $this->scripts('<script src="/bootstrap/js/bootstrap-dropdown.js"></script>'); ?>
