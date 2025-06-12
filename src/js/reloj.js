const countDownDate = new Date("Ago 28, 2025 00:00:00").getTime();
let reloj =() =>{
        // Obtener la fecha y hora actual
        const now = new Date().getTime();

        // Calcular la distancia entre ahora y la fecha de cuenta regresiva
         const distance = countDownDate - now;

        // Cálculos de tiempo
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Mostrar el resultado en el elemento con id="countdown-timer"
        document.getElementById("countdown-timer").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // Si la cuenta regresiva ha terminado, mostrar un mensaje
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown-timer").innerHTML = "¡Ha comenzado!";
        }
    };
    // Actualizar el contador cada segundo
  
    const x = setInterval(reloj, 1000);
    reloj();
