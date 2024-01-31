<footer>
    <div>
        <p>Este es el footer</p>
    </div>
    <p>Contactanos</p>
    <form action="">
        <?php 
             foreach($label as $valor){
                echo '<label for="' . $valor . '">' . $valor . '</label>';
                echo '<input type="text" id="' . $valor . '" name="' . $valor . '">';            
             }
            ?>
    </form>
</footer>