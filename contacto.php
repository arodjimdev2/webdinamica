<?php
include "contenidos/metadatos.php"
?>
<?php
include "contenidos/header.php"
?>
<h2>Contacto</h2>
    <div class="with-sidebar">
<?php
include "contenidos/sidebar.php"
?>
        <div>
            <p>¿Quieres una web tan cutre como esta? Escríbenos, pero sin muchas expectativas.</p>
            <form action="">
                <label for="nombre">nombre</label>
                <input type="text" id="nombre">
                <label for="correo">correo</label>
                <input type="email" name="correo" id="correo">
                <label for="texto">suelta tu turrita</label>
                <textarea name="texto" id="texto" placeholder="Escribe, cabrón" ></textarea>
                <button>Pulsa. Total, no se va a mandar...</button>
            </form>     
        </div>

<?php
include "contenidos/footer.php"
?>