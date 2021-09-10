<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Creare Un Tema Wordpress Da Zero</title>
</head>

<body class="lead">
	
<header>
    <div class="container">
        <h1>Creare Un Tema Wordpress Da Zero </h1>
        <p>Un tema è una cartella che raccoglie tutti i file necessari al suo funzionamento. Per poter essere riconosciuto ed attivato, deve trovarsi in una propria cartella all'interno di <strong>wp-content/themes</strong>.</p>
        <p><strong>Nota</strong>: per la documentazione il <a href="https://codex.wordpress.org/">CODEX</a> è la bibbia per gli sviluppatori di Wordpress</p>
    </div>
</header>
<hr>
	
<main>
    <section id="struttura" class="py-3">
        <div class="container">
<h2>Struttura di un tema</h2>
            <p>Un tema è composto da un insieme di file e cartelle (che dobbiamo creare).</p>
            <p>Nella directory themes aggiungiamo il nostro folder &quot;<strong>temazero</strong>&quot;, all'interno ci andrà una classica struttura:</p>
            <h3>Folders</h3>
            <h4>Assets</h4>
            <p>Contiene gli assets (risorse) del sito come , stili, javascript, immagini, font etc. divisi nelle sottocartelle:</p>
            <ul>
                <li>css</li>
                <li>fonts</li>
                <li>images</li>
                <li>js</li>
            </ul>
            <h4>classes</h4>
            <p>Questa cartella dovrà contenere le funzioni personalizzate del nostro tema, che potranno &quot;scavalcare&quot; (override) o estendere le funzionalità di Wordpress.</p>
            <h4>inc</h4>
            <p>Conterrà gli &quot;include&quot; necessari al funzionamento delle varie pagine del tema.</p>
            <h4>template-parts</h4>
            <p>Sono i &quot;pezzi&quot; individuali del template. Servono per poter  riutilizzare parti del codice nei vari templates. </p>
            <p>Un sito di WP è fatto di templates, cioè schemi di base su cui vengono innestate le nostre notizie, pagine, articoli ecc. Una sorta di contenitori e possono essere divisi in più parti come footer, sidebar, header, menu etc.</p>
            <h4>theme-template</h4>
            <p>?</p>
            <hr></hr>
            <h3>File</h3>
            <p>Creiamo una serie di file (per ora vuoti) necessari al funzionamento del tema. Di tutti i file che creeremo due sono assolutamente indispensabili per definire un tema: <strong>index.php</strong> e <strong>style.css</strong> (queste già creano il tema selezionabile nel sistema wordpress).</p>
            <h4>404.php</h4>
            <p>L'errore 404 è l'errore (codice di stato) che ci restituisce il server (generato dal server) quando chiediamo una risorsa che non è reperibile. </p>
            <p>Se un sito non possiede una pagina 404 e chiedo una risorsa non esistente otterrò automaticamente la classica pagina di errore di testo &quot;not found...&quot; altrimenti vengo re-indirizzato verso la pagina 404 che ho creato.</p>
            <p>La pagina quindi viene visualizzata quando una risorsa, richiesta dallo user agent, risulta irragiungibile. Quindi quando il server genera questo errore verrà &quot;servita&quot; la nostra pagina 404.php</p>
            <h4>archive.php</h4>
            <p>Questo file è addetto alla visualizzazione di qualsiasi archivio php Wordpress.</p>
            <p>Gli archivi sono delle pagine contenitori dei post:</p>
            <ul>
                <li>blog è un archivio</li>
                <li>author è un archivio</li>
                <li>category è un archivio</li>
                <li>&nbsp;tag è un archivio</li>
				<li>un attachment (link a un attachment, es: immagine) è un archivio</li>
                <li>se abilitiamo la navigazione per anno e mese, anche mese ed anno sono rispettivamente archivi</li>
            </ul>
            <p>Insomma è la pagina &quot;catch-all&quot; (cattura tutto) per qualsiasi richiesta di un archivio di post (si potrebbe dire che ogni archivio &quot;punta&quot; a dei post).</p>
            <p>NOTA: wordpress è imbattibile  lato SEO perché se strutturiamo bene il nostro lavoro, WP costruirà intorno a questo lavoro una rete di relazioni tra le pagine che ci permette, anche se inserissimo soltanto due post e una fotografia, di ottenere un enorme quantità di pagina già create. Queste relazioni sono permesse grazie agli articoli, alle categorie, ai tag, agli autori, gli attachment etc. A questo servono essenzialmente gli archivi di Wordpress.</p>
            <h4>comments.php</h4>
            <p>Questa pagina è un template che mostra i commenti al post.</p>
            <h4>footer.php</h4>
            <p>Addetto al footer</p>
            <h4>functions.php</h4>
            <p>Un file molto importante mediante il quale possiamo inserire le funzioni specifiche del nostro tema, che possono &quot;scavalcare&quot; quelle di wordpress oppure estenderne le funzionalità.</p>
            <h4>header.php</h4>
            <p>L'header principale della pagina, mostrato in alto.</p>
            <h4>index.php</h4>
            <p>Indispensabile per la definizione del tema. Serve come fallback (ripiego, di riserva). Nel caso Wordpress non riesca a trovare un template specifico (nella gerarchia dei template) del quale ha bisogno, torna alla pagina&nbsp; <strong>index.php.</strong></p>
            <h4>page.php</h4>
            <p>Addetto alla visualizzazione delle pagine &quot;statiche&quot; (nel senso che i cui contenuti tendono ad essere aggiornati in maniera molto meno frequente rispetto agli archivi). Per esempio le pagine di un main menu di un sito web di solito sono statiche.</p>
            <p>Qualsiasi cosa non sia un post, o un archivio di post.</p>
            <h4>readme.txt</h4>
            <p>Un file di testo nel quale mettiamo le informazioni sul tema. Ad esempio le indicazioni sulla distribuzione del tema, sui requisiti minimi richiesti, sulla sua installazione, il &quot;changelog&quot; cronologico (la lista cronologica di tutte le versioni-release e relativi miglioramenti apportati al software), la privacy, il copyright etc.</p>
            <h4>search.php</h4>
            <p>La pagina che mostra i risultati della ricerca. Unica pagina che da sola non può essere attivata da un motore di ricerca.</p>
            <h4>single.php</h4>
            <p>Template che mostra i contenuti del singolo post.</p>
            <h4>style.css</h4>
            <p>Indispensabile per la definizione del tema. E' il foglio di stile principale &quot;custom&quot; del tema. Deve trovarsi sulla root del tema.</p>
			<p>Oltre ad essere il foglio di stile principale del sito, contiene all'interno di un commento, che deve trovarsi sulla prima riga, una serie di meta dati (informazioni aggiuntive che non rappresentano il dato stesso) che verranno visualizzati quando andremo ad installare il tema da appareances-themes</p>
			<ul>
			    <li><strong>Theme Name</strong>: TemaZero</li>
			    <li><strong>Text Domain</strong>: la stringa utilizzata per textdomain per la traduzione del tema</li>
			    <li><strong>Version</strong>: la versione del tema, scritta nel formato x.x (es. 2.6) oppure x.x.x (es. 2.6.2)</li>
			    <li><strong>Description</strong>: una breve descrizione del tema</li>
			    <li><strong>Tags</strong>: parole singole (straight keywords) o brevi insiemi di parole (long tail keywords) che consentiranno agli utenti di trovare il tema usando un filtro tag.</li>
			    <li><strong>Theme URI</strong>: URL di una pagina web nella quale si possono trovare maggiori informazioni sul tema</li>
			    <li><strong>Author</strong>: il nome dell'individuo o organizzazione che ha sviluppato il tema (si raccomanda di utilizzare il nome utente così come registrato su wordpress.org, vedi <a href="https://developer.wordpress.org/themes/getting-started/">https://developer.wordpress.org/themes/getting-started/</a>)</li>
			    <li><strong>Author URI</strong>: indirizzo dell'autore o dell'organizzazione che ha sviluppato il tema</li>
		    </ul>
			<p>Le indicazioni sopra descritte sono fondamentali, ad esse possiamo aggiungerne altre</p>
			<ul>
			    <li><strong>Requires at last</strong>: la più datata versione di wordpress con la quale è compatibile il tema, scritta in formato x.x. I temi sono tenuti a supportare solo le ultime 3 versioni.</li>
			    <li><strong>License</strong>: tipo di licenza del tema</li>
			    <li><strong>License URI</strong>: url della licenza</li>
		    
			    <li><strong>Template</strong>: nome del tema genitore (solo se il tema è un child theme, è obbligatoria questa riga per indicare il tema genitore di partenza)<br>
		        </li>
		    </ul>
			<h4>screenshot.png</h4>
            <p>Un file formato png. Deve avere dimensione di 1200x900 px, contiene la miniatura del tema che viene mostrata in &quot;aspetto &gt; temi&quot; in wordpress.</p>
        </div>
    </section>
    <hr>
    <section id="gerarchia" class="py-3">
        <div class="container">
            <h2>Wordpress template hierarchy - <a href="https://developer.wordpress.org/themes/basics/template-hierarchy/" target="_blank">link</a></h2>
			<img src="https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png" alt="" class="img-fluid">
            <p>Osserviamo che esiste un template che non abbiamo creato, chiamato <strong>singular.php</strong>. Serve quando sia il posts che le pages hanno una visualizzazione identica. In tal caso singular agirà per entrambi.</p>
            <p>La pagina <strong>archive.php</strong> agirà a sua volta come "catch-all" per qualsiasi richiesta di archivio (author, taxonomy, data, etc), ma, se volessimo avere un template specifico per la categoria, potremmo inserire un template <strong>category.php</strong> per tutte le richieste. Così ognuno dei nostri archivi può avere un look and fill diverso oppure, se volessimo ordinarli per data inversa, o ancora se per l'autore vogliamo una visualizzazione particolare. Da questa immagine si capisce che esistono migliaia di modi diversi in cui è possibile visualizzare e personalizzare i temi di Wordpress.</p>
			<h4>front-page.php</h4>
            <p>Ultimo file che aggiungiamo al tema.</p>
            <p>Spesso la pagina principale di un sito (landing page: pagina su cui atterriamo quando eseguiamo una ricerca, può corrispondere oppure no con la homepage del sito, main landing page) ha un look diverso da qualsiasi altra pagina. Se per il nostro tema è vero possiamo agire in 2 modi:</p>
			<p>Creare una pagina <strong>home.php</strong> che funzionerà sia per visualizzare i posts del blog, sia come pagina index, quindi come prima pagina statica.</p>
			<p>Se vogliamo essere più specifici creiamo <strong>front-page.php</strong></p>
			</hr>
        </div>
    </section>
</main>
</body>
</html>