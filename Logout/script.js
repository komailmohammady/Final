// script.js

// Function to handle the logout process
function handleLogout() {
    // Remove the authentication token from local storage
    localStorage.removeItem('authToken');
  
    // If needed, you can send a request to the server to invalidate the session
    // fetch('/api/logout', { method: 'POST' })
    //   .then(response => response.json())
    //   .then(data => console.log(data))
    //   .catch(error => console.error('Error logging out:', error));
  
    // Redirect to the login page
    window.location.href = 'login.html'; // Replace with your login page URL
  }
  