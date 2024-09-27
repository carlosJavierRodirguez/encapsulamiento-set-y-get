window.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formTriangulo");
    const mostar = document.querySelector(".resultadoTriangulo");
  
    form.addEventListener("submit", (event) => {
      event.preventDefault();
  
      let base = document.querySelector("#baseTriangulo").value;
      let altura = document.querySelector("#alturaTriangulo").value;
  
      const areaRectangulo = {
        base,
        altura,
      };
  
      fetch("libreria/registerTriangulo.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(areaRectangulo),
      })
        .then((response) => response.json())
        .then((data) => {
          let html = "";
          data.forEach((oper) => {
            html = ` <div class="col-12">${oper.area_triangulo}</div> `;
          });
  
          mostar.innerHTML = html;
        })
        .catch((error) => {
          console.log(error);
        });
    });
  });
  