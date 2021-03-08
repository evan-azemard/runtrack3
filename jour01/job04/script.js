/*
function bisextile(annee);

var annee = 2019
alert(
    if ((annee % 4 == 0) || (annee % 100 == 0) || (annee % 400 == 0)) {
        return true;
    }else if ((annee % 4 == 0) && (annee % 100 != 0)) {
        return false;
    }
);
*/

function  bisextile(annee) {
	prompt (annee % 4 === 0 && annee % 100 > 0) || (annee % 400 === 0) ? annee + return true : annee + return false
}

alert (bisextile(2019));

