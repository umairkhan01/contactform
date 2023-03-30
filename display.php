const contactForm = document.getElementById('contact-form');
contactForm.addEventListener('submit', handleSubmit);

function handleSubmit(event) {
  event.preventDefault();
  const formData = new FormData(event.target);
  const title = formData.get('title');
  const firstName = formData.get('first-name');
  const lastName = formData.get('last-name');
  const dob = formData.get('dob');
  const telephone = formData.get('telephone');
  const fileUpload = formData.get('file-upload');
  const email = formData.get('email');
  const message = formData.get('message');
  
  // Do form validation here
  
  const messageEl = document.createElement('p');
  messageEl.textContent = `Thank you ${title} ${firstName} ${lastName}.\nYou have submitted the following details:\nDate of Birth: ${dob}\nTelephone: ${telephone}\nFile Uploaded: ${fileUpload}\nMessage: ${message}`;
  
  // Display message on next screen here
  
  contactForm.reset();
}

