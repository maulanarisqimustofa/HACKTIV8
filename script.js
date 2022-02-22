function press() {
    document.getElementById("show").style.display = "block";
}

function tekan() {
    var namestr = (document.getElementById("nama").value);
    document.getElementById("name").innerHTML = namestr;

    var rolestr = (document.getElementById("role").value);
    document.getElementById("p1").innerHTML = rolestr;

    var avai = (document.getElementById("avai").value);
    document.getElementById("ava").innerHTML = avai;

    var usia = (document.getElementById("usia").value);
    document.getElementById("age").innerHTML = usia;

    var lokasi = (document.getElementById("lokasi").value);
    document.getElementById("loc").innerHTML = lokasi;

    var tahun = (document.getElementById("tahun").value);
    document.getElementById("expe").innerHTML = tahun;

    var email = (document.getElementById("email").value);
    document.getElementById("email1").innerHTML = email;
}