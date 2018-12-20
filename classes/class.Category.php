<?php

class Category
{
    public $id = null;
    public $categoryName = null;

    public function __construct(int $id,  String $categoryName)
    {
        $this -> id = $id;
        $this -> categoryName = $categoryName;
    }

    public function getId()
    {
        return $this -> id;
    }

    public function getName()
    {
        return $this -> categoryName;
    }
}

?>