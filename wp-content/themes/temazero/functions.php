<?php

    //in questa funzione utilizziamo la funzione interna di wp chiamata wp_enqueue_styles() che accetta una serie di parametri
    //wp_enqueue_styles('idAssegnatoInternamenteAlFoglioDiStile', 'pathChePuntaAlCSS', arrayDipendenze(), 'version', '@mediaScope') 
    //ogni elemento dell'array rappresenta l'id del foglio di stile da cui deve dipendere quello attuale

    //nel nostro caso il path del CSS è lo stesso che abbiamo assegnato al file front-page.html: la root del sito
    //per evitare di inserire un indirizzo hard-coded nel path (a mano) facciamo in modo che la parte contenente '/wp-content/themes/temazero/' venga individuata da WP tramite la funzione get_template_directory_uri(), che restituisce il percorso verso la nostra cartella contenente il tema attualmente in uso
    function temazero_register_styles() {

        //la funzione wp_get_theme()->get(parametro) consente di recuperare qualsiasi parametro dalle righe di commento di style.css
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('temazero_style', get_template_directory_uri() . '/style.css', array('bootstrap_style'), $version, 'all');
        wp_enqueue_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', array(), '5.1.0', 'all');
    }

    //Adesso abbiamo bisogno che la nostra funzione si agganci (to hook) al sistema di wordpress, per questo utilizzeremo un Wordpress Hook.
    //Un hook è una funzione che consente di manipolare una procedura senza modificare il file core di WP. Un hook (gancio, aggancio, richiamo) può essere applicato sia all'azione (action hook), sia al filtro (filter hook).
    // L'action hook viene usato per aggiungere un processo mentre le funzioni di filter hook servono a cambiare o modificare il valore di un processo.
    // In sostanza lo scopo di un hook è quello di eseguire automaticamente una funzione; tencnica che ci da la possibilità di modificare, estendere, o limitare le funzionalità di temi o plug-in

    //Per invocare un action hook utilizziamo la funzione add_action() facendole richiamare l'hook chiamato 'wp_enqueue_scripts' che serve per accodare i fogli di stile.
    //Le azioni sono i comandi che il core di WP lancia in momenti specifici durante l'esecuzione oppure al verificarsi di specifici eventi
    
    //wp_enqueue_scripts() è la funzione da usare quando si mettono in coda scripts e stili che sono destinate ad apparire sul front-end
    //In pratica ciò che fa la seguente riga è dire a WP: quando esegui la funzione 'wp_enqueue_scripts', esegui anche 'temazero_register_styles'  

    function temazero_register_scripts() {

        //l'ultimo parametro è false di default, se si vogliono inserire gli script al termine del body, settarlo su true
        $version = wp_get_theme()->get('Version');
        wp_enqueue_script('bootstrap-scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', array('jquery-scripts'), '5.1.0', true);
        wp_enqueue_script('jquery-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script('temazero-scripts', get_template_directory_uri() . '/assets/js/temazero.js', array('jquery-scripts'), $version, true);
    }

    add_action('wp_enqueue_scripts', 'temazero_register_styles');
    add_action('wp_enqueue_scripts', 'temazero_register_scripts');
    //azione('nomeDellHook', 'argomentoFunzione');

    /*
        Utilizziamo una funzione che permette a wordpress di andare ad inserire in modo appropriato il title ad ogni pagina nel catturare la head con la funzione wp_head();
        Con questa funzione chiediamo a wp di aggiungere supporto per il tag title, attraverso la funzione add_theme_support(cosaVoglioOttenere).
    */
    function temazero_theme_support() {
        add_theme_support('title-tag');
    }
    
    //hook: dopo aver fatto il setup del tema deve eseguire la funzione
    add_action('after_setup_theme', 'temazero_theme_support');

    //adding menu support, aggiungo il supporto alle posizioni del menu (menu locations), non crea un menu ma delle posizioni dove poterli creare
    function temazero_menu_support() {
        //let's create an empty array for the menu locations in which the indexes rapresente the name assigned to the menu location by our theme
        $locations = array(
            'primary' => 'Desktop Main Menu',
            'footer' => 'Footer Menu'
        );
        //ask to wp to register these locations
        register_nav_menus( $locations );
    }

    add_action( 'init', 'temazero_menu_support' );
