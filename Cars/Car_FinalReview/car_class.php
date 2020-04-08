<?php
class Car
{
    private $number;
    private $model;
    private $brand;
    private $price;

    public function __construct($number=null,$model=null,$brand=null,$price=null)
    {
        $this-> number=$number;
        $this->model = $model;
        $this->brand=$brand;
        $this->price=$price;
        
        
    }
    
    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addData($connection)
    {
        $number = $this->number;
        $model = $this->model;
        $brand = $this->brand;
        $price = $this->price;
        $sql = "insert into car values('$number','$model','$brand','$price')";
        $result = $connection->exec($sql);
        return $result;
    }
    
    public static function getHeader(){
        $str = "<table border = '2'>";
        $head = "<tr><th>number</th><th>model</th>
                     <th>brand</th><th>price</th>
                     </tr>";
        return $str.$head;
    }
    
    public static function getFooter()
    {
        return "</table>";
    }
    public function __toString(){
        $data ="<tr><td>$this->number</td>
                    <td>$this->model</td>
                    <td>$this->brand</td>
                    <td>$this->price</td>
                   </tr>";
        return $data;
    }
    
    public function getAllCars($connection){
        $counter = 0;
        $sqlStmt = "select * from car";
        foreach ($connection->query($sqlStmt) as $oneRow){
            $carObj = new Car();
            $carObj->setNumber($oneRow["Number"]);
            $carObj->setModel($oneRow["Model"]);
            $carObj->setBrand($oneRow["Brand"]);
            $carObj->setPrice($oneRow["Price"]);
           
            $listOfCars[$counter++]=$carObj;
        }
        return $listOfCars;
    }
    
    
    public function displayAllCars($listOfCars){
        // print_r($listOfStudents);
        echo Car::getHeader();
        
        foreach ($listOfCars as $oneCar){
            echo $oneCar;
        }
        echo Car::getFooter();
    }

    public function update($connection,$model,$brand,$number,$price)
    {

        $dic = array('Model'=>$model,'Brand'=>$brand,'Price'=>$price);
            foreach ($dic as $key=>$value){
                 if($value != ''){              
                $sql  = 'UPDATE car SET '.$key.' = "'.$value.'" WHERE Number = '.$number;
                $res = $connection->exec($sql);
             }
        }
             
        return $res;
        
   }
   
   public function getCarByNumber($connection,$id){
           
          $sql = "SELECT * FROM car WHERE Number = ?";
          $prepare = $connection->prepare($sql);
          $prepare ->execute([$id]);
          $res = $prepare->fetch();
          if($res !=null){
              $one = new Car($res['Number'],$res['Model'],$res['Brand'],$res['Price']);
              return $one;
          }else{
              return null;
          }
       
//        $sqlStmt = "Select * from car where Number=:Number";
       
//        $prepare = $connection->prepare($sqlStmt);
       
//        $prepare->bindValue("Number",
//            $this->number,PDO::PARAM_INT);
       
//        //--3
//        $prepare->execute();
//        $result = $prepare->fetchAll();
//        $tobj = "";
//        if(sizeof($result)>0){
//            $Number= $result[0]["Number"];
//            $Model = $result[0]["Model"];
//            $Brand = $result[0]["Brand"];
//            $Price = $result[0]["Price"];
           
//            $tobj = new Car($Number,$Model,$Brand,$Price);
//        }
//        return $tobj;
   }
   
   

}
    