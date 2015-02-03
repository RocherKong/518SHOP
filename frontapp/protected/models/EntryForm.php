<?php

class EntryForm extends CFormModel
{
    public $name;
    public $password;

    public function rules()
    {
        return array(
            array('name, password', 'required'),
            //array('email', 'email'),
        );
    }
}
