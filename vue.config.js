const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
	transpileDependencies: true,
	configureWebpack: {
		resolve: {
			alias: {
				// Add the alias for zlib here
				zlib: require.resolve("browserify-zlib"),
			},
			fallback: {
				assert: require.resolve("assert"),
				crypto: require.resolve("crypto-browserify"),
				http: require.resolve("stream-http"),
				https: require.resolve("https-browserify"),
				os: require.resolve("os-browserify/browser"),
				stream: require.resolve("stream-browserify"),
				zlib: require.resolve("browserify-zlib"),
			},
		},
	},
});
