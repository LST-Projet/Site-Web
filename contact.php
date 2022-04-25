<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./contact.css">
    
</head>
<body>



    <section class="top-page">
        <header class="head">
         <div classe="image">
          <a href="./index.php" ><img src="./image/AM (2).png" alt="Logo du site"></a>
        </div>
   
   <nav>
   <div id="menu">
    <ul>
  
    <li><span id="menu_catégorie"><a href="index.php" class="">Accueil</a></span>
    </li>
    <li><span id="menu_catégorie"><a href="" class="">Catégories</a></span>
      <ul>
      <li><a href="/categories/Papier/papier.php" class="list">Papier, Courrier et Organisation</a></li>
      <li><a href="/categories/Fournitures BR/ftbr.php" class="list">Fournitures bureau et art créatif</a></li>
      <li><a href="/categories/Fourniture SC/fourniture.php" class="list">Fournitures scolaires</a></li>
      </ul>
      </li>
      <li><span id="menu_ventes"><a href="" class=""> NosVentes</a></span>
      <li><span id="menu_catégorie"><a href="contact.php" class="">Contact</a></span>
        <li><span id="menu_catégorie"><a href="propos.php" class="">ÀProposNous</a></span>
     </ul>
    </ul>
   </div>
  </nav>
  </header>
  </section>
  
    <form   method="post"  id="myForm" action="file.php">
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
               <div class="groupe">
                <label >Votre prénom</label>
                <input name="prenom"  type="text" id="prenom">
                <span id="erreurprenom"></span>
                <i class="fa-solid fa-user"></i>
                
            </div>
            <div class="groupe">
                <label>Votre nom</label>
                <input name="nom" type="text" id="nom">
                <span id="erreurnom"></span>
                <i class="fa-solid fa-user"></i>
                
            </div>
        
                <div class="groupe">
                <label>Votre adresse e-mail </label>
                <input name="email" type="email" id="email">
                <span id="erreuremail"></span>
                <i class="fa-solid fa-envelope"></i>
            
            </div>
    
               <div class="groupe">
                <label>Votre téléphone</label>
                <input name="tele" type="number" id="telephone">
                <span id="erreurtelephone"></span>
                <i class="fa-solid fa-phone"></i>
                
            </div>
         </div>
         
            <div class="droite">
                <div class="groupe">
                    <label>Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"  maxlength="200"></textarea>
                    <span id="erreurmessage"></span>
                    
                </div>
            </div>
        </div>
        <div class="pied-formulaire" >
            <button name="envoyer">Envoyer</button>
        </div>
    </form>
  
    <script>
        let myForm = document.getElementById('myForm');
        
        myForm.addEventListener('submit',function(e) {

            let Prénom = document.getElementById('prénom');
            let Nom = document.getElementById('nom');
            let Email = document.getElementById('email');
            let téléphone = document.getElementById('téléphone');
            

             let myReg = /^[a-zA-Z-\s]+$/;

        if (Prénom.value ==""){
            let myErrorprénom = document.getElementById('erreurprénom');
     myErrorprénom.innerHTML = "Prénom est obligatoire !!";
     myErrorprénom.style.color = "red";
     
            e.preventDefault();// arrete la soumission de la formulaire
        } else if (myReg.test(Prénom.value) == false) {
            let myErrorprénom = document.getElementById('erreurprénom');
     myErrorprénom.innerHTML = "Veuillez entrer un prénom valide.";
     myErrorprénom.style.color = "red";
     
            e.preventDefault();
        }
        if (Nom.value ==""){
            let myErrornom = document.getElementById('erreurnom');
     myErrornom.innerHTML = "Nom est obligatoire !!";
     myErrornom.style.color = "red";
     
            e.preventDefault();// arrete la soumission de la formulaire
        } else if (myReg.test(nom.value) == false) {
            let myErrornom = document.getElementById('erreurnom');
     myErrornom.innerHTML = "Veuillez entrer un nom valide.";
     myErrornom.style.color = "red";
     
            e.preventDefault();
        }
        
        if (Email.value ==""){
            let myErroremail = document.getElementById('erreuremail');
           myErroremail.innerHTML = "Adresse-email est obligatoire !!";
           myErroremail.style.color = "red";
     
            e.preventDefault();
        }
             else if (Email.value.indexOf("@", 0) < 0)                 
    { 
       let myErroremail = document.getElementById('erreuremail');
       myErroremail.innerHTML = "Veuillez entrer une adresse mail valide.";
        myErroremail.style.color = "red";
        e.preventDefault();
    } 
   
            else if (Email.value.indexOf(".", 0) < 0)                 
    { 
        let myErroremail = document.getElementById('erreuremail')
        myErroremail.innerHTML = "Veuillez entrer une adresse mail valide.";
        myErroremail.style.color = "red";
        e.preventDefault();
    
    } 
    if (téléphone.value ==""){
            let myErrortéléphone= document.getElementById('erreurtéléphone');
     myErrortéléphone.innerHTML = " Le numéro de téléphone est obligatoire !!";
     myErrortéléphone.style.color = "red";
     
            e.preventDefault();}
        

  
        
    



        };)
    </script>
    
   <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>ENTREPRISE</h3>
          <a href="#">Marque</a>
          <a href="#">Code promo</a>
          <a href="#">Offre spéciale</a>
          <a href="#">Affilié</a>
          <a href="#">Carte du site</a>
         </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="./propos.php">A Propos de Nous</a>
          <a href="#">Politique de confidentialité</a>
          <a href="#">Terms & Conditions</a>
          <a href="./contact.php">Contactez-Nous</a>
          <a href="#">Notre Equipe</a>
         </div>
         <div class="footer-center">
          <h3>MON COMPTE</h3>
          <a href="#">Marque</a>
          <a href="#">Historique des commandes</a>
          <a href="#">Liste de Souhait</a>
          <a href="#">Newsletter</a>
          <a href="#">Politique de retour</a>
         </div>
         <div class="footer-center">
          <h3>CONTACTEZ-NOUS</h3>
          <div>
               <span>
                  <i class="fa fa-map-marker-alt"></i>
               </span>
               Avenue.2 Mars, Casablanca
          </div>
          <div>
               <span>
                  <i class="fa fa-envelope"></i>
               </span>
               contact@amethyst.com
          </div>
          <div>
               <span>
                  <i class="fa fa-phone"></i>
               </span>
               0522512230
          </div>
          <div>
               <span>
                  <i class="fa fa-paper-plane"></i>
               </span>
              Casablanca, Maroc
          </div>
      </div>
    </div>
    <p class="copyright">&copy; 2022 - Amethyst.ma</p>
    <a href="" class="cgv">Conditions générales de ventes</a>
  </footer>
  
</body>
</html>