const sendEmail = () => {
  // Verify forms are all filled correctly
  let alert = document.getElementById('email-alert');


  let email = document.getElementById('email-form').value;
  let subject = document.getElementById('subject-form').value;
  let message =  document.getElementById('message-form').value;

  if(email == "" || subject == "" || message == "") {
    alert.innerHTML = "Please fill in all of the forms!";
    alert.style.color = "red";
    alert.style.display = "block";
    setTimeout(() => {
      alert.style.display = "none";
    }, 5000)
    return;
  }

  fetch('wp-content/themes/charles-hopkins/email.php?email=' + email + '&subject=' + subject + '&message=' + message )
  .then((res) => res.text())
  .then((text) => {
    alert.innerHTML = "Your message has been sent!";
    alert.style.color = "green";
    alert.style.display = "block";
    setTimeout(() => {
      alert.style.display = "none";
    }, 5000)
  })
  .catch(error => console.error('Error:', error));

}