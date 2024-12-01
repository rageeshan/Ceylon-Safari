function openUpdateModal(email, name, contact) {
    document.getElementById('email').value = email;
    document.getElementById('name').value = name;
    document.getElementById('contact').value = contact;
    document.getElementById('updateModal').style.display = 'block';
}

document.getElementById('closeModal').onclick = function() {
    document.getElementById('updateModal').style.display = 'none';
};

document.getElementById('updateForm').onsubmit = function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('update.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('modalMessage').innerText = data.message;
        setTimeout(() => {
            window.location.href = 'admin_dashboard.php'; // Redirect to dashboard
        }, 2000);
    })
    .catch(error => {
        document.getElementById('modalMessage').innerText = 'Error: ' + error.message;
    });
};
