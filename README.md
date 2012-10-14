# antonlihn.dk

Dette er, temmelig sikkert ufuldstændig, dokumentation for brug af antonlihn temaet til WordPress. Temaet er ultra lightweight og supporterer ikke posts eller widgets men kun pages og en enkelt menu.

## Sider
Der er et par enkelte finurligheder ved brug af siderne som lige bør have en kort forklaring tilknyttet.

### Forsiden
På forsiden er det muligt at vælge et billede som bliver vist som baggrund. Dette gøres i "Featured Image"-boksen. Billedet skal have det bizzare format `780px x 585px`.

### Alle de andre sider…

#### Indsættelse af billeder
Når et billede skal indsættes, vælges det fra WordPress' billedvælger. For at billederne skal vises rigtigt på siden, er det nødvændigt at indsætte et `div` tag i HTML'en, således at der kommer til at stå noget i denne retning når HTML-tabben er valgt i WordPress editoren:

	<div><a href="http://localhost:8888/Sites/antonlihn.dk/wp-content/uploads/2012/10/anton.jpg"><img class="wp-image-71 alignright" title="anton" src="http://localhost:8888/Sites/antonlihn.dk/wp-content/uploads/2012/10/anton-300x249.jpg" alt="" width="270" height="224" /></a></div> 

#### Embedding af YouTube video
Når en YouTube video embeddes skal den have formatet 718 x 405. Det sættes direkte i embed koden:

	<iframe width="718"" height="405" src="http://www.youtube.com/embed/c7BFkOrlTVM" frameborder="0" allowfullscreen></iframe>


#### Indsættelse af skillelinie
Det er muligt at indsætte en horizontal super-lækker skillelinier imellem sektioner på en side (fx. for at angive en klar opdeling af nye artikler eller noget). Det gøres ved at indsætte HTML-tagget `<hr />` i HTML-tabben mellem de sektioner i indholdet man gerne vil have adskilt.

## Menu
Menuen kan administreres under "Apperance -> Menus".