// Get references to form elements
const form = document.getElementById('bookingForm');
const submitButton = document.getElementById('submitButton');

// Function to check if all required fields are filled
function checkFormValidity() {
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const nic = document.getElementById('nic').value.trim();
    const email = document.getElementById('email').value.trim();
    const number = document.getElementById('number').value.trim();
    const address1 = document.getElementById('address1').value.trim();
    const city = document.getElementById('city').value.trim();
    const postal = document.getElementById('postal').value.trim();
    const adult = document.getElementById('adult').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    // Check if all required fields are filled
    if (firstName && lastName && nic && email && number && address1 && city && postal && adult && date && time) {
        submitButton.disabled = false; // Enable the button
    } else {
        submitButton.disabled = true; // Disable the button
    }
}

// Add 'input' event listeners to all form fields to validate in real-time
form.addEventListener('input', checkFormValidity);

// Handle form submission
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent immediate submission to show alert first

    // Show success message
    alert("Record created successfully!");

    // Delay submission for a short period after alert
    setTimeout(function() {
        form.submit(); // Submit the form after alert is acknowledged
    }, 100); // Delay slightly (100 ms) to allow alert to close properly
});