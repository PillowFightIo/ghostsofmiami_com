<!doctype html>
<html lang="en">
<head>
    <title>Ghosts of Miami</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>

<body>

<header>
    <h1>Ghosts of Miami</h1>
    <a href="../en" class="button">English</a>
</header>

<div id="content">
    <div id="title">
        <h1>Ghosts of Miami</h1>
        <a href="#latest" class="dev-blog">Read the latest from the devs</a>
    </div>

    <div id="intro" class="section">
        <div class="container">
            <p><span class="drop-caps">Miami, 1986</span> Como promedio, una persona es asesinada cada d&iacute;a en Dade County. Entre carteles de drogas, la epidemia del SIDA y una inundaci&oacute;n de inmigrantes indocumentados, cientos m&aacute;s se desvanecer&aacute;n, nunca visto otra vez. <strong>Chelo busca los que han sido olvidados.</strong></p>
            <p>Ayuda Chelo a explorar las playas y los callejones de Miami en su tiempo m&aacute;s peligroso, tomando sus primeros casos como una investigadora privada. Tienes que elegir: &iquest;vas a pagar por debajo de la mesa al traficante turbio, o golpearlo para las respuestas? Cuando un extra&ntilde;o y guapo toca a la puerta de Chelo, &iquest;te ayudar&aacute; con la investigaci&oacute;n o te distraer&aacute; a otros campos? &iquest;Y podr&iacute;as encontrar su padre perdido, quien desapareci&oacute; sin ninguna palabra hace casi diez a&ntilde;os?</p>


            <div class="vendors">Llegando en 2016 a<br>
                <div class="logo">Steam</div>
                <div class="logo">iOS</div>
                <div class="logo">Google Play</div>
                <div class="logo">Itch.io</div>
                <div class="languages">en ingl&eacute;s, espa&ntilde;ol, o chino tradicional.</div>
            </div>

        </div>
    </div>

    <div id="latest" class="section">
<?php
    $request_url = 'http://ghostsofmiami.tumblr.com/api/read?type=post&start=0&num=1';
    $rss = new DOMDocument();
    $rss->load($request_url);
    $feed = [];
    foreach ($rss->getElementsByTagName('post') as $node) {
        $post = [
            'title' => $node->getElementsByTagName('regular-title')->item(0)->nodeValue,
            'post' => $node->getElementsByTagName('regular-body')->item(0)->nodeValue,
            'date' => $node->getAttribute('date-gmt')
        ];
        array_push($feed, $post);
    }
    $title = $feed[0]['title'];
    $post = $feed[0]['post'];
    $date = date('n.d.Y', strtotime($feed[0]['date']));
?>
        <div class="container">
        <h2>Updates</h2>
        <h3><?php echo $title; ?></h3>
        <span class="date"><?php echo $date; ?></span>
        <div class="post-content"><?php echo $post; ?></div>
        </div>
    </div>

    <div id="characters" class="section">
        <div class="container">
            <div class="character">
                <div id="chelo" class="portrait"><img src="../img/chelo-shape.png"></div>
                <div class="profile">
                    <h3>Consuelo &ldquo;Chelo&rdquo; Mart&iacute;nez</h3>
                    <div class="attribute"><span class="label">Edad:</span> 23</div>
                    <div class="attribute"><span class="label">Ocupaci&oacute;n:</span> Encontrando desaparecidos</div>
                    <div class="attribute"><span class="label">Preocupaci&oacute;n:</span> Encontrando apetitositos</div>
                    <div class="attribute"><span class="label">Objectivo de vida:</span> Ayudar su padre y otros quienes han desaparecido reunir con sus familias. </div>
                    <div class="quote">&ldquo;&iquest;Nadie se desvanece sin dejar rastro, verdad&hellip;?&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="luci" class="portrait"><img src="../img/luci-shape.png"></div>
                <div class="profile">
                    <h3>Luciana &ldquo;Luci&rdquo; Escobar</h3>
                    <div class="attribute"><span class="label">Edad:</span> 24</div>
                    <div class="attribute"><span class="label">Ocupaci&oacute;n:</span> VIP</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> los tacones perfectos</div>
                    <div class="attribute"><span class="label">Objectivo de vida:</span> Ser digna del apellido y la reputaci&oacute;n de Escobar.</div>
                    <div class="quote">&ldquo;No yo enga&ntilde;ar&iacute;a tu cara bonita para aun el esp&iacute;a m&aacute;s hermoso.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="ethan" class="portrait"><img src="../img/ethan-shape.png"></div>
                <div class="profile">
                    <h3>Ethan Brown</h3>
                    <div class="attribute"><span class="label">Edad:</span> 21</div>
                    <div class="attribute"><span class="label">Ocupaci&oacute;n:</span> Param&eacute;dico</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> Ser un buen hijo a su mama.</div>
                    <div class="attribute"><span class="label">Objectivo de vida:</span> Alg&uacute;n d&iacute;a asistir a la escuela de enfermer&iacute;a, por lo que puede mantener una familia propia.</div>

                    <div class="quote">&ldquo;Estoy listo a ayudar! Solo&hellip; dime qu&eacute; puedo hacer.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="tala" class="portrait"><img src="../img/tala-shape.png"></div>
                <div class="profile">
                    <h3>Tala Nassiri</h3>
                    <div class="attribute"><span class="label">Edad:</span> 18</div>
                    <div class="attribute"><span class="label">Ocupaci&oacute;n:</span> Estudiante de secundaria</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> La banda de Chelo desde cuando ella fue en secundaria</div>
                    <div class="attribute"><span class="label">Objectivo de vida:</span> Estar en una pel&iacute;cula popular as&iacute; que su padre, un prisionero pol&iacute;tico en Ir&aacute;n, la puede ver.</div>
                    <div class="quote">&ldquo;&iquest;Has visto el &uacute;ltimo episodio de Miami Vice? No podemos hablar hasta que haya.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="janet" class="portrait"><img src="../img/janet-shape.png"></div>
                <div class="profile">
                    <h3>Janet Lessig</h3>
                    <div class="attribute"><span class="label">Edad:</span> 30</div>
                    <div class="attribute"><span class="label">Ocupaci&oacute;n:</span> Travestido profesional</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> El rizo de cabello perfecto</div>
                    <div class="attribute"><span class="label">Objectivo de vida:</span> Solamente a cuidarse y otros como ella.</div>
                    <div class="quote">&ldquo;Soy el Pr&iacute;ncipe Azul que has estado buscando&mdash;que s&oacute;lo has estado buscando en la direcci&oacute;n equivocada.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="richard" class="portrait"><img src="../img/richard-shape.png"></div>
                <div class="profile">
                <h3>&ldquo;Richard&rdquo;</h3>
                    <div class="attribute"><span class="label">Edad:</span> 52</div>
                    <div class="attribute"><span class="label">Ocupaci&oacute;n:</span> G&aacute;ngster, caballero</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> Ser misterioso</div>
                    <div class="attribute"><span class="label">Objectivo de vida:</span> &iquest;?</div>
                    <div class="quote">&ldquo;Tal vez nunca va a estar listo para m&iacute;.<br>Pero cuando est&aacute;s, llama.&rdquo;</div>
                </div>
            </div>
        </div>
    </div>

    <div id="team" class="section">
        <div class="container">
            <div class="credit">
                <h3>Autor y productor</h3>
                <span class="name">Jo Fu</span>
            </div>
            <div class="credit">
                <h3>Director Creativo</h3>
                <span class="name">Conrad Kreyling</span>
            </div>
            <div class="credit">
                <h3>Artista de Sprites</h3>
                <span class="name">Cassie Freire</span>
            </div>
            <div class="credit">
                <h3>Artista de Fondos</h3>
                <span class="name">Iasmin Omar Ata</span>
            </div>
            <div class="credit">
                <h3>Artista y Programador de UX</h3>
                <span class="name">Kim Nguyen</span>
            </div>
            <div class="credit">
                <h3>Consultores y Editores del Cuento</h3>
                <span class="nane">Stella Ramirez</span>
                <span class="name">Iasmin Omar Ata</span>
                <span class="name">Ryan Murphy</span>
            </div>
            <div class="credit">
                <h3>M&uacute;sica</h3>
                <span class="name">Casey Yates</span>
            </div>
            <p>GHOSTS OF MIAMI se presenta por PILLOW FIGHT GAMES, del equipo de desarrollo que te trajo WE KNOW THE DEVIL.</p>
        </div>
    </div>

</div>

<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        var mainTitle = $('#title');
        var mainTitleHeight = mainTitle.css('height');
        mainTitleHeight = mainTitleHeight.substr(0, mainTitleHeight.length -2);
        var headerTitle = $('header h1');

        $(window).scroll(function() {
            if ($(window).scrollTop() > (mainTitleHeight/2)) {
                headerTitle.addClass('visible');
            } else {
                headerTitle.removeClass('visible');
            }
        });

        $('.pause-toggle').click(function() {
            $(this).toggleClass('fa-play-circle-o');
            $(this).toggleClass('fa-pause-circle-o');
        });
    });
})(jQuery)

</script>

</body>
</html>
