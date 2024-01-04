<?php
session_start();
$Totalpurchases = $_SESSION["TotalPurchases"];
$leastPopular = $_SESSION["LeastPopular"];
           $mostPopular = $_SESSION["MostPopular"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/test/css/dashboard.css">
    <title>Inventory Management System</title>

    <link rel="stylesheet" href="/test/css/container_dashboard.css">
</head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Items', 'Quantity'],
            ['Books', 11],
            ['Copies', 2],
            ['Calculators', 2],
            ['Pens', 2],
            ['Others', 7]
        ]);

        var options = {
            title: 'My Stocks'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
   
</script>

<body>
    <?php
    include("./dashboardnav.php");

    ?>
    <div class="side_content_container">
        <?php
        include("./sidenav.php");
        ?>
        <div class="container_dashboard">
            <div class="container_parts dashboarditem">
                <div class="dashboarditems"><i class="fa-solid fa-dollar-sign"></i><p>1000 <br> Sales</p></div>
                <div class="dashboarditems"><i class="fa-solid fa-wallet"></i><p>1000 <br> Purchases</p></div>
                <div class="dashboarditems"><i class="fa-regular fa-user"></i><p>600 <br> Customers</p></div>
                <div class="dashboarditems"><i class="fa-solid fa-cubes-stacked"></i><p>8000 <br> Stocks</p></div>
            </div>
            <div class="graph_container">

                
                <div class="container_parts piechart_container charts">
                    <div id="piechart" style="width: 500px; height: 400px;  border-radius: 10px;cursor:pointer;  
 border:3px solid whitesmoke"></div>
                </div>
                <div class="records_dashboard">
            <?php
           
           echo "<h2 style='text-transform:capitalize;'> Most Sold :". $mostPopular ."</h2><br>";
           echo "<h2 style='text-transform:capitalize'>Least Sold :".$leastPopular."</h2> <br>";

      ?>
            </div>
            </div>
           
           
        </div>
    </div>
</body>

</html>