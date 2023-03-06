
    var jia=document.querySelector(".add");
    var jian=document.querySelector(".minus");
    var mun=document.querySelector("span");
    // console.log(mun)
    add.onclick=function(){
        // console.log(1122)
        if(mun.innerText>=10){
            Alert ("restricted purchase ten");
            return;
        }
        mun.innerText++;
    }
    minus.onclick=function(){
        if(mun.innerText<=0){
            //  alert("")
            return;
        }
        mun.innerText--
    }