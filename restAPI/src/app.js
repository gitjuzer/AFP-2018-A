const express = require('express');
const bodyParser = require('body-parser');

const Orbit = require('./middlewares/orbit_logger');
const routes = require('./routes/routes');

const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use('/api', routes);

const port = process.env.PORT || 5000;

app.listen(port, () => {
    Orbit.log('Szerver portja: ' + port);
});