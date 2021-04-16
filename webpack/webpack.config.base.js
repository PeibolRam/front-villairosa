const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require('path');

module.exports = {
  context: path.resolve(__dirname, '../src'),
  entry: {
    app: ['./app.js']
  },
  output: {
    path: path.resolve(__dirname, '../dist')
  },
  resolve: {
    alias: {
      '@css': path.resolve(__dirname, '../src/css'),
      '@lib': path.resolve(__dirname, '../src/lib'),
      '@components': path.resolve(__dirname, '../src/components'),
      '@src': path.resolve(__dirname, '../src')
    },
    extensions: ['.tsx','.ts','.js', '.json', '.css']
  },
  module: {
    rules: [
      {
        test: /\.(js|ts|tsx)$/,
        exclude: /node_modules/,
        use: ['babel-loader']
      },
      {
        test: /\.html$/,
        use: [{
          loader: 'html-loader',
          options: {
            minimize: true
          }
        }]
      },
      {
        test: /\.(png|jpg|gif)$/,
        use: [{
          loader: 'url-loader',
          options: {
            limit: 8192,
            name: 'images/app.[md5:hash:hex:8].[ext]',
            esModule: false
          }
        }]
      },
      {
        test: /\.svg$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: 'images/app.[md5:hash:hex:8].[ext]'
          }
        }]
      },
      {
        test: /\.(mp4|ogg)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: 'assets/app.[md5:hash:hex:8].[ext]'
          }
        }]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: 'fonts/app.[md5:hash:hex:8].[ext]'
          }
        }]
      }
    ]
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, '../src/templates/index.html'),
      filename: 'index.html',
      inject: 'head'
    })
  ]
};