console.log('%c' + "Fichier modal.js chargé", 'color: #0bf; font-size: 1rem; background-color:#fff');

const modal = {
    innit: function() {
        bootstrap.bundle.init();

        modal.myModal = document.getElementByClassName('modal');
        myModal.style.display=null;

    }
}

// window.on('load',function(){
//     var delayMs = 1500; // delay in milliseconds
    
//     setTimeout(function(){
//         let myModal = document.getElementById('myModal').modal('show');
//     }, delayMs);
// });

console.log(myModal);
