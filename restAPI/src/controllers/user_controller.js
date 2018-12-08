const bcrypt = require('bcrypt-nodejs');

const User = require('../models/user_model');

exports.show = (req, res) => {
    var users = [];

    User.find({}, (err, result) => {
        result.forEach((user) => {
            users.push(user);
        });
    });

    // const cursor = User.db.collection('User').find({}).toArray((err, result) => {
    //     if (err) {
    //         throw err;
    //     }
    //     console.log(result);
    //     users.push(result);
    // });

    res.json({ users });
}

exports.create = (req, res, next) => {
	const email = req.body.email;
    const username = req.body.username;
    const password = req.body.password;

	const user = new User({
		email: req.body.email,
		username: req.body.username,
		password: req.body.password
	});

    user.save();

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

	const user = User.findOne({
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