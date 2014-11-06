<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Bootstrap -->
    <link href="<?= get_stylesheet_directory_uri() ?>/sif.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center brand">
                    <h1>
                        <a href="<?= home_url() ?>"><img class="img-responsive" src="<?= get_stylesheet_directory_uri() ?>/images/sif.png"/></a>
                    </h1>
                    <h2>Simpósio Interdisciplinar Farroupilha</h2>
                </div>
            </div>
            <div class="row text-center markers">
                <div class="col-xs-12 col-sm-4"><i class="fa fa-map-marker"></i>Santa Maria, RS</div>
                <div class="col-xs-12 col-sm-4"><i class="fa fa-calendar"></i>21 e 22 de outubro</div>
                <div class="col-xs-12 col-sm-4"><i class="fa fa-microphone"></i>7 Palestrantes</div>
            </div>
            <div class="row text-center info">
                <div class="col-xs-10 col-xs-offset-1">
                    <h1>Verdades inconvenientes em Santa Maria</h1>
                    <h2>O Simpósio Interdisciplinar Farroupilha (SIF) apresenta-se como a materialização de todos os valores construídos pela rede internacional Estudantes Pela Liberdade para a comunidade do Rio Grande do Sul.</h2>
                </div>
            </div>
            <div class="row text-center links">
                <div class="col-xs-12">
                    <a href="http://www.eventick.com.br/sif14" target="_blank" class="btn btn-primary btn-lg">Inscreva-se</a>
                    <a href="#" class="btn btn-default btn-lg">Saiba mais</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container speakers">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Palestrantes</h1>
            </div>

            <?php $args = array('post_type' => 'palestrante', 'posts_per_page' => 10); $loop = new WP_Query($args); while ($loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-xs-12 col-sm-6 col-sm-4 col-lg-3">
                    <a href="" class="speaker text-center">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <img src="<?= $image[0] ?>" class="img-responsive"/>
                        <?php endif; ?>
                        <h2><?php the_title() ?></h2>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="bg-gray">
    <div class="container schedule">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Programação</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <h6>Sexta, 21 de novembro</h6>
                <div class="list-group">
                    <a class="list-group-item">
                        <h5 class="list-group-item-heading">Abertura</h5>
                        <p class="list-group-item-text">19h</p>
                    </a>
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Helio Beltrão</h5>
                        <p class="list-group-item-text"><span>A Crise de 2008 foi criada pelo Estado</span></p>
                        <p class="list-group-item-text">19h30</p>
                    </a>
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Fábio Ostermann</h5>
                        <p class="list-group-item-text"><span>Campanhas são feitas para te enganar</span></p>
                        <p class="list-group-item-text">21h</p>
                    </a>
                    <a class="list-group-item">
                        <h5 class="list-group-item-heading">Festa Interdisciplinar Farroupilha*</h5>
                        <p class="list-group-item-text">23h</p>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <h6>Sábado, 22 de novembro, manhã</h6>
                <div class="list-group">
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Juan Carlos Hidalgo</h5>
                        <p class="list-group-item-text"><span>Liberdade econômica é o único caminho</span></p>
                        <p class="list-group-item-text">9h30</p>
                    </a>
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Ricardo Seitenfus</h5>
                        <p class="list-group-item-text"><span>Como a América Latina castiga o Haiti</span></p>
                        <p class="list-group-item-text">11h</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <h6>Sábado, 22 de novembro, tarde</h6>
                <div class="list-group">
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Rodrigo Saraiva Marinho</h5>
                        <p class="list-group-item-text"><span>A Constituição de 88 não é cidadã</span></p>
                        <p class="list-group-item-text">14h</p>
                    </a>
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Xia Yeliang</h5>
                        <p class="list-group-item-text"><span>Lei chinesa é ordem do partido</span></p>
                        <p class="list-group-item-text">15h30</p>
                    </a>
                    <a class="list-group-item active">
                        <h5 class="list-group-item-heading">Leandro Narloch</h5>
                        <p class="list-group-item-text"><span>Mitos da desigualdade social</span></p>
                        <p class="list-group-item-text">17h</p>
                    </a>
                    <a class="list-group-item">
                        <h5 class="list-group-item-heading">Encerramento</h5>
                        <p class="list-group-item-text">18h</p>
                    </a>
                    <a class="list-group-item">
                        <h5 class="list-group-item-heading">Festa de Encerramento*</h5>
                        <p class="list-group-item-text">23h</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="map">
        <div id="map-canvas"></div>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUVHqxFLeogqX-HdnGA216sfNpgUv4HvU"></script>
        <script type="text/javascript">
          function initialise() {
        
        var myLatlng = new google.maps.LatLng(-29.684988, -53.802725); // Add the coordinates
        var mapOptions = {
            zoom: 15, // The initial zoom level when your map loads (0-20)
            minZoom: 6, // Minimum zoom level allowed (0-20)
            maxZoom: 17, // Maximum soom level allowed (0-20)
            zoomControl:true, // Set to true if using zoomControlOptions below, or false to remove all zoom controls.
            zoomControlOptions: {
                style:google.maps.ZoomControlStyle.DEFAULT // Change to SMALL to force just the + and - buttons.
            },
            center: myLatlng, // Centre the Map to our coordinates variable
            mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
            scrollwheel: false, // Disable Mouse Scroll zooming (Essential for responsive sites!)
            // All of the below are set to true by default, so simply remove if set to true:
            panControl:false, // Set to false to disable
            mapTypeControl:false, // Disable Map/Satellite switch
            scaleControl:false, // Set to false to hide scale
            streetViewControl:false, // Set to disable to hide street view
            overviewMapControl:false, // Set to false to remove overview control
            rotateControl:false // Set to false to disable rotate control
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div
            
        var marker = new google.maps.Marker({ // Set the marker
            position: myLatlng, // Position marker to coordinates
            map: map, // assign the market to our map variable
            title: 'Click to visit our company on Google Places' // Marker ALT Text
        });
        
        //  google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker 
        //      window.location='http://www.snowdonrailway.co.uk/shop_and_cafe.php'; // URL to Link Marker to (i.e Google Places Listing)
        //  });
        
        var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
            content:"<div><h5>Itaimbé Palace Hotel</h5><p>Rua Venâncio Aires, 2741 - Centro</p></div>" // HTML contents of the InfoWindow
        });
 
        infowindow.open(map,marker); // Open our InfoWindow
        
        google.maps.event.addDomListener(window, 'resize', function() { map.setCenter(myLatlng); }); // Keeps the Pin Central when resizing the browser on responsive sites
    }
    google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded. 
        </script>
    </div>
