const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const ejs = require('ejs');

const app = express();

// Set the view engine to EJS
app.set('view engine', 'ejs');

// Parse incoming request bodies in a middleware before your handlers
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Create a connection to the database
const connection = mysql.createConnection({
  host: 'bkdss8husughxwqvm3ju-mysql.services.clever-cloud.com',
  user: 'usxqmrypw6rg9kbc',
  password: 'Psg0IARg21Vfn84MqTOg',
  database: 'bkdss8husughxwqvm3ju'
});

// Connect to the database
connection.connect();

// Set up a route to display the login form
app.get('/login', (req, res) => {
  res.render('login');
});

// Set up a route to handle the login request
app.post('/login', (req, res) => {
  const { username, password } = req.body;

  // Query the database to see if the provided username and password match a user in the database
  const query = `SELECT * FROM users WHERE username = '${nombre}' AND password = '${pass}'`;
  connection.query(query, (error, results) => {
    if (error) {
      return res.send(error);
    } else if (results.length > 0) {
      window.location.href = '/in.html';
      return res.send({ success: true });
    } else {
      // If no user is found, send an error message
      return res.send({ error: 'Invalid username or password' });
    }
  });
});

// Start the server
const port = 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
