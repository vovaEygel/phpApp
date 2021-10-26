<?php

class task{
    public $id;
    public $title;
    public $description;
    public $date;
    public $status = false;

    // public function __construct($id,$title,$description,$dateCreated,$status){
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->description = $description;
    //     $this->dateCreated = $dateCreated;
    //     $this->status = $status;
    // }

    function isComplete(){
        return  $this->status;
    }
    function toggleStatus(){
        $this->status = !$this->status;
    }
}