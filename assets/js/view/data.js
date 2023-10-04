import member from "../../data/json/member.js";
import signform from "../../data/json/signform.js";
const setData=(newData,action)=>{
    console.log(newData);
    if (!newData) {
        localStorage.setItem("member", JSON.stringify(member));
        localStorage.setItem("signform", JSON.stringify(signform));
        
    }
    else{
        if (typeof action!=="undefined") {
            localStorage.setItem(action, JSON.stringify([...member,newData]));
        }

    }

}

export { setData};