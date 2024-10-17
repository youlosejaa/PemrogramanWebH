function validateForm() {
    // Get form elements
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;

    // Check if any field is empty
    if (name === "" || email === "" || address === "") {
        alert("Semua data harus diisi.");
        return false; // Prevent form submission
    }

    alert("Form berhasil disubmit!");
    return true;
}
