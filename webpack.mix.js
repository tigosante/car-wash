const mix = require("laravel-mix");

const appPathOrgin = "resources/views/app/app.css";
const appPathDestiny = "public/app/app.css";

const headerPathOrgin = "resources/views/components/header/header.css";
const headerPathDestiny = "public/components/header.css";

const sidebarPathOrgin = "resources/views/components/sidebar/sidebar.css";
const sidebarPathDestiny = "public/components/sidebar.css";

mix.styles(appPathOrgin, appPathDestiny)
    .styles(headerPathOrgin, headerPathDestiny)
    .styles(sidebarPathOrgin, sidebarPathDestiny);
