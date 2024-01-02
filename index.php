<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environmental Dashboard</title>
    <!--  css and js links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justgage@1.4.0/justgage.css">
    <script src="https://cdn.jsdelivr.net/npm/raphael@2.3.0/raphael.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/justgage@1.4.0/justgage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* ui */
    </style>
</head>
<body>
    <div id="container">
        <canvas id="temperatureChart"></canvas>
        <canvas id="humidityChart"></canvas>
        <canvas id="pressureChart"></canvas>
        <div id="soilMoistureGauge"></div>
        <div id="soilNutrientsGauge"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            
            function fetchData(endpoint, callback) {
                fetch(endpoint)
                    .then(response => response.json())
                    .then(data => callback(data))
                    .catch(error => console.error('Error fetching data:', error));
            }

            // temperature chart
            function updateTemperatureChart(data) {
                
            }

            // humidity chart
            function updateHumidityChart(data) {
                
            }

            // pressure chart
            function updatePressureChart(data) {
                
            }

            // soil moisture gauge
            function updateSoilMoistureGauge(data) {
                
            }

            // soil nutrients gauge
            function updateSoilNutrientsGauge(data) {
               
            }

            // Fetch and update data every 30 seconds
            setInterval(function () {
                fetchData('/api/temperature.php', updateTemperatureChart);
                fetchData('/api/humidity.php', updateHumidityChart);
                fetchData('/api/pressure.php', updatePressureChart);
                fetchData('/api/soil_moisture.php', updateSoilMoistureGauge);
                fetchData('/api/soil_nutrients.php', updateSoilNutrientsGauge);
            }, 30000);
        });
    </script>
</body>
</html>
