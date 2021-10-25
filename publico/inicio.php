<?php require_once 'head.php'; ?>
<body>
 
    <div class=" contenedor_centra">
        <?php require_once 'menu_inicio.php'; ?>
         <br><br>
         <div class="wrapper">
            <div>   
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/imagenes/Banner1.png" class="d-block w-100 imagen_carrusel"   alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/imagenes/Banner1.png" class="d-block w-100 imagen_carrusel" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/imagenes/Banner1.png" class="d-block w-100 imagen_carrusel" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div> 
            </div> 
         </div>
         <div class="contenedor4 row " > 
            <div class="col-lg-4  ">
                <hr >
            </div>
            <div class="contenedor3 col-lg-4 ">
                <div class="contenedor8"><?=manantial_6?></div>
            </div>
            <div class="col-lg-4 ">
                <hr >
            </div>
         </div>
       
         <?php $carrusel  = array(
            array('imagen' =>"assets/imagenes_producto/p5.png" , "titulo"=>"COLÁGENO HIDROLIZADO","precio"=>"$64.900,00 COP"),
            array('imagen' =>"assets/imagenes_producto/p4.png" , "titulo"=>"FIBRA MANATIAL","precio"=>"34.900,00 COP"),
            array('imagen' =>"assets/imagenes_producto/p3.png" , "titulo"=>"ACEITE DE COCO 900ML","precio"=>"$69.900,00 COP"),
            array('imagen' =>"assets/imagenes_producto/p2.png" , "titulo"=>"ACEITE DE COCO 450ML","precio"=>"$49.900,00 COP"),
            array('imagen' =>"assets/imagenes_producto/p1.png" , "titulo"=>"ACEITE DE COCO 230ML","precio"=>"$35.900,00 COP"),
            array('imagen' =>"assets/imagenes_producto/p6.png" , "titulo"=>"ACEITE DE COCO 130ML","precio"=>"$29.900,00 COP")); ?>
            <div class="contenedor_cont_productos">
                 <div id="carrusel" class="slider ">
                      <div id="carrusel-slides" class="slides">
                        <?php for ($i=0; $i < count($carrusel) ; $i++) {  ?>
                        <div class="slide">
                            <div class="contenedor_producto" >                   
                                <img src="<?=$carrusel[$i]["imagen"]?>" class="imagen_producto" >
                                <br><br>
                                <p class="contenedor_centra_texto_producto"><?=$carrusel[$i]["titulo"]?></p>
                                <p class="contenedor_centra_texto_producto color_precio"><?=$carrusel[$i]["precio"]?>P</p>                    
                            </div>
                        </div>
                        <?php } ?>
                       
                      
                      </div>
                    <button class="btn-prev">
                    <button class="btn-next">
                </div>
            </div>
            <div class="contenedor4 row " > 
                <div class="col-lg-4  ">
                    <hr >
                </div>
                <div class="contenedor3 col-lg-4 ">
                    <div class="contenedor8"><?=manantial_8?></div>
                </div>
                <div class="col-lg-4 ">
                    <hr >
                </div>
            </div>
            <br><br> 
            <a href="https://wa.me/573218483072">
                <img class="btn-flotante" src="assets/logos/Logo_de_Whatsapp_Full_Color.svg">
            </a>
                
            
     
           <div class="embedsocial-hashtag" data-ref="4c9f5d4ca2295b5896f6821ae12486ea33fdf8b7"></div>
           <script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));</script>
            <script type="text/javascript">
                const carSld = document.getElementById("carrusel-slides");
            const carSlds = document.querySelector("#carrusel-slides .slide");
            const carRight = document.querySelector(".btn-next");
            const carLeft = document.querySelector(".btn-prev");
            let direction;

            carRight.onclick = function () {
              carSld.scrollLeft += 220;  
            };

            carLeft.onclick = function () {
              carSld.scrollLeft -= 220;
            };



            </script>
             <div class="contenedor4 row " > 
                <div class="col-lg-4  ">
                    <hr >
                </div>
                <div class="contenedor3 col-lg-4 ">
                    <div class="contenedor8"><?=manantial_9?></div>
                </div>
                <div class="col-lg-4 ">
                    <hr >
                </div>
            </div>
            <br><br>
            <div style="text-align: center;">
                <a href="https://m.facebook.com/Manantialpaginaoficial/">
                    <img src="assets/logos/Logo_de_facebook_Full_Color.svg" class="logo_final" >
                </a>
                <a href="https://www.instagram.com/manantial.oficial/?hl=es-la">
                    <img src="assets/logos/Logo_de_Instargram_Full_Color.svg" class="logo_final">
                </a> 
                <a href="https://youtube.com/channel/UCxWcCyrQajmxi0DhLxMcgNA">
                    <img src="assets/logos/Logo_de_Youtube_Full_Color.svg" class="logo_final">
                </a>
                 
            </div>
        </div>
        
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
posicionarMenu();
 
$(window).scroll(function() {    
    posicionarMenu();
});
 
function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight( );
    var altura_del_menu = $('.menu').outerHeight( );
 
    if ($(window).scrollTop() >= altura_del_header){
        $('.menu').addClass('fixed');
        $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.menu').removeClass('fixed');
        $('.wrapper').css('margin-top', '0');
    }
}
 
</script>

    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>