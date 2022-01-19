<?php ?>
<?php
    $curl = curl_init();
    $url = "https://clicfans.com/reclutamiento/";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($curl);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <header>
        <img src="./images/logo.png" alt="logo">

        <div class="header_icons">
            <span class="material-icons md-18">podcasts</span>
            <span class="material-icons md-18">question_mark</span>
            <span class="material-icons md-18">notifications</span>
            <div class="menu menu--active">
                <span class="material-icons md-18">person</span>
                <span>Brayan Zarco</span>

                <ul>
                    <li>Mi Perfil</li>
                    <li>Mis Imagenes</li>
                    <li>Cambiar de Cuenta</li>
                    <li>Cerrar Sesion</li>
                </ul>
            </div>
        </div>
    </header>
    <section class="app">
        <nav>
            <ul>
                <li class="nav-item">
                    <a class="" data-section="home">
                        <span class="material-icons md-18">grid_view</span>
                        <span>Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" data-section="embudos">
                        <span class="material-icons md-18">podcasts</span>
                        <span>Embudos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" data-section="correos">
                        <span class="material-icons md-18">mail</span>
                        <span>Correos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" data-section="contactos">
                        <span class="material-icons md-18">groups</span>
                        <span>Contactos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" data-section="workflows">
                        <span class="material-icons md-18">pie_chart</span>
                        <span>Workflows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" data-section="plugins">
                        <span class="material-icons md-18">settings_input_hdmi</span>
                        <span>Plugins</span>
                    </a>
                </li>
            </ul>
        </nav>
        <main>
            <div class="contents">

                <div class="app-item">
                    <div class="app-item_title red-text">
                    <span class="material-icons md-18">podcasts</span>
                        <span>Mis Embudos</span>
                    </div>
                    <div class="app-item_description">
                        <span>Crea tus paginas, administra tus subdominios y mucho mas.</span>
                    </div>
                    <div class="app-item_footer">
                        <span>Funnels Total</span>
                        <span class="app-item_number red-text">106</span>
                    </div>
                </div>

                <div class="app-item">
                    <div class="app-item_title blue-text">
                    <span class="material-icons md-18">mail</span>
                        <span>Mis Correos</span>
                    </div>
                    <div class="app-item_description">
                        <span>Crea tus correos, administra informacion y mucho mas.</span>
                    </div>
                    <div class="app-item_footer">
                        <span>Correos totales</span>
                        <span class="app-item_number">106</span>
                    </div>
                </div>

                <div class="app-item">
                    <div class="app-item_title yellow-text">
                    <span class="material-icons md-18">groups</span>
                        <span>Mis Contactos</span>
                    </div>
                    <div class="app-item_description">
                        <span>Tus contactos de funnels, administra contactos, asigna informacion.</span>
                    </div>
                    <div class="app-item_footer">
                        <span>Contactos totales</span>
                        <span class="app-item_number">106</span>
                    </div>
                </div>

                <div class="app-item">
                    <div class="app-item_title green-text">
                    <span class="material-icons md-18">pie_chart</span>
                        <span>Mis Workflows</span>
                    </div>
                    <div class="app-item_description">
                        <span>Crea flujos de correo, manda tus correos a tus contactos y mucho mas.</span>
                    </div>
                    <div class="app-item_footer">
                        <span>Funnels Total</span>
                        <span class="app-item_number">106</span>
                    </div>
                </div>

            </div>
        </main>
    </section>
    
    <script src="script.js"></script>
    <script>
        const data = <?php print($result); ?>;
        console.log("data", data)
    </script>
</body>
</html>