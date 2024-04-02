// Simple example using Fetch API for illustration (improve error handling)
document.getElementById('email-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const email = document.getElementById('email').value;
  fetch('submit.php?email=' + email)
    .then(response => response.text())
    .then(data => {
      document.getElementById('message').textContent = data;
    })
    .catch(error => {
      console.error(error);
      document.getElementById('message').textContent = "Error submitting email.";
    });
});
