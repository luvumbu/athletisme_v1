<div id="inscription">
    <div>
        <h1>
            Inscription
        </h1>

        <label for="prenom">Prenom</label>
        <input type="text"  class="input_" id="prenom">

        <label for="Nom">Nom</label>
        <input type="text"  class="input_" id="Nom">


        

    
        <p style="margin-top:15px">Sex</p>

 
 
<div id="sex_personne">
    <input type="radio" id="huey" name="sex" value="Homme"  checked><label for="">Homme</label>
    <input type="radio" id="huey" name="sex" value="Femme"  ><label for="">Femme</label>
</div>
 
 
 
<br>

<label for="Nom">Date de naissance</label>
<input type="date"  class="input_" id="Nom"  max="2010-01-01">

<label for="Adresse mail">Adresse mail</label>
<input type="text"  class="input_" id="Adresse mail">


<div id="border_bottom"></div>
<label for="Identifiant">Identifiant</label>
<input type="text"  class="input_" id="Identifiant">


<label for="motdepasse">Mot de passe</label>
<input type="text"  class="input_" id="motdepasse">

 <div class="sinscrire">
     S'inscrire
 </div>



       
  

 
    </div>
</div>

<style>
    #sex_personne {
        display:flex; 
        justify-content:space-around ; 
    }
    #inscription {
        width:400px; 
        margin:auto ; 
        border:1px solid black ; 
        margin-top:50px; 
        padding:20px; 
    }
    #inscription h1 {
        margin-bottom:25px; 
    }
    #inscription .input_ {
        width:100% ; 
        margin-bottom:5px;
    }
    #border_bottom {
        border-bottom:3px solid black ;
        height:5px; 
        margin-bottom:10px ; 
        margin-top:10px ; 
        width:100% ; 
    }
    .sinscrire {
        background-color:brown ; 
        padding:15px; 
        text-align:center ; 
        margin-top:25px; 
        color:white ; 
    }
</style>