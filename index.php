<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>
            Login:
            <input type="text" name="login" value="">

        </label>
        <br>
        <label >
            Password:
            <input type="text" name="password" value="">
        </label>
        <br>
            Remember:
        <input type="hidden" name="remember" value="no">
        <input type="checkbox" name="remember" value="yes">
        <br>
                <input type="submit" name="btn" value="submit">
    </form>
</body>
</html>

<?php 
    $users = [
        'Viktor'=>[
            'name'=>'Viktor Olytskyi',
            'password'=>'qwerty12345'
        ],
        'Lilia'=>[
            'name'=>'Lilia Olytskyi',
            'password'=>'qwert123456'
        ],
    ];


    if(isset($_REQUEST['login'])){
        $login = $_REQUEST['login'];
        $password = $_POST['password'];
        $remember = $_POST['remember'];

        if(array_key_exists($login, $users))
             {
                $user=$users[$login];
                if($user['password']==$password){
                echo "Hello mr. {$user['name']}.<br>Welcome!";
                    if($remember=='yes')
                     {
                        $users[$login]['remember']='yes';
                        echo "<br>You remembered!";
                    }
                    else echo "<br>You don't remembered!";
                }
                else echo "Wrong password!";
            }
        else 
        {
            echo "Wrong login";
            
        }
        
    }
  
?>