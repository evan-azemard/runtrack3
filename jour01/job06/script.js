
function fizzbuzz() {

    //On ajoute 1 tant que c'est plus petit que 152
    for (i = 1; i < 152; i++) {
        //Si c'est un multiple de 3 mais pas de 5
        if (i % 3 === 0 && i % 5 !== 0) {

            console.log('Fizz');

        }
        //Si c'est un multiple de 5 mais pas de 3
        else if(i % 5 === 0 && i % 3 !== 0)
        {
            console.log('Buzz');
        }

        //Si c'est un multiple de 3 et de 5
        else if(i % 3 === 0  && i % 5 === 0)
        {
            console.log('FizzBuzz');
        }
        //Sinon  on affiche les chiffres
        else (console.log(i));
    }
    //On stope le script
    stop();
}