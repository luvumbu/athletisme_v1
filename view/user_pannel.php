<div id="section_1" onclick="section_1_click()">
        <div class="section_2">
            <div>
                Connexion
            </div>
            <div>
                Inscription
            </div>
        </div>
        <div class="section_1_1">
            <i class="fa fa-user"></i>
        </div>
    </div>

    
<style>
    .form_choix{
         width:40%; 
         margin:auto; 
         text-align: center;       
     }
     .class_connexion:hover,.class_inscription:hover{
        cursor:pointer ; 
        background-color: white;
        color:brown; 
        cursor:pointer; 

     }
     #section_1{
         width:330px; 
         background-color: brown;
         color:white; 
         margin: auto;
         margin-top: 150px;
     }
     #section_1 i {
         text-align: center;
     }
     .section_1_1 {
        
         width: 10%;
         margin: auto;
         font-size: 2em;
     }
     .section_2{
         display: flex;
         justify-content: space-around;
     }
     .section_2 div{
         padding: 15px;
         transition: 1s all;

     
     }

     .section_2 div:hover{
         padding: 15px;
          background-color: blueviolet;
          cursor: pointer;
          transition: 1s all;
          cursor:pointer ; 
     }
     .section_2:hover{
         cursor:pointer ; 
     }
</style>
