<?php
session_start();
$Totalpurchases = $_SESSION["TotalPurchases"];
$TotalSales = $_SESSION["TotalSales"];
$ProfitLoss = $TotalSales - $Totalpurchases;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/test/css/dashboard.css">
    <title>Inventory Management System</title>

    <link rel="stylesheet" href="/test/css/container_dashboard.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2020',  1000,      400],
          ['2021',  1170,      460],
          ['2022',  660,       1120],
          ['2023',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <?php 
    include ("./dashboardnav.php");
    
    ?>
     <div class="side_content_container">
<?php 
    include ("./sidenav.php");
    ?>
        <div class="container_dashboard">
          <div class="container_das">

            <div id="curve_chart" style="width: 900px; height: 500px; cursor:pointer;"></div>
            <div class="contents_linegraph">
            <?php echo " <h2 style=' border:1px solid gray;width:100%;height:3vw'>Net Expenses : $$Totalpurchases</h2> <br>";
             echo " <h2 style=' border:1px solid gray;width:100%;height:3vw'>Net Sales : $$TotalSales</h2> <br>";
?>
              <?php
              if ($ProfitLoss>0) {

                echo "<h3 style='color:green; border:1px solid gray;width:100%;height:3vw'>Net Profit : $$ProfitLoss</h3> <br>";
              }else{
                echo "<h3 style='color:red; border:1px solid gray;width:100%;height:3vw'>Net Loss : $$ProfitLoss</h3> <br>";

              }
              
              ?>

  </div>

</div>
        </div>
    </div>
</body>
</html>

