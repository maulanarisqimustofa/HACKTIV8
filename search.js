var book = [
    "filosofi teras",
    "madilog",
    "the intelligent investor",
    "personal power",
    "contagius"
]

function show(text) {
    document.getElementById("recomend").innerHTML = " ";
    book.forEach(trying);
}

function trying(assess) {
    if (assess.match(document.getElementById("typein").value)) {
        document.getElementById("recomend").innerHTML += "<br>" + assess;
    }
}