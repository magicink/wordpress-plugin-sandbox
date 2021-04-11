const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const { WebpackManifestPlugin } = require('webpack-manifest-plugin')

module.exports = () => {
  return {
    devServer: {
      port: 3893,
      publicPath: '/',
      writeToDisk: true
    },
    devtool: 'source-map',
    entry: {
      blocks: [
        'core-js/stable',
        'regenerator-runtime/runtime',
        'webpack-dev-server/client?http://localhost:3893',
        `${path.resolve(__dirname)}/src/js/blocks/index.js`
      ],
      main: [`${path.resolve(__dirname)}/src/js/index.js`]
    },
    externals: {
      react: 'React',
      'react-dom': 'ReactDOM'
    },
    module: {
      rules: [
        {
          exclude: /node_modules/,
          test: /\.jsx?$/,
          use: [
            {
              loader: 'babel-loader'
            }
          ]
        },
        {
          exclude: /node_modules/,
          test: /\.scss$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader
            },
            {
              loader: 'css-loader'
            },
            {
              loader: 'sass-loader'
            }
          ]
        }
      ]
    },
    output: {
      filename: '[name].js',
      path: `${path.resolve(__dirname)}/build/js`,
      publicPath: '/'
    },
    plugins: [new WebpackManifestPlugin(), new MiniCssExtractPlugin()],
    resolve: {
      fallback: {
        path: require.resolve('path-browserify')
      }
    }
  }
}
