const fs = require('fs');

var date = new Date();

class Orbit {
    log(message) {
        // fs.appendFile('logs.log', message, (err) => {
        //     if (err) {
        //         throw err;
        //     }
        // });
        console.log(date.toString() + ' => ' + message);
    }
}

const orbit = new Orbit();

module.exports = orbit;