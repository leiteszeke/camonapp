const skyboxSelect = document.querySelectorAll('input[type="radio"][name="skybox_select"]');
const floorSelect = document.querySelectorAll('input[type="radio"][name="floor_select"]');
const objectSelect = document.querySelectorAll('input[type="radio"][name="objects[type]"]');
const objects = document.querySelectorAll('div[data-object]');
const form = document.querySelector('#experienceForm');

if (skyboxSelect !== null) {
    skyboxSelect.forEach(select => {
        select.addEventListener('change', e => {
            const value = parseInt(select.value);
            const skyboxImage = document.querySelector('[name="skybox[image]"]');
            const skyboxColor = document.querySelector('[name="skybox[color]"]');

            if (value === 1) {
                skyboxImage.removeAttribute('disabled');
                skyboxColor.setAttribute('disabled', true);
                skyboxColor.value = '';
            } else if (value === 2) {
                skyboxColor.removeAttribute('disabled');
                skyboxImage.setAttribute('disabled', true);
                skyboxColor.value = ''
            }
        });
    });
}

if (floorSelect !== null) {
    floorSelect.forEach(floor => {
        floor.addEventListener('change', e => {
            const value = parseInt(floor.value);
            const floorImage = document.querySelector('[name="floor[image]"]');
            const floorColor = document.querySelector('[name="floor[color]"]');

            if (value === 1) {
                floorImage.removeAttribute('disabled');
                floorColor.setAttribute('disabled', true);
                floorColor.value = '';
            } else if (value === 2) {
                floorColor.removeAttribute('disabled');
                floorImage.setAttribute('disabled', true);
                floorColor.value = ''
            }
        });
    });
}

if (objectSelect !== null) {
    objectSelect.forEach(object => {
        object.addEventListener('change', e => {
            const value = object.value;
            const props = document.querySelector('div[data-is="'+ value +'"]');
            let inputs;

            objects.forEach(obj => {
                obj.classList.add('hidden');
                inputs = obj.querySelectorAll('input');
                inputs.forEach(input => {
                    input.setAttribute('disabled', true);
                });
            });

            if (props !== null) {
                props.classList.remove('hidden');
                inputs = props.querySelectorAll('input');
                inputs.forEach(input => {
                    input.removeAttribute('disabled');
                });
            }
        });
    });
}

if (form !== null) {
    form.addEventListener('submit', e => {
        e.preventDefault();
        const data = new FormData(form);

        for (var pair of data.entries()) {
            console.log(pair[0]);
        }

        axios({
            method: 'POST',
            url: '/experiences',
            data,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
        .then(function (response) {
            window.location.href = '/experiences';
        })
        .catch(function (response) {
            console.log(response);
        });
    });
}