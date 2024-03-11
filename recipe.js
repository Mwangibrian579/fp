document.addEventListener('DOMContentLoaded', () => {
    const authorForm = document.getElementById('authorForm');
    const authorInfo = document.getElementById('authorInfo');
  
    authorForm.addEventListener('submit', (event) => {
      event.preventDefault();
  
      const name = document.getElementById('name').value;
      const bio = document.getElementById('bio').value;
  
      // Create a new author section
      const newAuthorSection = document.createElement('section');
      newAuthorSection.innerHTML = `
        <h2>${name}</h2>
        <p>${bio}</p>
      `;
  
      // Append the new author section to the authorInfo div
      authorInfo.appendChild(newAuthorSection);
  
      // Reset the form
      authorForm.reset();
    });
  });
  