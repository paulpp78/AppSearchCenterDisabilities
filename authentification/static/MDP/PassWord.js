document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');
    form.onsubmit = function (e) {
        var password = document.querySelector('input[name="password"]').value;
        var confirmPassword = document.querySelector('input[name="confirm_password"]').value;

        if (!isValidPassword(password) || password !== confirmPassword) {
            alert('Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et correspondre à la confirmation.');
            e.preventDefault();
        }
    };

    function isValidPassword(password) {
        return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(password);
    }
});
