var contenido = document.querySelector('#contenido')
function traer() {
  fetch('https://randomuser.me/api/')
  .then(res => res.json())
  .then(data => {
    console.log(data.results['0'])
    contenido.innerHTML = `
      <img src="${data.results['0'].picture.large}" width="142px" class="img-fluid rounded-circle">
      <p>Nombre: ${data.results['0'].name.first} </p>
      <p>Apellido: ${data.results['0'].name.last} </p>
      <p>Género: ${data.results['0'].gender}</p>
      <p>Pais: ${data.results['0'].location.country}</p>
      <p>Telefono: ${data.results['0'].phone}</p>
      <p>Email: ${data.results['0'].email}</p>
    `
  })
}
