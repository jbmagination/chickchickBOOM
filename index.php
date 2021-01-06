<?php
$sprache = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$kennung = substr($sprache,0,5); // Wichtig ist die Reihenfolge der IF-Abfragen - erst die speziellen für eine Sprach-Länderkennung, dann die allgemeine Sprachkennung!
	if( eregi('de-de',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=deDE';
	elseif( eregi('de-lu',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=deDE';
	elseif( eregi('^de',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=deDE';
	elseif( eregi('^it',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enGB';
	elseif( eregi('^fr',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enGB';
	elseif( eregi('en-CA',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enUS';
	elseif( eregi('en-US',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enUS';
        elseif( eregi('en-gb',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enGB';
	elseif( eregi('^en',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enUS';
	elseif( eregi('^es',$kennung)) $weiterleitung = 'chickchickBOOM.html?l=enGB';
	else $weiterleitung = 'chickchickBOOM.html?l=enUS';
	
	$c = $_GET['c'];	
	
	if ( isset( $c ) )
	{
		$weiterleitung .= '&c='.$c;
		
		$p = $_GET['p'];	
		
		if ( isset( $p ) )
		{
			$weiterleitung .= '&p='.$p;
			
			$p1 = $_GET['p1'];	
		
			if ( isset( $p1 ) )
			{
				$weiterleitung .= '&p1='.$p1;
			}
			
		}
		
	}
	
	header ("location: $weiterleitung");
	?>
