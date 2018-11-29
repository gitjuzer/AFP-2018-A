const express = require('express');

const userRoutes = require('./user_routes');

const router = express.Router();

router.get('/', (req, res) => {
    res.json({ message: "success" });
});
router.use('/user', userRoutes);

module.exports = router;