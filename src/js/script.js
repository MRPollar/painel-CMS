const navButton = document.querySelectorAll(".nav-button");
const navPage = document.querySelectorAll(".page-button");

navButton.forEach((el, index) => {
   let idElement = el.getAttribute("href");
   el.addEventListener("click", (e) => {
      e.preventDefault();
      navigation(index, idElement)
   });
})

navPage.forEach((el, index) => {
   let idElement = el.getAttribute("href");
   el.addEventListener("click", (e) => {
      e.preventDefault();
      navigation(index, idElement)
   });
})

function navigation(index, id){
   const to = document.querySelector(id).offsetTop - 60;
   scrollPosition(to);

   for(let i = 0; i < navButton.length; i++){
      if(i === index){

         navButton[i].classList.add('active');
         navPage[i].classList.add('active');

      } else {

         navButton[i].classList.remove('active');
         navPage[i].classList.remove('active');

      }
   }

}

function scrollPosition(to){
   window.scroll({
      top: to,
      behavior: "smooth"
   })
}

var index = 0;

window.addEventListener("scroll", () => {
   const offsetSobre = document.querySelector("#sobre").scrollHeight;
   const offsetCadastro = document.querySelector("#cadastrar");

   if(window.scrollY <= offsetSobre){
      index = 0;
   } else if(window.scrollY > offsetSobre && window.scrollY <= offsetCadastro.offsetTop - 60){
      index = 1;
   } else {
      index = 2;
   }

   for(let i = 0; i < navButton.length; i++){
      if(i === index){

         navButton[i].classList.add('active');
         navPage[i].classList.add('active');

      } else {

         navButton[i].classList.remove('active');
         navPage[i].classList.remove('active');

      }
   }


});

console.log(window.document);