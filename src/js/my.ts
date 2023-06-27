import gsapAnimation from "./modules/animations/animation.js";
import fixedHeader from "./modules/header/fixed-header";
import {mainMenu} from "./modules/menu";

document.addEventListener("DOMContentLoaded", function () {
    window["FLS"] = false;

    mainMenu();
    fixedHeader();
    gsapAnimation();
});
