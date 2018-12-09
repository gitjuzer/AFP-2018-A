const express = require('express');

const userController = require('../controllers/user_controller');

const router = express.Router();

router.get('/', userController.show);
router.post('/', userController.create);
router.post('/:username', userController.login);
router.put('/:id', userController.update);
router.delete('/:username', userController.delete);

module.exports = router;