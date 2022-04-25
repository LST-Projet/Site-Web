<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="./panier.css">
    <script src="https://kit.fontawesome.com/8afb80b173.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <title>Page panier</title>
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
  
    <li><span id="menu_catégorie"><a href="./index.php" class="">Accueil</a></span>
    <li><span id="menu_catégorie"><a href="./categ.php" class="">Catégorie</a></span></li>
    <li><span class="rouge"><a href="./propos.php" class=""> APropos</i></a></span>
    <li><span id="menu_catégorie"><a href="./contact.php" class="">Contact</a></span>
   </ul>
   </div>
</nav>
</header>
</section>
<section id="basket" class="flex-column-centre">
    <!-- titre panier -->
     <div id="blocTitrePanier" class="flex-start size80">
         <h2 id="titre-panier">
             VEUILLIEZ AJOUTER DES PRODUITS AU PANIER <br/>
             PAS DE PRODUIT
         </h2>
     </div>
     <!-- fiche complete carte -->
     <div id="basket-fich" class="felx-around">
         <!-- carte panier -->
         <div id="injectJs">
             <div id="basketProduit"class="felx-around" >
             <div id="blocImage">
                 <img src="./image/maron.jpeg" alt="image feuille"/>
             </div>
             <div id="blocProduit" class="flex-column-around">
              <h2>Produit</h2>
              <p>stylos</p>
              <p>0 £</p>
              <p>Ref:000000000</p>
              <p><i class="fas fa-truck" style="color:#bb85ab"></i>En Stock</p>
             </div>
             <div id="bloc-change-produit" class="flex-around">
                  <div class="flex-centre">
                      <button class="bouton-moins">-</button>
                      <span class="produit-quantité">0</span>
                      <button class="bouton-plus">+</button>
                  </div>
                  <div><p>0 £</p></div>
                  <div><i class="fa fa-trash"></i></div>
             </div>
           </div>
         </div>
     <!-- récap panier -->
     <div id="basket-recap">
         <h2 class="titre-recap rouge">Mes Achats</h2>
         <div class="flex-around">
             <p id="nbArticle">0Articles</p>
             <p id="prixArticle">0</p>
       </div>
       <div class="flex-around">
           <p>Livraison</p>
           <p id="prixLivraison">Offert</p>
       </div>
       <div class="trait-design"></div>
       <div class="flex-around">
           <h3>Total TTC</h3>
           <p id="prixTtc">0</p> 
       </div>
       <div>
           <a id="continueCommande" class="flex-around" href="#">Continuer<i class="fas fa-chevron-right"></i></a>
       </div>
       <div>
           <p><i class="fas fa-truck "style="color:#5F7E5D"></i>  Livraison sous 2 semaines</p>
       </div>
     </div>
     </div>
     <div>
         <form id="formulaireContact" action="file.php" method="post">
             <h2 class="flex-centre">Informations Personnelles</h2>
             <div class="nom-prenom flex-centre">
                 <div classe="flex-column-start">
                     <label for="prenom" class="flex-start">Prénom</label>
                     <input class="champ" id="prenom" type="text">
                     <span id="errorPrenom" ></span>
                 </div>
                 <div classe="flex-column-start">
                    <label for="nom" class="flex-start">Nom</label>
                    <input class="champ" id="nom" type="text">
                    <span id="errorNom" ></span>
                </div>
            </div>
            
            <div class="flex-column-centre">
                <div id="adress"classe="flex-column-start">
                    <label for="adresse" class="flex-start">Adresse</label>
                    <input class="champ" id="adresse" type="text">
                    <span id="errorAdresse"></span>
                </div>
                <div id="tel" classe="flex-column-start">
                    <label for="tele" class="flex-start">Tele</label>
                    <input class="champ" id="tele" type="number" >
                    <span id="errorTele"></span>
                </div>
                <div id="mail" classe="flex-column-start">
                    <label for="email" class="flex-start">Email</label>
                    <input class="champ" id="email" type="mail">
                    <span id="errorEmail"></span>
                </div>
                <button  class="bouton-commande" typr="submit">Commander</button>
            </div>
         </form>
     </div>
</section>
<script>
        let myForm = document.getElementById('formulaireContact');
        
        myForm.addEventListener('submit',function(e) {
            let Prénom = document.getElementById('prenom');
            let Nom = document.getElementById('nom');
            let Adresse = document.getElementById('adresse');
            let téléphone = document.getElementById('tele');
            let Email = document.getElementById('email');
           
            

             let myReg = /^[a-zA-Z-\s]+$/;

        if (Prénom.value ==""){
            let myErrorprénom = document.getElementById('errorPrenom');
     myErrorprénom.innerHTML = "  Prénom est obligatoire !!";
     myErrorprénom.style.color = "red";
     
            e.preventDefault();// arrete la soumission de la formulaire
        } else if (myReg.test(Prénom.value) == false) {
            let myErrorprénom = document.getElementById('errorPrenom');
     myErrorprénom.innerHTML = "Veuillez entrer un prénom valide.";
     myErrorprénom.style.color = "red";
     
            e.preventDefault();
        }
        
        if (Nom.value ==""){
            let myErrornom = document.getElementById('errorNom');
     myErrornom.innerHTML   = "      Nom est obligatoire !!";
     myErrornom.style.color = "red";
     
            e.preventDefault();// arrete la soumission de la formulaire
        } else if (myReg.test(Nom.value) == false) {
            let myErrornom = document.getElementById('errorNom');
     myErrornom.innerHTML =  "Veuillez entrer un nom valide.";
     myErrornom.style.color = "red";
     
            e.preventDefault();
        }
        
        if (Email.value ==""){
            let myErroremail = document.getElementById('errorEmail');
    myErroremail.innerHTML = "L'adresse-email est obligatoire !!";
           myErroremail.style.color = "red";
     
            e.preventDefault();
        }
             else if (Email.value.indexOf("@", 0) < 0)                 
    { 
       let myErroremail = document.getElementById('errorEmail');
       myErroremail.innerHTML = "Veuillez entrer une adresse mail valide.";
        myErroremail.style.color = "red";
        e.preventDefault();
    } 
   
           else if (Email.value.indexOf(".", 0) < 0)                 
    { 
        let myErroremail = document.getElementById('errorEmail')
        myErroremail.innerHTML = "Veuillez entrer une adresse mail valide.";
        myErroremail.style.color = "red";
        e.preventDefault();
    
    } 
    if (Adresse.value ==""){
            let myErroradress= document.getElementById('errorAdresse');
     myErroradress.innerHTML = " L'adresse est obligatoire !!";
     myErroradress.style.color = "red";
     
            e.preventDefault();}
    if (téléphone.value ==""){
            let myErrortéléphone= document.getElementById('errorTele');
     myErrortéléphone.innerHTML = " Le numéro de téléphone est obligatoire !!";
     myErrortéléphone.style.color = "red";
     
            e.preventDefault();}
        

  
        
    



        });
    </script>

</body>
</html>