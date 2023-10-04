import member from "../../data/json/member.js";
import signform from "../../data/json/signform.js";
const setData=(newData,action)=>{
    console.log(newData);
    if (!newData) {
        localStorage.setItem("member", JSON.stringify(member));
        localStorage.setItem("signform", JSON.stringify(signform));
        
    }
    else{
        if (action==="member") {
            localStorage.setItem("member", JSON.stringify([...member,newData]));
        }
        else if(action==="signform"){
            localStorage.setItem("signform", JSON.stringify([...signform,newData]));
        }
    }

}

export { setData};