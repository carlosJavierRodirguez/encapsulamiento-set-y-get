window.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formRectangulo");
  const mostar = document.querySelector(".resultado");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    let base = document.querySelector("baseRectangulo").value;
    let altura = document.querySelector("alturaRectangulo").value;

    const dataOperaciones = {
      base,
      altura
    };

    fetch("php/registerRectangulo.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(dataOperaciones),
    })
      .then((response) => response.json())
      .then((data) => {
        let html = "";
        data.forEach((oper) => {
          html = `
                    <div class="col-12">suma: ${oper.suma}</div>
                    <div class="col-12">resta: ${oper.resta}</div>
                `;
        });

        mostar.innerHTML = html;
      })
      .catch((error) => {
        console.log(error);
      });
  });
});
