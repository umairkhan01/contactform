const form = document.getElementById('contact-form');

function handleSubmit(event) {
  event.preventDefault();
  const title = document.getElementById('title').value;
  const firstName = document.getElementById('first-name').value;
  const lastName = document.getElementById('last-name').value;
  const dob = document.getElementById('dob').value;
  const phone = document.getElementById('phone').value;
  const file = document.getElementById('file').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;

  // Create an object to hold the form data
  const formData = {
    'Title': title,
    'First Name': firstName,
    'Last Name': lastName,
    'Date of Birth': dob,
    'Telephone Number': phone,
    'File Uploaded': file,
    'Email': email,
    'Message': message
  };

  // Store the form data in sessionStorage
  sessionStorage.setItem('formData', JSON.stringify(formData));

  // Redirect to the confirmation page
  window.location = 'index.html';
}

form.addEventListener('submit', handleSubmit);
