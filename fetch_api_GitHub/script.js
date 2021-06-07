let theInput = document.querySelector(".getuser");
let getButton = document.querySelector(".btn-danger");
let reposData = document.querySelector(".Show-Data")

getButton.onclick = function(){
alert("test")
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
         
        //Creat the main Div Element
        let mainDiv = document.createElement("div");
         
        //creat repo Name Text
        let repoName = document.createTextNode(repo.name);

        // append the text to Main Div
        mainDiv.appendChild(repoName);

        // Append the mainDiv to Container
        //  reposData.appendChild(mainDiv);
 

        //Creat repo URl Anchor
        let theUrl = document.createElement('a');

        //Creat Repo Url Text
        let theUrl = document.createTextnode("visit");

        // Append The Repo Url Text To Anchor Tag
        theUrl.appendChild(theUrlText);

         //Add the Hypertext Reference "href"
         theUrl.href =`https//github.com/achraf369/${repo.name}`;
        
         //Set Attribut Blank
         theUrl.setAttribute('target', '_blank');



         //Append Url Anchor To Main Div
         mainDiv.appendChild(theUrl);
         
         //Create Stars Count Span
         let StarsSpan = document.createElement("span");

         //Creat the strars count 
         let starsText = document.createTextnode(`Stars ${repo.stargazers_count}`);

        //Add Stars 

         //Append the Main Div To Container
         reposData.appendChild(mainDiv);

         //

      
         


        });

         });
    }
    
}