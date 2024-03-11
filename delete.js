document.getElementById("deleteForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // You'll need to send an AJAX request to the server to delete the user details
    // Replace "your_server_endpoint" with the actual URL where you'll handle the deletion on the server-side.
    // You can use libraries like Axios or Fetch API to perform the AJAX request.
    // Remember to implement proper security measures on the server-side, such as authentication and validation checks.
    // For this example, we're just displaying a message in the front-end.

    // Example using Fetch API
    fetch("author_db", {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ username, password }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById("message").textContent = "Profile deleted successfully.";
        } else {
            document.getElementById("message").textContent = "Failed to delete profile. Please check your credentials.";
        }
    })
    .catch(error => {
        console.error("Error:", error);
        document.getElementById("message").textContent = "An error occurred. Please try again later.";
    });
});
