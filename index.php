<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>seance 1 </title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

<?php
//  phpinfo(); 
$date = date('Y-m-d H:i:s');
$heure = date("h");
  echo 'L adresse IP de l utilisateur est : '.$_SERVER['REMOTE_ADDR'];
echo '   navigateur du client: '.$_SERVER['HTTP_USER_AGENT'];
if ($heure <= "22" || $heure <="07")
{
  echo('<div style="background-color: blue; color: white;">' .$date.'</div>');

}

else
{
  echo('<div style="color: lighblue">' .$date.'</div>');
}

include 'function.php';
?>


<nav class="one">
    <ul id="liste">
      <li id="one">paragraphe 1</li>
      <script type="text/javascript">
        var t = document.getElementById("one")
        var body = document.body;
        function reaction() {
          t.innerHTML = "switch to"
          body.style = "background-color: pink"
        }
        t.addEventListener("click", reaction)
      </script>

      <li> paragraphe 2</li>
      <li>paragraphe 3</li>
    </ul>
  </nav>
  <div id="content">
    <p> veuilliez saisir une phrase svp</p>
    <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10">

    <button name="button1"> click here > </button>
    <!-- <script type="text/javascript">
      var voy = docbument.getElementById("voy")
      var but = docuement.getElementById("button1")
      function cpt_voy() {
        text = voy.value
        voyelles = ["e", "a"]
        for (text)
  }
      but.addEventListener("click", cpt_voy)

    </script> -->

  </div>
  <div id="msous">
    <div id="op1">0$</div>
    <div id="op2">5$</div>
    <div id="op3">15$</div>
    <div id="op4">200$</div>
    <div id="op5">100000$</div>
    <button id="roulette">GO</button>

    <script>
      var div1 = document.getElementById("op1");
      var div1 = document.getElementById("op2");
      var div1 = document.getElementById("op3");
      var div1 = document.getElementById("op4");
      var div1 = document.getElementById("op5");
      var div_table = [op1, op2, op3, op4, op5];
      var bout = document.getElementById("roulette");

      var div_courante = 0;
      var rotations_restantes;

      function decaler() {
        if (rotations_restantes > 0) {
          div_courante = (div_courante + 1) % div_table.length;
          for (var i = 0; i < div_table.length; i++) {
            if (i == div_courante) {
              div_table[i].style = "background-color:purple";

            } else {
              div_table[i].style = "background-color:pink";
            }
          }
          rotations_restantes--;
        }
        setTimeout(decaler, 1500 / rotations_restantes)
      }

      function reaction(e) {
        rotations_restantes = Math.floor(30 * Math.random());
        setTimeout(decaler, 1500 / rotations_restantes)

      }

      bout.addEventListener("click", reaction);
    </script>

    <!-- <div id="rdmquote">
      une phrase aléatoire chaque 1 seconde
      <script>

        liste_lieux = ["ailleurs", "au Brésil", "au Chili", "au Groland", "au Guatemala", "au Japon", "au Kenya", "au Népal", "au Portugal", "au Pérou", "au Qatar", "au Québec", "au Soudan", "au Surinam", "au bar du coin", "au bord de la Seine", "au bord de la mer", "au bout du parcours", "au calme", "au centre de la bibliothèque de Babel", "au centre-ville", "au cimetière", "au coin de l'avenue (personne célèbre) et du boulevard (personne célèbre)", "au dernier sous-sol du parking souterrain", "au fond de l'eau", "au fond des égouts", "au fond du poulailler", "au fond du problème", "au fond à droite", "au guichet de la poste", "au large des Philippines", "au lit", "au milieu de l'écran", "au milieu de la fête foraine", "au musée de la bière", "au palais des congrès", "au paradis", "au pays de (personne célèbre)", "au pays des merveilles", "au pied de la statue de la liberté", "au purgatoire", "au pôle nord", "au rayon alimentation", "au restaurant", "au secrétariat du premier étage", "au soleil", "au sous-sol", "au sud de Fort Alamo", "auprès de (personne célèbre)", "auprès de moi", "auprès de vous", "aux Etats-Unis", "aux abords du Yang Tse Kiang", "aux alentours de Mexico", "aux confins de la galaxie", "aux fins fonds de la Meuse", "aux pieds de (personne célèbre)", "aux toilettes", "bien au chaud", "bien à l'abri", "chez (personne célèbre)", "chez Mamie", "chez eux", "chez le coiffeur", "chez moi"];
        liste_objets = ["FireFox", "Hiroshima", "Paris", "autre chose", "autrui", "ce dont je t'ai parlé", "ce laboratoire", "ce qu'il y a de plus absurde", "ce que je te dis", "ce que tu veux", "ce que vous savez", "ce qui compte le plus au monde", "ce sentiment", "ce téléphone", "cent grammes de foie de volaille", "cet ordinateur", "cette canette de bière", "cette chanson", "cette colonie de termites", "cette longue amitié", "chaque objet de valeur", "de belles idées", "de l'eau croupie", "de l'énergie", "de la neige", "des armes bactériologiques", "des centaines de ragondins", "des choses innommables", "des comptes bancaires en Suisse", "des draps en satin", "des objets métalliques", "deux cents grammes de mimolette en tranches", "deux kilos de cocaïne", "dix kilos de trombones", "dix mille dollars", "du code Javascript", "du pudding", "du sable", "l'absence de tout scrupule", "l'adultère", "l'avant-garde", "l'innocence", "l'irrésistible appel du large", "l'objet de votre demande", "l'objet du désir", "l'obstacle", "l'océan", "l'épave du Clémenceau", "l'étincelle de la vie", "la Bible", "la Déclaration Universelle des Droits de l'Homme", "la Torah", "la banlieue de Pont-à-Mousson", "la barbe de l'infidèle", "la bronchite chronique", "la camionnette de mon beau-frère"];
        liste_personnes = ["Abraham Lincoln", "Aimé Césaire", "Akira Kurosawa", "Al Capone", "Al Pacino", "Alain Chabat", "Alain Gillot-Pétré", "Alain Juppé", "Alain Madelin", "Alain Minc", "Alain Prost", "Albert Cohen", "Albert Dupontel", "Albert Einstein", "Alex Jones", "Alexandre Astier", "Alexandre le Grand", "Alf", "Alfred Hitchcock", "Andrès Manuel Lopez Obrador", "André Citroën", "Andy Warhol", "Antoine De Saint-Exupéry", "Antoine de Caunes", "Aristote", "Arno Klarsfeld", "Arnold Schwartzenegger", "Arsène Lupin", "Arthur Rimbaud", "Ayrton Senna", "Babar", "Barack Obama", "Barbe-Bleue", "Baruch Spinoza", "Basile Boli", "Batman", "Bela Lugosi", "Belzébuth", "Benjamin Netanyahu", "Benoît XVI", "Bernard Menez", "Bernard Pivot", "Bernard Tapie", "Bernard Werber", "Bernard-Henri Lévy", "Bernie Sanders", "Bertrand Cantat", "Bilbo le hobbit", "Bill Clinton", "Bill Gates", "Bin Laden", "Blaise Pascal", "Bob Beamon", "Bob Marley", "Bob l'éponge", "Bobby Lapointe", "Borat", "Boris Eltsine", "Boris Vian", "Bourvil", "Bozo le clown", "Bruce Banner", "Bruce Lee", "Bruce Springsteen", "Bruce Willis", "Bruno Carette", "Bruno Cremer", "Bruno Salomone", "Buster Keaton", "Cabu", "Caliméro", "Calvin Klein", "Carl Lewis", "Carlos", "Carlos Santana", "Casimir", "Casper le fantôme", "Charlemagne", "Charles Baudelaire", "Charles Bukowski", "Charles Ingalls", "Charles Manson", "Charlie Chaplin", "Charlie Oleg", "Charlton Heston", "Che Guevara", "Cheb Khaled", "Chewbacca", "Christian Estrosi", "Christophe Colomb", "Christopher Hitchens", "Chuck Norris", "Cicéron", "Clark Gable", "Claude François", "Claude Nougaro", "Claude Piéplu", "Claude Rich", "Clint Eastwood", "Coco l'asticot", "Colbert", "Coluche", "D'Artagnan", "DJ Krush", "Dan Simmons", "Daniel Auteuil", "Daniel Cohn-Bendit", "Daniel Guichard", "Danny Boon", "Dario Moreno", "Dark Vador", "David Bowie", "David Copperfield", "David Douillet", "David Hasseloff", "David Lynch", "Derrick", "Dick Rivers", "Didier Porte", "Dieudonné", "Doc Gynéco", "Dominique Farrugia", "Dominique Strauss-Kahn", "Dominique de Villepin", "Don Quichotte", "Donald Trump", "Dracula", "Dwayne Johnson", "Eddie Mitchell", "Eddie Murphy", "Edouard Balladur", "Eli Wallach", "Elon Musk", "Elvis Presley", "Emile Zola", "Emiliano Zapata", "Emmanuel Macron", "Enrico Macias", "Enzo Ferrari", "Eric Cantona", "Eric Cartman", "Eric Naulleau", "Eric Woerth", "Erik Satie", "Ernest-Antoine Seillière", "Eros Ramazzotti", "Etienne Mougeotte", "Euclide", "Evo Morales", "Fernandel", "Fidel Castro", "Flash Gordon", "Florent Pagny", "Francis Cabrel", "Francis Ford Coppola", "Frank Sinatra", "Frank Zappa", "François 1er", "François Baroin", "François Bayrou", "François Fillon", "François Hadji-Lazaro", "François Mitterand", "François Morel", "Fred Astaire", "Freddie Mercury", "Frédéric Mitterand", "Gad Elmaleh", "Gamal Abdel Nasser", "Gandhi", "Garcimore", "Garfield", "Gargantua", "Garry Kasparov", "Gaston Lagaffe", "Genghis Khan", "George Carlin", "George Gershwin", "George Michael", "Georges Brassens", "Georges Moustaki", "Gilles Deleuze", "Giorgio Armani", "Godzilla", "Goldorak", "Gollum", "Groquick", "Guillaume Tell", "Guy Bedos", "Guy Lux", "Gérald Dahan", "Gérard Depardieu", "Gérard Holtz", "Gérard Jugnot", "Gérard Majax", "Hannibal Lecter", "Hannibal Smith", "Harrisson Ford", "Harry Potter", "Harry Roselmack", "Hayao Miyazaki", "Hector de Troie", "Helmut Kohl", "Henri IV", "Henri Poincaré", "Henry Fonda", "Herbert Léonard", "Herbie Hancock", "Hermann Göring", "Hitler", "Homer Simpson", "Homère", "Horst Tapper", "Hugo Chavez", "Hugues Aufray", "Humphrey Bogart", "Iggy Pop", "Indiana Jones", "Isaac Asimov", "Isaac Newton", "J.R.R. Tolkien", "Jack Lang", "Jack Nicholson", "Jack Palance", "Jacques Attali", "Jacques Brel", "Jacques Chancel", "Jacques Chirac", "Jacques Delors", "Jacques Dutronc", "Jacques Martin", "Jacques Mesrine", "Jacques Séguéla", "Jamel Debbouze", "James Bond", "James Dean", "Jean Carmet", "Jean Dujardin", "Jean Jaurès", "Jean Moulin", "Jean Reno", "Jean Rochefort", "Jean Sarkozy", "Jean Tibéri", "Jean de la Fontaine", "Jean-Claude Bourret", "Jean-Claude Van Damme", "Jean-Louis Borloo", "Jean-Louis Trintignant", "Jean-Luc Delarue", "Jean-Marie Le Pen", "Jean-Marie Messier", "Jean-Paul Belmondo", "Jean-Paul II", "Jean-Paul Sartre", "Jean-Pierre Bacri", "Jean-Pierre Coffe", "Jean-Pierre Daroussin", "Jean-Pierre Foucault", "Jean-Pierre Marielle", "Jean-Pierre Papin", "Jerry Seinfeld", "Jim Carrey", "Joann Sfar", "Joe Dalton", "Joe Rogan", "Joey Starr", "John Cleese", "John F. Kennedy"];
        liste_verbes = ["accepter", "entrer", "préparer", "acheter", "envoyer", "présenter", "aider", "espérer", "prier", "aimer", "essayer", "prononcer", "ajouter", "exister", "quitter", "appeler", "expliquer", "raconter", "apporter", "exprimer", "rappeler", "approcher", "fermer", "refuser", "appuyer", "former", "regarder", "arrêter", "frapper", "rencontrer", "arriver", "gagner", "rentrer", "assurer", "garder", "répéter", "avancer", "glisser", "ressembler", "briller", "jeter", "rester", "brûler", "jouer", "retourner", "cacher", "juger", "retrouver", "causer", "lever", "rêver", "cesser", "manger", "rouler", "changer", "manquer", "sauver", "chanter", "marcher", "sembler", "charger", "monter", "tirer", "chercher", "montrer", "tomber", "commencer", "nommer", "toucher", "compter", "occuper", "tourner", "continuer", "oublier", "travailler", "coucher", "parler", "traverser", "crier", "passer", "tromper", "décider", "payer", "trouver", "demander", "penser", "tuer", "deviner", "placer", "voler", "donner", "pleurer", "voyager", "écouter", "porter", "élever", "poser", "embrasser", "posséder", "emporter", "pousser"]
        espace = " "
        function myrdm(min, max) {
          return Math.floor(Math.random() * (max - min) + min);
        }

        function rdm_element(list) {
          return list[myrdm(0, list.length)];
        }

        function make_sentence(){
          console.log("pl")
          sentence = "" + rdm_element(liste_personnes) + espace +  rdm_element(liste_verbes) + espace +rdm_element(liste_objets) + espace+ rdm_element(liste_lieux);
          console.log(sentence)
          return sentence
        }

        var phrase = document.getElementById("rdmquote");
        phrase.addEventListener("click", make_sentence);
        phrase.innerHTML = make_sentence()
      </script>
    </div> -->


    <div id="rdmquote">
      <div id="ph1"></div>
      <div id="ph2"></div>
      <div id="ph3"></div>
      <div id="ph4"></div>
      <script>

        liste_lieux = ["ailleurs", "au Brésil", "au Chili", "au Groland", "au Guatemala", "au Japon", "au Kenya", "au Népal", "au Portugal", "au Pérou", "au Qatar", "au Québec", "au Soudan", "au Surinam", "au bar du coin", "au bord de la Seine", "au bord de la mer", "au bout du parcours", "au calme", "au centre de la bibliothèque de Babel", "au centre-ville", "au cimetière", "au coin de l'avenue (personne célèbre) et du boulevard (personne célèbre)", "au dernier sous-sol du parking souterrain", "au fond de l'eau", "au fond des égouts", "au fond du poulailler", "au fond du problème", "au fond à droite", "au guichet de la poste", "au large des Philippines", "au lit", "au milieu de l'écran", "au milieu de la fête foraine", "au musée de la bière", "au palais des congrès", "au paradis", "au pays de (personne célèbre)", "au pays des merveilles", "au pied de la statue de la liberté", "au purgatoire", "au pôle nord", "au rayon alimentation", "au restaurant", "au secrétariat du premier étage", "au soleil", "au sous-sol", "au sud de Fort Alamo", "auprès de (personne célèbre)", "auprès de moi", "auprès de vous", "aux Etats-Unis", "aux abords du Yang Tse Kiang", "aux alentours de Mexico", "aux confins de la galaxie", "aux fins fonds de la Meuse", "aux pieds de (personne célèbre)", "aux toilettes", "bien au chaud", "bien à l'abri", "chez (personne célèbre)", "chez Mamie", "chez eux", "chez le coiffeur", "chez moi"];
        liste_objets = ["FireFox", "Hiroshima", "Paris", "autre chose", "autrui", "ce dont je t'ai parlé", "ce laboratoire", "ce qu'il y a de plus absurde", "ce que je te dis", "ce que tu veux", "ce que vous savez", "ce qui compte le plus au monde", "ce sentiment", "ce téléphone", "cent grammes de foie de volaille", "cet ordinateur", "cette canette de bière", "cette chanson", "cette colonie de termites", "cette longue amitié", "chaque objet de valeur", "de belles idées", "de l'eau croupie", "de l'énergie", "de la neige", "des armes bactériologiques", "des centaines de ragondins", "des choses innommables", "des comptes bancaires en Suisse", "des draps en satin", "des objets métalliques", "deux cents grammes de mimolette en tranches", "deux kilos de cocaïne", "dix kilos de trombones", "dix mille dollars", "du code Javascript", "du pudding", "du sable", "l'absence de tout scrupule", "l'adultère", "l'avant-garde", "l'innocence", "l'irrésistible appel du large", "l'objet de votre demande", "l'objet du désir", "l'obstacle", "l'océan", "l'épave du Clémenceau", "l'étincelle de la vie", "la Bible", "la Déclaration Universelle des Droits de l'Homme", "la Torah", "la banlieue de Pont-à-Mousson", "la barbe de l'infidèle", "la bronchite chronique", "la camionnette de mon beau-frère"];
        liste_personnes = ["Abraham Lincoln", "Aimé Césaire", "Akira Kurosawa", "Al Capone", "Al Pacino", "Alain Chabat", "Alain Gillot-Pétré", "Alain Juppé", "Alain Madelin", "Alain Minc", "Alain Prost", "Albert Cohen", "Albert Dupontel", "Albert Einstein", "Alex Jones", "Alexandre Astier", "Alexandre le Grand", "Alf", "Alfred Hitchcock", "Andrès Manuel Lopez Obrador", "André Citroën", "Andy Warhol", "Antoine De Saint-Exupéry", "Antoine de Caunes", "Aristote", "Arno Klarsfeld", "Arnold Schwartzenegger", "Arsène Lupin", "Arthur Rimbaud", "Ayrton Senna", "Babar", "Barack Obama", "Barbe-Bleue", "Baruch Spinoza", "Basile Boli", "Batman", "Bela Lugosi", "Belzébuth", "Benjamin Netanyahu", "Benoît XVI", "Bernard Menez", "Bernard Pivot", "Bernard Tapie", "Bernard Werber", "Bernard-Henri Lévy", "Bernie Sanders", "Bertrand Cantat", "Bilbo le hobbit", "Bill Clinton", "Bill Gates", "Bin Laden", "Blaise Pascal", "Bob Beamon", "Bob Marley", "Bob l'éponge", "Bobby Lapointe", "Borat", "Boris Eltsine", "Boris Vian", "Bourvil", "Bozo le clown", "Bruce Banner", "Bruce Lee", "Bruce Springsteen", "Bruce Willis", "Bruno Carette", "Bruno Cremer", "Bruno Salomone", "Buster Keaton", "Cabu", "Caliméro", "Calvin Klein", "Carl Lewis", "Carlos", "Carlos Santana", "Casimir", "Casper le fantôme", "Charlemagne", "Charles Baudelaire", "Charles Bukowski", "Charles Ingalls", "Charles Manson", "Charlie Chaplin", "Charlie Oleg", "Charlton Heston", "Che Guevara", "Cheb Khaled", "Chewbacca", "Christian Estrosi", "Christophe Colomb", "Christopher Hitchens", "Chuck Norris", "Cicéron", "Clark Gable", "Claude François", "Claude Nougaro", "Claude Piéplu", "Claude Rich", "Clint Eastwood", "Coco l'asticot", "Colbert", "Coluche", "D'Artagnan", "DJ Krush", "Dan Simmons", "Daniel Auteuil", "Daniel Cohn-Bendit", "Daniel Guichard", "Danny Boon", "Dario Moreno", "Dark Vador", "David Bowie", "David Copperfield", "David Douillet", "David Hasseloff", "David Lynch", "Derrick", "Dick Rivers", "Didier Porte", "Dieudonné", "Doc Gynéco", "Dominique Farrugia", "Dominique Strauss-Kahn", "Dominique de Villepin", "Don Quichotte", "Donald Trump", "Dracula", "Dwayne Johnson", "Eddie Mitchell", "Eddie Murphy", "Edouard Balladur", "Eli Wallach", "Elon Musk", "Elvis Presley", "Emile Zola", "Emiliano Zapata", "Emmanuel Macron", "Enrico Macias", "Enzo Ferrari", "Eric Cantona", "Eric Cartman", "Eric Naulleau", "Eric Woerth", "Erik Satie", "Ernest-Antoine Seillière", "Eros Ramazzotti", "Etienne Mougeotte", "Euclide", "Evo Morales", "Fernandel", "Fidel Castro", "Flash Gordon", "Florent Pagny", "Francis Cabrel", "Francis Ford Coppola", "Frank Sinatra", "Frank Zappa", "François 1er", "François Baroin", "François Bayrou", "François Fillon", "François Hadji-Lazaro", "François Mitterand", "François Morel", "Fred Astaire", "Freddie Mercury", "Frédéric Mitterand", "Gad Elmaleh", "Gamal Abdel Nasser", "Gandhi", "Garcimore", "Garfield", "Gargantua", "Garry Kasparov", "Gaston Lagaffe", "Genghis Khan", "George Carlin", "George Gershwin", "George Michael", "Georges Brassens", "Georges Moustaki", "Gilles Deleuze", "Giorgio Armani", "Godzilla", "Goldorak", "Gollum", "Groquick", "Guillaume Tell", "Guy Bedos", "Guy Lux", "Gérald Dahan", "Gérard Depardieu", "Gérard Holtz", "Gérard Jugnot", "Gérard Majax", "Hannibal Lecter", "Hannibal Smith", "Harrisson Ford", "Harry Potter", "Harry Roselmack", "Hayao Miyazaki", "Hector de Troie", "Helmut Kohl", "Henri IV", "Henri Poincaré", "Henry Fonda", "Herbert Léonard", "Herbie Hancock", "Hermann Göring", "Hitler", "Homer Simpson", "Homère", "Horst Tapper", "Hugo Chavez", "Hugues Aufray", "Humphrey Bogart", "Iggy Pop", "Indiana Jones", "Isaac Asimov", "Isaac Newton", "J.R.R. Tolkien", "Jack Lang", "Jack Nicholson", "Jack Palance", "Jacques Attali", "Jacques Brel", "Jacques Chancel", "Jacques Chirac", "Jacques Delors", "Jacques Dutronc", "Jacques Martin", "Jacques Mesrine", "Jacques Séguéla", "Jamel Debbouze", "James Bond", "James Dean", "Jean Carmet", "Jean Dujardin", "Jean Jaurès", "Jean Moulin", "Jean Reno", "Jean Rochefort", "Jean Sarkozy", "Jean Tibéri", "Jean de la Fontaine", "Jean-Claude Bourret", "Jean-Claude Van Damme", "Jean-Louis Borloo", "Jean-Louis Trintignant", "Jean-Luc Delarue", "Jean-Marie Le Pen", "Jean-Marie Messier", "Jean-Paul Belmondo", "Jean-Paul II", "Jean-Paul Sartre", "Jean-Pierre Bacri", "Jean-Pierre Coffe", "Jean-Pierre Daroussin", "Jean-Pierre Foucault", "Jean-Pierre Marielle", "Jean-Pierre Papin", "Jerry Seinfeld", "Jim Carrey", "Joann Sfar", "Joe Dalton", "Joe Rogan", "Joey Starr", "John Cleese", "John F. Kennedy"];
        liste_verbes = ["accepter", "entrer", "préparer", "acheter", "envoyer", "présenter", "aider", "espérer", "prier", "aimer", "essayer", "prononcer", "ajouter", "exister", "quitter", "appeler", "expliquer", "raconter", "apporter", "exprimer", "rappeler", "approcher", "fermer", "refuser", "appuyer", "former", "regarder", "arrêter", "frapper", "rencontrer", "arriver", "gagner", "rentrer", "assurer", "garder", "répéter", "avancer", "glisser", "ressembler", "briller", "jeter", "rester", "brûler", "jouer", "retourner", "cacher", "juger", "retrouver", "causer", "lever", "rêver", "cesser", "manger", "rouler", "changer", "manquer", "sauver", "chanter", "marcher", "sembler", "charger", "monter", "tirer", "chercher", "montrer", "tomber", "commencer", "nommer", "toucher", "compter", "occuper", "tourner", "continuer", "oublier", "travailler", "coucher", "parler", "traverser", "crier", "passer", "tromper", "décider", "payer", "trouver", "demander", "penser", "tuer", "deviner", "placer", "voler", "donner", "pleurer", "voyager", "écouter", "porter", "élever", "poser", "embrasser", "posséder", "emporter", "pousser"]
        espace = " "
        var mot1 = document.getElementById("ph1")
        var mot2 = document.getElementById("ph2")
        var mot3 = document.getElementById("ph3")
        var mot4 = document.getElementById("ph4")
        function myrdm(min, max) {
          return Math.floor(Math.random() * (max - min) + min);
        }

        function rdm_element(list) {
          return list[myrdm(0, list.length)];
        }

        function make_sentence(){
          // sentence = "" + rdm_element(liste_personnes) + espace +  rdm_element(liste_verbes) + espace +rdm_element(liste_objets) + espace+ rdm_element(liste_lieux);
          mot1.innerHTML=rdm_element(liste_personnes);
          mot1.style="color:red";
          var temp = rdm_element(liste_verbes)
          mot2.innerHTML=temp.substring(0, temp.length-1);
          mot2.style="color:purple";
          mot3.innerHTML=rdm_element(liste_objets);
          mot3.style="color:green";
          mot4.innerHTML=rdm_element(liste_lieux);
          mot4.style="color:orange";
        }

        var phrase = document.getElementById("rdmquote");
        // phrase.addEventListener("click", make_sentence);
        // phrase.innerHTML = make_sentence()
        
       var x = setInterval(make_sentence, 1500) ;
       setInterval(make_sentence, 1000) ;
       phrase.addEventListener("click", clearInterval(x));
       
      </script>
    </div>
  
  </div>
</body>

</html>
