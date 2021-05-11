<?php

class Position {

    private $_xSize; 
    private $_ySize;
    private $_x;
    private $_y;
    private $_orientation;

    public function __construct($xSize,$ySize,$x,$y,$orientation)
    {
        $this->setXSise($xSize); // Initialisation xSize.
        $this->setYSise($ySize); // Initialisation ySize.
        $this->setX($x); // Initialisation x.
        $this->setY($y); // Initialisation y.
        $this->setOrientation($orientation); // Initialisation orientation.
    }

    public function setXSise($xSize)
    {
      if (!is_int($xSize)) // S'il ne s'agit pas d'un nombre entier.
      {
        trigger_error('xSize doit être un nombre entier', E_USER_WARNING);
        return;
      }    $this->_xSize = $xSize;
    }
      public function setYSise($ySize)
    {
      if (!is_int($ySize)) // S'il ne s'agit pas d'un nombre entier.
      {
        trigger_error('ySize doit être un nombre entier', E_USER_WARNING);
        return;
      }    $this->_ySize = $ySize;
    }
    public function setX($x)
    {
      if (!is_int($x)) // S'il ne s'agit pas d'un nombre entier.
      {
        trigger_error('x doit être un nombre entier', E_USER_WARNING);
        return;
      }    $this->_x = $x;
    }
    public function setY($y)
    {
      if (!is_int($y)) // S'il ne s'agit pas d'un nombre entier.
      {
        trigger_error('y doit être un nombre entier', E_USER_WARNING);
        return;
      }    $this->_y = $y;
    }
    public function setOrientation($orirentation)
    {
      if ($orirentation != 'N' AND $orirentation != 'O' AND $orirentation != 'W' AND $orirentation != 'S')
      {
        trigger_error('orientation doit être N ; O ; S ou W', E_USER_WARNING);
        return;
      }    $this->_orientation = $orirentation;
    }

    public function bouger($mouvement) // Une méthode augmentant l'attribut $experience du personnage.
    {
        if ($mouvement != 'A' AND $mouvement != 'D' AND $mouvement != 'G') {
            trigger_error('Le mouvement doit être A ; D ou G', E_USER_WARNING);
            return;    
        }
        echo $mouvement." ";
        if ($this->_orientation == 'N')  //NORD
        {
            if ($mouvement == 'A') {
                if ($this->_y < $this->_ySize){
                    $this->_y += 1;
                }
                return;        
            }
            if ($mouvement == 'D') {
                $this->_orientation = 'E';
                return;    
            }
            if ($mouvement == 'G') {
                $this->_orientation = 'W';
                return;    
            }
        }
        if ($this->_orientation == 'E')  //EST
        {
            if ($mouvement == 'A') {
                if ($this->_x < $this->_xSize){
                    $this->_x += 1;
                }
                return;        
            }
            if ($mouvement == 'D') {
                $this->_orientation = 'S';
                return;    
            }
            if ($mouvement == 'G') {
                $this->_orientation = 'N';
                return;    
            }
        }
        if ($this->_orientation == 'W')  //WEST
        {
            if ($mouvement == 'A') {
                if ($this->_x > 0){
                    $this->_x -= 1;
                }
                return;        
            }
            if ($mouvement == 'D') {
                $this->_orientation = 'N';
                return;    
            }
            if ($mouvement == 'G') {
                $this->_orientation = 'S';
                return;    
            }
        }
        if ($this->_orientation == 'S')  //SUD
        {
            if ($mouvement == 'A') {
                if ($this->_y > 0){
                    $this->_y -= 1;
                }
                return;        
            }
            if ($mouvement == 'D') {
                $this->_orientation = 'W';
                return;    
            }
            if ($mouvement == 'G') {
                $this->_orientation = 'E';
                return;    
            }
        }
    }

    public function voirPosition() 
    {
        echo ' => Les nouvelles coordonnées sont: x = '.$this->_x.'; y = '.$this->_y.'; Orientation = '.$this->_orientation;
    }

}
?>

