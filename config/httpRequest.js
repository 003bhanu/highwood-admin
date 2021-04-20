function loadXMLDoc(method, url, bool) {

    return new Promise((resolve, reject) => {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == XMLHttpRequest.DONE) {
                if (xmlhttp.status == 200) {
                    resolve(xmlhttp.responseText);
                    // resolve(JSON.parse(xmlhttp.responseText));
                } else {
                    reject('error');
                }
            }
        };

        xmlhttp.open(method, url, bool);
        xmlhttp.send();
    });

    m(1, () => {
      console.log(x);
    });
}

function m(x, y) {

}
