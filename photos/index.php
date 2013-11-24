<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
    ?>
            <div class="row">
                <div class="large-12 columns">
                    <h1>Photo Album</h1>
                </div>
            </div>

            <div class="popup-gallery">
                <div class="row">
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="harper.jpg" title="Harper"><img src="harper.thumb.jpg"></a>
                        <div class="caption">Harper</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="honna.jpg" title="Honna"><img src="honna.thumb.jpg"></a>
                        <div class="caption">Honna</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="jasmine.jpg" title="Jasmine"><img src="jasmine.thumb.jpg"></a>
                        <div class="caption">Jasmine</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="harperandi.jpg" title="Harper and I"><img src="harperandi.thumb.jpg"></a>
                        <div class="caption">Harper and I</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="rosalie1.jpg" title="Rosalie"><img src="rosalie1.thumb.jpg"></a>
                        <div class="caption">Rosalie</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="lucy.jpg" title="Lucy"><img src="lucy.thumb.jpg"></a>
                        <div class="caption">Lucy</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="molly.jpg" title="Molly"><img src="molly.thumb.jpg"></a>
                        <div class="caption">Molly</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="rosalie2.jpg" title="Rosalie"><img src="rosalie2.thumb.jpg"></a>
                        <div class="caption">Rosalie</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="quincyandsammy.jpg" title="Quincy and Sammy"><img src="quincyandsammy.thumb.jpg"></a>
                        <div class="caption">Quincy and Sammy</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="rocky.jpg" title="Rocky"><img src="rocky.thumb.jpg"></a>
                        <div class="caption">Rocky</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="salem.jpg" title="Salem"><img src="salem.thumb.jpg"></a>
                        <div class="caption">Salem</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="squeaky.jpg" title="Squeaky"><img src="squeaky.thumb.jpg"></a>
                        <div class="caption">Squeaky</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="theo.jpg" title="Theo"><img src="theo.thumb.jpg"></a>
                        <div class="caption">Theo</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">
                        <a href="rosalie5.jpg" title="Rosalie"><img src="rosalie5.thumb.jpg"></a>
                        <div class="caption">Rosalie</div>
                    </div>
                    <div class="small-6 medium-4 large-3 columns">&nbsp;</div>
                </div>
            </div>
            <script src="/inc/js/vendor.js"></script>
            <script src="/inc/js/site.js"></script>
    <?php
}

$x = new Print_html();
$x->name = 'photos';
$x->pageTitle = 'Photo Album';
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
