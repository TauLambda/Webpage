var jwt = require("jsonwebtoken");

var METABASE_SITE_URL = "https://itesm-cem.metabaseapp.com";
var METABASE_SECRET_KEY = "d44c46d23a250ee5235c3cb3";

var payload = {
  resource: { dashboard: 3 },
  params: {},
  exp: Math.round(Date.now() / 1000) + (10 * 60) // 10 minute expiration
};
var token = jwt.sign(payload, METABASE_SECRET_KEY);

var iframeUrl = METABASE_SITE_URL + "/embed/dashboard/" + token + "#bordered=true&titled=true";