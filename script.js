const buttonFaq = document.querySelectorAll('.button-faq');
buttonFaq.forEach((button)=> {
    button.addEventListener("click", (e)=> {
        if(button.children[1].classList.toggle('active')) {
            button.children[0].children[1].style.transform = 'rotate(180deg)';
            
        } else {
            button.children[0].children[1].style.display = "block";
            button.children[0].children[1].style.transform = 'rotate(0deg)';
        }
    })
})


