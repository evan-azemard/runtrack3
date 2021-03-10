for(i=1; i <= 6; i++)
{
    $("#rangees").append("<img src='arc"+i+".png'/>");  //Contient  la carte par son id
}

$("#rangees").children().click(function (srcE) {
    srcE.remove;
    $("#rangees").append(srcE.target);
    
    if($("#rangees").children().length == 6)
    {
        var win = true;
        for(i=0;i<6;i++)
        {

			if($("#rangees").children()[i].src !== 'http://localhost/runtrack3/jour03/job02/arc'+(i+1)+'.png')
            {
                var endLose = document.createElement("p");
                endLose.innerText = "Vous avez perdu"
                endLose.style.color = "red";
                document.body.appendChild(endLose);
                win = false;
                   $("#button").click(function() {
				location.reload();
			})
                break;    
            }
        }
            if(win)
        {
            var endWin = document.createElement("p");
            endWin.innerText = "Vous avez gagné"
            endWin.style.color = "green";
            document.body.appendChild(endWin);
               $("#button").click(function() {
				location.reload();
			})
                
        }
    }
});

$("#button").click(function() {
    for(i=0; i <= 6; i++)
    {
        var index = Math.floor(Math.random()*$("#rangees").children().length-1)+1;
        $("#melangees").append($("#rangees").children()[index]);
    }
    
})