const express = require('express');

const userController = require('../controllers/user_controller');

const router = express.Router();

router.post('/', userController.create);
router.post('/:id', userController.login);
router.put('/:id', userController.update);
router.delete('/:id', userController.delete);

module.exports = router;