

//spinner
// window.addEventListener("load", () => {
//     const spinner = document.querySelector(".spinner");
//     spinner.classList.add("spinner-hidden");
//     });

//   // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
    $('.navbar').addClass('header-scrolled');
    } else {
    $('.navbar').removeClass('header-scrolled');
    }
});


  // scroll
let scroll = document.querySelector(".scroll-link");
window.onscroll = function () {
    this.scrollY >= 1000
        ? scroll.classList.add("show")
        : scroll.classList.remove("show");
};
scroll.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};




