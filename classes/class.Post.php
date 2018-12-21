<?php

require_once("SQLClients/class.PostsSQLClient.php");

class Post
{

    private $id = null;
    private $description = null;
    private $imageUrl = null;
    private $userId = null;

    private $questions = [];
    private $categories = [];

    public function __construct($id, $description, $imageUrl, $userId)
    {
        $this -> id = $id;
        $this -> description = $description;
        $this -> imageUrl = $imageUrl;
        $this -> userId = $userId;
    }

    public function loadCats()
    {
        (new PostsSQLClient()) -> loadCats($this);
    }

    public function getId()
    {
        return $this -> id;
    }

    public function getDescription()
    {
        return $this -> description;
    }

    public function getImg()
    {
        return $this -> imageUrl;
    }

    public function getQuestions()
    {
        return $this -> questions;
    }

    public function getQuestionByIndex($id)
    {

    }


    public function getUserId()
    {
        return $this -> userId;
    }

    public function setDescription($desc)
    {

    }

    public function setImg($imgUrl)
    {

    }

    public function addQuestion($question)
    {

    }


    public function getCategories()
    {
        return $this -> categories;
    }

    public function getCategoryByIndex($ind)
    {

    }

    public function addCategory($cat)
    {
        array_push($this -> categories, $cat);
    }

    public function setUserId($userId)
    {

    }

    public function removeQuestion($ind)
    {

    }

    public function removeCategory($ind)
    {

    }
}
?>