const path = require("path");

module.exports = {
    entry: {
        app: "./resources/js/index.js",
        contactForm: "./resources/js/contact-form.js",
        countdown: "./resources/js/countdown.js",
        charts: "./resources/js/charts.js",
        darkMode: "./resources/js/dark-mode.js",
        videoLightbox: "./resources/js/video-lightbox.js",
    },
    mode: "development",
    devServer: {
        static: "dist",
        watchFiles: ["resources/**/*"],
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"],
                    },
                },
            },
            {
                test: /\.css$/i,
                include: [
                    path.resolve(__dirname, "node_modules"),
                    path.resolve(__dirname, "resources/css"),
                ],
                use: ["style-loader", "css-loader", "postcss-loader"],
            },
            {
                test: /\.svg/,
                type: "asset/resource",
            },
        ],
    },
    plugins: [],
    output: {
        filename: "js/[name].bundle.js",
        path: path.resolve(__dirname, "./public"),
        assetModuleFilename: "assets/[hash][ext][query]",
    },
};
