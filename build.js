const esbuild = require("esbuild");

const glob = require("glob");

const { sassPlugin } = require("esbuild-sass-plugin");
const postcss = require("postcss");
const autoprefixer = require("autoprefixer");
const postcssPrefixEnv = require("postcss-preset-env");

const sass = sassPlugin({
    async transform(source, resolveDir) {
        const { css } = await postcss([autoprefixer, postcssPrefixEnv()]).process(source, { from: undefined });
        return css;
    },
});

const entryPoints = [
    "site/assets/css/stylesheet.scss",
    glob.sync("site/assets/css/templates/*.scss"),
    glob.sync("site/assets/js/templates/*.ts"),
].flat();

console.log(`[${new Date().toLocaleTimeString()}] bundling\n`, entryPoints);

const watch = process.argv.some((x) => x == "--watch") ? { onRebuild } : false;

esbuild
    .build({
        entryPoints: entryPoints,
        outdir: "assets",
        outbase: "site/assets",
        target: "es2020",
        minify: true,
        plugins: [sass],
        color: true,
        legalComments: "inline",
        publicPath: "/assets",
        treeShaking: !watch,
        watch,
        logLevel: "silent",
        logLimit: 0,
    })
    .catch((res) => {
        if (res.errors) {
            res.errors.forEach((e) => console.log(e.text));
        }
    });

function onRebuild(err, res) {
    const d = new Date();
    console.log(`[${d.toLocaleTimeString()}] build triggered`);
    if (err) {
        err.errors.forEach((e) => console.error(e.text));
    }
}
