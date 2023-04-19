<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="css/styles.css"> 
    <title>Carta</title>
    
</head>
<body>
    <h1>Asador El rey de las carnes</h1>
    <div class="row">
        <div class="column1"></div>
    </div>

    <div class="row">
        <div class="column60"> 
            <div class="column2">
                <?php
                //conexion al xml
                $carta="carta.xml";
                $xml = simplexml_load_file('./xml/carta.xml');
                ?>
                <h2>Entrantes</h2>
                    
                <?php
                    
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {
                        if ($plato['tipo']=='Entrantes') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                            
                            
                            if ($plato->nombre=='Patatas Bravas y alioli'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Calamares a la Andaluza'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------ ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Croquetas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Ensalada'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Jamón'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                             
                            echo"<br>";
                            echo"<br>";                                             
                        }                       
                            
                    }
                   
                    
                    
                ?>
                    <h2>1r Plato</h2>
                <?php
                    
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {

                        if ($plato['tipo']=='1r Plato') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                           
                            
                            if ($plato->nombre=='Paella Mixta'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Canelones'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Espaguetis a la Boloñesa'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------ ";                                
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Caldo gallego'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Cocido'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }         
                              
                            echo"<br>";
                            echo"<br>";          
                                                    
                        } 
                    }                     
                ?>
            </div>
            <div class="column2_2">
                <?php
                    //conexion al xml
                    $carta="carta.xml";
                    $xml = simplexml_load_file('./xml/carta.xml');
                ?>
                   <h2>Carnes</h2>
                
                <?php
                   echo "<br>";                   
                   foreach ($xml->plato as $plato) {
                        
                       if ($plato['tipo']=='Carnes') {
                            echo "<span class='nombre'>{$plato->nombre}</span>"; 
                                                    
                            
                           if ($plato->nombre=='Pechuga'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------------------------------- ";
                                echo "$plato->precio"; 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";                                
                                echo "<span class='calorias2'>{$plato->calorias}</span>";                     
                                
                           }  
                           else if ($plato->nombre=='Secreto'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -------------------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                           }
                           else if ($plato->nombre=='Chuletas de cerdo'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------ "; 
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                           }
                           else if ($plato->nombre=='Entraña'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------------- ";
                                echo ($plato->precio);                                 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                           }
                           else if ($plato->nombre=='Chuletón'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------------ ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                           }                                                     
                                                     
                           echo"<br>"; 
                           echo"<br>";                      
                                                
                        }                       
                            
                       
                       
                    }                   
                    
                ?>
                    <h2>Postres</h2>
                    
                <?php
                
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {
                        if ($plato['tipo']=='Postres') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                            
                            
                            if ($plato->nombre=='Sorbete de limon'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Tarta de queso'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Pan de Calatrava'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Crema catalana'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" --------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Pudding'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------- ";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }  
                             
                            echo"<br>";  
                            echo"<br>";                             
                            
                            
                        } 
                                            
                            
                    }
                    
                   
                    echo"<h2>Alérgenos</h2>" 

                                           
                ?>
                <br> 
                <img src="./img/gluten.png" alt="" ><p>Contiene gluten</p>
                <br>
                <br>   
                <img src="./img/huevo.png" alt="" > <p>Contiene huevo</p>
                <br>
                <br> 
                <img src="./img/leche.png" alt=""  ><p>Contiene leche</p>
                <br>
                <br>  
                <img src="./img/soja.png" alt="" > <p>Contiene soja</p>
                <br>
                <br>
                <img src="./img/molusco.png" alt="" > <p>Contiene molusco</p>
                <br>
                <br>  
                <img src="./img/sulfito.png" alt="" >  <p>Contiene sulfito</p>
                <br>
                <br>
                <img src="./img/pescado.png" alt="" > <p>Contiene pescado/marisco</p>
                <br>
                <br> 
                <img src="./img/cacahuete.png" alt="" > <p>Contiene cacahuete</p>
               

                
            </div> 
        </div>         
    </div>    
</body>
</html>

