d<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- CSS and JS links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justgage@1.4.0/justgage.css">
    <link rel="stylesheet" href="pointer.css">
    <script src="https://cdn.jsdelivr.net/npm/raphael@2.3.0/raphael.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/justgage@1.4.0/justgage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="updateData.js"></script>
    <script src="timer.js"></script>
    <script src="tempChart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src ="nightMode.js"></script>
    <script src="combineData.js"></script>
</head>
<body>

<!-- Header -->
<header>
    <h1>Environmental Admin Dashboard</h1>

</header>

<!-- Side Navigation -->
<aside>
    <div class="nav-header">
        <h3>Menu</h3>
    </div>
    <ul class="nav-options">
        <li class="nav-option">
            <div class="icon">⚙️</div>
            <div class="text">Settings</div>
        </li>
        <li class="nav-option">
            <div class="icon">🌙</div>
            <div class="text"> <button class="night-mode-button" onclick="toggleNightMode()">Night Mode</div>
        </li>
        
        <li class="nav-option">
            <div class="icon">🌡️</div>
            <div class="text">Temperature</div>
        </li>
        <li class="nav-option">
            <div class="icon">💧</div>
            <div class="text">Humidity</div>
        </li>
        <li class="nav-option">
            <div class="icon">🌬️</div>
            <div class="text">Pressure</div>
        </li>
        <li class="nav-option">
            <div class="icon">💦</div>
            <div class="text">Soil Moisture</div>
        </li>
        <li class="nav-option">
            <div class="icon">🌱</div>
            <div class="text">Soil Nutrients</div>
        </li>
    </ul>
</aside>


<!-- Main Content -->
<main>


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
    
   <div class="combine">
   <div class="table-container">
    <title>Combined Data Table</title>

    <table  id="combinedTable" >
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Value</th>
            <th>Timestamp</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

    <div class="wrapper">
        <!-- Temperature Gauge -->
        <div class="box">
            <div class="container">
                <h3>Temperature</h3>
                <div class="gauge" id="g1"></div>
            </div>
        </div>

        <!-- Humidity Gauge -->
        <div class="box">
            <div class="container">
                <h3>Humidity</h3>
                <div class="gauge" id="g2"></div>
            </div>
        </div>

        <!-- Pressure Gauge -->
        <div class="box">
            <div class="container">
                <h3>Pressure</h3>
                <div class="gauge" id="g3"></div>
            </div>
        </div>

        <!-- Soil Moisture Gauge -->
        <div class="box">
            <div class="container">
                <h3>Soil Moisture</h3>
                <div class="gauge" id="g4"></div>
            </div>
        </div>

        <!-- Soil Nutrients Gauge -->
        <div class="box">
            <div class="container">
                <h3>Soil Nutrients</h3>
                <div class="gauge" id="g5"></div>
            </div>
        </div>

        <!-- Time Gauge -->
        <div class="box">
            <div class="container">
                <h3>Time</h3>
                <div class="gauge" id="g6"></div>
            </div>        
    </div>
   </div>
    
</div>

    
</main>
<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-text">
            <p>&copy; 2024 - Rakibul Hasan Dihan</p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/rakib.hasan.dihan" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/rakibulhasandihan/" class="social-icon"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>


</body>
</html>
