
function initMap() {
    var input = /** @type {!HTMLInputElement} */(
        document.getElementById('pac-input', 'butt'));

    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();
        var url = 'http://api.openweathermap.org/data/2.5/forecast?lat=' + lat + '&lon=' + lng + '&APPID=1a48d78a9c81844bb059e91f7ecd119f';
        AjaxGetJson(url, refreshTable);
    });

    function setupClickListener(id, types) {
        var radioButton = document.getElementById(id);
        radioButton.addEventListener('click', function () {
            autocomplete.setTypes(types);
        });
    }

    setupClickListener('changetype-all', []);
    setupClickListener('changetype-address', ['address']);
    setupClickListener('changetype-establishment', ['establishment']);
    setupClickListener('changetype-geocode', ['geocode']);
}

function clearTable() {
    document.getElementById('table').innerHTML = '';
};

function refreshTable(data) {
    clearTable();
    data.list.forEach(function (item) {
        addItem(item);
    });
};

function addItem(item) {
    var date = item.dt_txt;
    var temp = Math.round(item.main.temp - 273);
    var weather = formatweatherString(item.weather);
    var dat = "<tr><td>" + date + "</td><td>" + temp + "</td><td>" + weather + "</td><tr>";
    document.getElementById('table').innerHTML = document.getElementById('table').innerHTML + dat;
};

function formatweatherString(weatherItems) {
    var str = "";
    weatherItems.forEach(function (items) {
        // if(str != ""){
        //   str = str + ",";
        // }
        str = str + items.description;
        //  console.log(items);
    });
    return str;
};