class Logger {
    constructor() {
        this.logs = [];
    }

    log(message) {
        this.logs.push(message);
    }
}

module.exports  = new Logger();