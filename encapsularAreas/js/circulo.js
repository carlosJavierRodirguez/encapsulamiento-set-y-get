window.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formCirculo");
    const mostar = document.querySelector(".resultadoCirculo");
    form.addEventListener("submit", (event) => {
      event.preventDefault();
  
      let radio = document.querySelector("#radioCirculo").value;
  
      const areaCirculo = {
        radio,
      };
  
      fetch("libreria/registerCirculo.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(areaCirculo)
      })
        .then((response) => response.json())
        .then((data) => {
          let html = "";
          data.forEach((oper) => {
            html = ` <div class="col-12">${oper.area_circulo}</div>`;
          });
  
          mostar.innerHTML = html;
        })
        .catch((error) => {
          console.log(error);
        });
    });
  });
  