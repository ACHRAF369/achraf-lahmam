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
         fetch('https://api.github.com/users/achraf369/repos').then((response)=> response.json())
         .then((repositories) => {
        //  Empty The Value
        reposData.innerHTML = '';

        // loop on Repositories
        repositories.forEach(repo =>{
         
        //Creat the main Div
        let mainDiv = document.createElement("div");
         
        //creat repo Name Text
        let repoName = document.createTextNode(repo.name);

        // append the text to Main Div
        mainDiv.appendChild(repoName);

        // Append the main Div to Container
        
        });

         });
    }
    
}