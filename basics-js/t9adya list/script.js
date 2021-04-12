let form = document.querySelector('form.row');
let ul = document.querySelector('.task_list');
let htmlTemplate = function(todo){
     let li = `
     <li> ${todo} <span class="deL">x</span></li>
     `
     ;

ul.innerHTML += li;
} 

form.addEventListener('submit', function(e){
  e.preventDefault();
  let todo = form.task.value.trim();
  if(todo.length){
    htmlTemplate(todo);
    form.reset();
  }
})

ul.addEventListener('click', e => {
  if(e.target.classList.containes('del')){
   e.target.parentELement.remove();
  }
})
