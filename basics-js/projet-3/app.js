
// let images = [
//     'images/image1.png', 'images/image2.png', 'images/image3.png','images/image4.png'
// ]



// var connt = document.getElementById("canvas");
// var i ;



//  document.querySelector("#right").addEventListener("click",
//  function(){
//    i = i < (images.length-1) ? ++i : 0;
//    connt.style.backgroundImage = 'url('+ images[i] +')'
// });



//  document.querySelector("#left").addEventListener("click",
//  function(){
//    i = i > 0 ? --i : (images.length-1);
//    connt.style.backgroundImage = 'url('+ images[i] +')'
// });

































var images = [
    'images/image1.png', 'images/image2.png', 'images/image3.png','images/image4.png'
]


var connt = document.getElementById('canvas');
var i ;


document.getElementById('right').addEventListener("click",function(){
 i = i < (images.length-1) ? ++i : 0 ;
 connt.style.backgroundImage= 'url(' + images [i] + ')' ;
})

document.querySelector("#left").addEventListener("click",
function(){
  i = i > 0 ? --i : (images.length-1);
  connt.style.backgroundImage = 'url('+ images[i] +')'
  
});




