let repos = []
async function Search(name){
    let path = "https://api.github.com/users/" + name + "/repos";
    let response = await fetch(path, { method: "GET"});
    repos = await response.json();
    console.log(repos);
    for(let i = 0; i < repos.length; i++){
        console.log(repos[i].name);
        CreateRepItem(repos[i]);
    }
}
function onmousedown(){
    Username =  User.value;
    Search(Username);
}
function CreateRepItem(repo){
    let div = document.createElement('div');
    let title = document.createElement('h1');
    div.append(title);
    title.innerHTML =  repo.name;
    container.append(div);
}
//Search("Spider-has");
let User = document.getElementById("UserName");
let Username =User.value;
let SearchButt = document.getElementById("Search");
let container =document.getElementById("ReposCont");
SearchButt.addEventListener("mousedown", onmousedown)