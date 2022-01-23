const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLigth = document.querySelector('.agregar-imagen')
const contenedorLigth = document.querySelector('.imagen-Ligth')
const hamburguer1 = document.querySelector('.hamburguer');

imagenes.forEach(Imagen => {
    imagenes.addEventListener('click', ()=> {
        aparecerImagen(imagen.getAttribute('src'))
     

    })

})

contenedorLight.addEventListener('click', (e)=>{
    if(e.target != imagenesLigth){
        contenedorLigth.classList.toggle('show')
        imagenesLigth.classList.toggle('showImage')
        hamburguer1.style.opacity = '1'

    }

} )

const aparecerImagen = (imagen)=>{
    imagenesLigth.src = imagen;
    contenedorLigth.classList.toggle('show')
    imagenesLigth.classList.toggle('showImage')
    hamburguer1.style.opacity = '0'

} 