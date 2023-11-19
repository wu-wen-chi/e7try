import member from "../../data/json/member.js";
import signform from "../../data/json/signform.js";

var name = "Amy";

$(document).ready(function () {
    // console.log(member);
    for (const mem of member) {
        if (mem.mName === name) {
            console.log(mem);
            console.log(mem.mId);
            // console.log(signform[mem.mId]);
            return (mem);
        } else {
            console.log("找不到會員資料");
            return ("non")
        }
    }
});