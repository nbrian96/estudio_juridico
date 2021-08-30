<?php 
    $titulo = "Contacto";
    include_once "../plantillas/documento-apertura.inc.php";
    include_once "../plantillas/documento-encabezado.inc.php";
    include_once "../plantillas/documento-navegador.inc.php";
?>

<div class="container">
    <div  class="jumbotron" id="Jumbotron">
        <h1>Contáctenos</h1>
        <br>
        <div class="row">
            <div class="col-md-7">
                <hr id="lineaH">
                <h2>Dirección</h2>
                <br>
                <iframe id="img_ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.991067612419!2d-58.392616385393985!3d-34.60438738045936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac1686f9c05%3A0x35b20ca7779ec692!2sAv.%20Corrientes%201670%2C%20C1042AAP%20CABA!5e0!3m2!1ses-419!2sar!4v1594942061187!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <br>
                <p>
                Av. Corrientes 1670<br>
                Piso 2 - Oficina 8
                </p>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.8915418410243!2d-58.384518785393894!3d-34.60690398045864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacfefaffb33%3A0x203f3d73e46d9960!2sCerrito%20136%2C%20C1013%20CABA!5e0!3m2!1ses-419!2sar!4v1594942265303!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <br>
                <p>
                Cerrito 136<br>
                Piso 2 - Oficina B
                </p>
                <br><br>
            </div>
            <div class="col-md-5">                
                <hr id="lineaA">
                <h2 style="color:#FFB400">Redes Sociales</h2>
                <a href="https://api.whatsapp.com/send?phone=5491134090052 " data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp fa-4x" aria-hidden="true"></i></a>                        
                <a href="https://www.facebook.com/people/Suarez-Diaz-Vera/100011998090469" target="_blank"><i class="fa fa-facebook fa-4x" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/estudio.suarezdiazvera/" target="_blank"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i></a>
                <br><br>
                <hr id="lineaA">
                <h2 style="color:#FFB400">Nuestros Teléfonos</h2>
                <ul style="font-size: 1.5em;">
                    <li>(011) 4371 2585</li>
                    <li>(011) 15 3409 0052</li>
                </ul>
                <br>
                <hr id="lineaA">
                <h2 style="color:#FFB400">Nuestros Mails</h2>
                <ul style="font-size: 1.5em;">
                    <li>
                        <a href="mailto:Clientes@estudiodiazverasuarez" target="_blank">Clientes@estudiodiazverasuarez</a>
                    </li>
                    <li>
                        <a href="mailto:estudiodiazvera2@gmail.com" target="_blank">estudiodiazvera2@gmail.com</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>


<?php
    include_once "../plantillas/documento-contacto.inc.php";
    include_once "../plantillas/documento-cierre.inc.php";
?>
