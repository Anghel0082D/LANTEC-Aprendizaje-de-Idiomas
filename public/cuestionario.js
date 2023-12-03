  document.getElementById("quizForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    const answers = {
      q1: document.querySelector('input[name="q1"]:checked').value,
      q2: document.querySelector('input[name="q2"]:checked').value,
      q3: document.querySelector('input[name="q3"]:checked').value,
      q4: document.querySelector('input[name="q4"]:checked').value,
      q5: document.querySelector('input[name="q5"]:checked').value,
      q6: document.querySelector('input[name="q6"]:checked').value,
      q7: document.querySelector('input[name="q7"]:checked').value,
      q8: document.querySelector('input[name="q8"]:checked').value,
      q9: document.querySelector('input[name="q9"]:checked').value,
      q10: document.querySelector('input[name="q10"]:checked').value,
    };
  
    const result = calculateResult(answers);
  
    showResult(result);
  });
  
  function calculateResult(answers) {
    return answers.q1;
  }
  
  function showResult(result) {
    const resultElement = document.getElementById("result");
    resultElement.textContent = `Tu estilo de aprendizaje es: ${result}`;
    resultElement.classList.add('cambiarColorTexto');
    resultElement.classList.remove("hidden");
  }
  
  