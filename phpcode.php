<!--Customer Details-->
<?php
        


        $name=$_GET['fname'];
        $phone=$_GET['number'];
        $gmail=$_GET['mail'];
        $diningDate=$_GET['ddate'];
        $time=$_GET['dtime'];
        $totalMem=$_GET['totalmem'];
        $tableNum=$_GET['tablenum'];
        $connection=mysqli_connect('localhost','root','Hema@123','customers');
        if(connection)
        {
            echo "connection established<br>";
        }
        else{
            echo "connection not established";
        }
        $query2="INSERT INTO cust_details VALUES('$name','$phone','$gmail','$diningDate','$time','$totalMem','$tableNum');";
        if(mysqli_query($connection,$query2))
        {
            echo "Values Inserted into Database Successfully";
        }
        else
        {
            echo "Values Not Inserted";
        }
        ?>
     
       


