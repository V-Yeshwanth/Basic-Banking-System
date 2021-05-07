<?php 

    include('config/config.php');

    $sql = "SELECT id, UserName, Email, Amount FROM custdata";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

    <?php include('Template/header.php'); ?>
    
    <link rel="stylesheet" href="css/transfer.css">
    <style>
        /* Media Query */
        @media screen and (max-width: 800px){
            .t-balance{
                display: none;
            }    
            .email-collapse{
                display: none;
            }
            th,td{
                height: 50px;
                font-size: 20px;
            }
        }
    </style>
    <section>
    <div class="contianer">
            <div class="transfer-title text-center">
                <h1>Transfer money</h1>
                <div class="underline "></div>
            </div> 
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th class="trasfer-id">ID</th>
                            <th>UserName</th>
                            <th class="email-collapse">Email-Id</th>
                            <th class="t-balance">Balance</th>
                            <th>Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    
                        <tr>
                        <td class="trasfer-id"><?php echo $row['id']; ?></td>
                        <td><?php echo $row['UserName']; ?></td>
                        <td class="email-collapse"><?php echo $row['Email']; ?></td>
                        <td class="t-balance"><?php echo $row['Amount']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="transaction.php?id=<?php echo $row['id']; ?>" role="button">Transfer</a>
                        </td>
                        </tr>
                    
                    <?php } ?>
                    </tbody>
            </table>
    
    </section> 

    <?php include('Template/footer.php'); ?>

</html>