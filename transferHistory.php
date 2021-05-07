<?php 

    include('config/config.php');

    $sql = "SELECT id,Sender,Reciever,Tamount,Time FROM transactiondata";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

    <?php include('Template/header.php'); ?>
    
    <link rel="stylesheet" href="css/transfer.css">
    <style>
        /* Media Query */
        @media screen and (max-width: 580px){
            .id{
                display: none;
            }
            .time{
                display: none;
            }
            th,td{
                height: 20px;
                font-size: 12px;
            }
        }
    </style>
    <section>
    <div class="contianer">
            <div class="transfer-title text-center">
                <h1>Transfer History</h1>
                <div class="underline "></div>
            </div> 
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th class="id">ID</th>
                            <th>Sender</th>
                            <th>Reciever</th>
                            <th>Amount</th>
                            <th class="time">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    
                        <tr>
                        <td class="id"><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Sender']; ?></td>
                        <td><?php echo $row['Reciever']; ?></td>
                        <td><?php echo $row['Tamount']; ?></td>
                        <td class="time"><?php echo $row['Time']; ?></td>
                        </tr>
                    
                    <?php } ?>
                    </tbody>
            </table>
    
    </section> 

    <?php include('Template/footer.php'); ?>

</html>