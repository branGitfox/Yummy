const first = ['coca.jpg', 'fruit.jpg', 'glace.jpg']
const second=['gratin.jpg', 'mer.jpg', 'riz.jpg']
const third = ['soupe.jpg', 'steak.jpg', 'tacos.jpg']


const firstCont = document.querySelector('#first')
const secondCont = document.querySelector('#second')
const thirdCont = document.querySelector('#third')


let randomIndex1 = Math.floor(Math.random() * first.length)
let randomIndex2 = Math.floor(Math.random() * first.length)
let randomIndex3 = Math.floor(Math.random() * first.length)

firstCont.src = './assets/img/'+first[randomIndex1]
secondCont.src = './assets/img/'+second[randomIndex2]
thirdCont.src = './assets/img/'+third[randomIndex3]