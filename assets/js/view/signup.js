import { setData } from "./data.js";

$(document).ready(function () {

    $("#sign_up").click(function (e) { 
        e.preventDefault();
        const form = document.forms['form'].elements;
        // 定義一個包含需要檢查的字段的數組
        const fieldsToCheck = [form.name, form.email, form.password, form.phone, form.address, form.birthday];
        // 調用函數來檢查字段
        const areAllFieldsFilled = areFieldsFilled(fieldsToCheck);
        if (areAllFieldsFilled) {
            const oldData=JSON.parse(localStorage.getItem("member"));
            const newData =
            {
                mId:oldData.length+1,
                mName:form.name.value,
                email:form.email.value,
                password:form.password.value,
                phone:form.phone.value,
                address:form.address.value,
                birthday:form.birthday.value
            }

            setData(newData,"member");
            $("#message").text("註冊成功!!!")
            $('#errmsg').modal('toggle')
            setTimeout(() => {
                window.location.href = "index.html";
            }, 2000);

            
        }
        else{
            $("#message").text("請填寫必填欄位!!!")
            $('#errmsg').modal('toggle')
        }

        console.log(areAllFieldsFilled);

        
        function areFieldsFilled(fields) {
            for (let i = 0; i < fields.length; i++) {
                const field = fields[i];
                if (field.required && field.value.trim() === '') {
                    return false; // 如果任何一個必填字段未填寫值，返回false
                }
            }
            return true; // 所有必填字段都已填寫值，返回true
        }
    });
});