# antonlihn.dk

Dette er, tæmmelig sikkert ufuldstændig, dokumentation for brug af antonlihn temaet til WordPress. Temaet er ultra lightweight og supporterer ikke posts eller widgets men kun pages og en enkelt menu.

## Sider
Der er et par enkelte finurligheder ved brug af siderne som lige bør have en kort forklaring tilknyttet.

### Forsiden
På forsiden er det muligt at vælge et billede som bliver vist. Dette gøres i "Page Thumbnail"-boksen. Billedet skal have dimensionerne `800px x 600px`.

### Alle de andre sider…

#### Indsættelse af billeder
Når et billede skal indsættes, vælges det fra WordPress' billedvælger. For at billederne skal vises rigtigt på siden, er det nødvændigt at indsætte et `div` tag i HTML'en, således at der kommer til at stå noget i denne retning når HTML-tabben er valgt i WordPress editoren:

	<div><a href="http://localhost:8888/Sites/antonlihn.dk/wp-content/uploads/2012/10/anton.jpg"><img class="wp-image-71 alignright" title="anton" src="http://localhost:8888/Sites/antonlihn.dk/wp-content/uploads/2012/10/anton-300x249.jpg" alt="" width="270" height="224" /></a></div> 

#### Indsættelse af YouTube videoer
