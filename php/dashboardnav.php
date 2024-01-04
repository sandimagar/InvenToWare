<?php
if (isset($_POST['.dropdown_logs'])){
    session_abort();
    header('location :http://127.0.0.1:5501/index.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/test/css/dashboard.css">
    <script src="https://kit.fontawesome.com/36c3b57b6b.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="dashboard_nav">
        <div class="dashboard_nav_left"></div>
        <div class="dashboard_nav_right">

          
            
            <div class="userCreds_dashboard_nav">
                <div class="usericon"><i class="fa-solid fa-user"></i>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

                    <div class="dropdown_logs">
                        <a href="http://127.0.0.1:5501/index.html">Log Out</a></div></div>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="/test/javascript/dashboard.js"></script>

</html>