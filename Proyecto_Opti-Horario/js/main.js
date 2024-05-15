var selectedSubjects = [];
document.getElementById('get-subject').addEventListener('click', function () {


    var totalCredits = 0;

    var checkboxes = document.querySelectorAll('.cb-subject');

    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            var subjectInfo = {};

            subjectInfo.id = checkbox.id;
            subjectInfo.title = checkbox.nextElementSibling.querySelector('.subject-title').innerText;
            subjectInfo.code = checkbox.nextElementSibling.querySelector('.subject-code').innerText;
            subjectInfo.credits = parseInt(checkbox.dataset.credits);

            selectedSubjects.push(subjectInfo);

            totalCredits += subjectInfo.credits;
        }
    });

    if (totalCredits < 20 || totalCredits > 36) {
        document.getElementById('message').innerText = "Error: El total de créditos debe estar entre 20 y 36.";
        setTimeout(function () {
            document.getElementById('message').innerText = "";
        }, 4000);
        return;
    }

    var message = "";
    selectedSubjects.forEach(function (subject) {
        message += "<strong>ID:</strong> " + subject.id + "<br>";
        message += "<strong>Título:</strong> " + subject.title + "<br>";
        message += "<strong>Créditos:</strong> " + subject.credits + "<br><br>";
    });
    document.getElementById('popupContent').innerHTML = message;
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
});

document.getElementById('closePopup').addEventListener('click', function () {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
});

document.querySelectorAll('.cb-subject').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        var totalCredits = 0;
        document.querySelectorAll('.cb-subject:checked').forEach(function (checkedCheckbox) {
            totalCredits += parseInt(checkedCheckbox.dataset.credits);
        });
        document.getElementById('totalCredits').innerText = "Total de Créditos: " + totalCredits;

        var checkboxStates = {};
        document.querySelectorAll('.cb-subject').forEach(function (checkbox) {
            checkboxStates[checkbox.id] = checkbox.checked;
        });
        localStorage.setItem('checkboxStates', JSON.stringify(checkboxStates));
    });
});




document.addEventListener('DOMContentLoaded', function () {
    var checkboxStates = JSON.parse(localStorage.getItem('checkboxStates'));
    if (checkboxStates) {
        Object.keys(checkboxStates).forEach(function (id) {
            var checkbox = document.getElementById(id);
            if (checkbox) {
                checkbox.checked = checkboxStates[id];
            }
        });
    }

    var totalCredits = 0;
    document.querySelectorAll('.cb-subject:checked').forEach(function (checkedCheckbox) {
        totalCredits += parseInt(checkedCheckbox.dataset.credits);
    });
    document.getElementById('totalCredits').innerText = "Total de Créditos: " + totalCredits;
});

document.getElementById('sendPopup').addEventListener('click', function () {
    var checkboxes = document.querySelectorAll('.cb-subject:checked');

    var selectedSubjects = [];
    checkboxes.forEach(function (checkbox) {
        var subjectInfo = {
            id: checkbox.id,
            title: checkbox.nextElementSibling.querySelector('.subject-title').innerText,
            code: checkbox.nextElementSibling.querySelector('.subject-code').innerText,
            credits: parseInt(checkbox.dataset.credits)
        };
        selectedSubjects.push(subjectInfo);
    });

    fetch('saveSubject.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(selectedSubjects)
    })
    .then(function(response) {
        if (response.ok) {
            return response.text();
        }
        throw new Error('Error en la solicitud.');
    })
    .then(function(data) {
        alert("Datos enviados correctamente: " + data);
    })
    .catch(function(error) {
        console.error('Hubo un problema con la solicitud Fetch:', error.message);
    });
});
