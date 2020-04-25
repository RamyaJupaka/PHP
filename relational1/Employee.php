<?php
class employee
{
    private $empid;
    private $name;
    private $salary;
    /**
     * @return mixed
     */
    public function getEmpid()
    {
        return $this->empid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $empid
     */
    public function setEmpid($empid)
    {
        $this->empid = $empid;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    
    function __construct($empid,$name,$salary)
    {
        $this->empid=$empid;
        $this->name=$name;
        $this->salary=$salary;
    }

    public function __toString()
    {
        return "<tr><td>$this->empid</td>
                    <td>$this->name</td>
                    <td>$this->salary</td>
                </tr>";
        
    }
    
    public static function heading()
    {
        echo "<table border='3'>";
        echo "<tr><th>empID</th><th>empName</th><th>Salary</th></tr>";
    }
    public static function footer()
    {
        echo"</table>";
    }
}