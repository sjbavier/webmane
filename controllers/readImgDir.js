module.exports = function(directory, callback){
  var fs = require('fs');
  var path = require('path');
  var directory = directory || console.log('No files could be read from directory');
  var files = fs.readdirSync(directory);
  return callback(files);
}
