const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
    host: "mysql-container",
    user:'root',
    password:'root',
    database: "apiteste",
    insecureAuth : true
});

connection.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
  });

app.get('/produtos', function(req, res){
    connection.query('SELECT * FROM apiteste.produtos', function(error, results){
        if(error){
            throw error
        };

        res.send(results.map(item => ({name: item.name, price: item.price}
            )));
    });
});


app.listen(9001, '0.0.0.0', function(){
    console.log('Listening on port 9001');
});