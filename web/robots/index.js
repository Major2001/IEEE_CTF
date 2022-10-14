const express = require("express");
const robots = require("express-robots-txt");

const app = express();
app.use(express.static(`${__dirname}/public/`));
app.use("/admin", express.static(`${__dirname}/public/admin.html`));
app.use(robots(__dirname + "/robots.txt"));

app.post("/admin", (req, res) => {
  res.send("It can't be that easy");
});
app.listen(8000, () => {
  console.log("Lets go");
});
