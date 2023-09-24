<?php    

$con = mysqli_connect('localhost','root','','book_db');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving =$_POST['leaving'];

        $query = "INSERT INTO  `book_form` ( `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        $run = mysqli_query($con,$query);
        header('location:book.php');
       
    
    if($run == true){
        echo "Submitted";
    }
    else
    {
        echo 'something went wrong try again';
    }

?>