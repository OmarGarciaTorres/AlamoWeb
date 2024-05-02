document.addEventListener("DOMContentLoaded", function() {
    const surveyForm = document.getElementById("surveyForm");
  
    surveyForm.addEventListener("submit", function(event) {
      event.preventDefault();
      const formData = new FormData(surveyForm);
      const data = {};
      for (let [key, value] of formData.entries()) {
        data[key] = value;
      }
      console.log(data); // Aquí puedes enviar los datos al servidor con AJAX
      alert("¡Gracias por completar la encuesta!");
      surveyForm.reset();
    });
  });
  