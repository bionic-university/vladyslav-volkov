<?php

/**
 * Created by PhpStorm.
 * User: bionic
 * Date: 4/29/14
 * Time: 8:28 AM
 */
class Student
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



} 