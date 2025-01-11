document.addEventListener("DOMContentLoaded", function () {
    // Extract CSRF token value dynamically within the form
    const csrfToken = document.querySelector('input[name="_token"]').value;

    const inputElements = document.querySelectorAll("input, textarea");

    inputElements.forEach((inputElement) => {
        inputElement.addEventListener("input", function () {
            toggleLabelVisibility(this);
        });

        toggleLabelVisibility(inputElement);
    });

    function toggleLabelVisibility(inputElement) {
        const labelElement = document.querySelector(`[for="${inputElement.id}"]`);

        if (inputElement.value.trim() !== '') {
            labelElement.classList.add('hidden');
        } else {
            labelElement.classList.remove('hidden');
        }

        // Now you can use the csrfToken variable in your JavaScript logic
        console.log("CSRF Token:", csrfToken);
    }
});
