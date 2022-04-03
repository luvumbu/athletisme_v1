/*
function showCoords(event) {
 
    if(montre==true){
        var x_position = event.clientX;
        var y_position = event.clientY;
        var coor = "X coords: " + x_position + ", Y coords: " + y_position;
       document.getElementById("body").className="cursor-pointer";
        console.log(coor);
 

 var ok = new Information("model/class/php/showCoords.php"); 
 
 // création de la classe 

 ok.add("showCoords_","1"); // ajout de l'information pour lenvoi 
 ok.add("x_position",x_position); // ajout de l'information pour lenvoi 
 ok.add("y_position", y_position); // ajout d'une deuxieme information denvoi  
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 
 
    }
 
  }
  */
 


  
 
 
/*

  
  var body = document.getElementsByTagName("body")[0]; 
  body.setAttribute("class", "democlass"); 
  body.setAttribute("style", "margin:0;padding:0"); 
  body.setAttribute("onmousemove", "showCoords(event)"); 
 
*/




function showCoords(event) { 
     
     var x_position = event.clientX;
     var y_position = event.clientY;
     var coor = "X coords: " + x_position + ", Y coords: " + y_position;
   
     /*console.log(coor);
console.log("ok") ; 
*/
let width_taille_page = window.innerWidth;
let height_taille_page = window.innerHeight;

 
// expected output: "The word "fox" is in the sentence"
//document.getElementById("demo").innerHTML = "Width: " + w + "<br>Height: " + h;
    /*
var ok = new Information("model/class/php/showCoords.php");  
// création de la classe 
ok.add("showCoords_","1"); // ajout de l'information pour lenvoi 
ok.add("x_position",x_position); // ajout de l'information pour lenvoi 
ok.add("y_position", y_position); // ajout d'une deuxieme information denvoi

ok.add("width_taille_page", width_taille_page); // ajout d'une deuxieme information denvoi
ok.add("height_taille_page", height_taille_page); // ajout d'une deuxieme information denvoi

//console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 
*/

}
  
  function clearCoor() {
   
    console.log("");
  }
  function showCoords_click(){
/*
    if(montre==true){
        var x_position = event.clientX;
        var y_position = event.clientY;
        var coor = "X coords: " + x_position + ", Y coords: " + y_position;
       document.getElementById("body").className="cursor-pointer";
        console.log(coor);
 

 var ok = new Information("model/class/php/showCoords.php"); 
 
 // création de la classe 

 ok.add("showCoords_","2"); // ajout de l'information pour lenvoi 
 ok.add("x_position",x_position); // ajout de l'information pour lenvoi 
 ok.add("y_position", y_position); // ajout d'une deuxieme information denvoi  
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 


    }
 */
  }
  
 function header_menu_click(_this){
    
   var source ="view/"+_this.title+".php" ; 
   Ajax("app_section",source);
 }
 // Ajax("app_section","view/home.html");



 function inscription(){
  var input_inscription  = document.getElementById("input_inscription").value ; 
 
  console.log("Debut  aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"); 

    var source ="view/input_inscription.php" ; 

  var ok = new Information(source); // création de la classe 
  ok.add("input_inscription", input_inscription); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  console.log("fin  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");

  setTimeout(function() {
    Ajax("information_envoie","view/input_inscription_result.php");
  
  }, 250);

 }


 function connexion(){
  var input_mail  =     document.getElementById("input_mail").value ; 
  var input_password  = document.getElementById("input_password").value ; 
 
  console.log("Conexion start  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"); 

    var source ="view/input_connexion.php" ; 

  var ok = new Information(source); // création de la classe 

  ok.add("input_mail", input_mail); // ajout de l'information pour lenvoi 
  ok.add("input_password", input_password); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  console.log("End connexion !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");




 

  setTimeout(function() {
    console.log("information envoie") ; 
    Ajax("information_envoie","view/input_connexion_result.php");
  
  }, 250);
  

 }



 // fonction captures ici 

 function section_1_click(){      
  Ajax("app_section","view/login_inscription.php");

}
 function inscription_(){
  Ajax("app_section","view/inscription.php"); 
 }

 function action_header2(_this) {
    Ajax("app_section","view/"+_this.title+".php"); 
 }


 function recherche_info(str) {
   console.log(str.title) ; 
 


    
    if (str.length == 0) {
    //  document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           
          console.log(this.responseText) ; 
        }
      };
      xmlhttp.open("GET", "src/data/get_result_villes_nom.php?q=" + str, true);
      xmlhttp.send();
    }
    
 
  }

function asyncro(id,source,str) { // affiche resultat dans le idi smart recherche 
  if (str.length == 0) {
    document.getElementById(id).innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(id).innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", source + str, true);
    xmlhttp.send();
  }
  
}


       var type_search_variable_initial ;

  function type_search(_this){
    type_search_variable_initial =_this.title ;
    
     asyncro("txtHint","src/data/"+_this.title+".php?q=",_this.value) ; 
  }
  function my_name_is_result(_this) {
 
  /*  
     var ok = new Information("model/class/php/get_cookie_creation_info_header.php"); // création de la classe 
    ok.add("type_search_variable_initial", type_search_variable_initial); // ajout de l'information pour lenvoi 
    ok.add("value", _this.title); // ajout d'une deuxieme information denvoi  
     
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
   */ 
  console.log("Rien") ; 
  }
 