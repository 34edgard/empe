class Solicitud {
  constructor(url) {
    this.url = url;
  }

  async enviarSolicitud(metodo, fun, datos = {}) {
    const options = {
      method: metodo,
      headers: {
        "Content-Type": "application/json", // Important for POST/PUT/DELETE
      },
    };

    if (metodo !== "GET" && datos) {
        try {
            options.body = JSON.stringify(datos);
        } catch (error) {
            console.error("Error stringifying data:", error);
            // Handle error appropriately, e.g., return a rejected promise or display a user message.
            return Promise.reject(new Error("Invalid data format"));
        }
    }


    try {
      const respuesta = await fetch(this.url, options);

      if (!respuesta.ok) {
        const errorData = await respuesta.text();
        const error = new Error(`HTTP error! status: ${respuesta.status} ${respuesta.statusText}, response: ${errorData}`);
        error.response = respuesta; // Store the response for debugging
        throw error;
      }

      const data = await respuesta.text();
      return fun(data);
    } catch (error) {
      console.error("Error en la solicitud:", error);
      if (error.response) {
        // Handle specific error based on response status
        console.error("Error response status:", error.response.status);
      }
      // More sophisticated error handling:
      if (error instanceof TypeError) {
          // Network error
          alert("Error de red");
      } else if (error instanceof Error) {
          // other error
          alert("Error en la solicitud: " + error.message);
      }
      // Re-throwing the error allows the calling function to handle it as needed
      throw error;
    }
  }


  async get(fun, datos = {}) {
    return this.enviarSolicitud("GET", fun, datos);
  }

  async post(fun, datos = {}) {
    return this.enviarSolicitud("POST", fun, datos);
  }

  async put(fun, datos = {}) {
    return this.enviarSolicitud("PUT", fun, datos);
  }

  async delete(fun, datos = {}) {
    return this.enviarSolicitud("DELETE", fun, datos);
  }
}
/*
const miSolicitud = new Solicitud("https://google.com");

miSolicitud.get(data => {
  console.log("Data GET:", data);
}, { parametro: "valor" })
.then(() => {
    // Do something after the GET request is successfully handled
    console.log("Get request completed successfully");
})
.catch(err => {
    console.error("Error in the GET request:", err);
});

miSolicitud.post(data => {
    console.log("Data POST:", data);
}, { key: "value" })
.then(() => { 
    console.log("Post request completed successfully");
})
.catch(err => {
    console.error("Error in the POST request:", err);
});*/