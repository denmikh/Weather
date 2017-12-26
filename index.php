<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="js/common.js"></script>
    <script src="js/weather.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

  </head>

  <body>
    <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
    <div id="type-selector" class="controls">
      <input id="butt" type="button" name="type" id="ok" value="Поиск">
      
      <input type="radio" name="type" id="changetype-all" checked="checked">
      <label for="changetype-all">All</label>

      <input type="radio" name="type" id="changetype-establishment">
      <label for="changetype-establishment">Establishments</label>

      <input type="radio" name="type" id="changetype-address">
      <label for="changetype-address">Addresses</label>

      <input type="radio" name="type" id="changetype-geocode">
      <label for="changetype-geocode">Geocodes</label>
    </div>
    <div id="map"></div>

    <script>
      initMap();
    </script>

<div id="asd" class="table-responsive col-md-6">
	<table class="table table-hover table-bordered table-condensed ">
		<thead>
			<tr class="active">
				<th>Date</th>
				<th>Temperature (Celsium)</th>
				<th>Weather condition</th>
			</tr>
		</thead>
		<tbody id="table">
		</tbody>
	</table>
</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByNQ1Eixs1OSCl3h2qNuTN8F8HXppw36A&libraries=places&callback=initMap"
        async defer></script>
  </body>
</html>