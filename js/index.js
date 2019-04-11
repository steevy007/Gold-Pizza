
function alarme(){
    document.getElementById('ouv').style.display="block";
    
    
 }



 function femen(){
    document.getElementById('ouv').style.display="none";
 }


/*
window.addEventListener('scroll',function(e){
   this.console.log(document.documentElement.scrollTop);
});*/

window.onscroll=function(){
   if(document.documentElement.scrollTop > 300){
      document.getElementById('te').style.backgroundColor="rgb(100, 88, 88)";
      document.getElementById('te').style.color="beige";

      document.getElementById('tet').style.backgroundColor="rgb(177, 174, 174)";
   }
   else{
      document.getElementById('te').style.backgroundColor="beige";
      document.getElementById('tet').style.backgroundColor="rgb(236, 153, 29)";
   }
}
