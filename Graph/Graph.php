<?php  
// د ډیټابیس سره نښلول
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

$conn = new mysqli($servername, $username, $password, $dbname);

// که نښلونې ستونزه وي
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// د داخلي پلان د معلوماتو ترلاسه کول
$sql_internal = "SELECT e.username, 
                        COALESCE(SUM(CAST(REPLACE(er.improve_precentage, '%', '') AS UNSIGNED)), 0) AS total_percentage 
                 FROM (SELECT DISTINCT username FROM employee_reports) e
                 LEFT JOIN employee_reports er 
                       ON e.username = er.username AND er.plan IN ('پلان مربوطه')
                 GROUP BY e.username";

// د خارجي پلان د معلوماتو ترلاسه کول
$sql_external = "SELECT e.username, 
                        COALESCE(SUM(CAST(REPLACE(er.improve_precentage, '%', '') AS UNSIGNED)), 0) AS total_percentage 
                 FROM (SELECT DISTINCT username FROM employee_reports) e
                 LEFT JOIN employee_reports er 
                       ON e.username = er.username AND er.plan IN ('خارج از پلان')
                 GROUP BY e.username";

// د جاواسکرپټ لپاره د ډیټا جوړول
$chartDataInternal = [];
$chartDataExternal = [];

// د داخلي پلان لپاره ډیټا
if ($result_internal = $conn->query($sql_internal)) {
    while($row = $result_internal->fetch_assoc()) {
        $chartDataInternal[$row['username']] = (int)$row['total_percentage'];
    }
}

// د خارجي پلان لپاره ډیټا
if ($result_external = $conn->query($sql_external)) {
    while($row = $result_external->fetch_assoc()) {
        $chartDataExternal[$row['username']] = (int)$row['total_percentage'];
    }
}

// د ټولو کارمندانو لیست
$allEmployees = [];
$query = "SELECT DISTINCT username FROM employee_reports";
$allResult = $conn->query($query);
while($row = $allResult->fetch_assoc()) {
    $allEmployees[] = $row['username'];
}

$conn->close();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>راپور های کارمندان</title>
    <script type="text/javascript" src="charts/loader.js"></script> <!-- محلي فایل -->

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawCharts);

      var chartDataInternal = [
        ['Username', 'فیصدي'],
        <?php
          foreach($allEmployees as $employee) {
              $percentage = isset($chartDataInternal[$employee]) ? $chartDataInternal[$employee] : 0;
              echo "['" . $employee . "', " . $percentage . "],";
          }
        ?>
      ];

      var chartDataExternal = [
        ['Username', 'فیصدي'],
        <?php
          foreach($allEmployees as $employee) {
              $percentage = isset($chartDataExternal[$employee]) ? $chartDataExternal[$employee] : 0;
              echo "['" . $employee . "', " . $percentage . "],";
          }
        ?>
      ];

      // د چارت رسمول
      function drawCharts() {
        // د داخلي پلان چارت (د donut بڼه)
        var dataInternal = google.visualization.arrayToDataTable(chartDataInternal);
        var optionsInternal = {
          title: 'راپورکارمندان پلان داخلی',
          pieHole: 0.4, // د چارت donut بڼه
          width: '100%', // د چارت پراخوالی
          height: '500' // د چارت لوړوالی
        };
        var chartInternal = new google.visualization.PieChart(document.getElementById('donutchartInternal'));
        chartInternal.draw(dataInternal, optionsInternal);

        // د خارجي پلان چارت (د pie بڼه)
        var dataExternal = google.visualization.arrayToDataTable(chartDataExternal);
        var optionsExternal = {
          title: 'راپورکارمندان پلان خارجی', // د چارت عنوان
          width: '100%', // د چارت پراخوالی
          height: '500' // د چارت لوړوالی
        };
        var chartExternal = new google.visualization.PieChart(document.getElementById('donutchartExternal'));
        chartExternal.draw(dataExternal);
      }

      // د ریسپانسیو چارت پراخوالی او لوړوالی
      window.onresize = drawCharts; // د سکرین د اندازه بدلون لپاره دوباره رسمول
    </script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0; /* د مارجن لرې کول */
        }
        h1 {
            text-align: center; /* عنوان مرکز ته راوستل */
            margin-bottom: 20px; /* د عنوان او چارت ترمنځ فاصلې زیاتول */
        }
        .charts-container {
            display: flex; /* د چارتونو لپاره فلیکس باکس */
            justify-content: space-between; /* د چارتونو ترمنځ فاصلې */
            width: 80%; /* د چارتونو د کانتینر پراخوالی */
            margin-top: 20px; /* د چارتونو او کارمندانو نومونو ترمنځ فاصله */
        }
        #donutchartInternal, #donutchartExternal {
            width: 800px; /* د چارت پراخوالی */
            height: 500px; /* د چارت لوړوالی */
        }
        .chart-title {
            text-align: center;
            margin-top: 20px; /* د عنوان او چارت ترمنځ فاصله */
        }
    </style>
</head>
<body>
    <h1>بررسی عمومي راپور هایی کارمندان</h1> <!-- د عنوان اضافه کول -->
    <div class="charts-container">
        <div>
            <h2 class="chart-title">راپورکارمندان پلان داخلی</h2> <!-- د داخلي پلان عنوان -->
            <div id="donutchartInternal"></div> <!-- د داخلي پلان چارت ځای -->
        </div>
        <div>
            <h2 class="chart-title">راپورکارمندان پلان خارجی</h2> <!-- د خارجي پلان عنوان -->
            <div id="donutchartExternal"></div> <!-- د خارجي پلان چارت ځای -->
        </div>
    </div>
</body>
</html>
