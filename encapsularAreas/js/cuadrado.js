window.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("areaCuadrado");
  const mostar = document.querySelector(".resultadoCuadrado");
  form.addEventListener("submit", (event) => {
    event.preventDefault();

    let lado = document.querySelector("ladoCuadrado").value;

    const areaCuadrado = {
      lado,
    };

    fetch("libreria/register.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(areaCuadrado),
    })
      .then((response) => response.json())
      .then((data) => {
        let html = "";
        data.forEach((oper) => {
          html = ` <div class="col-12">${oper.suma}</div>`;
        });

        mostar.innerHTML = html;
      })
      .catch((error) => {
        console.log(error);
      });
  });
});
