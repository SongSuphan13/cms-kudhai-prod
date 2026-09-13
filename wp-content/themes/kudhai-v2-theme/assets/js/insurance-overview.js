(() => {
  document.querySelectorAll('.kh-faq-toggle').forEach(button => {
    const answer = document.getElementById(button.getAttribute('aria-controls'));
    answer.hidden = false;
    button.setAttribute('aria-expanded', String(!answer.hidden));
    button.addEventListener('click', () => {
      answer.hidden = !answer.hidden;
      button.setAttribute('aria-expanded', String(!answer.hidden));
    });
  });
})();
