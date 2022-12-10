<div class="box"><!-- box Begin -->
   
   <?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];

    echo "<script>alert('Đơn đặt hàng của bạn đã được gửi, Cảm ơn')</script>";
        
    echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

    include("customer/my_orders.php")
    
    ?>


    
    