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
        g1.refresh(data.value);
        
    }
   

    function updateHumidityWindow(data) {
       // console.log("Humidity Data:", data);
        updateWindow('humidityWindow', 'Humidity', data.value);
        g2.refresh(data.value);
        
    }

    function updatePressureWindow(data) {
        updateWindow('pressureWindow', 'Pressure', data.value);
        g3.refresh(data.value)
    }

    function updateMoistureWindow(data) {
        updateWindow('moistureWindow', 'Soil Moisture', data.value);
        g4.refresh(data.value);
    }

    function updateNutrientsWindow(data) {
        updateWindow('nutrientsWindow', 'Soil Nutrients', data.value);
        g5.refresh(data.value);
    }

    setInterval(function () {
        fetchData('server-side/temperature.php', updateTemperatureWindow);
        fetchData('server-side/humidity.php', updateHumidityWindow);
        fetchData('server-side/pressure.php', updatePressureWindow);
        fetchData('server-side/soil_moisture.php', updateMoistureWindow);
        fetchData('server-side/soil_nutrients.php', updateNutrientsWindow);
    }, 30000);



        
        var g1 = new JustGage({
          id: 'g1',
          value: 65,
          min: 0,
          max: 100,
          symbol: '°F',
          pointer: true,
          gaugeWidthScale: 0.6,
          customSectors: [{
            color: '#ff0000',
            lo: 50,
            hi: 100
          }, {
            color: '#00ff00',
            lo: 0,
            hi: 50
          }],
          counter: true
        });
  
        var g2 = new JustGage({
          id: 'g2',
          value: 45,
          min: 0,
          max: 100,
          symbol: ' %',
          pointer: true,
          pointerOptions: {
            toplength: -15,
            bottomlength: 10,
            bottomwidth: 12,
            color: '#8e8e93',
            stroke: '#ffffff',
            stroke_width: 3,
            stroke_linecap: 'round'
          },
          gaugeWidthScale: 0.6,
          counter: true
        });
  
        var g3 = new JustGage({
          id: 'g3',
          value: 400,
          min: 0,
          max: 10000,
          symbol: ' Pa',
          donut: true,
          pointer: true,
          gaugeWidthScale: 0.4,
          pointerOptions: {
            toplength: 10,
            bottomlength: 10,
            bottomwidth: 8,
            color: '#000'
          },
          customSectors: [{
            color: "#ff0000",
            lo: 50,
            hi: 100
          }, {
            color: "#00ff00",
            lo: 0,
            hi: 50
          }],
          counter: true
        });
  
        var g4 = new JustGage({
          id: 'g4',
          value: 40,
          min: 0,
          max: 100,
          symbol: ' %',
          pointer: true,
          pointerOptions: {
            toplength: 8,
            bottomlength: -20,
            bottomwidth: 6,
            color: '#8e8e93'
          },
          gaugeWidthScale: 0.1,
          counter: true
        });

        var g5 = new JustGage({
            id: 'g5',
            value: 70,
            min: 0,
            max: 1000,
            symbol: ' Unit',
            pointer: true,
            pointerOptions: {
              toplength: 8,
              bottomlength: -20,
              bottomwidth: 6,
              color: '#8e8e94'
            },
            gaugeWidthScale: 0.1,
            counter: true
          });
});
