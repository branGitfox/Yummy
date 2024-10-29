const imgContainer = document.querySelector('#img')
const file = document.querySelector('#file')

file.addEventListener('change', (e) => {
    
    const data = e.target.files[0]
    const imgUrl = URL.createObjectURL(data)

    imgContainer.src=imgUrl
    imgContainer.style.display='block'
})