    function resultado(){
        var p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, nota;
    //primera pregunta
        if (document.getElementById('3').checked==true){p1=1}
        else{p1=0} 

    //segunda pregunta 24
        if (document.getElementById('8').checked==true){p2=1}
        else{p2=0} 

    //tercera pregunta 33
        if (document.getElementById('10').checked==true){p3=1}
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
        if (document.getElementById('27').checked==true){p7=1}
        else{p7=0} 

    //optaba pregunta 88
        if (document.getElementById('30').checked==true){p8=1}
        else{p8=0} 

    //novena pregunta 91
        if (document.getElementById('36').checked==true){p9=1}
        else{p9=0} 

    //decima pregunta 01
        if (document.getElementById('38').checked==true){p10=1}
        else{p10=0} 

    //11
        if (document.getElementById('42').checked==true){p11=1}
        else{p11=0} 

    //12
        if (document.getElementById('46').checked==true){p12=1}
        else{p12=0} 

    //13
        if (document.getElementById('52').checked==true){p13=1}
        else{p13=0}

    //14
        if (document.getElementById('54').checked==true){p14=1}
        else{p14=0} 

    //15
        if (document.getElementById('59').checked==true){p15=1}
        else{p15=0} 

    //16
        if (document.getElementById('63').checked==true){p16=1}
        else{p16=0} 

    //17
        if (document.getElementById('65').checked==true){p17=1}
        else{p17=0} 

    //18
        if (document.getElementById('71').checked==true){p18=1}
        else{p18=0} 

    //19
        if (document.getElementById('75').checked==true){p19=1}
        else{p19=0} 

    //20
        if (document.getElementById('77').checked==true){p20=1}
        else{p20=0} 

    //21
        if (document.getElementById('82').checked==true){p21=1}
        else{p21=0} 


        nota = p1+p2+p3+p4+p5+p6+p7+p8+p9+p10+p11+p12+p13+p14+p15+p16+p17+p18+p19+p20+p21;

        document.getElementById('notaInput').setAttribute('value', nota);
        
        window.location = 'http://localhost/ZONADELSABER/htmls/preguntas/lectura/index.html'

    }