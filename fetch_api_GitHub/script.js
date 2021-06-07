let theInput = document.querySelector(".getuser");
let getButton = document.querySelector(".btn-danger");
let reposData = document.querySelector(".Show-Data")

getButton.onclick = function(){

    getRepos();

}

// Get Repos Function
function getRepos() {
    if(theInput.value == ''){ // if value impty
        reposData.innerHTML= "<span>Pleas write GitHub Username</span>";
    }else{
         fetch('https://api.github.com/users/achraf369/repos').then((res)=>{
             return res.json();
         })
         .then((repositories) => {
        //   console.log(repositories);
        reposData.innerHTML = '';

         })
    }
    
}