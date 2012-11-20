<?php

namespace app\models;
use lithium\security\Password;

class Users extends \lithium\data\Model {

	public $validates = array(
       'name' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please supply a username.'
            )
        ),
        'password' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please supply a password.'
            )
        ),
		'email' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please supply an email address.'
            )
        )
	);



}

?>