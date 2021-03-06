<?php
class Product 
{
    private $id;
    private $description;
    private $price;
    private $quantity;
    private static $sequence=100;
    
    function __construct($description,$price,$quantity)
    {
        $this->id=self::$sequence++;
        $this->description=$description;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $price
     */
    /* public function setPrice($price)
    {
        $this->price = $price;
    }
 */
    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    public function __toString()
    {
        //return "Product id $this->id Description $this->description <br/>";
        return "<tr><td>$this->id</td><td>$this->description</td><td>$this->price</td><td>$this->quantity</td></tr>";
    }
    
    public static function heading()
    {
        echo "<table border='3'>";
        echo "<tr><th>product id</th><th>description</th><th>price</th><th>quantity</th></tr>";     
    }
    public static function footer()
    {
        echo"</table>";
    }

    public function __call($method,$params)
    {
        switch ($method)
        {
            case 'setPrice':
                if (count($params)==1)
                    $this->price=$this->price+$params[0];
                else
                    if (count($params)==2)
                  {
                    $percentage = $params[1];
                    $this->price=$this->price+$this->price*$percentage;
                  }
                break;
        }
        
    }
}
