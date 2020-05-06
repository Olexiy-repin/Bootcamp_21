let el = document.getElementById("btn");
el.addEventListener("click", (e) => {
  e.preventDefault();
  let target = e.target;

  target.closest(".btn");
  let menu = document.getElementById("menu");
  menu.classList.toggle("opened");
});
