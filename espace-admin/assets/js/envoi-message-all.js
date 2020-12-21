var form = document.querySelector('#form');
var msg = document.querySelector('#msg');

form.addEventListener('submit', function (e) {
    e.preventDefault();
    var data = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.status == 200 && xhr.readyState == 4) {
            if (xhr.response.err) {
                msg.className = 'alert-success alert text-center border kArrondir mb-3  rounded';
                msg.innerHTML = xhr.response.msg;

                setTimeout(() => {
                    window.location.href = '?p=mon-espace';
                }, 2500);
            } else {
                msg.innerHTML = xhr.response.msg;
                msg.className = 'alert-danger alert text-center border kArrondir mb-3 rounded';
            }
        }
    }


    xhr.open('POST', 'traitement/kEnvoi-message-all.php', true);
    xhr.responseType = 'json';
    xhr.send(data);
});