const forms = document.querySelectorAll('form');
forms.forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    alert('Thank you! Your request has been submitted.');
    form.reset();
  });
});