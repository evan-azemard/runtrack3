
    function sommenombrespremiers(int1,int2)
    {
        var number = 0;
        var number2 = 0;

        for(i = 0; i < int1; i++) {    //On ajoute jusqu'a arrivé au chiffres int 1
            if (int1 % i == 0) {    //Si c'est divisible par lui même
                number++;       //Ajoute un au number
            }
        }
        for(i = 0; i < int2; i++){
            if (int2 % i == 0) {
                number2++;
            }
        }

        if(number > 1 || number2 > 1) //Si les deux chiffres sont plus grans que 1 c'est que c'est faux
        {
            document.write(false);
        }
        else
        {
            document.write(parseInt(int1) + parseInt(int2));
        }
    }