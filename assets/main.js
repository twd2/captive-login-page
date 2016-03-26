(function () {

  function updateStatus(str) {
    document.querySelector('.portal-status').innerText = str;
  }

  function connect(id) {
    updateStatus('Connecting...');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'request.php?id=' + id, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        if (xhr.responseText === 'ok') {
          updateStatus('Connected!');
        } else {
          updateStatus('Connect failed :(');
        }
      }
    }
    xhr.send();
  }

  [].slice.call(document.querySelectorAll('.portal-item')).forEach(function (item) {
    item.onclick = function () {
      connect(this.getAttribute('data-id'));
    };
  });
}());
