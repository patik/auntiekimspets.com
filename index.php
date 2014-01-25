<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
    ?>
            <div class="row">
                <div class="small-12 columns">
                    <p class="tagline">We care for your pets!</p>
                </div>
            </div>

            <div class="row">
                <div class="small-12 medium-9 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <p>Whether you're going on vacation or just need someone to check in, we give your furry loved ones the attention they deserve. Auntie Kim will visit your pets in the comfort of your own home to feed them, walk them, deliver medicine, and provide other services.</p>
                            <p><em>We care for dogs, cats, and more in Colonie, Latham, Loudonville, Menands, Cohoes, the Village of Waterford, and Watervliet</em></p>
                        </div>
                    </div>

                    <div class="row small-margin-bottom-medium center">
                        <div class="small-12 medium-8 columns">
                            <div class="home-phone">
                                <p><a href="tel:15183306417">(518) 330-6417</a></p>
                            </div>

                            <p><a href="mailto:kim@auntiekimspets.com">kim@auntiekimspets.com</a></p>

                            <div class="hide-for-no-touch row">
                                <div class="small-6 columns center">
                                    <a href="tel:15183306417" class="call-now button purple"><span class="icon-phone-1"></span>Call</a>
                                </div>
                                <div class="small-6 columns center">
                                    <a href="sms:15183306417" class="button purple"><span class="icon-comment"></span>Text</a>
                                </div>
                            </div>
                        </div>

                        <div class="small-12 medium-4 columns">
                            <div class="small-6 columns">
                                <a href="https://www.facebook.com/AuntieKimsPetSitting" class="icon-button icon-facebook fill">Facebook</a>
                            </div>
                            <div class="small-6 columns">
                                <a href="https://twitter.com/AuntieKims" class="icon-button icon-twitter fill">Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <figure class="small-12 medium-3 columns center">
                    <a href="/about/"><img src="/img/kim-koko-liebchen-siena-2012-small.jpg" alt="Auntie Kim with her German Shepherds, Liebchen and Koko" alt="Auntie Kim with her German Shepherds, Liebchen and Koko"></a>
                </figure>
            </div>


            <div class="row margin-top-medium">
                <div class="small-12 columns">
                    <div class="panel center">Contact <a href="http://www.auntiemartas.com">Auntie Marta’s Pet Sitting Services</a> for Clifton Park, Halfmoon and southern Saratoga County</div>
                </div>
            </div>
    <?php
}

$x = new Print_html();
$x->name = 'home';
$x->pageTitle = 'home';
$x->dirLevel = 0;

$x->print_full_page();

?>
