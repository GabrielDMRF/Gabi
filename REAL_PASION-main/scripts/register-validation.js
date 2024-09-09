function validateForm() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden. Inténtalo de nuevo.");
        return false; // Evita el envío del formulario
    }

    return true;
}