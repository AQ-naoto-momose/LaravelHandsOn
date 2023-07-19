const express = require('express');
const runPuppeteer = require('./screens/create_vpc');
const app = express();
const port = 3000;

app.get('/', async (req, res) => {
  const html = await runPuppeteer();
  res.send(html);
});

app.listen(port, () => {
  console.log(`Server listening at http://localhost:${port}`);
});
