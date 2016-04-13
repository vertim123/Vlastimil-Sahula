<?php
  /**
 * apple class  | jablko ma souradnice x a y druh jablka cervene a zelene
 * @autor Vlastimil Sahula
 */ 
class apple {
 /**
  * @var array $colors | v poly jsou dva prvky green a red 
  */
 protected static $colors= array(1=>'green','red');
 /**
  * @var string $color | zde je vlozen jened z nahodne zvolenych prvku pole $colors
  */ 
 protected $color;
 /**
  * @var int $x      | souoradnice jablka
  * @var int $y      |
  */ 
 protected $x;
 protected $y;
 /**
  * @method __construct()  | po vytvoreni objetku se na definujou promene 
  * @return int | x a y se nastavuje pomoci rand rosah x 1-10 y 1-20 (obdelnik)
  * @return string | nastavuje color 50% sance na red nebo green
  */           
 public function __construct(){
  if (in_array($color,self::$colors)) {
        $this->color = $color;
        } else {
        $this->color = self::$colors[rand(1, count(self::$colors))];
        }
   $this->x= rand(1,10);
   $this->y= rand(1,20); 
     }
  /**
  * @method int getxa()  | funkci zde mame kvuli volani z vensi (getter)
  * @return int  |varaci instancni promenou $x        
  */
public function getxa() {
return $this->x;
       }
  /**
  * @method int getya() | funkci zde mame kvuli volani z vensi (getter)
  * @return int     |varaci instancni promenou $y
  */       
public function getya() {
return $this->y;
       }
  /**
  * @method string getcolor()  | funkci zde mame kvuli volani z vensi (getter)
  * @return string   |varaci instancni promenou $color
  */            
public function getcolor() {
return $this->color;
       }
  /**
  * @method  newset() | ma stejne funkce jako construktor slouzi pro reset promenych
  * 
  */
public function newset(){       
  if (in_array($color,self::$colors)) {
        $this->color = $color;
        } else {
        $this->color = self::$colors[rand(1, count(self::$colors))];
        }
   $this->x= rand(1,10);
   $this->y= rand(1,20);
   } 
  /**
  * @method show($x,$y) | tiskne obrazek pokud plati podminka nastavuje $name
  * @return string | vraci obrazek ve slozce gfx s priponou .png podle promenne $name
  */       
public function show($x,$y){
if( ($x==$this->x) && ($y==$this->y) ){
       $name ='';
       if($this->color=='red'){
       $name ='red-apple';
        } else {
      $name ='green-apple';
        }
        return '<img src="gfx/'.$name.'.png">';
       }     
      } 
  
      
 }

?>