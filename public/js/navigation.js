let burger = document.querySelector(".smaller_navigation")

burger.addEventListener("click", function() {

    let burger_piece = document.querySelectorAll(".burger_piece")

    burger_piece.forEach(function (el, index) {

          if (index == 0) {
            el.classList.toggle("t1")
          }

          if (index == 1) {
            el.classList.toggle("t2")
          }

          if (index == 2) {
            el.classList.toggle("t3")
          }

         
          

    })
  //  document.querySelector(".smaller_navigation ul").classList.toggle(".slide_nav")

  let state = document.querySelector(".smaller_navigation ul").getAttribute("data-state")

  if (state == "dead") {

    document.querySelector(".smaller_navigation ul").style.transition = ".5s ease-in"
    document.querySelector(".smaller_navigation ul").style.transform = "translateX(0)"
    document.querySelector(".smaller_navigation ul").setAttribute("data-state", "active")
  }

  if (state == "active") {

    document.querySelector(".smaller_navigation ul").style.transition = ".5s ease-in"
    document.querySelector(".smaller_navigation ul").style.transform = "translateX(100%)"
    document.querySelector(".smaller_navigation ul").setAttribute("data-state", "dead")
  }
 

})