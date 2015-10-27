var express = require('express');
var app = express();
var port = 8080;

app.get('/', function(req, res){
  res.send('hello world');
});

app.get('/home', function(req, res){
  res.send('this is home');
});

var server = app.listen(port, function(){
  console.log('Server starting at port ' + port);
});
