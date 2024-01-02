document.addEventListener("DOMContentLoaded", function () {
    function fetchData(endpoint, callback) {
        fetch(endpoint)
            .then(response => response.json())
            .then(data => callback(data))
            .catch(error => console.error('Error fetching data:', error));
    }

    function updateWindow(id, parameter, value) {
        const windowElement = document.getElementById(id);
        const valueElement = windowElement.querySelector('.parameter-value');
        valueElement.textContent = `${parameter}: ${value}`;
    }

    function updateTemperatureWindow(data) {
        updateWindow('temperatureWindow', 'Temperature', data.value);
    }

    function updateHumidityWindow(data) {
        updateWindow('humidityWindow', 'Humidity', data.value);
        console.log("Humidity Data:", data);
    }

    function updatePressureWindow(data) {
        updateWindow('pressureWindow', 'Pressure', data.value);
        
    }

    function updateMoistureWindow(data) {
        updateWindow('moistureWindow', 'Soil Moisture', data.value);
    }

    function updateNutrientsWindow(data) {
        updateWindow('nutrientsWindow', 'Soil Nutrients', data.value);
    }

    setInterval(function () {
        fetchData('server-side/temperature.php', updateTemperatureWindow);
        fetchData('server-side/humidity.php', updateHumidityWindow);
        fetchData('server-side/pressure.php', updatePressureWindow);
        fetchData('server-side/soil_moisture.php', updateMoistureWindow);
        fetchData('server-side/soil_nutrients.php', updateNutrientsWindow);
    }, 300000);

});