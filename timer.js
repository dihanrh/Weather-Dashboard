document.addEventListener("DOMContentLoaded", function () {

    var g6Value = 0; 

    function updateCustomGauge() {

        g6.refresh(g6Value);
        g6Value++; 
        if (g6Value > 30) {
            g6Value = 0;
        }
    }

    var g6 = new JustGage({
        id: 'g6',
        value: 0,
        min: 0,
        max: 30,
        symbol: ' second',
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

    setInterval(updateCustomGauge, 1000);
});
