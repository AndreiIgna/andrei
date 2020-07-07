const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
	externals: {
		jquery: 'jQuery'
	},
	module: {
		rules: [{
			test: /\.js$/,
			exclude: /node_modules/,
			use: {
				loader: "babel-loader"
			}
		}, {
			test: /\.css$/,
			use: [MiniCssExtractPlugin.loader, 'css-loader']
		}, {
			test: /\.scss$/,
			use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader']
		}]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename:		"[name].css",
			chunkFilename:	"[id].css"
		})
	]
};
