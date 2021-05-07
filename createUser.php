<?php 

    include('config/config.php');

    $username = $email = $amount = '';
    $error = array('username' => '', 'email' => '', 'amount' => '');

    if(isset($_POST['submit'])){
        // UserName
        if(empty($_POST['username'])){
            $error['username'] = "Please Enter Username";
        } else {
            $username = $_POST['username'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
                $error['username'] = 'Please Enter Only Characters';
            }
        }
        // Email
        if(empty($_POST['email'])){
            $error['email'] = 'Please Enter Email-Id';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'Please Enter Valid Email-Id';
            }
        }
        // Password
        if(empty($_POST['amount'])){
            $error['amount'] = 'Please Enter Bank-Balance';
        } else {
            $amount = $_POST['amount'];
            if(!preg_match('/^[0-9\s]+$/', $amount)){
                $error['amount'] = 'Please Enter Numbers';
            }
        }

        if(!array_filter($error)){
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $amount = mysqli_real_escape_string($conn, $_POST['amount']);

            $sql = "INSERT INTO custdata(Username, email, Amount) 
            VALUES('$username', '$email', '$amount')";

            if(mysqli_query($conn, $sql)){
                header('Location: transfer.php');
            } else {
                echo 'Error :' . mysqli_error($conn);
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <!-- Include Header -->
    <?php include('Template/header.php') ?>

    
    <link rel="stylesheet" href="css/createUser.css">

    <section id="form-section">
        <form action="createUser.php" method="POST">
            <!-- <div class="transfer-title text-center">
                <h1>Create User</h1>
                <div class="underline "></div>
            </div>  -->
            <div class="gender-img">
                <img id="gimage" class="g-img" src="Images/Male-Image.jpg" alt="Gender">
            </div>
            <div class="form-content">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($username) ?>" autofocus>
              <p class="errors"><?php echo $error['username']; ?></p>
            </div>
            <div class="form-content">
                <label class="form-label gender-label">Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input des radio" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                    <label class="form-check-label des" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input des radio" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                    <label class="form-check-label des" for="inlineRadio2">Female</label>
                  </div>                  
            </div><br>
            <div class="form-content">
              <label class="form-label">Email-Id</label>
              <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email) ?>">
              <p class="errors"><?php echo $error['email']; ?></p>
            </div>
            <div class="form-content">    
              <label class="form-label">Acc. Balance</label>
              <input type="number" class="form-control" name="amount" value="<?php echo htmlspecialchars($amount) ?>">
              <p class="errors"><?php echo $error['amount']; ?></p>
            </div>
            <div class="form-content">
                <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
            </div>
            </form>
    </section>

    <!-- Include Footer -->
    <?php include('Template\footer.php'); ?>
    
</html>                                                                                                             