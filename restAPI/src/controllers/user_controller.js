const bcrypt = require('bcrypt-nodejs');

const Orbit = require('../middlewares/orbit_logger');
const User = require('../models/user_model');

exports.show = (req, res) => {
	let users = {};

	User.find({}, (err, user) => {
		if (err) {
			res.json({
				status: 'error',
				message: err,
			});

			Orbit.log('Felhasználók listázása sikertelen!');
		}

		user.forEach((user) => {
			users[user._id]  = user;
		});

		res.json(users);

		Orbit.log('Felhasználók listázása sikeres!');
	});
}

exports.create = (req, res, next) => {
	const user = new User({
		email: req.body.email,
		username: req.body.username,
		password: req.body.password
	});

	user.save((err, user) => {
		if (err) {
			

			return res.json({
				response: 'false',
			});
		}

		Orbit.log('Felhasználó létrehozása sikertelen!');

		res.json({
			response: 'true',
		})
	});
}

exports.delete = (req, res) => {
    if (req.body.username) {
		let query = { username: req.body.username };

		User.deleteOne(query, (err, data) => {
			if (err) {
				Orbit.log('Felhasználó törlése sikertelen!');

				return res.json({ response: 'false' });
			}

			Orbit.log('Felhasználó törlése sikeres!');

			res.json({ response: 'true' });
		});
	}
}

exports.login = (req, res) => {
	if (req.body.username) {
		let query = { username: req.body.username }

		var user = User.findOne(query, (err, data) => {
			if (err) {
				Orbit.log('Bejelentkezés sikertelen!');
				
				return res.json({ response: 'false' });
			}
		});
	}

	if (!bcrypt.compareSync(req.body.password, user.password)) {
		Orbit.log('Bejelentkezési jelszó nem megfelelő!');

		return res.json({
			response: 'false',
		});
	}

	Orbit.log('Bejelentkezés sikeres!');

	res.json({
		response: 'true',
	})
}

exports.update = (req, res) => {
    throw 'Not implemented exception!';
}