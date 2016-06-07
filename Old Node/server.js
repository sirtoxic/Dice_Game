var http = require('http');
var fs = require('fs');
var express = require('express');
var app = express();


app.use('/css', express.static('css'));


//Listen for user requests
function onRequest(request, response) {
    if(request.method == 'GET' && request.url == '/'){
    response.writeHead(200,{"Content-Type": "text/html"});
    fs.createReadStream("./index.html").pipe(response);
    } else {
        send404response(response);
    }
}
//404 handler
function send404response(response){
    response.writeHead(404,{"Content-Type": "text/html"});
    fs.createReadStream("./404.html").pipe(response);
}
//Server Creator
http.createServer(onRequest).listen(8888);
console.log("Server is now rolling on port 8888");