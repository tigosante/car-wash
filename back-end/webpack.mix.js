const mix = require("laravel-mix");

const apphOrgin = "resources/views/app/app.css";
const apphDestiny = "public/app/app.css";

const headerhOrgin = "resources/views/components/header/header.css";
const headerhDestiny = "public/components/header.css";

const sidebarCsshOrgin = "resources/views/components/sidebar/sidebar.css";
const sidebarCsshDestiny = "public/components/sidebar.css";

const sidebarJshOrgin = "resources/views/components/sidebar/sidebar.js";
const sidebarJshDestiny = "public/components/sidebar.js";

const collaboratorCsshOrigin = "resources/views/manage/collaborator.css";
const collaboratorCsshDestiny = "public/manage/collaborator.js";

const typeServiceCsshOrigin = "resources/views/manage/type_service.css";
const typeServiceCsshDestiny = "public/manage/type_service.js";

const serviceCsshOrigin = "resources/views/manage/service.css";
const serviceCsshDestiny = "public/manage/service.js";

const userCsshOrigin = "resources/views/manage/user.css";
const userCsshDestiny = "public/manage/user.js";

mix.styles(apphOrgin, apphDestiny)
    .styles(headerhOrgin, headerhDestiny)
    .styles(sidebarCsshOrgin, sidebarCsshDestiny)
    .scripts(sidebarJshOrgin, sidebarJshDestiny)
    .styles(collaboratorCsshOrigin, collaboratorCsshDestiny)
    .styles(typeServiceCsshOrigin, typeServiceCsshDestiny)
    .styles(serviceCsshOrigin, serviceCsshDestiny)
    .styles(userCsshOrigin, userCsshDestiny);
