window.onload=()=>{
    var q=4
    var cont= document.querySelector("#Con")


    for(let i=0;i<q;i++){
        cont.innerHTML +=`<div class="card mt-3 col-12" ">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Modelo Carro</h5>
              <p class="card-text">Descripcion                                                                                                                                   </p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>`
    }
}