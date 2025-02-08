let x = 0;
let butt = document.getElementById("button");
let text = document.getElementById("text");
text.innerHTML = "you click " + x + " times";
butt.addEventListener("mousedown", onmousedown);
function onmousedown(){
    x++;
    text.innerHTML = "you click " + x + " times";
    console.log("you click " + x + " times");
    if (x % 10 === 0){
        butt.className = "red";
    }
    else if(x % 5 === 0){
        butt.className = "blue";
    }
    else{
        butt.className = "white";
    }
}
