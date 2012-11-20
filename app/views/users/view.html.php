<?php
echo " <legend>View User</legend>";
?>
<table class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<td>Name</th>
		<td><?=$user->name?></td>
	</tr>
	<tr>
		<td>Email</th>
		<td><?=$user->email?></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php
			echo $this->form->create(null,array('action'=>'delete'));
			echo $this->form->submit('Delete', array('class'=>'btn btn-primary'));
			echo $this->form->field('id',array('type'=>'hidden','value'=>$user->id));
			echo $this->form->end();
			?>
		</td>
	</tr>
</table>
<?php

?>