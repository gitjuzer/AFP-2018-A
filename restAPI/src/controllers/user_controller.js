const bcrypt = require('bcrypt-nodejs');

const User = require('../models/user_model');

exports.create = (req, res, next) => {
	const email = req.body.email;
    const username = req.body.username;
    const password = req.body.password;
    
	return res.json({ email, username, password });
}

exports.delete = (req, res) => {
    if (req.body.id) {
		let query = { _id: req.body.id };
		User.remove(query, (err, data) => {
			if (err) {
				return res.json({ error: 'Delete unsuccessful!' });
			}

			res.json({ message: 'Delete successful!' });
		});
	}
}

exports.login = (req, res) => {
    if (req.session.userEmail && req.session.username) {
		res.render('dashboard');
	}

	const user = await User.findOne({
		email: req.body.email
	});

	if (!bcrypt.compareSync(req.body.password, user.password)) {
		console.log({ from: 'api/user/login', error: 'Incorrect password' });

		return res.render('404');
	}

	req.session.userEmail = user.email;
	req.session.username = user.username;

	return res.render('dashboard');
}

exports.update = (req, res) => {
    throw 'Not implemented exception!';
}