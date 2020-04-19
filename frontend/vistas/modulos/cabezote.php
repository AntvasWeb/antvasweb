<header>
    <?php
        $cabezote = ControladorPlantilla::ctrEstiloPlantilla();
    ?>
    <div id="cabezote" class="av-cabezote">
        <div class="av-caja-logo">
            <a href="#" class="av-logo">
                <img src="http://localhost/antvasweb/backend/<?php echo $cabezote["logo"]; ?>" alt="">
            </a>
        </div>
        <div class="av-hamburgueza" id="hamburgueza">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="menu" class="av-menu">
            <li class="av-active"><a href="#home">home</a></li>
            <li><a href="#sobreMi">about</a></li>
            <li><a href="#servicios">Services</a></li>
            <li><a href="#misTrabajos">Portafolio</a></li>
            <li><a href="#porqueTrabajar">Elegirme</a></li>
            <li><a href="#contacto">Contact</a></li>
            <li>
                <ul class="av-redesSociales">

                <?php
                    $social = ControladorPlantilla::ctrEstiloPlantilla();
                    $jsonRedesSociales = json_decode($social["redesSociales"],true);
                    foreach ($jsonRedesSociales as $key => $value) {
                        
                        echo '<li><a href="'.$value["url"].'"><i class="fab '.$value["red"].' '.$value["estilo"].'"></i></a></li>';
                    }
                ?>
                </ul>
            </li>
        </ul>

    </div>
</header>