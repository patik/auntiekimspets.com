<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
    ?>
            <div class="row">
                <div class="large-12 columns">
                    <h1>Specials &amp; Discounts</h1>
                    <p>xxxxxx</p>
                </div>
            </div>
    <?php
}

$x = new Print_html();
$x->name = 'specials';
$x->pageTitle = 'Specials &amp; Discounts';
$x->dirLevel = 2;

$x->print_full_page();

?>
