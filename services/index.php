<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
    ?>
            <div class="row">
                <div class="small-12 columns">
                    <h1>Services &amp; Rates</h1>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <h2>Pet Sitting</h2>
                    <p>We visit your pets in the comfort of your own home to feed them, walk them, deliver medicine, and provide other services.</p>
                    <table class="rates">
                        <thead class="hide">
                            <tr>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 minute visit<br><span>1-4 pets</span></td>
                                <td>$18.00</td>
                            </tr>
                            <tr>
                                <td>45 minute visit<br><span>1-4 pets</span></td>
                                <td>$24.00</td>
                            </tr>
                            <tr>
                                <td>1 hour visit<br><span>1-4 pets</span></td>
                                <td>$30.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <h2>Mid-Day Dog Walking</h2>
                    <p><em>Additional 5% off when you pay monthly up front</em></p>
                    <table class="rates">
                        <thead class="hide">
                            <tr>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1-4 visits per week</td>
                                <td>$17.00<br><span>per visit</span></td>
                            </tr>
                            <tr>
                                <td>5 visits per week</td>
                                <td>$16.00<br><span>per visit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <h3>Major holidays</h3>
                    <p>$5.00 extra per visit</p>

                    <h3>Buddy System</h3>
                    <p>Have a neighbor who also needs their dog(s) walked? Recruit them. Auntie Kim will walk both of the dogs simultaneously and you'll get a discounted rate.</p>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <p class="center"><strong><a href="/contact/">Contact us now to get started!</a></strong></p>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <p>Prices do not include New York State sales tax</p>
                    <p><img src="/inc/img/icons/credit-cards.png" alt="Visa, MasterCard, Discover, American Express"></p>
                </div>
            </div>
    <?php
}

$x = new Print_html();
$x->name = 'services';
$x->pageTitle = 'Services &amp; Rates';
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
