const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');
const webpackMerge = require('webpack-merge');

// postcss plugins
const cssMqpacker = require('css-mqpacker');
// const cssnano = require('cssnano');
const postcssExtend = require('postcss-extend');
const postcssImport = require('postcss-import');
const postcssNested = require('postcss-nested');
const postcssPresetEnv = require('postcss-preset-env');
const postcssRemoveRoot = require('postcss-remove-root');
const postcssReporter = require('postcss-reporter');
const pfm = require('postcss-font-magician');
const stylelint = require('stylelint');

// import base config
const webpackConfigBase = require('./webpack.config.base.js');

module.exports = webpackMerge(webpackConfigBase, {
  devServer: {
    contentBase: path.resolve(__dirname, '../dist'),
    port: 8080,
    stats: {
      children: false
    }
  },
  devtool: 'inline-source-map',
  output: {
    filename: 'app.js'
  },
  module: {
    rules: [{
      test: /\.css$/,
      use: [
        MiniCssExtractPlugin.loader,
        {
          loader: 'css-loader',
          options: { importLoaders: 1 }
        },
        {
          loader: 'postcss-loader',
          options: {
            ident: 'postcss',
            plugins: () => [
              stylelint(),
              postcssReporter(),
              postcssImport({
                path: [path.resolve(__dirname, '../src')]
              }),
              postcssNested(),
              postcssPresetEnv({
                stage: 1,
                features: {
                  'custom-properties': {
                    preserve: false
                  },
                  'custom-media': {
                    preserve: false
                  }
                }
              }),
              postcssExtend(),
              postcssRemoveRoot(),
              pfm(),
              cssMqpacker({
                sort: true
              })
            ]
          }
        }
      ]
    }]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'app.css',
      chunkFilename: '[id].css'
    })
  ]
});