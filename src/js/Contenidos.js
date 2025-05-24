
let libro = libro=>{
  

return	`     <div class="col-md-4">
                <div class="card">
                    <img src="${libro[9]}" class="card-img-top" alt="Manga 1">
                    <div class="card-body">
                        <h6 class="card-title">${libro[1]}</h6>
                        <p class="card-text">${libro[6]}</p>
                        <a href="#" class="btn btn-primary">Leer Más</a>
                    </div>
                </div>
            </div>`;
};

let contenidos = data=>{
   let contenidoPopula = '',i=0;
       while(i< data.length) {
   
		
       contenidoPopula += libro(data[i]);
       
	
       i++;
       }
	return contenidoPopula;
};

let contenidoInicio = document.getElementById('contenido');
fetch('/Contenido')
.then(res=>res.json())
.then(res=>{
  
//  alert(res[0][9]);
contenidoInicio.innerHTML =contenidos(res);
  
})
.catch(err=>alert(err));