var books = [
    "filosofi teras",
    "madilog",
    "the intelligent investor",
    "personal power",
    "contagius"
]

function show(text) {
    document.getElementById("recomend").innerHTML = " ";
    books.forEach(book);
}

function book(list) {
    if (list.match(document.getElementById("typein").value)) {
        document.getElementById("recomend").innerHTML += "<br>" + list;
    }
}