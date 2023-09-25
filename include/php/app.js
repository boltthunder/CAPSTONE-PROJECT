const mysql = require('mysql');
const express = require('express');
const path = require('path');

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'websystem'
});
connection.connect(function(error) {
    if (error) {
        console.log(error);
    } else {
        console.log('Connected to database');
    }
});

app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname, 'index.php'))
});

app.listen(3000, function() {
    console.log('Server running on port 3000');
});

app.post('/add', function(req, res) {

    db.run
});

module.exports = connection;