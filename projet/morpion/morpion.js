// --------------------------------------------------------------------------------------------------------------------------------------
//                                                                 cliquer
// --------------------------------------------------------------------------------------------------------------------------------------


class Cliquer {
    constructor(){
        this.tour = "x"; 
    }
    cliquersurunebox(t){
        t.innerHTML = this.tour;
        this.tour= this.tour === "x" ? "o" : "x";
    }
}

let tour="x"; 
const click = new Cliquer();

function cliquersurunebox(t){  // créer une fonction pour faire les croix et ronds.

    
    click.cliquersurunebox(t);

    // t.innerHTML= tour;    // mettre dans le html grace à innerhtml.
    // tour = tour === "x" ? "o" : "x"; //   // crée un tour par tour avec une fois un croix puis apres un rond.
}


//--------------------------------------------------------------------------------------------------------------------------------------
//                                                                 reset poo
// --------------------------------------------------------------------------------------------------------------------------------------


class Allreset {
    reset2(){
        this.boxes = document.querySelectorAll(".box");
        this.boxes.forEach (box=> {
             box.innerHTML= "";
        });
    }
}
 const allreset = new Allreset();

 function reset(){
     allreset.reset2();
 }

// function reset(){  // créer une fonction reset donc remettre les boxes à zero quand on clique sur le bouton reset.
//     let boxes = document.querySelectorAll(".box"); // on prend toute les boxes avec le queryselect de le class "box"
//     boxes.forEach(box =>  {  // execute la fonction donner plus bas qui est de faire une chaine de caractere vide.
//         box.innerHTML= "";
//     });
// }

// --------------------------------------------------------------------------------------------------------------------------------------
//                                                                 timer 
// --------------------------------------------------------------------------------------------------------------------------------------



const departMinutes = 0 
let temps = departMinutes * 60 
const timerElement = document.getElementById("timer")

var timerJs;

const action_ival = () => {
  timerJs = setInterval((timer) => {
  let minutes = parseInt(temps / 60, 10)
  let secondes = parseInt(temps % 60, 10)

  minutes = minutes < 10 ? "0" + minutes : minutes
  secondes = secondes < 10 ? "0" + secondes : secondes

  timerElement.innerText = `${minutes}:${secondes}`
  temps = temps = 0 ? 0 : temps + 1
}, 1000)
}


var intervalID, //Variable global qui recevra l'id de l'interval
    isStart= false, //Variable global qui indique l'état du chronomètre (en marche ou non)
    second= 0; //Le nombre de seconde écoulé (enfin pour être exacte, le nombre d’exécution de l'interval) *voir en fin de message*

const chrono= function(act) {
    if(act==="start") {
        intervalID= window.setInterval(action_ival, 1000);
    } else {
        window.clearInterval(intervalID);
    }
};


document.getElementById("start_timer").addEventListener("click", function() {
    //on vérifie si le chrono n'est pas lancé (isStart)
    if(isStart===false) {
        isStart= true;
        action_ival();
        
    }
});

document.getElementById("stop_timer").addEventListener("click", function() {
    //on vérifie si le chrono est lancé (isStart)
    if(isStart===true) {
        isStart= false;
        clearInterval(timerJs);
    }
});

document.getElementById("restart").addEventListener("click", function() {
   timerElement.innerText = "00:00";
   temps = departMinutes * 60
 });
