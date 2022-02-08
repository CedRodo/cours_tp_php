    var button = document.querySelector("button");
    console.log('OK');
    console.log(button);
    button.addEventListener("click", ()=> {
        console.log('Ca marche');
        var body = document.querySelector('body');
        body.classList.toggle('darkmode');
    });