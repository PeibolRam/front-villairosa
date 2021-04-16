<section class="contacto paralax" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contacto.png')" id="contacto">
    <div class="back-black"></div>	

    <div class="paralax-main">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contacto-icon.png" alt="">
        <h1>Contactanos</h1>
        <form>
            <input type="text" id="fname" name="fname" placeholder="Nombre">
            <input type="text" id="lname" name="lname" placeholder="Apellidos">
            <input type="text" id="phone" name="phone" placeholder="Teléfono">
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="message">Mensaje:</label>
            <textarea name="message" rows="10" cols="50"></textarea>
            <input type="submit" value="Enviar"></input>
        </form>
    </div>
</section>

<section class="contacto-content">
    <div class="contacto-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contacto1.png" alt="">
        <p>Blvd. Camino Real de la Plata 326, </p>
        <p>Fracc. Zona Plateada </p>
        <p> Pachuca, Hgo.</p>
    </div>

    <div class="contacto-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contacto2.png" alt="">
        <p>T. 771 7192315</p>
        <p>contacto@villaairosa.com.mx</p>
    </div>

    <div class="contacto-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contacto3.png" alt="">
        <p>Horario de atención</p>
        <p>10:00 am - 17:00pm</p>
    </div>

</section>