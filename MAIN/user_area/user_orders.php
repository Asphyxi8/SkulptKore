<?php
    echo "<table>
    <tr>
    <th>Sr No</th>
    <th>Amount Due</th>
    <th>Total Products</th>
    <th>Invoice Number</th>
    <th>Date</th>
    <th>Complete/Incomplete</th>
    <th>Status</th>
    </tr>
    ";
    $username = $_SESSION['user_username'];
    $select_query = "Select * from `user_details` where username = '$username'";
    $result_query_my_orders = mysqli_query($con,$select_query);
    $row_result = mysqli_fetch_assoc($result_query_my_orders);
    $user_id = $row_result['user_id'];
    $select_query_2 = "Select * from `orders` where user_id = $user_id";
    $result_query_2 = mysqli_query($con,$select_query_2);
    $number = 1;
    while($row_result_2 = mysqli_fetch_assoc($result_query_2)){
        $order_id = $row_result_2['order_id'];
        $amount_due = $row_result_2['amount_due'];
        $total_products = $row_result_2['total_products'];
        $invoice_number = $row_result_2['invoice_number'];
        $order_date = $row_result_2['order_date'];
        $order_status = $row_result_2['order_status'];
        if($order_status == 'pending'){
            $order_status = 'incomplete';
        }
        else{
            $order_status = 'complete';
        }
        echo "
        <tr>
        <td>$number</td>
        <td>$amount_due</td>
        <td>$total_products</td>
        <td>$invoice_number</td>
        <td>$order_date</td>
        <td>$order_status</td>";
        if($order_status == 'complete'){
            echo "<td>Paid</td>";
        }
        else{
        echo"<td><a href='confirm_payment.php?order_id=$order_id'>Confirm Payment </a></td>";
        }
        echo "</tr>";
        $number++;

    }

    ?>