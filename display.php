const contactForm = document.getElementById("contact-form");
const formResult = document.getElementById("form-result");

contactForm.addEventListener("submit", function(event) {
  event.preventDefault();

  const title = document.getElementById("title").value;
  const firstName = document.getElementById("first-name").value;
  const lastName = document.getElementById("last-name").value;
  const dob = document.getElementById("dob").value;
  const telephone = document.getElementById("telephone").value;
  const fileUpload = document.getElementById("file-upload").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  let hasError = false;

  if (!title || !firstName || !lastName || !telephone || !email) {
    hasError = true;
  }

  if (hasError) {
    formResult.innerHTML = "Please fill out all required fields.";
    formResult.classList.add("error");
    return;
  }

  formResult.innerHTML = `Thank you ${title} ${firstName} ${lastName}.<br>You have submitted the following details:<br>Date of Birth: ${dob}<br>Telephone: ${telephone}<br>File Uploaded: ${fileUpload}<br>Message: ${message}`;
  formResult.classList.remove("error");

  contactForm.reset();
});

