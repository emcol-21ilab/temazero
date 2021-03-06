<?php
//get_header() carica sulla pagina corrente il contenuto del file header.php
get_header();
?>

<article class="px-3 py-5">
    <?php
        /*
            La nostra front-page contiene adesso il solo articolo, oltre a head e footer.
            Per poter richiamare i contenuti dal db di wordpress utilizzeremo il loop di wordpress.
            Fondamentalmente è un iteratore che cicla su diverse cose.
            Quando salviamo qualcosa all'interno dei nostri post e page, sappiamo che viene salvata all'interno di una riga (record) del db.
            Tramite il loop WP interroga dinamicamente il database, trova quali record corrispondono alla pagina in cui ci troviamo, prende l'informazione e la renderizza.
         */

        // La prima condizione è che nel backend ci siano dei post pubblicati
        // Questa verifica si ottiene con il metodo have_posts();
        if(have_posts()) {
            //eseguo il ciclo, ponendo come limite il numero di posts esistenti
            while(have_posts()) {
                //visualizzo il post
                the_post();
                //visualizzo il contenuto del post editato con gutemberg nel backend
                the_content();
                //visualizzo l'autore del post
                the_author();
                the_date();
                //l'immagine in evidenza
                the_post_thumbnail( );
            }   
        }
    ?>
</article>

<?php get_footer(); ?>