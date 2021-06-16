
let user = document.querySelector('.form-control');
let show = document.querySelector('#root');
let search = document.querySelector('.btn');
let username = document.querySelector('h1');
let head = document.getElementById('head');


search.addEventListener("click", function () {
   // if value is empty
    if (user.value === '') { 
        show.innerHTML = "pleas write the UserName"
    } else { // value is notb empty
        fetch(`https://api.github.com/users/${user.value}/repos`).then(response => response.json()).then(data => {
                show.innerHTML = '';
                data.forEach(repo => {
                    
                    // insert avatar Url
                    contDiv = document.createElement("div");
                
                    repoName = document.createTextNode(repo.name);
                
                    contDiv.appendChild(repoName);
                
                    username.innerHTML = user.value;
                
                    //stars
                    let starsSpan = document.createElement("span");

                    starsSpan.className = ' stars '

                    let starsText = document.createTextNode(`Stars${repo.stargazers_count}`);

                    starsSpan.appendChild(starsText);

                    contDiv.appendChild(starsSpan)

                    //isseus
                    let issuesSpan = document.createElement("span");

                    issuesSpan.className = 'isseus'

                    let issuesText = document.createTextNode(`isseus${repo.open_issues_count}`);

                    issuesSpan.appendChild(issuesText);

                    contDiv.appendChild(issuesSpan)

                //    description
                //    let description = document.getElementById('a');

                //    description.className = 'description'
                //    let descText = document.createTextNode(repo.description);

                //    description.appendChild(descText);

                //    contDiv.appendChild(description);

                     contDiv.className = 'bg-light'
                    show.appendChild(contDiv)
                });
                head.innerHTML = `

                    <img src="${data.avatar_url}"/>

                    `
            });


    }


});





