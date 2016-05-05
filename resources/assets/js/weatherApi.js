function loadWeather() {
  var url = 'http://api.openweathermap.org/data/2.5/weather?q=Lahore,br&units=metric&APPID=6ff092e64769de2229ad6fe4220c03c5';
  $.getJSON(url, function(data) {
    $('#weather').html('Lahore ' + data.main.temp + ' C');
  });
}
