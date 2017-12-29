// унивсальная Функция запроса (GET) Json 
function AjaxGetJson(url, callback){
  var xhr = new XMLHttpRequest();
  xhr.open('GET', url, true);
  xhr.send();
  xhr.onreadystatechange = function() {
    if (this.readyState != 4) return;
    var data = eval("("+xhr.responseText+")");
    callback(data);
  };
};