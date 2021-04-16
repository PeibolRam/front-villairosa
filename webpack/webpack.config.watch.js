const webpackMerge = require('webpack-merge');
const webpackConfigDev = require('./webpack.config.dev.js');

module.exports = webpackMerge(webpackConfigDev, {
  watch: true,
  watchOptions: {
    aggregateTimeout: 300,
    poll: 1000
  }
});
