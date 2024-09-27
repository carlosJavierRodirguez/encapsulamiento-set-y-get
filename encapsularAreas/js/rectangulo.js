window.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formRectangulo");
  const mostar = document.querySelector(".resultadoRectangulo");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    let base = document.querySelector("#baseRectangulo").value;
    let altura = document.querySelector("#alturaRectangulo").value;

    const areaRectangulo = {
      base,
      altura,
    };

    fetch("libreria/registerRectangulo.php", {
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
          html = ` <div class="col-12">${oper.area_rectangulo}</div> `;
        });

        mostar.innerHTML = html;
      })
      .catch((error) => {
        console.log(error);
      });
  });
});
