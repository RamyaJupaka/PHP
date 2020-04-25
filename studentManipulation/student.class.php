<?php
class student
{
    private $StudentId;
    private $LastName;
    private $Address;
    private $GroupId;
    private $Photo;
    
    // create constructor
    function __construct($StudentId=null,$LastName=null,$Address=null,$GroupId=null,$photo=null)
    {
        $this->StudentId=$StudentId;
        $this->LastName=$LastName;
        $this->Address=$Address;
        $this->GroupId=$GroupId;
        $this->Photo=$photo;
        
    }
    // create getter
   
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

    public function setGroupId($GroupId)
    {
        $this->GroupId = $GroupId;
    }

    public function setPhoto($Photo)
    {
        $this->Photo = $Photo;
    }

    
   
    
    
    
}
