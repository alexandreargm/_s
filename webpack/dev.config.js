const baseConfig = require('./base.config.js');
const merge = require('webpack-merge');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = merge(baseConfig, {
  devtool: 'eval-source-map',
  plugins: [
    new BrowserSyncPlugin({
      files: ['**/*.php', 'style.css'],
      proxy: 'http://wordpress.ddev.site'
    })
  ],
});