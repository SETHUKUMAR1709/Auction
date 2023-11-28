<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Bid Auction(Login Page)Team SSTP</title>
        <link href= 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Helvetica, sans-serif;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("https://i0.wp.com/fineartshippers.org/wp-content/uploads/2020/07/bigstock-Online-Auction-Concept-Taking-295601770.jpg?fit=1600%2C1067&ssl=1");
        
        }

        .wrapper{
            width:420px;
            background: transparent;
            color: black;
            border-radius: 10px;
            padding: 30px 40px;
        }

        .wrapper h1{
            font-size: 36px;
            text-align: center;
        }

        .wrapper .input-box{
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            outline: none;
            border: 2px solid black;
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }

        .input-box input::placeholder{
            color:#fff;  
        }

        .input-box i{
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .wrapper .btn{
            width: 100%;
            height: 45px;
            background:rgb(18, 137, 103);
            border: none;
            outline: none;
            border-radius: 40px;

        }
        .remember-forget{
            font-size: .9em;
            font-weight: 500;
            color: black;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
         }
         .remember-forget label input{
            accent-color: black;
            margin-right: 3px;
         }
         .remember-forget a{
            color: black;
            text-decoration: none;
         }
         .remember-forget a:hover{
            text-decoration: underline;
         }
         .login-register{
            font-size: .9em;
            color: black;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;
         }
         .login-register p a{
            color: black;
            text-decoration: none;
            font-weight: 600;
         }
         .login-register p a:hover{
            text-decoration: underline;
         }
        .error_message{
            color: red;
            position: relative;
            margin: -25px 0 20px 30%;
        }

    </style>
    <body>
        <div class="logo" style="position:absolute;right:10px;top:20px;">
            <img src="img\BID AUCTION 2.png">
        </div>
        <div class="wrapper">
            <form action="loginpage.php" method='POST'>
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="user" id="user"required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="Password" placeholder="Password" name="pass" id="pass" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class='error_message'>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    $s=$_GET["error"];
                    echo "<p class='error'> $s </p>"; }?>
                </div>
                    <button type="submit" class="btn">Login</button>
                <div class="login-register"><p>Don't have an account?<a href="#" class="register-link">Register</a></p></div>
            </form>
        </div>
    </body>
</html>        