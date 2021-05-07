<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&family=Righteous&family=Rokkitt:wght@300&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Basic Banking System</title>
    <!-- Styles -->
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Rokkitt', serif;
            font-weight: 700;
        }
        html{
            scroll-behavior: smooth;
        }
        p{
            font-size: 24px;
        }
        footer{
            color: #fff;
            padding: 20px 0;
            background-color: black;
        }
        footer p{
            font-size: 20px;
            letter-spacing: 0.2rem;
        }
        .content{
            padding: 30px;
        }
        .navbar{
            padding: 5px 0;
            transition: all 0.4s linear;
        }
        .nav-link{
            letter-spacing: 0.15rem;
            font-size: 24px;
        }
        .navbar-brand{
            letter-spacing: 0.15rem;
            font-size: 40px;
        }
        .main-img{
            border-radius: 10%;
            filter: drop-shadow(5px 20px 30px rgba(0,0,0,0.2));
            width: 300px;
            height: 300px;
        }
        .left > h1{
            margin: 0;
        }
        .left > p{
            width: 90%;
        }
        .left{
            padding-top: 100px;
            padding-left: 40p-x;
        }
       .container > .upper > .right{
           text-align: center;
            padding: 20px;
        }
        .container > .lower{
            padding: 20px;
        }
        .btn{
            text-transform: capitalize;
            font-size: 20px;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }
        .img{
            width: 250px;
            height: 250px;
        }
        .card{
            border-radius: 10px;
            filter: drop-shadow(5px 20px 30px rgba(0,0,0,0.2));
            margin-top: 20px;
        }
        #main-image{
            width: 100%;
        }
        .main-row{
            width: 100%;
            height: 100vh;
        }
        .left-main{
            position: relative;
            margin-top: 40px;
        }
        .left-main > .main-content{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .main-content h1{
            font-size: 65px;
        }
        .right-main{
            display: grid;
            place-items: center;
        }
        .btns{
            border-radius: 8px;
            padding: 10px 35px;
            border: 2px solid dodgerblue;
            font-size: 24px;
            text-decoration: none;
            letter-spacing: 0.15rem;
            transition: all 0.3s ease-in;
        }
        .btns:hover{
            color: #fff;
            background-color: dodgerblue;
        }
        section:nth-child(3){
            padding-bottom: 70px;
        }
        footer h3{
            margin-top: -20px;
            margin-left: -70px;
            margin-bottom:-10px;
        }
        .main-btn{
            width: 50%;
            font-size: 30px;
            letter-spacing: 0.2rem;
        }
        @media screen and (max-width:770px) {
            .left-main{
                margin-top: 140px;
                text-align: center;
            }
            .main-content > h1{
                font-size: 35px;
            }
            p{
                font-size: 20px;
                margin-bottom: 20px;
            }
            #main-image{
                margin-top: 40px;
            }
            footer p{
                padding: 2px 0;
                font-size: 12px;
            }
            .main-btn{
                margin-top: -20px;
                width: 100%;
                font-size: 15px;
            }
            footer h3{
                margin-left: 0;
                font-size: 15px;
            }
            .right-main{
                margin-top: 30px;
            }
        }
    </style>
</head>
  <body>
    
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="topnavbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Indian Bank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createUser.php">CreateUser</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfer.php">Transfer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transferHistory.php">TransHistory</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>