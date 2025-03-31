const {
    createServer
} = require("http");
const {
    parse
} = require("url");
const next = require("next");
const path = require("path");

const app = next({
    dev: false,
    dir: path.resolve(__dirname)
});
const handle = app.getRequestHandler();

app.prepare().then(() => {
    createServer((req, res) => {
        const parsedUrl = parse(req.url, true);
        handle(req, res, parsedUrl);
    }).listen(3000, (err) => {
        if (err) throw err;
        console.log("✅ Next.js server is running on port 3000");
    });
});
