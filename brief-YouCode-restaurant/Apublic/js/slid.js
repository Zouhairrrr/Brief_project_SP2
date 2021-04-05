
const showPlate = document.getElementById("plate");
const showBtn = document.getElementById("btn");
const model = document.getElementById("model");

showPlate.addEventListener("click", () => {
  showBtn.classList.add("show");
  model.classList.add("showModel");
});

window.addEventListener("click", (event) => {
  if (event.target === model) {
    showBtn.classList.remove("show");
    model.classList.remove("showModel");
  }
});

