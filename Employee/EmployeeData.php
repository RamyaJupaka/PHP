<?php
class employee
{
    private $empID;
    private $empName;
    private $empType;
    private $salary;
    private $commission;
   
    function __construct($empID,$empName,$empType,$salary,$commission)
    {
        $this->empID=$empID;
        $this->empName=$empName;
        $this->empType=$empType;
        $this->salary=$salary;
        $this->commission=$commission;
        
        
    }
    
    public function getEmpID()
    {
        return $this->empID;
    }

    /**
     * @return mixed
     */
    public function getEmpName()
    {
        return $this->empName;
    }

    /**
     * @return mixed
     */
    public function getEmpType()
    {
        
        return $this->empType;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param mixed $empID
     */
    public function setEmpID($empID)
    {
        $this->empID = $empID;
    }

    /**
     * @param mixed $empName
     */
    public function setEmpName($empName)
    {
        $this->empName = $empName;
    }

    /**
     * @param mixed $empType
     */
    public function setEmpType($empType)
    {
        $this->empType = $empType;
    }

    /**
     * @param mixed $salary
     */
//     public function setSalary($salary)
//     {
//         $this->salary = $salary;
//     }

    /**
     * @param mixed $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    public function __toString()
    {
        return "<tr><td>$this->empID</td>
                    <td>$this->empName</td>
                    <td>$this->empType->newEmployee()</td>
                    <td>$this->salary</td>
                    <td>$this->commission</td>
                </tr>";
        
    }
    
     public function newEmployee(){
                if (empType == 'F')
                {
                    'FullTime';
                }
            }
    
    public static function heading()
    {
        echo "<table border='3'>";
        echo "<tr><th>empID</th><th>empName</th><th>empType</th><th>Salary</th><th>commission</th></tr>";     
    }
    public static function footer()
    {
        echo"</table>";
    }
    public function __call($method,$params)
    {
        switch ($method)
        {
            case 'setSalary':
                if (count($params)==1)
                {
                    $this->salary = $params[0];
                }
                   elseif (count($params)==2) 
                   {
                       $percentage = $params[1];
                       $this->salary = $this->salary+$params[1];
                       
                   }
                      elseif (count($params)==3)
                        {
                            $percentage = $params[2];
                            $this->salary=$this->salary+($this->salary*$percentage)/100;
                        }
                    break;
            default:
                break;
        }
    }
}