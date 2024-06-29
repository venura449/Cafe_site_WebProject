<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gallery Café</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    <link rel="stylesheet" href="style.css">

<style>

        body {
            background-image: url('images/pb.jpg');
            font-family: Arial, sans-serif;
            margin: 0; 
            padding: 0;
            overflow: hidden;
        }
        .splash-content h1 {
            font-size: 5em;
            font-family: 'Rastanty Cortez', serif;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
            margin-bottom: 10px;
        }
        .splash-content p1 {
            font-size: 0.5em;
            font-family: 'Papyrus', sans-serif;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
        }
        #matchingError{
           margin-top: 6px;
            display:none;
            color: Red;
        }
        #login-box{
            position: fixed;
            top:30%;
            left:35%;
            transform: translateY(-30%);
            overflow: hidden;
        }

        .text_foot{
            position: absolute;
            top: 80%;
            left: 43%;
            background-color: #f6f6f6;
            padding:4px;
            border-radius: 2px;
            opacity: 0.75;
        }
        .form_div1{
            max-width: 50%;
            margin-top: 30px;
            margin-left: 20px;
        }
        h6{
             margin-top: 7px;
        }

</style>


</head>

<body>

    <div>
        <div id="login-box">
            <div class="form_div1 flex col ml-30 pl-10">
                <h1>Sign up</h1>
                <form action="Handlers/signuphandler.php" method="post" onsubmit="return checkerrors()">
                    <input type="text" name="name" placeholder="Name" />
                    <input type="text" name="email" placeholder="E-mail" />
                    <input type="password" name="password" id="password" placeholder="Password" />
                    <input type="password" name="password2" id="conPassowrd" placeholder="Confirm password" />
                    <div id="matchingError"></div>
                    <input type="submit" name="signup_submit" value="Signup" />
                </form>
                <b> <h6 class="login-link">Already have an account? <a href="login1.php">Login</a></h6></b>
            </div>
    
        </div>




        <div class="text_foot">
            <center>  <b> © 2024 The Gallery Café. All Rights Reserved.</b></center>
        </div>

        <script>
            var matcherr = document.getElementById("matchingError");
            var inputs = document.getElementsByTagName("input");

            function checkerrors(){

                for(var i=0;i<4;i++){
                    if(inputs[i].value === ""){
                        matcherr.style="display:block;";
                        matcherr.innerHTML="Please Fill all details";
                        return false;
                    }
                }
                if(inputs[2].value !== inputs[3].value) {
                    matcherr.style="display:block;";
                    matcherr.innerHTML = "No matching passoword";
                    return false;
                }
                return true;
            }

        </script>
</body>

</html>