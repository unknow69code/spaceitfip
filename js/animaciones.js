//Aniamciones del alerta flotante
window.onload = function () {
  const alert = document.querySelector(".alert-flotante");
  if (alert) {
    alert.classList.add("show");

    setTimeout(() => {
      alert.classList.remove("show");
      alert.classList.add("hide");
    }, 2500);
  }
};
