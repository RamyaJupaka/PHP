<?php
include_once 'car_class.php';
include_once 'dbconfig.php';

try{
    $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
//     $carObj = new Car(1,'v306','Audi','1000');
//     $carObj->addData($connection);
    
    if(isset($_GET['submit']))
    {
        $id = $_GET['id'];
        $model = $_GET['model'];
        $brand = $_GET['brand'];
        $price = $_GET['price'];
        $carObj = new Car($id,$model,$brand,$price);
        $res = $carObj->addData($connection);
        
    }
    
    if(isset($_GET['update'])){
     
        $brand1 = $_GET['brand'];
        $price1 = $_GET['price'];
        $number = $_GET['id'];
        $model1 = $_GET['model'];
        $carObj1 = new Car();
       // $number = $carObj1->getNumber();
        $res = $carObj1->update($connection,$model1,$brand1,$number,$price1);
    }
    
    if(isset($_GET['delete'])){
        $number = $_GET['id'];
        $carObj2 = new Car();
        $res = $carObj2->delete($connection, $number);
    }

   
}
catch (Exception $e){
    echo $e->getMessage();
}
?>

<html>
	<body>

		<form action="" method = "get">
			 <label>number</label>
			 <input type="text" name='id'>
			 <label>model</label>
			 <input type="text" name='model'>
			 <label>brand</label>
			 <input type="text" name='brand'>
			 <label>price</label>
			 <input type="text" name='price'>
			 <button name="submit">Submit</button>
			 <button name='update'>Update</button>
			 <button name="delete">Delete</button>	
		</form>
		<?php 
		$carObj = new Car();
		$carlist = $carObj->getAllCars($connection);
		$carObj->displayAllCars($carlist);

		?>
		
		<form method="get">
			<label>Number</label>
			<input type="text" name="searchid">
			<button name='search'>Search</button>
		</form>
		<?php 
		if(isset($_GET['search'])){
		    $number = $_GET['searchid'];
		    $obj3 = new Car();
		    $res = $obj3->getCarByNumber($connection,$number);
		   echo Car::getHeader();
		   echo $res;
		   echo Car::getFooter();
		}
		
		?>
	</body>

</html>