
const express = require('express');
const app = express(); //  initialize express app
const path = require('path');
const bookmarks = require('bookmarks-to-json-categorization');
const exphbs = require('express-handlebars');
var options = {
    dotfiles: 'ignore',
    extensions: ['html', 'html'],
    index: false
  }

app.engine('handlebars', exphbs({defaultLayout: 'main'}));

app.set('view engine', 'handlebars');

app.set('port', process.env.PORT || 9999);


app.use(express.static(path.join(__dirname, 'public'), options));

app.get('/', function(req, res) {
    res.render('home');
});

app.listen(app.get('port'), function() {
    console.log('Express server initialized on ' + app.get('port') + ' Ctrl-C to terminate.');
});
