const params = {
    env: process.env.NODE_ENV || 'development'
};
let path = require('path');
let ExtractTextPlugin = require("extract-text-webpack-plugin");
let webpack = require('webpack');

let conf = {
    entry: './src/js/index.js',
    output: {
        path: path.resolve(__dirname, './dist'),
        filename:'./js/main.js'
    },
    module:{
        rules:[
            {
                test:/\.js$/,
                loader:'babel-loader',
                options: {
                    presets: ['babel-preset-env']
                },
            },
            {
                test:/\.css$/,
                use :ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: "css-loader"
                })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin("./css/main.css")
    ]
};

module.exports = conf;
