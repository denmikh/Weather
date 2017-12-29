<!DOCTYPE html>
<html>
  <head>
    <title>City Weather</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByNQ1Eixs1OSCl3h2qNuTN8F8HXppw36A&libraries=places&callback=initMap"
        async defer></script>
    <script src="js/common.js"></script>
    <script src="js/weather.js"></script>
  </head>

  <body>
    <div id="weatherBlock">
      <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
      <input id="button" type="button" class="btn btn-primary" value="Поиск">
      <div id="table" class="table-responsive">
        <table class="table table-hover table-bordered table-condensed ">
          <thead>
            <tr id="tableTr">
              <th>Date</th>
              <th>Temperature (Celsium)</th>
              <th>Weather condition</th>
            </tr>
          </thead>
          <tbody id="tableBody">
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>