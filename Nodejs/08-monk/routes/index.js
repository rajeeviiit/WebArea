var express = require('express');
var router = express.Router();
var db = require('monk')('localhost:27017/test');
var userData  = db.get('user-data');

/* GET home page. */
router.get('/', function (req, res, next) {
    res.render('index');
});

router.get('/get-data', function (req, res, next) {

    
});

router.post('/insert', function (req, res, next) {
    var item ={
        title: req.body.title,
        content: req.body.content,
        author: req.body.author
    };

    res.redirect('/');

});

router.post('/update', function (req, res, next) {
    var item = {
        title: req.body.title,
        content: req.body.content,
        author: req.body.author
    };

});

router.post('/delete', function (req, res, next) {
    var id = req.body.id;


});

module.exports = router;
