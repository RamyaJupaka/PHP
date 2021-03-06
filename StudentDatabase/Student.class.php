<?php
include 'dbconfig.php';
class student
{
    private $StudentId;
    private $LastName;
    private $Address;
    private $BirthDate;
    private $GroupId;
    private $Photo;
    
    
    public function getStudentId()
    {
        return $this->StudentId;
    }

    
    public function getLastName()
    {
        return $this->LastName;
    }

    
    public function getAddress()
    {
        return $this->Address;
    }

    
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

   
    public function getGroupId()
    {
        return $this->GroupId;
    }

   
    public function getPhoto()
    {
        return $this->Photo;
    }

   
    public function setStudentId($StudentId)
    {
        $this->StudentId = $StudentId;
    }

   
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    
    public function setBirthDate($BirthDate)
    {
        $this->BirthDate = $BirthDate;
    }

    
    public function setGroupId($GroupId)
    {
        $this->GroupId = $GroupId;
    }

    
    public function setPhoto($Photo)
    {
        $this->Photo = $Photo;
    }

    function __construct($StudentId=null,$LastName=null,$Address=null,$BirthDate=null,$GroupId=null,$Photo=null)
    {
        $this->StudentId=$StudentId;
        $this->LastName=$LastName;
        $this->Address=$Address;
        $this->BirthDate=$BirthDate;
        $this->GroupId=$GroupId;
        $this->Photo=$Photo;
    }
    
    public static function getHeader()
    {
        $str="<table border = '2'>";
        $head="<tr><th>StudentId</th><th>LastName</th><th>Address</th><th>BirthDate</th><th>GroupId</th><th>Photo</th>";
        return $head;
    }
    
    
    
}