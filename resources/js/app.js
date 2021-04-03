// Display animation on scroll
const ratio = 0;
const options = {
  root: null,
  rootMargin: '0px',
  treshold: ratio
}

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.remove('reveal');
      entry.target.classList.remove('reveal-right');
      observer.unobserve(entry.target);
    }
  });
}

document.documentElement.classList.add('reveal-loaded');
window.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver(handleIntersect, options);

  document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r);
  });

  document.querySelectorAll('.reveal-right').forEach(function (r) {
    observer.observe(r);
  });
});


// Scroll effect
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });
});