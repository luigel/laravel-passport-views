import Vue from "vue";
import axios from "axios";

window.Popper = require("popper.js").default;
window.axios = axios;
try {
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

let token = document.head.querySelector('meta[name="csrf-token"]');

axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

if (token) {
    axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
}

Vue.component(
    "passport-clients",
    require("./components/passport/Clients.vue").default
);

Vue.component(
    "passport-authorized-clients",
    require("./components/passport/AuthorizedClients.vue").default
);

Vue.component(
    "passport-personal-access-tokens",
    require("./components/passport/PersonalAccessTokens.vue").default
);

new Vue({
    el: "#app"
});
