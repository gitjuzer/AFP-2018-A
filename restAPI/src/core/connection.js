const mongoose = require('mongoose');

const config = require('./config');

mongoose.Promise = global.Promise;
mongoose.set('useCreateIndex', true);

const connection = mongoose.createConnection(
	config.database_uri,
	{
		useNewUrlParser: true
	},
	() => {
		console.log('MongoDB connected');
	}
);

connection.catch(err => {
	console.log('Mongoose connection error: ', err);
	process.exit(1);
});

module.exports = connection;