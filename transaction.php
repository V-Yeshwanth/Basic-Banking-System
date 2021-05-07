<?php
    
    include('config/config.php');
    
    $custname = $t_amount = '';
    $errors = array('custname' => '', 't-amount' => '');

    if(isset($_GET['id'])){

        $from = $_GET['id'];

        $sql1 = "SELECT id, UserName, Email, Amount FROM custdata WHERE id = '$from'";
        
        $result = mysqli_query($conn, $sql1);
        $customer = mysqli_fetch_assoc($result);
        
        $sql2 = "SELECT UserName, Amount FROM custdata WHERE id <> '$from'";
        $result2 = mysqli_query($conn, $sql2);


    }

    if(isset($_POST['submit'])){
        
        // T-Amount
        if(empty($_POST['t-amount'])){
            $errors['t-amount'] = 'Please Enter Trans Amount';
        } else {
            $t_amount = $_POST['t-amount'];
        }

        if(!array_filter($errors)){
            $sender = mysqli_real_escape_string($conn, $customer['UserName']);
            $reciever = mysqli_real_escape_string($conn, $_POST['persondata']);
            $amount = mysqli_real_escape_string($conn, $_POST['t-amount']);
            
            // Update table custdata
            if($customer['Amount'] >= $amount){
                
                $sqlAdd = "INSERT INTO transactiondata(Sender,Reciever,Tamount) 
                VALUES('$sender','$reciever','$amount')";

                $sub = $customer['Amount'] - $_POST['t-amount'];
                $alter = "UPDATE custdata SET Amount = '$sub' WHERE UserName = '$sender'";
                
                if(!mysqli_query($conn, $alter)){
                    echo "Error: " . mysqli_error($conn);
                }

                $getAmount = "SELECT UserName,Amount FROM custdata WHERE UserName = '$reciever'";
                $data = mysqli_query($conn, $getAmount);
                $get = mysqli_fetch_assoc($data);
    
                $add = $get['Amount'] + $_POST['t-amount'];
                $alter2 = "UPDATE custdata SET Amount = '$add' WHERE UserName = '$reciever'";
    
                if(!mysqli_query($conn, $alter2)){
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                // echo "<script>
                //         window.location = 'Fail.php';
                //     </script>";
                header('Location: Fail.php');
            }

            if(mysqli_query($conn, $sqlAdd)){
                // echo "<script>
                //             alert('Transaction Successfull!!!');
                //             window.location = 'transferHistory.php';
                //       </script>";
                header('Location: Success.php');
            } else {
                echo 'Error :' . mysqli_error($conn);
            }
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <!-- Include Header -->
    <?php include('Template/header.php'); ?>
    
    <link rel="stylesheet" href="css/transaction.css">
    <style>
        .error-text{
            padding: 2px;
            margin-left: 10px;
            font-size: 16px;
            font-weight: 700;
            color: red;
            font-family: 'Rokkitt', serif;
            letter-spacing: 0.1rem;
        }
    </style>
    <section id="form-section">
        <form class="form"  action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="transfer-title text-center">
                <h1>Transfer money</h1>
                <div class="underline "></div>
            </div> 
            <div class="form-content form-sections">
                <h1>Customer Name: <span class="text-success green"><?php echo $customer['UserName']; ?></span><span class="green"></span></h1>
            </div>
            <div class="form-content form-sections">
                <h1>Account Balance :<br><span class="text-success green"><?php echo $customer['Amount']; ?></span></h1>
            </div>
            <h2>TO</h2>
            <div class="form-content">
              <label class="form-label">Username</label>
              <select class="form-select form-select-lg mb-3" name="persondata" >
                <?php while($option = mysqli_fetch_assoc($result2)){  ?>
                        <option><?php echo $option['UserName']?></option>
                <?php } ?>
              </select>
              <h3 class="error-text"><?php echo $errors['custname']; ?></h3>                      
            </div>
            <div class="form-content">    
              <label class="form-label">Amount</label>
              <input type="number" class="form-control" name="t-amount" value="<?php echo htmlspecialchars($t_amount); ?>" min="0">
              <h3 class="error-text"><?php echo $errors['t-amount']; ?></h3>                      
            </div>
            <div class="form-content">
                <button type="submit" class="btn btn-outline-success" name="submit">Transfer</button>
            </div>
            </form>

    </section>

    <!-- Include Footer -->
    <?php include('Template/footer.php'); ?>

</html>         