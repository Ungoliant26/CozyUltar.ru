const buttons = document.getElementsByClassName('btn-vertical')
    forEach = Array.prototype.forEach;

function addElement() {
    let addDiv = document.createElement('div')

    addDiv.classList.add('pulse');
    this.appendChild(addDiv);


    addDiv.addEventListener('animationend', removeDiv);
    function removeDiv () {
        this.remove()
    }

    console.log(addDiv)
}

forEach.call(buttons, function (b) {
    b.addEventListener('click', addElement);
});

