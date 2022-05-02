window.addEventListener('keydown', playSound);
window.addEventListener('keydown', beatBox);

// To add!!!
// window.addEventListener('click', playSound); play sound on click

function playSound(song){
    const audio = document.querySelector(`audio[data-key="${song.keyCode}"]`);
    const key = document.querySelector(`.key[data-key="${song.keyCode}"]`);
    console.log (key);
    if(!audio) return;
    audio.currentTime = 0;
    audio.play();
    key.classList.add('playing');
    
} 

  function removeTransition(sound){
    if(sound.propertyName !== 'box-shadow') return;
    this.classList.remove('playing');
} 

 
const keys = document.querySelectorAll('.key');
keys.forEach(key => key.addEventListener('transitionend', removeTransition));



/* la fonction beatBox() se déclenche quand on appuie sur un nouveau bouton. elle contient 2 fonctions :
○ une fonction simulateKey() qui simule la pression d'une touche
de clavier (ce qui permet de déclencher le code de votre drumpad déjà fait)*/

  
  function beatBox(H){
if(H.keyCode==32){
    function simulateKey(key){
      let event = new Event('keydown',{bubbles:true
      });
      event.keyCode = key;
      document.dispatchEvent(event)
    }

  function playBeat(keycode,time){
    console.log(keycode)
    return new Promise(function(resolve,reject) {
      setTimeout(function() {
        resolve(simulateKey(keycode));
      },time);
    })
  }

  playBeat(65, 0).then(function(){
    return playBeat(83, 0);
  }).then(function(){
    return playBeat(65, 700);
  }).then(function(){
    return playBeat(83, 0);
  }).then(function(){
    return playBeat(65, 700);
  }).then(function(){
    return playBeat(83, 0);
  })

  }
}