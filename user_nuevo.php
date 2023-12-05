
<header>
        <a href="#" class="Proyectores">Mundo Proyectores
        </a>
        <ul>
            <li><a href="#Home" onclick="alternar()">Inicio</a></li>
            <li><a href="#About" onclick="alternar()">Nosotros</a></li>
            <li><a href="#Proyect" onclick="alternar()">Proyectores</a></li>
            <li><a href="#stats" onclick="alternar()">Valoracion</a></li>
            <li><a href="#Services" onclick="alternar()">Servicios</a></li>
            <li><a href="#Contact" onclick="alternar()">contacto</a></li>
            <li><a href="#Contact" onclick="alternar()">Guia</a></li>
        </ul>
        <div class="btnMenu" onClick = "alternar()"></div>
    </header>
     <!-- Contact -->
     <section class="sec contact" id = "contact">
        <div class="content">
            <div class="mxw800p2">
                <h3> Agregar usuario </h3>
                <p> ESCRBE TUS DATOS </p>
            </div>
<div class="contactForm" action="registro_usuario.php">
<form id="form" action="registro_usuario.php" method="POST">
    <div class="row100">
        <div class="inputBx50">
            <input type="text1" name="Nombre_usuario" placeholder="Nombre"
            id="nombre" onkeyup="validacion()" >
            <span id="text1"></span>
        </div>
        <div class="inputBx50">
            <input type="text2" name="Apellidos_usuario" placeholder="Apellidos"
            id="apellidos" onkeyup="validacion()" >
            <span id="text2"></span>
        </div>
        <div class="inputBx50">
            <input type="text3" name="Email_usuario" placeholder="Email"
                id="email" onkeyup="validacion()" >
            <span id="text3"></span>
        </div>
        <div class="inputBx50">
            <input type="text" name="Matricula_usuario" placeholder="Matricula">
        </div>
        <div class="inputBx50">
            <input type="text" name="Telefono_usuario" placeholder="Telefono"
            id="telefono" onkeyup="validacion()" >
        </div>
        <div class="inputBx50">
            <input type="text" name="Rfc_usuario" placeholder="RFC">
    </div>
    </div>
    <div class="row100">
        <div class="inputBx100">
            <textarea type= "text" name="Mensaje_usuario"placeholder="Mensaje"></textarea>
        </div>                     
        </div>
        <div class="row100">
            <div class="inputBx100">
                <input type="submit" value="Enviar">
                <input type="reset" name="limpiar" value="Borrar sin enviar" />
                <select name="perfil">
                <option >Usuario</option>
                <option >Jefe de área</option>
                <option >Mantenimiento</option>
                <option >Otro</option>
                </select>
        </div>
    </div>
</form>
            </div>
            <div class="sci">
                <ul>
                    <li><a href="#"><img src="assets/facebook.png"></a></li>
                    <li><a href="#"><img src="assets/letra1x.png"></a></li>
                    <li><a href="#"><img src="assets/whatsapp.png"></a></li>
                    <li><a href="#"><img src="assets/instagram.png"></a></li>
                    <li><a href="#"><img src="assets/gorjeo.png"></a></li>
                </ul>
            </div>
        </div>
    </section>




    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("stick", window.scrollY > 0);   
        })
    </script>
   
    <!-- Pie -->

</body>

<script>
    
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky" , window.scrollY > 0)
    })

    function alternar(){
        var header = document.querySelector("header");
        header.classList.toggle("active")
    }
    buttonUp = document.getElementById("button-up");
    buttonUp.addEventListener("click", scrollUp);
    window.onscroll= function(){
        var scroll = document.documentElement.scrollTop;
        if (scroll > 200){
            buttonUp.style.transform = "scale(1)";
        }
        else{
            buttonUp.style.transform = "scale(0)";
        }  
       
    }
     function scrollUp(){
        var scroll = document.documentElement.scrollTop;
        if (scroll>0){
            window.requestAnimationFrame(scrollUp);
            window.scrollTo(0, scroll-(scroll/10));
        }
    }
    
/*SLIDER*/

    var slides = document.querySelector(".slider-items").children;
    /*var ir_sig = document.querySelector(".ir-sig");
    var ir_atras = document.querySelector(".ir-atras");*/
    var total = slides.length
    var activo = 1;

    var irAtras = document.querySelector(".ir-atras");
    irAtras.onclick =function(){
        mover("atras")
    }
    var irSig = document.querySelector(".ir-sig");
    irSig.onclick =function(){
        mover("siguiente")
    }
    function mover(direccion){
        if (direccion == "siguiente"){
            activo++
            if (activo == total){
                    activo = 0
            }
        }
        if (direccion == "atras"){
            if (activo == 0 ){
                activo = total -1
            }
            else{
                activo--
            }
        }
        for (i = 0; i < total; i++ ){
            slides[i].classList.remove("active")
        }
        slides[activo].classList.add("active")
    }
    
    function validacion (){
        var email = document.getElementById("email").value;
        var text = document.getElementById("text3");
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (email.match(pattern)){
            text.innerHTML="Email valido";
            text.style.color ="#4978ff";
        }
        else{
            text3.innerHTML="Introduzca un email valido";
            text3.style.color ="#ff0000";
        
        } 

   var nombre = document.getElementById("nombre").value;
        var text1 = document.getElementById("text1");
        var pattern =  /[a-z]/;
        if (nombre.match(pattern)){
            text1.innerHTML="Nombre valido";
            text1.style.color ="#4978ff";
        }
        else{
            text1.innerHTML="Introduzca un nombre valido";
            text1.style.color ="#ff0000";
        
        }

        var apellidos = document.getElementById("apellidos").value;
        var text2 = document.getElementById("text2");
        var pattern = /[a-z]/;
        if (apellidos.match(pattern)){
            text2.innerHTML="apellidos valido";
            text2.style.color ="#4978ff";
        }
        else{
            text2.innerHTML="Introduzca un apeliido valido";
            text2.style.color ="#ff0000";
        
        }
    }

</script>

</html>