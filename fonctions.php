<?php
function donneNbVisiteurs()
{





}



function donneCivilite($codeCivilite)
{
    
     
    
    
    
}

function donneSigne($moisJour)
{ $signe="";
    if ($moisJour <= 120 || $moisJour >= 1222)
    {
            $signe = "capricorne";
    }
    else
    {   
        if ($moisJour <= 218)
            $signe = "verseau";
           
        else
        {
              if ($moisJour <= 320)
                    $signe = "poissons";
              else
              {  if ($moisJour <= 420)
                    $signe = "belier";
                    
                 else
                    {   if ($moisJour <= 521)
                            $signe = "taureau";
                         
                        else
                         {  if ($moisJour <= 621)
                              $signe = "gemeaux";
                              
                            else
                            {  if ($moisJour <= 722)
                                   $signe = "cancer";
                                    
                               else
                               { if ($moisJour <= 923)
                                        $signe = "lion";
                                        
                                 
                               }
                            }
                         }
                    }
              }
        }
    }
    return $signe;

    
    
    
    
}


function donneContenuFichier($leSigne)
{
    
    
    
    
    
    
    
    
    
    
    
}






?>
