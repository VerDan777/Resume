const path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: "./src/js/script.js",
    output: {
        // path: "./app/temp/scripts",
        path: path.resolve(__dirname, "dist/scripts/"),
        filename: "App.js"
    }
    ,
    module: {
        loaders: [{
            loader: 'babel-loader',
            query: {
                presets: ['es2015']
            },
            test: /\.js$/,
            exclude: /node_modules/
        }]
    }
}