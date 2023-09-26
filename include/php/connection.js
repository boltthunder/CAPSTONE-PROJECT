const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'websystem'
});
var database_connection = '';
connection.connect(function(error) {
    if (error) {
        console.log(error);
    } else {
        // database_connection = connection;
        console.log('Connected to database');
    }
});