const path = require("path");

module.exports = {
    entry: ["./src/global.css", "./src/script.js", "./src/top_button.js"],
    output: {
        filename: "bundle.js",
        path: path.resolve(__dirname, "dist"),
    },
    module: {
        rules: [
            {
                test: /\.(?:js|mjs|cjs)$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: [
                            ["@babel/preset-env", { targets: "defaults" }],
                        ],
                    },
                },
            },
            {
                test: /\.css$/,
                use: [
                    "style-loader",
                    {
                        loader: "css-loader",
                        options: { importLoaders: 1 },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            postcssOptions: {
                                plugins: [
                                    [
                                        "postcss-preset-env",
                                        {
                                            stage: 4,
                                            features: {
                                                "nesting-rules": true,
                                            },
                                        },
                                    ],
                                    [
                                        "cssnano",
                                        {
                                            preset: [
                                                require("cssnano-preset-default"),
                                                { discardComments: true },
                                            ],
                                        },
                                    ],
                                ],
                            },
                        },
                    },
                ],
            },
        ],
    },
    mode: "production",
};
