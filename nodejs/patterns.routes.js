module.exports = (app) => {
    const Logger = require('./patterns/singleton/logger');

    app.get('/singleton', (req, res) => {
        Logger.log('teste');
        Logger.log('teste2');
        Logger.log('teste3');

        res.send(Logger);
    });
}