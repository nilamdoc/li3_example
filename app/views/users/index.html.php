<?php
echo " <legend>Add users</legend>";
?>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>Name</th>
		<th>Password</th>
		<th>Email</th>
		<th colspan="2">Action</th>		
	</thead>
	<tbody>
<?php foreach ($users as $user){?>
		<tr>
			<td><?=$user->name;?></td>
			<td><?=$user->password;?></td>			
			<td><?=$user->email;?></td>			
			<td>
			<?php
			echo $this->html->link('Edit','/users/edit/'.$user->id,array('class'=>'btn'))
			?>
			</td>
			<td><?php
			echo $this->form->create(null,array('action'=>'view'));
			echo $this->form->submit('View', array('class'=>'btn btn-primary'));
			echo $this->form->field('id',array('type'=>'hidden','value'=>$user->id));
			echo $this->form->end();
			?></td>

		</tr>
<?php }?>
	</tbody>
</table>

