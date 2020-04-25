<html>
	<body>
		<div>
			<form action="" method="get">
				<label>Employee ID</label>	
				<input type="text" name="id"><br/>
				<label>Last Name</label>
				<input type="text" name="name"><br/>
				<label>Salary</label>
				<input type="text" name="salary"><br/>	
				<input type="submit" name="submit" value="submit"><br/>
			</form>		
		</div>
		
	<?php 
	   error_reporting(0);
	if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['salary'])){
	    $empID = $_GET['id'];
	    $empName = $_GET['name'];
	    $empSalary = $_GET['salary'];
	    $tax = 0 ;
	    $total = 0;
	    $amount = 0;
	    findTax($empSalary, $tax);
	    $amount = ToCalculaterAmount($empSalary, $tax);
	    $total = ToCalculaterTotal($amount, $empSalary);
	    displayEmployee($empID, "Employee ID ");
	    displayEmployee($empName, "Last Name ");
	    displayEmployee($empSalary, "Gross Salary");
	    displayEmployee($tax, "Tax (%)");
	    displayEmployee($amount, "Aomunt");
	    displayEmployee($total, "Finaly Total");
	}
	function CalTax($tax, $empsalary){
	    if ($empsalary >= 50000){
	        $tax = .45;
	    }
	    elseif ($empsalary >=4000 && $empsalary <50000){
	        $tax = .4;
	    }
	    elseif ($empsalary >= 30000 && $empsalary <40000){
	        $tax = .35;
	    }
	    elseif ($empsalary >= 25000 && $empsalary < 30000){
	        $tax = .3;
	    }
	    else{
	        $tax = .2;
	    }
	}
	
	function displayEmployee ($empinfo , $text){
	    echo $text . " : " . $empinfo . "<br>";
	}
	
	function findTax ($gross , &$tax){
	    
	    switch ($gross){
	        case $gross >= 50000:
	            $tax = .45;
	            break;
	        case $gross >=40000 && $gross <50000:
	            $tax = .4;
	            break;
	        case $gross >= 30000 && $gross <40000:
	            $tax = .35;
	            break;
	        case $gross >= 25000 && $gross < 30000:
	            $tax = .3;
	            break;
	        default:
	            $tax = .2;
	            break;
	            
	    }
	}
	function ToCalculaterAmount ($gross,$tax){
	    
	    $result = $gross * $tax;
	  
	        
	        return $result;    
	 
	}
	function ToCalculaterTotal ($amount,$gross){
	    return $amount + $gross;
	}
	
	
	
	?>
	</body>

</html>