

/*function generate()
{*/



   var a = [ '' + '<img src="arc1.png">' + '<img src="arc2.png">' + '<img src="arc3.png">' + '<img src="arc4.png">'+ '<img src="arc5.png">' + '<img src="arc6.png">'];

   document.write(a)




function shuffle(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}

document.write(v)
/*


