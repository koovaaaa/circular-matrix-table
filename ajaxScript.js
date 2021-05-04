var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() 
{
    if(this.status == 200 && this.readyState == 4)
    {
        document.getElementById('result').innerHTML = this.responseText;
    }
};

var brKolona = document.getElementById('brKolona');
var brRedova = document.getElementById('brRedova');

brKolona.addEventListener("change", getContent);
window.addEventListener("load", getContent);
brRedova.addEventListener("change", getContent);
window.addEventListener("load", getContent);

function getContent(){
    xhr.open("GET", "getContent.php?brKolona=" + brKolona.value + "&brRedova=" + brRedova.value, false);
    xhr.send();
}

