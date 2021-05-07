<?php

    include('config/config.php');
    $sql = "SELECT Sender,Reciever,Tamount,Time FROM transactiondata ORDER BY Id DESC";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
    <!-- Include Header -->
    <?php include('Template/header.php'); ?>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Rokkitt', serif;
            font-weight: 550;
        }
        .card-header{
            padding: 10px 0;
        }
        span{
            margin-left: 40px;
        }
        p{
            color: black;
            margin: -5px 0;
            font-size: 25px;
        }
        h6{
            color: #fff;
            font-size: 20px;
        }
        h2{
            font-size: 28px;
        }
        h1{
            font-size: 50px;
        }
        #result-section{
            background: rgba(73, 166, 233, 0.5);
            background: url(Images/Result-Bg.jpg) ;
            background-blend-mode: multiply;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            display: grid;
            place-items: center;
             z-index: -10;;
            width: 100%;
        }
        .card{
            color: #fff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            border-radius: 10px;
            background-color: rgb(67, 224, 67);
            width: 35%;
        }
        .btn{
            font-size: 24px;
            padding: 5px 20px;
        }
        img{
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        @media screen and (max-width: 900px) and (min-width: 500px){
            h1{
                font-size: 30px;
            }
            p{
                font-size: 20px;
            }
            .btn{
                padding: 3px 5px;
                font-size: 20px;
            }
        }
        @media screen and (max-width: 500px) {
            .card{
                width: 80%;
            }
            h1{
                font-size: 30px;
            }
            p{
                font-size: 20px;
            }
            .btn{
                padding: 3px 5px;
                font-size: 20px;
            }
        }
    </style>

<section id="result-section">
    <div class="card">
        <div class="card-header">
          <img src="Images/Success.png" alt="success">
        </div>
        <div class="card-body">
          <h1 class="card-title">
            Success
          </h1>
        <h2 class="card-text">
            Your Payment has been Processed Successfully.
        </h2>
        <p>From <span><?php echo $data['Sender']; ?></span></p>
        <hr>
        <p>To <span><?php echo $data['Reciever']; ?></span></p>
        <hr>
        <p>Amount <span>$<?php echo $data['Tamount']; ?></span></p>
        <hr>
        <a href="transferHistory.php" class="btn btn-outline-light">DONE</a>
        </div>
        <div class="card-footer text-muted">
          <h6><?php echo $data['Time']; ?></h6>
        </div>
      </div>
    </section>

    <!-- Include Footer -->
    <?php include('Template/footer.php'); ?>
</html>