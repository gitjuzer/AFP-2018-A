const express = require('express');

const userController = require('../controllers/user_controller');

const router = express.Router();

router.get('/login', (req, res) => {
    res.json({ message: 'login' });
});
router.post('/registration', (req, res) => {
    res.json({ message: 'registration' });
});
router.delete('/delete', (req, res) => {
    res.json({ message: 'delete' });
});
router.post('/update', (req, res) => {
    res.json({ message: 'update' });
});

module.exports = router;