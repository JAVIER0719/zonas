
function resultado(){
    var p1, p2, p3, p4, p5, p6, p7, p8, p9, p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p25,p26,p27,nota;
//primera pregunta
    if (document.getElementById('1').checked==true){p1=1}
    else{p1=0} 

//segunda pregunta 24
    if (document.getElementById('7').checked==true){p2=1}
    else{p2=0} 

//tercera pregunta 33
    if (document.getElementById('9').checked==true){p3=1}
    else{p3=0} 

//cuarta pregunta 41
    if (document.getElementById('16').checked==true){p4=1}
    else{p4=0} 

//quinta pregunta 52
    if (document.getElementById('19').checked==true){p5=1}
    else{p5=0}

//sexta pregunta  61
    if (document.getElementById('22').checked==true){p6=1}
    else{p6=0} 

//septima pregunta  73
    if (document.getElementById('25').checked==true){p7=1}
    else{p7=0} 

//optaba pregunta 88
    if (document.getElementById('30').checked==true){p8=1}
    else{p8=0} 

//novena pregunta 91
    if (document.getElementById('33').checked==true){p9=1}
    else{p9=0} 

//decima pregunta 01
    if (document.getElementById('38').checked==true){p10=1}
    else{p10=0}

    if (document.getElementById('42').checked==true){p11=1}
    else{p11=0} 

    if (document.getElementById('46').checked==true){p12=1}
    else{p12=0} 

    if (document.getElementById('52').checked==true){p13=1}
    else{p13=0} 

    if (document.getElementById('56').checked==true){p14=1}
    else{p14=0}

    if (document.getElementById('60').checked==true){p15=1}
    else{p15=0} 

    if (document.getElementById('64').checked==true){p16=1}
    else{p16=0} 

    if (document.getElementById('68').checked==true){p17=1}
    else{p17=0} 
    if (document.getElementById('72').checked==true){p18=1}
    else{p18=0} 
    if (document.getElementById('76').checked==true){p19=1}
    else{p19=0} 
    if (document.getElementById('80').checked==true){p20=1}
    else{p20=0} 
    if (document.getElementById('84').checked==true){p21=1}
    else{p21=0} 
    if (document.getElementById('88').checked==true){p22=1}
    else{p22=0} 
    if (document.getElementById('92').checked==true){p23=1}
    else{p23=0} 
    if (document.getElementById('96').checked==true){p24=1}
    else{p24=0} 
    if (document.getElementById('100').checked==true){p25=1}
    else{p25=0} 
    if (document.getElementById('104').checked==true){p26=1}
    else{p26=0} 
    if (document.getElementById('108').checked==true){p26=1}
    else{p26=0} 
    


    if (document.getElementById('112').checked==true){p27=1}
    else{p27=0} 

    nota = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10+p11+p12+p13+p14+p15+p16+p17+p18+p19+p20+p21+p22+p23+p24+p25+p26+p27;

    if(nota >=27){
        swal({
            title: "Felicidades",
            text: "Has hecho un gran trabajo"+ nota+"/"+21,
            icon: "success",
            buttons: "OK",
        })
    }if(nota<=15){
        swal({
            title: "Lo haras mejor para la proxima vez "+ nota+"/"+21,
            text: "Vamos practica de nuevo",
            icon: "warning",
        });
    }
   
        document.getElementById('notaInput').value = nota;

}




function resultado1(){
    var p1, p2, p3, p4, p5, p6, p7, p8, p9, p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p25,p26,nota;
    //primera pregunta

    if (document.getElementById('1').checked==true){p1=1}
    else{p1=0} 

//segunda pregunta 24
    if (document.getElementById('7').checked==true){p2=1}
    else{p2=0} 

//tercera pregunta 33
    if (document.getElementById('9').checked==true){p3=1}
    else{p3=0} 

//cuarta pregunta 41
    if (document.getElementById('16').checked==true){p4=1}
    else{p4=0} 

//quinta pregunta 52
    if (document.getElementById('19').checked==true){p5=1}
    else{p5=0}

//sexta pregunta  61
    if (document.getElementById('22').checked==true){p6=1}
    else{p6=0} 

//septima pregunta  73
    if (document.getElementById('25').checked==true){p7=1}
    else{p7=0} 

//optaba pregunta 88
    if (document.getElementById('30').checked==true){p8=1}
    else{p8=0} 

//novena pregunta 91
    if (document.getElementById('33').checked==true){p9=1}
    else{p9=0} 

//decima pregunta 01
    if (document.getElementById('38').checked==true){p10=1}
    else{p10=0}

    if (document.getElementById('42').checked==true){p11=1}
    else{p11=0} 

    if (document.getElementById('46').checked==true){p12=1}
    else{p12=0} 

    if (document.getElementById('52').checked==true){p13=1}
    else{p13=0} 

    if (document.getElementById('56').checked==true){p14=1}
    else{p14=0}

    if (document.getElementById('60').checked==true){p15=1}
    else{p15=0} 

    if (document.getElementById('64').checked==true){p16=1}
    else{p16=0} 

    if (document.getElementById('68').checked==true){p17=1}
    else{p17=0} 
    if (document.getElementById('72').checked==true){p18=1}
    else{p18=0} 
    if (document.getElementById('76').checked==true){p19=1}
    else{p19=0} 
    if (document.getElementById('80').checked==true){p20=1}
    else{p20=0} 
    if (document.getElementById('84').checked==true){p21=1}
    else{p21=0} 
    if (document.getElementById('88').checked==true){p22=1}
    else{p22=0} 
    if (document.getElementById('92').checked==true){p23=1}
    else{p23=0} 
    if (document.getElementById('96').checked==true){p24=1}
    else{p24=0} 
    if (document.getElementById('100').checked==true){p25=1}
    else{p25=0} 
    if (document.getElementById('104').checked==true){p26=1}
    else{p26=0} 
    if (document.getElementById('108').checked==true){p26=1}
    else{p26=0} 
    
   

    nota = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10+p11+p12+p13+p14+p15+p16+p17+p18+p19+p20+p21+p22+p23+p24+p25+p26;
    swal({
        title: "Pruebas guardadas",
        text: "Has hecho un gran trabajo",
        icon: "success",
        buttons: "OK",
    }).then(function() {
        // Después de que el usuario hace clic en "OK", prevenimos el comportamiento predeterminado y enviamos el formulario
        document.querySelector('form').submit();
    });
    document.getElementById('notaInput').value = nota;
}

            let startTime;
            let elapsedTime = 0;
            let timerInterval;
            const tiempoInput = document.getElementById('tiempo');

            function iniciarCronometro() {
              startTime = Date.now() - elapsedTime;
              timerInterval = setInterval(actualizarTiempo, 10);
            }

            function detenerCronometro() {
              clearInterval(timerInterval);
            }

            function resetearCronometro() {
              detenerCronometro();
              elapsedTime = 0;
              actualizarTiempo();
            }

            function actualizarTiempo() {
              const currentTime = Date.now();
              elapsedTime = currentTime - startTime;
              tiempoInput.value = formatTime(elapsedTime);
            }

            function formatTime(time) {
              const s = Math.floor((time / 1000) % 60);
              const m = Math.floor((time / 1000 / 60) % 60);
              const h = Math.floor((time / 1000 / 60 / 60) % 24);

              const formattedTime = `${h.toString().padStart(2, '0')}:${m
                .toString()
                .padStart(2, '0')}:${s.toString().padStart(2, '0')}`;

              return formattedTime;
            }






