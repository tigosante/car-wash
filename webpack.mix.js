const mix = require("laravel-mix");

const appPathOrgin = "resources/views/app/app.css";
const appPathDestiny = "public/app/app.css";

const headerPathOrgin = "resources/views/components/header/header.css";
const headerPathDestiny = "public/components/header.css";

const sidebarCssPathOrgin = "resources/views/components/sidebar/sidebar.css";
const sidebarCssPathDestiny = "public/components/sidebar.css";

const sidebarJsPathOrgin = "resources/views/components/sidebar/sidebar.js";
const sidebarJsPathDestiny = "public/components/sidebar.js";

mix.styles(appPathOrgin, appPathDestiny)
    .styles(headerPathOrgin, headerPathDestiny)
    .styles(sidebarCssPathOrgin, sidebarCssPathDestiny)
    .scripts(sidebarJsPathOrgin, sidebarJsPathDestiny);
