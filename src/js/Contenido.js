let libro = libro => {

    return `     <tr>
                <td>
                    <img src="${libro.img_url}" class="" alt="Manga 1" style="max-width: 50px;">
                </td>
                    <td>
                        <h6 >${libro.titulo}</h6>
                    </td>
                    
           
             <td>${libro.id}</td>
             <td>${libro.autor}</td>
             <td>${libro.fecha_publicacion}</td>
             <td>${libro.categoria}</td>
             <td>${libro.tipo_contenido}</td>
             <td>${libro.descripcion}</td>
             <td>${libro.popularidad}</td>
             <td>${libro.fecha_agregado}</td>
             <td>${libro.usuario_id}</td>
             <td>${libro.contenido_id}</td>
             <td>${libro.estado}</td>
             <td>${libro.fecha_subida}</td>
                        
            </tr>`;
};

let contenidos = data => {
    let contenidoPopula = "",
        i = 0;
        contenidoPopula += `  <tr>
               <td> img_url</td>
               <td>titulo</td>
               
           
             <td>id</td>
             <td>autor</td>
             <td>fecha_publicacion</td>
             <td>categoria</td>
             <td>tipo_contenido</td>
             <td>libro.descripcion</td>
             <td>popularidad</td>
             <td>fecha_agregado</td>
             <td>usuario_id</td>
             <td>contenido_id</td>
             <td>estado</td>
             <td>fecha_subida</td>
                        
            </tr>`;
    while (i < data.length) {
        contenidoPopula += libro(data[i]);

        i++;
    }
    return contenidoPopula;
};

let contenidoInicio = document.getElementById("contenido");

fetch("/Contenido?todo")
    .then(res => res.json())
    .then(res => {
        alert(res);
       contenidoInicio.innerHTML = contenidos(res);
    })
    .catch(err => contenidoInicio.innerHTML=err);
