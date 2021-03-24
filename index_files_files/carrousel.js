(function(){
    let bout1 = document.getElementById('un')
    console.log(bout1.id)
    let bout2 = document.getElementById('deux')
    console.log(bout2.id)
    let bout3 = document.getElementById('trois')
    console.log(bout3.id)
    let bout4 = document.getElementById('quatre')
    console.log(bout4.id)
    let bout5 = document.getElementById('cinq')
    console.log(bout5.id)
    let carrousel = document.querySelector('.carrousel')

    bout1.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(0)"
    })
    bout2.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-100vw)"
    })
    bout3.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-200vw)"
    })
    bout4.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-300vw)"
    })
    bout5.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-400vw)"
    })
}())