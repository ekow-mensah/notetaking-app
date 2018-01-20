const path = require('path');

module.exports = {
    entry: './index.js',
	output: {
		path: path.resolve(__dirname, 'public', 'dist'),
		filename: 'main.bundle.js'
    },
    
    module: {
        rules: [
          { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" }
        ]
      }
}