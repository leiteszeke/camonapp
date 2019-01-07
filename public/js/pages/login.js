const form = document.querySelector('#loginForm');

if (form !== null) {
    form.addEventListener('submit', e => {
        e.preventDefault();

        const email = form.querySelector('[name="email"]').value;
        const password = form.querySelector('[name="password"]').value;

        axios.post('/login', {
            email,
            password,
        })
        .then(res => console.log(res))
        .catch(err => console.log(err));
    });
}