import { setData } from "./data.js";

$(document).ready(function () {
    setData();
    $("#sign_up").click(function (e) { 
        // e.preventDefault();
        const form = document.forms['form'].elements;
        const newData =
        {
            name:form.name.value,
            email:form.email.value,
            password:form.password.value,
            phone:form.phone.value,
            address:form.address.value,
            birthday:form.birthday.value
        }
        console.log(this.validity);
        
    });
});