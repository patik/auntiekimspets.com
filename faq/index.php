<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
    ?>
            <div class="row">
                <div class="large-12 columns">
                    <h1>Frequently Asked Questions</h1>
                    <p>xxxxxx</p>
                </div>
            </div>
    <?php
}

$x = new Print_html();
$x->name = 'faq';
$x->pageTitle = 'Frequently Asked Questions';
$x->dirLevel = 2;
$x->useragent = $_SERVER['HTTP_USER_AGENT'];

# ajax request
if ((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || !empty($_GET['return'])) {
    print_page_body();
}
# navigated directly
else {
    $x->redirect = true;
}

$x->print_full_page();

?>
