<?php
echo $this->form->create($user,array('class'=>'form'));
echo " <legend>Edit users</legend>";
echo $this->form->field('name', array('class'=>'span2','value'=>$user->name));
echo $this->form->field('email',array('class'=>'span2','value'=>$user->email));
echo $this->form->field('id',array('type'=>'hidden','value'=>$user->id));
echo $this->form->submit('Submit', array('class'=>'btn btn-primary form-actions'));
echo $this->form->end();
?>