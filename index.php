<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquí Store Online</title>
    <link rel="icon" href="./assets/img/Logo_Aqui_Store-removebg-preview.png">
    <link rel="stylesheet" href="./assets/css/01-normalize.css">
    <link rel="stylesheet" href="./assets/css/02-reset.css">
    <link rel="stylesheet" href="./assets/css/03-main.css">
    <link rel="stylesheet" href="./assets/css/complemento.css">
    <link rel="stylesheet" href="./assets/css/carrito.css">
</head>
<body>
    <header class="cabecera">

        <nav>  
            <button class="btn-menu" onclick="accion()">Menú</button>
            <a href="#" class="nav-enlace ocultar">Inicio</a>
            <a href="#" class="nav-enlace ocultar">Servicios</a>
            <a href="#" class="nav-enlace ocultar">Nosotros</a>
            <a href="#" class="nav-enlace ocultar">Contacto</a>
        </nav>

        <div class="cabecera__container">
            <div class="logo">
                <img class="cabecera__imagen" src="./assets/img/Logo_Aqui_Store-removebg-preview.png" alt="logo-aquiStore">
            </div>
            <div class="buscador">
                <input class="cabecera__buscador" type="search" placeholder="¿Que deseas buscar?" title="Escriba el articulo que deseas buscar">
                <a class="cabecera__lupa" href="#"><img src="./assets/icons/lupa.png" alt="lupa"></a>
            </div>
            <div class="btn__register">
                <a class="cabecera__btn-login" href="formulario.html">Iniciar sesión o registrarme</a>
            </div>
        </div>


        <div>
            <ul>
                <li class="submenu">
                    <img src="./assets/icons/buy-cart-discount-3-svgrepo-com.svg" id="img-carrito"
                        alt="carrito" width="40px" height="40px">
                    <div id="carrito">
                        <table id="lista-carrito">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                    </div>
                </li>
            </ul>
        </div>

    </header>
    
    <section class="banner">
        <div class="banner__info">
            <h1 class="banner__titulo">Septiembre Promocional</h1>
            <p class="banner__descripcion">Productos seleccionados con hasta el 40% de descuento.</p>
            <button class="banner__btn-consolas">Descuentos imperibles</button>
        </div>
    </section>

    <section class="star__wars">
        <div class="starWars__container">
            <div class="starWars__info">
                <h2 class="starWars__titulo">⭐ Ofertas solo por hoy ⭐ </h2>
            </div>
            <div class="starWars__ver-todo">
                <a class="Ver productos" href="productos.html">Ver Todo ▶</a>
            </div>
        </div>

        <main class="products container" id="lista-1">
            <h2>Productos</h2> <br><br>

            <div class="product-content">

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Combo Gaming GS X1.png" alt="image1-1">
                    <div class="product-txt">
                        <h3>Combo Gaming GS X1</h3>
                        <p class="precio">$2'860,000</p>
                        <del class="precio antes">Antes $3'699,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="1">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Combo PC Pro Gamer MOBA +Combo Periféricos.png" alt="image2">
                    <div class="product-txt">
                        <h3>Combo PC Pro Gamer MOBA +Combo Periféricos</h3>
                        <p class="precio">$2'499,000</p>
                        <del class="precio antes">Antes $3'499,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="2">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/PC Gamer Ultra-GeForce RTX 4070 12GB.png" alt="image3">
                    <div class="product-txt">
                        <h3>PC Gamer Ultra-GeForce RTX 4070 12GB</h3>
                        <p class="precio">$5'999,000</p>
                        <del class="precio antes">Antes $7'999,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="3">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/PC Pro Gamer MOBA-GeForce GTX 1650 4GB.png" alt="image4">
                    <div class="product-txt">
                        <h3>PC Pro Gamer MOBA-GeForce GTX 1650 4GB</h3>
                        <p class="precio">$2'089,000</p>
                        <del class="precio antes">Antes $3'499,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="4">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto starWars__ocultar">
                    <img src="./assets/img/Productos/PC Gamer NVIDIA BATTLEBOX ESSENTIAL.png" alt="image5">
                    <div class="product-txt">
                        <h3>PC Gamer NVIDIA BATTLEBOX ESSENTIAL</h3>
                        <p class="precio">$3'399,000</p> 
                        <del class="precio antes">Antes $5'999,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="5">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto starWars__ocultar">
                    <img src="./assets/img/Productos/Chasis Caja Iceberg Mech One-Ventiladores ARGB + Doble Tira LED M-RGB + 2 Vidrios con Protector Metálico.png" alt="image6">
                    <div class="product-txt">
                        <h3>Chasis Caja Iceberg Mech One ARGB + Doble Tira LED RGB </h3>
                        <p class="precio">$1'079,000</p>
                        <del class="precio antes">Antes $1'499,900</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="6">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Chasis Caja Iceberg Glacius Vidrio Templado + Ventilador Led 120mm.png" alt="image7">
                    <div class="product-txt">
                        <h3>Chasis Caja Iceberg Glacius + Ventilador Led</h3>
                        <p class="precio">$209,900</p>
                        <del class="precio antes">Antes $382,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="7">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/monitor.png" alt="image8">
                    <div class="product-txt">
                        <h3>Monitor Gamer IPS Iceberg Destiny 22″ X221</h3>
                        <p class="precio">$499,000</p>
                        <del class="precio antes">Antes $799,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="8">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img//Productos/Combo 4 en 1 T-DAGGER LEGION con Teclado + Mouse + Diadema + Mousepad Gaming.png" alt="image9">
                    <div class="product-txt">
                        <h3>Combo 4 en 1 T-DAGGER LEGION</h3>
                        <p class="precio">$209,900</p>
                        <del class="precio antes">Antes $300,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="9">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Teclado.png" alt="image10">
                    <div class="product-txt">
                        <h3>Teclado Mecánico Gamer T-DAGGER Adriatic RGB</h3>
                        <p class="precio">$246,900</p>
                        <del class="precio antes">Antes $329,900</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="10">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto starWars__ocultar">
                    <img src="./assets/img/Productos/Mouse Gamer T-DAGGER Captain RGB.png" alt="image11">
                    <div class="product-txt">
                        <h3>Mouse Gamer T-DAGGER Captain RGB</h3>
                        <p class="precio">$129,900</p>
                        <del class="precio antes">Antes $179,900</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="11">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto starWars__ocultar">
                    <img src="./assets/img/Productos/Diadema T-DAGGER COOK Gaming 40mm T-RGH100.png" alt="image12">
                    <div class="product-txt">
                        <h3>Diadema T-DAGGER COOK Gaming 40mm T-RGH100</h3>
                        <p class="precio">$67,900</p>
                        <del class="precio antes">Antes $99,900</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="12">Agregar</a>
                    </div>
                </div>


                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Diadema.png" alt="image13">
                    <div class="product-txt">
                        <h3>Diadema Gamer MSI Immerse GH30 con Micrófono</h3>
                        <p class="precio">$169,900</p>
                        <del class="precio antes">Antes $229,900</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="13">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Micrófono para PC T-DAGGER Oriole + Tripode + Filtro.png" alt="image14">
                    <div class="product-txt">
                        <h3>Micrófono para PC T-DAGGER Oriole + Tripode + Filtro</h3>
                        <p class="precio">$119,900</p>
                        <del class="precio antes">Antes $172,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="14">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Silla Gamer Iceberg GC80 - Material Premium - Reposabrazos Acolchado - Colores.png" alt="image15">
                    <div class="product-txt">
                        <h3>Silla Gamer Iceberg GC80 / Material Premium</h3>
                        <p class="precio">$889,000</p>
                        <del class="precio antes">Antes $1'628,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="15">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Silla Gamer Iceberg GC95-Iluminación ARGB borde Grueso-Cuero PU.png" alt="image16">
                    <div class="product-txt">
                        <h3>Silla Gamer Iceberg GC95-Iluminación ARGB borde Grueso</h3>
                        <p class="precio">$1'299,000</p>
                        <del class="precio antes">Antes $1'999,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="16">Agregar</a>
                    </div>
                </div>
                <div class="starWars__producto">
                    <img src="./assets/img/Productos/ZOTAC GAMING GeForce RTX 4090 Trinity OC 24GB GDDR6X.png" alt="image17">
                    <div class="product-txt">
                        <h3>Tarjeta gráfica ZOTAC GAMING GeForce RTX 4090</h3>
                        <p class="precio">$8'899,000</p>
                        <del class="precio antes">Antes $13'999,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="17">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/ZOTAC GAMING GeForce RTX 3060 Twin Edge 12GB G6.png" alt="image18">
                    <div class="product-txt">
                        <h3>ZOTAC GAMING GeForce RTX 3060 Twin Edge 12GB G6 (DESCUENTO)</h3>
                        <p class="precio">$1'899,000</p>
                        <del class="precio antes">Antes $2'999,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="18">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Capturadora de Video Elgato HD60-S para Grabar PlayStation 4 y Xbox One.png" alt="image19">
                    <div class="product-txt">
                        <h3>Capturadora de Video Elgato HD60-S para PlayStation 4 y Xbox One</h3>
                        <p class="precio">$699,900</p>
                        <del class="precio antes">Antes $1'358,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="19">Agregar</a>
                    </div>
                </div>

                <div class="starWars__producto">
                    <img src="./assets/img/Productos/Refrigeración Líquida PCCOOLER GI-CX360 ARGB Radiador Triple 360mm.png" alt="image20">
                    <div class="product-txt">
                        <h3>Refrigeración Líquida PCCOOLER GI-CX360 ARGB Radiador 360mm</h3>
                        <p class="precio">$599,000</p>
                        <del class="precio antes">Antes $799,000</del>
                        <a href="#" class="agregar-carrito btn-1" data-id="20">Agregar</a>
                    </div>
                </div>

            </div>
            
        </main>
    

    <section>
        <div>
            <?php
            include('conexion.php');
            $a=mysqli_query($conn, "select datos.Cedula, datos.Nombres, datos.Apellidos, datos.Direccion, datos.Telefono, datos.Email, datos.Contraseña, ficha.codigoFicha from datos INNER JOIN ficha where datos.Cedula = ficha.id_cedula");
            // $a=mysqli_query($conn, "SELECT * FROM datos");
            ?>
            
            <table class="tabla-container">
                <tr>Formulario N° 1.
                    <td id="encabezado">Nombres</td>
                    <td id="encabezado">Apellidos</td>
                    <td id="encabezado">Cedula.</td>
                    <td id="encabezado">Direccion</td>
                    <td id="encabezado">Telefono</td>
                    <td id="encabezado">Email</td>
                    <td id="encabezado">Contraseña</td>
                    <td id="encabezado">Eliminar</td>
                </tr>
                <?php 
                    while($s=mysqli_fetch_array($a)){
                        
                        
                        ?>
                <tr>
                    <td> <?php  echo $s['Nombres'] ?> </td>
                    <td> <?php  echo $s['Apellidos'] ?> </td>
                    <td> <?php  echo $s['Cedula'] ?> </td>
                    <td> <?php  echo $s['Direccion'] ?> </td>
                    <td> <?php  echo $s['Telefono'] ?> </td>
                    <td> <?php  echo $s['Email'] ?> </td>
                    <td> <?php  echo $s['Contraseña'] ?> </td>
                    <td>Eliminar</td>
                </tr>

                <?php 
                    }
                ?>
            </table>
            </div>
    </section>

    
    <section class="rodapie">
        <div class="footer">
            <div class="footer__container">
                <div class="footer__logo"><img src="./assets/img/Logo_Aqui_Store-removebg-preview.png" alt="logo" width="250px" height="250px"></div>
                <div class="footer__links">
                    <a class="footer__link" href="#">Quienes Somos</a>
                    <a class="footer__link" href="#">Politicas de seguridad</a>
                    <a class="footer__link" href="#">Programa de fidelidad</a>
                    <a class="footer__link" href="#">Nuestras tiendas</a>
                    <a class="footer__link" href="#">Quiero ser franquiciado</a>
                    <a class="footer__link" href="#">Anuncie aqui!</a>
                </div>
                <div class="footer__contacto">
                    <form action="#" class="form-1" method="post">
                        <h2 class="footer__titulo">Chatea con nosostros</h2>
                        <label class="footer__nombre" for="nombre">Nombre</label>
                        <input class="footer__input" id="nombre" type="text" required placeholder="Escriba su nombre">
                        <textarea class="footer__textarea" name="text-area" id="" cols="20" rows="5" placeholder="Escribe tu mensaje" title="Escribe tu mensaje" required></textarea>
                        <button class="footer__btn-enviar-mensaje">Enviar mensaje</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="final">
            <a href="#"><img class="logo-team" src="./assets/img/logo-removebg-team-preview.png" alt="logo-team" width="150px" height="150px"></a>
            <a href="#"><p>Creado por ADSO - TEAM 07</p></a>
            <a href="#"><img class="logo-sena" src="./assets/img/logo_sena-removebg-preview.png" alt="logo-sena" width="150px" height="150px"></a>
        </div>
        
    </section>

    <script src="./assets/js/main.js"></script>
</body>
</html>