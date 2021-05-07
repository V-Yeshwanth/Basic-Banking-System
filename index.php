<!DOCTYPE html>
<html>
    
    <!-- Include Header -->
    <?php include('Template/header.php')?>

     <!-- MainSection -->
     <section>
        <div class="container">
            <div class="row main-row">
                <div class="col-md-6 left-main">
                    <div class="main-content">
                        <h1>Indian Bank Services</h1>
                        <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe voluptatum earum vero aspernatur nobis atque commodi, cupiditate sunt aperiam eum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, deleniti at. Delectus amet provident maxime nihil dicta, voluptates eius nulla. -->
                        <!-- </p> -->
                        <p>
                        Indian Bank Services include Payment account with basic features, the possiblity for 
                        execution of payment transactions and every transaction history of each account holders
                        </p>
                        <a class="btn btn-outline-primary main-btn" href="createUser.php" role="button">Create User</a>
                    </div>
                </div>
                <div class="col-md-6 right-main">
                    <img id="main-image" src="Images/MainPage-image.jpg" alt="main-image">
                </div>
            </div>
        </div>
    </section>  

    <!-- LowerSection -->
    <section>
            <div class="container">
                <div class="row lower">
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">New to Bank?</h5>
                          <img class="img" src="Images/CreateUser-Image.jpg" alt="">
                          <p class="card-text">
                            When you are new to the bank do create useraccount with account balance for transfer of
                            money. </p>
                          <a href="CreateUser.php" class="btn btn-outline-primary">Create User</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Need To Transfer?</h5>
                          <img class="img" src="Images/Transfer-Image.jpg" alt="">
                          <p class="card-text">You can transfer your payment from your account to another account user using a 
                              safe trasfer services. You just have to transfer money by providing necessary 
                              information of reciever account.</p>
                          <a href="transfer.php" class="btn btn-outline-primary">Transfer</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Need Transaction History?</h5>
                            <img class="img" src="Images/Contact-Image.jpg" alt="">
                            <p class="card-text">Need any help regaurding any transaction information about our banking servies. 
                              we will provide every trans history infomation with appropriate time of transfer.
                              </p>
                              <a href="transferHistory.php" style="margin-top: 20px;" class="btn btn-outline-primary">Trans History</a>
                          </div>
                        </div>                                                  
                      </div>
                  </div>
            </div>
      </section>

    <!-- Include Footer -->
    <?php include('Template/footer.php')?>
</html>