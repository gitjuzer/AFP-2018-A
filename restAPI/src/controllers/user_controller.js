const bcrypt = require('bcrypt-nodejs');

const User = require('../models/user_model');

exports.create = (req, res, next) => {
	const email = req.body.email;
    const username = req.body.username;
    const password = req.body.password;
    
	return res.json({ email, username, password });
}

exports.delete = (req, res) => {
    throw 'Not implemented exception!';
}

exports.login = (req, res) => {
    throw 'Not implemented exception!';
}

exports.update = (req, res) => {
    throw 'Not implemented exception!';
}