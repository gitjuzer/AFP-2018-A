const express = require('express');

const userController = require('../controllers/user_controller');

const router = express.Router();

router.get('/', userController.findAll);
router.get('/:username', userController.find);
router.post('/', userController.insert);
router.post('/:username/:password', userController.login);
router.put('/:username', userController.update);
router.delete('/:username', userController.delete);

module.exports = router;