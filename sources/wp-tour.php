<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
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
<h2> I Permalink</h2>
<p>Uno slug è la versione abbreviata del titolo di un articolo, studiata in funzione della compatibilità URL, ma soprattutto per la SEO.</p>
<p>Lo slug viene elaborato automaticamente in fase di creazione di un nuovo articolo. La trasformazione somiglia a quella che abbiamo nel nostro sito dinamico. (stringa &gt; sglug)</p>
<p>Lo slug può comunque essere modificato a patto che non sia identico allo slug di qualsiasi altra page o post del sito.</p>
<p>ATTENZIONE: se cambiamo il nome a pages, posts o categories ricordiamoci di modificare anche il relativo slug.</p>
<p>In Impostazioni &gt; Permalink troviamo i settaggi di scrittura degli URL.</p>
<h2>Commenti</h2>
<p>Un articolo può ricevere dei commenti. Servono per &quot;animare&quot; i contenuti con i feedback della nostra comunità di utenti.</p>
<p>La scelta di abilitare i commenti è legata a:</p>
<ul>
    <li>la nostra disponibilità (tempo) a rispondere ai commenti (devo rispondere ai commenti, o il flusso di utenti si interrompe)</li>
    <li>la nostra capacità, sicurezza, conoscenza necescessaria a rispondere ai commenti</li>
</ul>
<p>Come per pages e posts i commenti possono essere modificati, ma è una <em>pratica assolutamente scorretta</em></p>
<p>I commenti possono essere abilitati a livello globale in Impostazioni &gt; Discussione (&quot;Permetti l'invio di commenti per i nuovi articoli&quot;) </p>
<p>Oppure a livello di singolo articolo (Barra laterale &gt; Discussione &gt; &quot;Permetti...&quot;)</p>
<p>Commenti e Metadati si trovano rispettivamente nelle tabelle wp_comments e comments_meta</p>
<h2>Media</h2>
<p>Legge e visualizza il contenuto della directory wp-content/uploads. Le img vengono inserite già con dimensioni diverse</p>
<p>Anche i Media vengono memorizzati nel DB, tabella wp_post, come attachement. I metadati finiscono della tabella wp_post_meta</p>
<p>Vengono inseriti metadati e collegati alla tabella wp_post tramite la relazione con la tabella wp_post_meta</p>
<p>E possibile cambiare e impostare alcuni dati importanti dei media (come i meta dati)</p>
<p>Tutti i dati vengono inseriti e costantemente aggiornati nel DB al salvataggio</p>
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
    <li>Modificare i propri posts, ma non quelli di altri</li>
    <li>No CRUD page</li>
    <li>Come per gli Editor non hanno accesso ad alcuna azione amministrativa</li>
</ul>
<p>NOTA: un autore può cancellare i suoi post anche dopo la loro pubblicazione. Se qualcosa andasse male potete scalarlo ad un ruolo di livello inferiore.</p>
<h2>Contributor (collaboratore)</h2>
<p>E' una versione ridotta del ruolo di autore. Possono creare post, cancellare bozze dei propri post, ma non possono pubblicarli in quanto automaticamente lo stato dei propri post viene marcato come &quot;in attesa di revisione&quot; (da un editor o un amministratore).</p>
<p>Una volta pubblicato un post, il contributor non può più cancellarlo (se non sono sicuro sull'affidabilità di un autore posso qualificarlo come contributor, controllo i suoi articoli e quando decido che la persona è all'altezza, posso promuoverlo come autore). E' un ruolo ideale per i nuovi autori.</p>
<h2>Subscriver (sottoscrittore)</h2>
<p>Il ruolo di subscriver si trova al livello più basso della gerarchia di WP.</p>
<p>Può:</p>
<ul>
    <li>Gestire il proprio profilo</li>
    <li>Leggere tutti i post</li>
    <li>E' il ruolo di default che viene assegnato ad un nuovo utente, quando inserisce un commento</li>
</ul>
</body>
</html>