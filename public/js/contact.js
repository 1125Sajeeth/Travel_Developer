    (function() {
        'use strict'
        var form = document.getElementById('tourForm');
        var nameInput = document.querySelector('.plcname');

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                if (!nameInput.checkValidity()) {
                    nameInput.classList.add('error');
                } else {
                    nameInput.classList.remove('error');
                }
            }
            form.classList.add('was-validated');
        }, false);
    })();


