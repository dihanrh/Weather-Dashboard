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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<body>
    <div class="dashboard-window" id="temperatureWindow">
        <h2>Temperature</h2>
        <div class="parameter-value" id="temperatureValue">Loading...</div>
    </div>

    <div class="dashboard-window" id="humidityWindow">
        <h2>Humidity</h2>
        <div class="parameter-value" id="humidityValue">Loading...</div>
    </div>

    <div class="dashboard-window" id="pressureWindow">
        <h2>Pressure</h2>
        <div class="parameter-value" id="pressureValue">Loading...</div>
    </div>

    <div class="dashboard-window" id="moistureWindow">
        <h2>Soil Moisture</h2>
        <div class="parameter-value" id="moistureValue">Loading...</div>
    </div>

    <div class="dashboard-window" id="nutrientsWindow">
        <h2>Soil Nutrients</h2>
        <div class="parameter-value" id="nutrientsValue">Loading...</div>
    </div>

    <script src = "updateData.js"></script>
</body>
</html>
