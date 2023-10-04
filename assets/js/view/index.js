
import { setData } from "./data.js";

$(document).ready(function () {
setData(localStorage.getItem("member"));
setData(localStorage.getItem("signform"));

});