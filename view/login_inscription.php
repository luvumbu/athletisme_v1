<div id="login_inscription">
            <div id="information_etat_connexion"></div>
    <div class="login_inscription_v1">
        <h1>
            Connexion
        </h1>

        <div class="login_inscription_v2">
            <input type="text" placeholder="identifiant" >
            <input type="text" placeholder="mot de passe" >
            <div class="seconnecter">Se connecter</div>
        </div>
        <div class="border_bottom"></div>
        <h1>
            Inscription
        </h1>
        <div id="login_inscription_user">
                <i class="fa fa-user-plus" onclick="inscription_()"></i>
        </div>
        
    </div>
</div>

<style>
#login_inscription {
    padding-top:150px; 
    padding-bottom:150px; 
    background-image: url("https://cdn.pixabay.com/photo/2016/11/29/03/27/track-and-field-1867053_960_720.jpg") ; 
    width:80%;
    margin:auto; 
    background-size:100%; 
    position: relative;
}
.alert_style{
    text-align:center ; 
    position:absolute ; 
     width:100%;
     margin:auto ; 
    top:0 ; 
}
.login_inscription_v1 {
    width:400px; 
    margin:auto; 
    background-color:white ; 
    padding:15px; 
    
}
 
.login_inscription_v2 input {
 width:100% ; 
 text-align:center ; 
 margin-bottom:5px; 
 border:1px solid #c5c5c7 ; 

}
#login_inscription h1:hover {
    
}
.seconnecter{
    padding:5px;
    background-color:brown ; 
    text-align:center ; 
    color:white; 
    transition:1s all ; 
    margin-top:15px; 
}
.fa-user-plus{
    border-radius:100%;
    padding:5px; 
}
.seconnecter:hover,.fa-user-plus:hover{
    cursor:pointer;
    transition:1s all;
    background-color:  blueviolet;
    
}
 
.border_bottom {
    border-bottom:1px solid #909193 ; 
    height:2px; 
    width:100%; 
    margin-bottom:10px; 
    margin-top:10px;   
}
#login_inscription_user {
    margin-top:25px ; 
    font-size:3em;
    text-align:center ; 
}
</style>