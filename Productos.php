<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
</head>
<body>
        <header class="header_fijo">
                              <div class="cambiar-tema">
                 <button id="boton-tema">Modo Oscuro</button>
                </div>  
                            <div class="header-usuario">
                                <?php if(isset($_SESSION['nombre_usuario'])): ?>
                                    <span class="nombre-usuario">Hola, <?php echo $_SESSION['nombre_usuario']; ?></span>
                                    <a href="ver_carrito.php" class="boton-carrito1">Ver Mi Carrito</a>
                                    <a href="cierre_sección.php" class="boton-cerrar-sesion">Cerrar Sesión</a> 
                                <?php else: ?>
                                     <a href="login.html" class="boton-ingreso">Iniciar Sesión</a>
                                     <a class="boton-carrito" href="index.html"> Página Principal</a>
                
                                <?php endif; ?>
                             </div>
        </header>
            <div class="background-image">
                
                
                           
                <div class="Productos">
                                <div class="card">
                                        <img src="imagen/producto1.jpeg" alt="comida de perro">
                                      <div class="card_body">
                                                <h3>BALANCED</h3>
                                                <h5>CONTROL DE PH</h5>
                                                <br>
                                                <p>$ 1</p>
                                                
                                                <form action="agregar_carrito.php" method="post">
                                                <input type="hidden" name="id_producto" value="1"> 
                                                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                                                <button type="submit">Agregar al Carrito</button>
                                                </form>
                                        </div>
                                 </div>
                              
    <div class="card">
        <img src="imagen/producto2.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>BALANCED</h3>
            <h5>PROACTIVE</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="1"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto3.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>OLD PRINCE</h3>
            <h5>CORDERO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="2"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto4.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>PRO PLAN</h3>
            <h5>RAZAS PEQUEÑAS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="3"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto5.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>ROYAL CANIN</h3>
            <h5>MINI</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="4"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto6.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>ROYAL CANIN</h3>
            <h5>MINI ADULTOS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="5"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto7.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>EXCELLENT</h3>
            <h5>ADULTOS MEDIANOS Y GRANDES</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="6"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    
    <div class="card">
        <img src="imagen/producto8.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>ROYAL CANIN</h3>
            <h5>REGULAR FIT</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="8"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto9.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>PRO PLAN</h3>
            <h5>GATOS ADULTOS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="9"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto10.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>DR. COSSIA</h3>
            <h5>SUPER PREMIUN ADULTOS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="10"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto11.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>BIOPET PREMIUN</h3>
            <h5>CRIADORES</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="11"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto12.jpeg" alt="comida de perro">
        <div class="card_body">
            <h3>AGILITY</h3>
            <h5>MAINTENANCE CRIADORES</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="12"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto13.jpg" alt="comida de perro">                                                                                                                                                             g" alt="comida de perro">
        <div class="card_body">
            <h3>AGILITY</h3>
            <h5>ALIMENTO EN LATA PARA GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="13"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto14.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>BALANCED</h3>
            <h5>GATO ADULTO, CONTROL DE PH</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="14"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto15.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>BALANCED</h3>
            <h5>GATO ADULTO, CONTROL DE PESO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="15"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto16.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>BELCAT</h3>
            <h5>GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="16"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto17.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CANCAT</h3>
            <h5>PIEDRAS SANITARIAS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="17"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto18.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CAT CHOW</h3>
            <h5>ALIMENTO EN SOBRE PARA GATOS ADULTOS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="18"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto19.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CATPRO</h3>
            <h5>GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="19"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto20.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CATPRO</h3>
            <h5>GATO CASTRADO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="20"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto21.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CATPRO</h3>
            <h5>ALIMENTO EN LATA PARA GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="21"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto22.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CATPRO</h3>
            <h5>GATO KITTEN</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="22"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto23.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>EXCELLENT</h3>
            <h5>URINARY</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="23"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto24.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>EXCELLENT</h3>
            <h5>GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="24"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto25.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>EXCELLENT</h3>
            <h5>GATO ESTERILIZADO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="25"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto26.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>EXCELLENT</h3>
            <h5>GATO KITTEN</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="26"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto27.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>BOCADITOS DEL MAR</h3>
            <h5>ALIMENTO EN SOBRE PARA GATOS CON OMEGA 3</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="27"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto28.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>BOCADITOS DE LA GRANJA</h3>
            <h5>ALIMENTO EN SOBRE PARA GATOS CON TAURINA</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="28"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto29.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>IAMS</h3>
            <h5>GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="29"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto30.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>MV</h3>
            <h5>ALIMENTO EN SOBRE PARA GATOS DIETA</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="30"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto31.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>NATU FRESH</h3>
            <h5>ALIMENTO EN SOBRE PARA GATOS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="31"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto32.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>OLD PRINCE</h3>
            <h5>GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="32"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto33.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>OPTIMUM</h3>
            <h5>ALIMENTO EN SOBRE PARA GATO CASTRADO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="33"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto34.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>OPTIMUM</h3>
            <h5>ALIMENTO EN SOBRE PARA GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="34"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto35.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>PROPLAN</h3>
            <h5>ALIMENTO EN SOBRE PARA GATO ADULTO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="35"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto36.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>ROYAL CANIN</h3>
            <h5>REGULAR FIT</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="36"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto37.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>ROYAL CANIN</h3>
            <h5>KITTEN DE 4 A 12 MESES</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="37"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto38.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>ROYAL CANIN</h3>
            <h5>INSTINCTIVE</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="38"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto39.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>CATWAY</h3>
            <h5>SANITARIO PARA GATO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="39"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto40.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>FRESH CAT</h3>
            <h5>PIEDRAS HIGIENICAS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="40"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto41.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>MININO</h3>
            <h5>MINERAL SANITARIO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="41"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto42.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>POOPY PETS</h3>
            <h5>ABSORBENTE SANITARIO</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="42"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
    <div class="card">
        <img src="imagen/producto43.jpg" alt="comida de perro">
        <div class="card_body">
            <h3>OSSPRET</h3>
            <h5>SHAMPOO ALGAS</h5>
            <br>
            <p>$ 1</p>
            <form action="agregar_carrito.php" method="post">
                <input type="hidden" name="id_producto" value="43"> 
                <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                <button type="submit">Agregar al Carrito</button>
            </form>
        </div>
    </div>
</div>
                            
                                
                               
                            
            </div>
        <script src="tema.js"></script>
    </body>
</html>