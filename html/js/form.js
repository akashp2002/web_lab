document.getElementById('registrationForm').addEventListener('submit', function(event) {
    let isValid = true;

    document.querySelectorAll('.error').forEach(e => e.textContent = '');

    const name = document.getElementById('name').value;
    if (name.trim() === '') {
        document.getElementById('nameError').textContent = 'Name is required';
        isValid = false;
    }

    const email = document.getElementById('email').value;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Invalid email format';
        isValid = false;
    }

    const phone = document.getElementById('phone').value;
    if (!/^\d{10}$/.test(phone)) {
        document.getElementById('phoneError').textContent = 'Phone number must be 10 digits';
        isValid = false;
    }

    const password = document.getElementById('password').value;
    if (password.length < 6) {
        document.getElementById('passwordError').textContent = 'Password must be at least 6 characters';
        isValid = false;
    }

    const gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        document.getElementById('genderError').textContent = 'Please select a gender';
        isValid = false;
    }

    const dob = document.getElementById('dob').value;
    if (!dob) {
        document.getElementById('dobError').textContent = 'Date of birth is required';
        isValid = false;
    }

    const resume = document.getElementById('resume').files.length;
    if (resume === 0) {
        document.getElementById('resumeError').textContent = 'Please upload a resume';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault(); 
    }
});
