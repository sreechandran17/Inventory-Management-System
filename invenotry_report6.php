<?php
  $con = mysqli_connect("localhost","root","","inventory");
  if(!$con){
    echo " Not connected";
  }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['ProductID', 'ProductQuantity'],
         <?php
         $sql = "SELECT * FROM product";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['productID']."',".$result['productQuantity']."],";
          }

         ?>
        ]);

        var materialOptions = {
          width: 500,
          chart: {
            title: 'Quantity of each stock',
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'Quantity'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
        }

        

        drawMaterialChart();
    };
    </script>
  </head>
  <body>
    <br>
    <div id="chart_div" style="width: 700px; height: 300px;"></div>
  </body>
</html>