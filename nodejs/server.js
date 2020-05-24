'use strict';

const express = require('express');

// Constants
const PORT = 3000;
const HOST = '0.0.0.0';

// App
const app = express();
require('./patterns.routes.js')(app);

app.get('/', (req, res) => {
    res.send('Hello World');
});

app.listen(PORT, HOST);