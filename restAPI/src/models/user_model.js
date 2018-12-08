const mongoose = require('mongoose');
const mongodbErrorHandler = require('mongoose-mongodb-errors');
const uniqueValidator = require('mongoose-unique-validator');
const bcrypt = require('bcrypt-nodejs');

const mongoConnection = require('../core/connection');

const Schema = mongoose.Schema;

// Schema
const userSchema = new Schema(
	{
		email: {
			type: String,
			required: 'Az email cím megadása szükséges!',
			unique: 'Az email cím már használatban van!',
			uniqueCaseSensitive: true
		},
		username: {
			type: String,
			required: 'A felhasználónév megadása szükséges!',
			unique: 'A felhasználónév már használatban van!',
			uniqueCaseSensitive: true
		},
		password: {
			type: String,
			required: 'A jelszó megadása szükséges!'
		},
		teacher: {
			type: Boolean,
			default: false
        },
        admin: {
			type: Boolean,
			default: false
		}
	},
	{ timestamps: true }
);

userSchema.pre('save', function(next) {
	if (this.isNew) {
		this.encryptPassword();
	}

	next();
});

// Methods
userSchema.method('encryptPassword', function(password) {
	this.password = bcrypt.hashSync(this.password);
});

userSchema.method('verifyPassword', function(password) {
	return bcrypt.compareSync(password, this.passowrd);
});

userSchema.method('toJSON', function() {
	var user = this.toObject();
	delete user.password;

	return user;
});

// Plugins
userSchema.plugin(mongodbErrorHandler);
userSchema.plugin(uniqueValidator);

// Model export
const user = mongoConnection.model('User', userSchema);
module.exports = user;
