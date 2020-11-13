const mix = require("laravel-mix");

const apphOrgin = "resources/views/app/app.css";
const apphDestiny = "public/app/app.css";

const headerhOrgin = "resources/views/components/header/header.css";
const headerhDestiny = "public/components/header.css";

const sidebarCsshOrgin = "resources/views/components/sidebar/sidebar.css";
const sidebarCsshDestiny = "public/components/sidebar.css";

const sidebarJshOrgin = "resources/views/components/sidebar/sidebar.js";
const sidebarJshDestiny = "public/components/sidebar.js";

const collaboratorCsshOrigin = "resources/views/register/collaborator.css";
const collaboratorCsshDestiny = "public/register/collaborator.js";

const typeServiceCsshOrigin = "resources/views/register/type_service.css";
const typeServiceCsshDestiny = "public/register/type_service.js";

const serviceCsshOrigin = "resources/views/register/service.css";
const serviceCsshDestiny = "public/register/service.js";

const userCsshOrigin = "resources/views/register/user.css";
const userCsshDestiny = "public/register/user.js";

mix.styles(apphOrgin, apphDestiny)
    .styles(headerhOrgin, headerhDestiny)
    .styles(sidebarCsshOrgin, sidebarCsshDestiny)
    .scripts(sidebarJshOrgin, sidebarJshDestiny)
    .styles(collaboratorCsshOrigin, collaboratorCsshDestiny)
    .styles(typeServiceCsshOrigin, typeServiceCsshDestiny)
    .styles(serviceCsshOrigin, serviceCsshDestiny)
    .styles(userCsshOrigin, userCsshDestiny);
