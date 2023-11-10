window.onload=()=>{


    var p=12
    var cont=document.querySelector("#contenedor")

    for(let i=0;i<p;i++){
       cont.innerHTML +=`<div class="card card m-5 col-3" >
       <img src="./img/descarga.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">Some quick exampleccccccc text to build on the card title and make up the bulk of the card's content.slosnfdnsodvnosaovosabvojbsavbkjsabkvjbksjdbvkjs</p>
       </div>
       <ul class="list-group list-group-flush">
         <li class="list-group-item">Precio</li>
         <li class="list-group-item">Kilometraje</li>
        
       </ul>
       <div class="card-body">
         <a href="./compra.html"><button class="btn btn-dark">Comprar</button></a>
       </div>
     </div>`
    }
}