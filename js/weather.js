initMap();

//функция
function initMap() {
    
    var input = /** @type {!HTMLInputElement} */(
        document.getElementById('pac-input', 'button'));

    var autocomplete = new google.maps.places.Autocomplete(input);
    
        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();
            var url = 'http://api.openweathermap.org/data/2.5/forecast?lat=' + lat + '&lon=' + lng + '&APPID=1a48d78a9c81844bb059e91f7ecd119f';
            AjaxGetJson(url, refreshTable);
        });
    }

//функция очистки таблицы при повторном запросе 
function clearTable() {  
    document.getElementById('tableBody').innerHTML = '';
};

//функция обновления таблицы
function refreshTable(data) {     
    clearTable();
    data.list.forEach(function (item) {
        addRow(item);
    });
};

 //функция добавления строки в таблицу
function addRow(item) {   
    var date = item.dt_txt;
    var temp = Math.round(item.main.temp - 273);
    var weather = formatweatherString(item.weather);
    var dat = "<tr><td>" + date + "</td><td>" + temp + "</td><td>" + weather + "</td><tr>";
    document.getElementById('tableBody').innerHTML = document.getElementById('tableBody').innerHTML + dat;
};

 //функция агрегация массива в строку
function formatweatherString(weatherItems) {
    var str = '';
    weatherItems.forEach(function (items) {
        str = str + items.description;
    });
    return str;
};