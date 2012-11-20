<?php 
$this->form->config(
    array( 
        'templates' => array( 
            'error' => '<span class="help-block" style="color:red">{:content}</span>' 
        )
    )
); 

echo $this->form->create($user,array('class'=>'form'));
echo " <legend>Add users</legend>";
echo $this->form->field('name', array('class'=>'span2','placeholder'=>'your name...','label'=>'Name'));
echo $this->form->field('password',array('type'=>'password'));
echo $this->form->field('email');
echo $this->form->submit('Submit', array('class'=>'btn btn-primary form-actions'));
echo $this->form->end();

?>