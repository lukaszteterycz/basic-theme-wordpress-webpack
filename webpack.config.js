const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    entry: "./resources/app.js",
    output: {
        path: __dirname + "/dist",
        filename: "bundle.js"
    },
    module: {
        rules: [{
            test: /\.scss$/,
            use: [
                MiniCssExtractPlugin.loader,
                "css-loader",
                "sass-loader"
            ]
        },
        {
            test: /\.(png|jpe?g|gif)$/,
            use: [
                {
                    loader: 'file-loader',
                    options: {
                        outputPath: '../assets/images/',
                        name: '[name].[ext]',
                        emitFile: false
                    },
                },
            ],
        }]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].css",
            chunkFilename: "[id].css"
        }),
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,
            files: ['./**/*.php'],
            proxy: 'http://localhost/TEKST-LT'
        })
    ]
}

