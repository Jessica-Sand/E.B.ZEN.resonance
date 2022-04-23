const constraints = {
    firstname: {
        presence: { allowEmpty: false }
    },
    lastname: {
        presence: { allowEmpty: false }
    },
    email: {
        presence: { allowEmpty: false },
        email: true
    },
    message: {
        presence: { allowEmpty: false }
    }
};

const form = document.getElementById('contact-form');

form.addEventListener('submit', function (event) {
    const formValues = {
        firstname: form.elements.firstname.value,
        lastname: form.elements.lastname.value,
        email: form.elements.email.value,
        message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    // if (errors) {
    //     event.preventDefault();
    //     const error = Object
    //         .values(errors)
    //         .map(function (fieldValues) {
    //             return fieldValues.join(', ')
    //         })
    //         .join("\n");

    //     alert(error);
    // }
}, false);