<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
body h1 {
	text-align: center;
}
</style>
</head>

<body>
<h1>Differenze tra pagine (pages) e articoli (post)</h1>
<h2>Gli articoli</h2>
<p>Sono dei post che pubblichiamo per tenere aggiornato un sito. Articoli (es: blog). CONTENUTI DINAMICI.</p>
<p>I post vengono di default visualizzati sulla pagina <strong>index</strong> o su una <strong>pagina dedicata</strong>, diciamo blog.</p>
<p>Come le pagine hanno una data di pubblicazione. Possono, diversamente dalle pagine, essere mostrati in ordine cronologico ascendente o discendente.</p>
<p><em>Devono appartenere ad almeno una delle categoria</em>.</p>
<h2>Le pagine</h2>
<p>Le pagine sono quelle parti del sito che non necessitano di un aggiornamento costante. Ad esempio About, Team, Contatti, Privacy, etc.</p>
<p>Sono aggiornabili come gli articoli.</p>
<p>A differenza dei post possono stabilire relazioni &quot;parentali&quot; non con le categorie ma con altre pagine collegate attraverso link (voci, bottoni etc.)</p>
<p><strong>Articoli e pagine vengono inseriti nel DB, entrambi nella tabella <strong>wp_posts</strong>, insieme ai media</strong> (in realtà qualsiasi cosa inseriamo in WP diventa un <strong>post</strong>, cambierà il campo <strong>post_type</strong>).</p>
<h2> I Permalink</h2>
<p>Uno slug è la versione abbreviata del titolo di un articolo, studiata in funzione della compatibilità URL, ma soprattutto per la SEO.</p>
<p>Lo slug viene elaborato automaticamente in fase di creazione di un nuovo articolo. La trasformazione somiglia a quella che abbiamo nel nostro sito dinamico. (stringa &gt; sglug)</p>
<p>Lo slug può comunque essere modificato a patto che non sia identico allo slug di qualsiasi altra page o post del sito.</p>
<p><strong>ATTENZIONE</strong>: se cambiamo il nome a pages, posts o categories ricordiamoci di modificare anche il relativo slug.</p>
<p>In Impostazioni &gt; Permalink troviamo i settaggi di scrittura degli URL.</p>
<h2>Commenti</h2>
<p>Un articolo può ricevere dei commenti. Servono per &quot;animare&quot; i contenuti con i feedback della nostra comunità di utenti.</p>
<p>La scelta di abilitare i commenti è legata a:</p>
<ul>
    <li>la nostra disponibilità (tempo) a rispondere ai commenti (devo rispondere ai commenti, o il flusso di utenti si interrompe)</li>
    <li>la nostra capacità, sicurezza, conoscenza necescessaria a rispondere ai commenti</li>
</ul>
<p>Come per pages e posts i commenti possono essere modificati, ma è una <em>pratica assolutamente scorretta</em>.</p>
<p>I commenti possono essere abilitati a livello globale in Impostazioni &gt; Discussione (&quot;Permetti l'invio di commenti per i nuovi articoli&quot;) .</p>
<p>Oppure a livello di singolo articolo (Barra laterale &gt; Discussione &gt; &quot;Permetti...&quot;).</p>
<p>Commenti e Metadati si trovano rispettivamente nelle tabelle wp_comments e comments_meta.</p>
<h1>Media &amp; Database</h1>
<p>Legge e visualizza il contenuto della directory <strong>wp-content/uploads</strong>. Le img vengono inserite automaticamente con ritagli diverse (ritagli diversi).</p>
<p>Anche i <strong>Media</strong> vengono memorizzati nel DB, tabella <strong>wp_posts</strong>, come post_type: attachment. I metadati finiscono della tabella <strong>wp_postmeta</strong>.</p>
<p>Vengono inseriti metadati e collegati alla tabella <strong>wp_posts </strong>tramite la relazione con la tabella <strong>wp_postmeta</strong>.</p>
<p>E possibile cambiare e impostare alcuni dati importanti dei media (come i meta dati).</p>
<p>Tutti i dati vengono inseriti e costantemente aggiornati nel DB al salvataggio.</p>
<p>WP accetta i file immagine png, giff, jpeg. Per webp ed svg dobbiamo installare dei <strong>plugin</strong> o modificare dei file di configurazione.</p>
<h2>Inserimento Immagine con Gutenberg</h2>
<p>Inserire un'immagine in un articolo come URL vuol dire fare hotlinking, possiamo farlo se abbiamo il permesso.</p>
<p>In WP le immagini non vengono legate al titolo come il CMS creato in classe. Sono sempre disponibili da qualsiasi post o page..., quindi il tag alt lo troveremo su tutte le pagine del sito.</p>
<p>Può essere cambiato il titolo dell'immagine, la didascalia (compare sotto l'img di default) e una descrizione.</p>
<p><strong>lazy load</strong> e <strong>srcset</strong> vengono inseriti automaticamente perché inclusi nel tema <strong>twenty twenty-one</strong>. Il tutto viene inserito nel tag <strong>&lt;figure&gt;</strong>&lt;img&gt;<strong>&lt;figcaption&gt;...</strong>Didascalia<strong>...&lt;/figcaption&gt;&lt;/figure&gt;</strong></p>
<p>Per cambiare le impostazioni relative al ritaglio e alle varie dimensioni che WP adotta delle immagini caricate:</p>
<p><img src="img-tour/media-settings.jpg" width="700" height="452" alt=""/></p>
<ul>
    <li><strong>La miniatura è quella effettivamente ritagliata se attivata la spunta</strong>, cioè ritagliata alle dimensioni esatte riportate nei campi larghezza e altezza</li>
    <li>L'ultima spunta organizza le cartelle in uploads in anno e mese</li>
    <li>Un'immagine è identificata dal titolo, se viene cancellata dai media, non verrà più visualizzata sul front-end ovunque è stata utilizzata. Se la inseriamo nuovamente con lo stesso titolo, viene ripristinata ovunque è stata cancellata. Se, dopo la cancellazione, viene inserita un'immagine con un nuovo nome, sul sito rimarrà l'errore sulla console perché l'immagine non esiste.</li>
</ul>
<hr>
<h2>Modifiche - Revision di Wordpress (versioni)</h2>
<p>WP ha un sistema di versioning, cioè vengono memorizzate le diverse versioni di un articolo. Ogni volta che un utente pubblica, modifica e salva un articolo viene creata una nuova versione nel DB. Queste &quot;versioni precedenti&quot; sono le <strong>revisioni di Worpress</strong>. Vengono memorizzate di numero di default di revisioni e indicate nel campo <strong>post_name</strong>. </p>
<p><strong>Ridurre il numero di revisioni </strong>(agendo nelle configurazioni attraverso il wp-config.php o plugins)<strong> è fondamentale per non appesantire il Database</strong>. Es: ridurre a 2 revisioni.</p>
<h2>wp_postmeta</h2>
<p>Meta dati di un post: campo id a cui il meta è relazionato, il tipo di meta</p>
<hr>
<h1>Gerarchia degli Users</h1>
<p>Gli users sono tutte le persone abilitate alla scrittura dei contenuti</p>
<p>Il livello di importanza dell'utente dipenderà dai suoi <strong>privilegi amministrativi</strong>: si va dalla semplice possibilità di rispondere ad un <em>commento</em>, alla moderazione dei commenti, alla scrittura/revisione di <em>articoli</em>, al cambio del <em>tema</em>, all'installazione di un nuovo <em>plugin</em>, alla gestione degli <em>utenti</em>. </p>
<p>ATTENZIONE: prima di effettuare operazioni critiche (sul sistema wp) come installare un plugin, un tema, etc, è buona prassi crearsi una copia di backup sia dei contenuti che dek DB.</p>
<p>Esiste una classe &quot;<strong>wp_roles</strong>&quot; che determina il funzionamento e l'assegnazione di privilegi.</p>
<h2>Amministratore</h2>
<p>E' il primo utente ad essere creato automaticamente alla prima installazione di WP.</p>
<p>Si colloca in cima a tutti gli altri ruoli utente ed ha accesso a TUTTO il pannello di controllo di WP.</p>
<p>Gli administrator possono:</p>
<ul>
    <li>CRUD di utenti.</li>
    <li>Installazione, modifica, eliminazione di temi e plugins.</li>
    <li>Modifica del tema tramite l'EDITOR.</li>
    <li>Modificare le impostazioni del sito.</li>
    <li>...tutti gli altri privilegi.</li>
</ul>
<p>Dato che il ruolo è quello con maggior privilegi è opportuno assegnarlo a qualcuno di cui ci fidiamo e che abbia le competenze giuste.</p>
<h2>Editor (redattore)</h2>
<p>Un editor si occupa della gestione dei CONTENUTI del sito:</p>
<ul>
    <li>CRUD su posts, pages (anche creati da altri utenti) e commenti.</li>
    <li>Gestione di tag e categorie</li>
    <li>L'editor (redattore) è il capo di un settore di un sistema editoriale (settore o redazione). Prende gli articoli dei giornalisti e li approva (l'ultima parola spetta al direttore di pubblicazione).</li>
    <li>Gli editor non possono eseguire azioni che possano modificare globalmente il sito (temi, impostazioni, plugin, gestione degli user)</li>
</ul>
<p>Il management dei contenuti può essere svolto singolarmente da un editor, nel caso di più utenti con privilegi inferiori, la responsabilità principale di un editor consiste nella supervisione del lavoro di  autori e collaboratori.</p>
<p>Conviene nominare un editor per la gestione dei contenuti, tenendola separata dalla gestione amministrativa. In questo modo anche se l' account editor viene compromesso, il vostro account amministrativo è al sicuro.</p>
<h2>Author (autore)</h2>
<p>Qualsiasi utente con il ruolo Author può:</p>
<ul>
    <li>Creare e modificare posts, assegnarli alle categorie, collegarli ai tag</li>
    <li>Caricare media</li>
    <li>Modificare i propri posts, ma non quelli di altri</li>
    <li><strong>No CRUD page</strong></li>
    <li>Come per gli Editor non hanno accesso ad alcuna azione amministrativa</li>
</ul>
<p>NOTA: un autore può cancellare i suoi post anche dopo la loro pubblicazione. Se qualcosa andasse male potete scalarlo ad un ruolo di livello inferiore.</p>
<h2>Contributor (collaboratore)</h2>
<p>E' una versione ridotta del ruolo di autore. </p>
<p>Possono creare post, cancellare bozze dei propri post, ma non possono pubblicarli in quanto automaticamente lo stato dei propri post viene marcato come &quot;in attesa di revisione&quot; (da un editor o un amministratore).</p>
<p>Una volta pubblicato un post, il contributor non può più cancellarlo (se non sono sicuro sull'affidabilità di un autore posso qualificarlo come contributor, controllo i suoi articoli e quando decido che la persona è all'altezza, posso promuoverlo come autore). E' un ruolo ideale per i nuovi autori.</p>
<p>Non possono caricare <strong>media</strong></p>
<h2>Subscriver (sottoscrittore)</h2>
<p>Il ruolo di subscriver si trova al livello più basso della gerarchia di WP.</p>
<p>Può:</p>
<ul>
    <li>Gestire il proprio profilo</li>
    <li>Leggere tutti i post</li>
    <li>E' il ruolo di default che viene assegnato ad un nuovo utente, quando inserisce un commento</li>
    <li>Non possono caricare <strong>media</strong></li>
</ul>
<hr>
<h1>ARTICLE EDITOR <strong>Gutenberg Editor</strong> (plugin per l'editing dei posts)</h1>
<ul>
    <li>Parte sinistra:<strong> </strong>gli elementi che stiamo impaginando, editor visivo.</li>
    <li>Parte destra:
        <ul>
            <li><strong>Articolo</strong>: tutti i meta dati che riguardano l'articolo (visibilità, formato, num. revisioni, permalink, categorie di appartenenza, tag, permessi sui commenti, ecc...)</li>
            <li><strong>Blocco</strong>: cambia a seconda degli elementi sui quali ci troviamo. Aggiungere stili ai blocchi si traduce nell'inserimento di <strong>stili inline</strong> con l'attributo <strong>style</strong> (si genera un pò di codice &quot;spazzatura&quot; per i motori di ricerca). Un blocco può essere salvato tra i preferiti e messo tra i blocchi riutilizzabili.</li>
        </ul>
    </li>
</ul>
<p>Tutti i campi possono cambiare, <strong>Gutenberg</strong> può risentire delle modifiche che hanno apportato gli sviluppatori, i settaggi possono aumentare rispetto alla versione di default.</p>
<p>Esistono una serie di <strong>plugin</strong> con i quali si possono estendere, modificare, aggiungere funzionalità ai <strong>blocchi di Gutenberg</strong> (Gutenberg Blocks Plugins).</p>
<hr>
<h2>Favicon</h2>
<ol>
    <li>plugin di photoshop</li>
    <li>plugin di illustrator</li>
    <li>favicon generator online</li>
</ol>
<p><strong>.ico</strong> oppure <strong>.png</strong></p>
<p>Standard per browser desktop: size 16x16</p>
<p>La favicon più grande generata è di c.a. 500px (ios), il nostro file di partenza dovrebbe avere una dimensione da almeno 400-500px</p>
<p>&lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; sizes=&quot;16x16&quot; href=&quot;path/file.png&quot; &gt; più tutti gli altri &lt;link&gt; e &lt;meta&gt; generati</p>
<p>Per farle funzionare ovunque le favicon vanno messe nelle ROOT DIRECTORY del sito</p>
<p>il file<strong> browserconfig.xml</strong> generato serve a microsoft.</p>
<h3>Inserimento di una favicon in WP</h3>
<p>Aspetto &gt; personalizza &gt; denominazione del sito &gt; seleziona icona del sito &gt; seleziona e ritaglia</p>
<hr>
<h1>Impostazioni &gt; lettura</h1>
<p>La pagina home che si apre: tutti i temi hanno all'interno una pagina che si chiama blog (gli ultimi articoli), dove viene mostrata la lista di degli articoli.</p>
<p>Numero di articoli visualizzabili. Es: ridotti a 2 appaiono dei link per la paginazione.</p>
<p>Impostazione per far vedere solo il riassunto degli articoli nella pagina che ne hanno uno.</p>
<p><strong>Visibilità ai motori di ricerca </strong>(lo abbiamo trovato anche in fase di installazione). Spetta alle regole del browser rispettarla o meno.</p>
<h1>Robots.txt e stati di pubblicazione di Posts e Pages</h1>
<p>Un file robots.txt a capire ai crawler (algoritmi) dei motori di ricerca quali pagine o file possono o non possono richiedere dal tuo sito. Viene usato per evitare di sovraccaricare di richieste il sito. Non è un sistema che permette di escludere una pagina web da Google. Per escludere una pagina da Google devi usare <em>istruzioni <strong>noindex oppure proteggere tramite password la pagina.</strong></em></p>
<p><em><strong><a href="https://developers.google.com/search/docs/advanced/robots/intro?hl=it&visit_id=637506131223659350-2241022241&rd=2">Link alla fonte di Google</a></strong></em></p>
<p>Se un altro sito contiene link al tuo sito, quest'ultimo può venire comunque indicizzato.</p>
<p>Per bloccare l'indicizzazione da Google di una pagina di WP si può proteggerla con una password. Altro modo è rendere la pagina privata: non sarà visualizzabile da <strong>nessuno</strong> a parte amministratori ed editor.</p>
<p>Per l'<strong>intero sito</strong> bisogna prima impostare una pagina di default (non semplicemente &quot;ultimi articoli&quot;, ma spuntare in lettura una <strong>homepage statica</strong>). Settandola come &quot;privata&quot; (es: pagina di esempio del tema). Molti temi utilizzano una pagina di errore chiamata <strong>404.php</strong>, altrimenti la pagina index reagisce con un'informazione del tipo &quot;non trovato&quot;.</p>
<hr>
<h1>Navigabilità in WP: relazioni (legami, associazioni, attraversamento) tra pagine, articoli, commenti.</h1>
<h2>Autore del post</h2>
<h2>Categorie (etichetta) &amp; Tag</h2>
<p>I tag sono le keywords che noi associamo agli articoli. Queste vengono riportate all'interno delle pagine che creiamo in WP ed essi stessi costituiscono (come le categorie), una rete di link. Se io &quot;taggo&quot; con una determinata keyword un articolo, e poi visualizzo l'articolo, allora mi verranno visualizzati tutti gli articoli che partono da quel tag.</p>
<p>Il tag è una keyword che viene associata ad un file, che mi permette a sua volta una navigazione trasversale delle informazioni all'interno del mio blog. La funzione principale è quella di essere una keyword scritta sulla pagina per rafforzare la SEO.</p>
<p>Spesso le per queste keywords in un blog vengono create le &quot;tag cloud&quot;, un insieme &quot;a nuvola&quot; di tantissimi tag associati ad una pagina in maniera che possano essere apprezzati da un motore di ricerca.</p>
<p>Esistono plugin per questa funzionalità, basta cercare &quot;cloud&quot;.</p>
<hr>
<p><em>Le pagine sono contenuti statici, le pagine dinamiche sono quelle del blog<strong> (gli ultimi articoli).</strong></em></p>
<hr>
<h1>Temi di Worpress</h1>
<p> Un tema cambia il layout, le funzioni, i widget, può aggiungere menu o sottomenu. Quindi non solo il cambiamento del layout, ma una serie di modifiche CRITICHE, spesso, anche al database.</p>
<p>Prima di cambiare tema, o di installare un plugin sconosciuto, è buona norma eseguire un backup del sito e del DB. </p>
<p>Copiare e scaricale file e cartelle in remoto, tramite FTP, è molto più lento che in locale (il semplice copia e incolla): copiarsi admin, includes, e content in una cartella di backup.</p>
<h2>Tipi di tema</h2>
<ul>
    <li>un tema può concentrarsi su un singolo settore o su una singola attività</li>
    <li>può presentare un solo tipo di homepage o molteplici</li>
    <li>può avere infinite possibilità nella miscelazione degli elementi del layout. Ad es potrebbe presentare 20 tipi diversi di menu di navigazione, 5 tipi di footer e molti tipi di formato post o page.</li>
</ul>
<h3>I temi multipurpose</h3>
<p>Centinaia di siti che convivono nello stesso tema. Possono avere un'impronta grafica comune o essere completamente diversi tra loro.</p>
<p>Hanno una curva di apprendimento alta (molto tempo per imparare). Una volta acquisito le skill opportune per il tema, per il prossimo sito possiamo riconsiderare lo stesso tema. Quindi ha senso sceglierlo per impararlo. Es: <strong>Avada</strong>, <strong>The7</strong>, <strong>Bethem</strong>.</p>
<p>Sono dotati di tool per importare una o più versioni degli esempi.</p>
<p>PREMIUM</p>
<h3>Temi di settore</h3>
<p>E' rivolto a un settore particolare, contiene da 1 a 6 demo diverse. Ha una curva di apprendimento semplice.</p>
<p>FREE, PREMIUM, HYBRID</p>
<h3>Starter theme</h3>
<p>es: wp-bootstrap-starter 3.14 : per inserire un tema nuovo in WP basta caricare il file zip fornito dal venditore dall'interfaccia stessa di WP (verranno caricati anche dei plugin, se inclusi nel pacchetto del tema).</p>
<p>Eliminare sempre i plugin che non sono utilizzati, come i due plugin di partenza <strong>Askimet</strong> ed <strong>Hello Dolly</strong> (se non utilizzati - serve licenza), questo sempre nella logica di evitare di avere &quot;ingressi esterni&quot; al nostro sistema.</p>
<h2>Metodi e criteri per la scelta di un tema (es di marketplace: <a href="themeforest.net">themeforest.net</a>)</h2>
<ul>
    <li>Ultimo aggiornamento, <strong>last update</strong>: recente, entro i 6 mesi. Per non compromettere il funzionamento del sito.</li>
    
    <li>I <strong>plugin</strong> che fornisce e/o quelli supportati (ogni plugin ha il suo prezzo, il suo sito e la sua documentazione). E' compatibile con i plugin più &quot;importanti&quot;? Esempi:</li>
    <ul>
        <li>Quelli piu utilizzati per i form sono <strong>Contact Form 7</strong>, <strong>Ninja Forms</strong> e <strong>Gravity Forms</strong></li>
        <li><strong>Events Calendar</strong> per gli eventi</li>
        <li><strong>WooCommerce</strong></li>
        <li><strong>WPML (wordpress multilingual plugin)</strong> è il plugin più utilizzato per il passaggio del sito da una lingua all'altra per i CMS</li>
        <li><strong>Slider revolution</strong> (compreso nel prezzo o solamente compatibile? Lo trovo già incluso?)</li>
    </ul>
    <li>Pareri e recensioni utenti</li>
    <li>La <strong>documentazione</strong> e il sistema di supporto</li>
    <li>Responsiveness</li>
    <li>Compatibilità con i browsers</li>
    <li>Supporto dell'ultima versione di WP</li>
    <li>Vendite - Reviews</li>
    <li>Velocità/performance (Lightthose tester, estensione di Chrome per testare le performace di un sito)</li>
    <li><strong>Caratteristiche rilevanti</strong></li>
    
    <ul>
        <li>esiste un <strong>builder</strong> (che sostituisce Gutenberg?)</li>
        <li>Builder proprietario? (che hanno creato gli sviluppatori del tema) </li>
        <li>Builder plugin aggiunto?</li>
    </ul>
    <li><strong>Plugin in bundle con il tema</strong> (quali plugin sono compresi, compreso nel prezzo o solamente compatibile? Lo trovo già incluso?)</li>
    <li>Compatibilità SEO: tools seo (meta tag). Performance</li>
</ul>
<h2>Plugin Must-Have</h2>
<ul>
    <li><strong>Contact Form 7</strong>, <strong>Ninja Forms</strong> e <strong>Gravity Forms</strong></li>
    <li>WooCommerce</li>
    <li><strong>WPML (wordpress multilingual plugin)</strong></li>
    <li><strong>WPOptimize, AutoOptimize</strong>: miglioramento delle prestazioni di un sito. Caching, speed, minify CSS, defer critical JS (come lo spostamento di script al termine del body), lazy loading (le immagini vengono caricate dal server solamente quando appaiono nel viewport). Tools per la misurazione delle prestazioni di una pagina</li>
    <li><strong>Duplicator</strong></li>
    <li><strong>Yoast SEO</strong></li>
    <li>Slider revolution</li>
    <li>Elementor, Divi page builders</li>
    <li><strong>Duplicate page</strong></li>
    <li><strong>Duplicator</strong></li>
    <li><strong>UAG</strong> (Ultimate Addons for Gutenberg)</li>
	<li><strong>WP Revisions Control</strong></li></ul>
    <h2>MIGLIORI TESTER per le performance di un sito    </h2>
    <ul><li><a href="whatwpthemeisthat.com">whatwpthemeisthat.com</a> per sapere quale tema wp è stato utilizzato</li>
    <li><a href="https://developers.google.com/speed/pagespeed/insights/?hl=it">PageSpeed Insights</a> per testare le performace di un sito</li>
    <li><strong>lighthouse</strong> test performance, estensione per il browser, migliore e piu tecnico con anche SEO</li>
    <li><strong>webpage.org</strong></li>
    <li><strong>GTmetrix</strong> il più conosciuto</li>
    <li>altri sono spettacolari ma a pagamento</li>
    <li>SEOzoom.it (uno dei migliori)</li>
    <li>pingdom.com</li>
    <li>uptrends.com</li>
</ul>
</body>
</html>