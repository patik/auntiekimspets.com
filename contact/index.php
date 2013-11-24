<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

$message = '';

function print_page_body($message = '')
{
    if (!empty($message)) { ?>
            <div class="row">
                <div class="large-12 columns">
                    <p class="form-response"><?php echo $message; ?></p>
                </div>
            </div>
    <?php } ?>

            <div class="row">
                <div class="large-12 columns">
                    <h1>Contact Auntie Kim</h1>
                    <p>Call, text, or fill out the form below if you are interested in setting up an initial meeting or if you just have a question.</p>
                    <p class="show-for-no-touch">Phone or text: (518) 330-6417</p>
                    <p>I look forward to servicing your pet sitting needs.</p>
                </div>
            </div>

            <div class="hide-for-no-touch row">
                <div class="row">
                    <div class="small-12 medium-6 columns center">
                        <a href="tel:15183306417" class="call-now button purple"><span class="icon-phone-1"></span>Call 518-330-6417</a>
                    </div>
                    <div class="small-12 medium-6 columns center">
                        <a href="sms:15183306417" class="button purple"><span class="icon-comment"></span>Text 518-330-6417</a>
                    </div>
                </div>
            </div>

            <form method="post" action="/contact/">
                <fieldset>
                    <legend class="hide">Contact</legend>
                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                <label for="name" class="required">Name<span class="hide"> Required field.</span></label>
                            </div>
                            <div class="small-12 medium-9 large-10 columns show">
                                <input type="text" name="name" id="name" tabindex="1" value="" required autocorrect="off" autocapitalize="on">
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                <label for="loc">Town</label>
                            </div>
                            <div class="small-12 medium-9 large-10 columns">
                                <input type="text" list="towns" name="loc" id="loc" tabindex="1" value="" autocapitalize="on">
                                <datalist id="towns">
                                    <option value="Cohoes"></option>
                                    <option value="Colonie"></option>
                                    <option value="Latham"></option>
                                    <option value="Loudonville"></option>
                                    <option value="Menands"></option>
                                    <option value="Waterford"></option>
                                    <option value="Watervliet"></option>
                                </datalist>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="small-12 medium-9 large-10 columns">
                                <input type="tel" name="phone" id="phone" tabindex="1" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                <label for="email">Email</label>
                            </div>
                            <div class="small-12 medium-9 large-10 columns">
                                <input type="email" name="email" id="email" tabindex="1" value="" autocorrect="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                Best way to contact you
                            </div>
                            <div class="small-12 medium-9 large-10 columns">
                                <div class="large-4 small-4 columns">
                                    <label for="contactmethod1" class="inline"><input name="contactmethod" type="radio" tabindex="1" id="contactmethod1" value="email"> <span>Email</span></label>
                                </div>
                                <div class="small-4 large-4 columns">
                                    <label for="contactmethod2" class="inline"><input name="contactmethod" type="radio" tabindex="1" id="contactmethod2" value="phone evening"> <span>Phone evening</span></label>
                                </div>
                                <div class="small-4 large-4 columns">
                                    <label for="contactmethod3" class="inline"><input name="contactmethod" type="radio" tabindex="1" id="contactmethod3" value="phone morning"> <span>Phone morning</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                <label class="required" for="aboutpets">Tell me about your pets<span class="hide"> Required field.</span></label>
                            </div>
                            <div class="small-12 medium-9 large-10 columns">
                                <textarea id="aboutpets" name="aboutpets" class="resize-vertical textarea-height-2" required tabindex="1"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 large-2 columns">
                                <label for="hearabout">How did you hear about Auntie Kim?</label>
                            </div>
                            <div class="small-12 medium-9 large-10 columns">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <label for="heard-friend">
                                            <input type="checkbox" name="heard-friend" id="heard-friend" tabindex="1" value="heard-friend">
                                            <span>Friend</span>
                                        </label>
                                    </div>
                                    <div class="small-12 columns">
                                        <label for="heard-marta">
                                            <input type="checkbox" name="heard-marta" id="heard-marta" tabindex="1" value="heard-marta">
                                            <span>Auntie Marta</span>
                                        </label>
                                    </div>
                                    <div class="small-12 columns">
                                        <label for="heard-social">
                                            <input type="checkbox" name="heard-social" id="heard-social" tabindex="1" value="heard-social">
                                            <span>Facebook/Twitter</span>
                                        </label>
                                    </div>
                                    <div class="small-12 columns">
                                        <label for="heard-search">
                                            <input type="checkbox" name="heard-search" id="heard-search" tabindex="1" value="heard-search">
                                            <span>Internet search</span>
                                        </label>
                                    </div>
                                    <div class="small-12 columns">
                                        <label for="heard-client">
                                            <input type="checkbox" name="heard-client" id="heard-client" tabindex="1" value="heard-client">
                                            <span>Another client</span>
                                        </label>
                                    </div>
                                    <div class="small-12 columns horizontal-labels">
                                        <label for="heard-other">
                                            <input type="checkbox" name="heard-other" id="heard-other" tabindex="1" value="heard-other">
                                            <span>Other</span>
                                        </label>
                                        <label for="heard-other-value">
                                            <span class="hide">Please describe:</span>
                                            <input type="text" name="heard-other-value" id="heard-other-value" tabindex="1" value="">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 columns center">
                                <input type="submit" class="button purple" tabindex="1" value="Submit">
                            </div>
                        </div>

                </fieldset>
            </form>
    <?php
}

# Check for submitted form
$req = array_merge($_GET, $_POST);

try {
    date_default_timezone_set('America/New_York');

    if (!empty($req)) {
        $text = '';

        $response = new stdClass();
        $response->timestamp = time();
        $response->datestring = date('m/d/Y H:i:s e', $response->timestamp);

        $response->name = new stdClass();
        $response->name->answered = false;
        $response->name->value = '';
        $response->location = new stdClass();
        $response->location->answered = false;
        $response->location->value = '';
        $response->phone = new stdClass();
        $response->phone->answered = false;
        $response->phone->value = '';
        $response->email = new stdClass();
        $response->email->answered = false;
        $response->email->value = '';
        $response->contactmethod = new stdClass();
        $response->contactmethod->answered = false;
        $response->contactmethod->value = '';
        $response->hearabout = new stdClass();
        $response->hearabout->answered = false;
        $response->hearabout->value = array();
        $response->aboutpets = new stdClass();
        $response->aboutpets->answered = false;
        $response->aboutpets->value = '';

        $text .= "Name: ";
        if (!empty($req['name'])) {
            $response->name->answered = true;
            $response->name->value = $req['name'];
            $text .= $req['name'];
        }
        $text .= "\n";

        $text .= "Location: ";
        if (!empty($req['loc'])) {
            $response->location->answered = true;
            $response->location->value = $req['loc'];
            $text .= $req['loc'];
        }
        $text .= "\n";

        $text .= "Phone: ";
        if (!empty($req['phone'])) {
            $response->phone->answered = true;
            $response->phone->value = $req['phone'];
            $text .= $req['phone'];
        }
        $text .= "\n";

        $text .= "Email: ";
        if (!empty($req['email'])) {
            $response->email->answered = true;
            $response->email->value = $req['email'];
            $text .= $req['email'];
        }
        $text .= "\n";

        $text .= "Contact method: ";
        if (!empty($req['contactmethod'])) {
            $response->contactmethod->answered = true;
            $response->contactmethod->value = $req['contactmethod'];
            $text .= $req['contactmethod'];
        }
        $text .= "\n";

        if (!empty($req['heard-friend'])) {
            $response->hearabout->value[]= 'Friend';
        }
        if (!empty($req['heard-marta'])) {
            $response->hearabout->value[]= 'Auntie Marta';
        }
        if (!empty($req['heard-social'])) {
            $response->hearabout->value[]= 'Social media';
        }
        if (!empty($req['heard-search'])) {
            $response->hearabout->value[]= 'Internet search';
        }
        if (!empty($req['heard-client'])) {
            $response->hearabout->value[]= 'Another client';
        }
        if (!empty($req['heard-other'])) {
            $response->hearabout->value[]= 'Other source';
        }
        if (!empty($req['heard-other-value'])) {
            $response->hearabout->value[]= 'Other description: "' . $req['heard-other-value'] . '"';
        }

        $text .= "Heard about you via: ";
        if (!empty($response->hearabout->value)) {
            $response->hearabout->answered = true;
            $text .= implode(', ', $response->hearabout->value);
        }
        $text .= "\n";

        $text .= "About their pets: ";
        if (!empty($req['aboutpets'])) {
            $response->aboutpets->answered = true;
            $response->aboutpets->value = $req['aboutpets'];
            $text .= $req['aboutpets'];
        }
        $text .= "\n";
        $text .= "\nSubmitted " . $response->datestring . "\n\n";

        @mail(ADMIN_EMAIL, 'Auntie Kim correspondence', $text);
        @mail(ADMIN_EMAIL2, 'Auntie Kim correspondence', $text);

        // Database

        $link = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
        if (!$link) { die('Could not connect: ' . mysql_error()); }
        mysql_select_db(MYSQL_DATABASE_CONTACT, $link);

        $query  = "INSERT INTO client_messages ";
        $query .= "(date,name,location,email,phone,contactmethod,hearabout,aboutpets,json,timestamp) VALUES ('";
        $query .= mysql_real_escape_string($response->datestring) . "','";
        $query .= mysql_real_escape_string($response->name->value) . "','";
        $query .= mysql_real_escape_string($response->location->value) . "','";
        $query .= mysql_real_escape_string($response->email->value) . "','";
        $query .= mysql_real_escape_string($response->phone->value) . "','";
        $query .= mysql_real_escape_string($response->contactmethod->value) . "','";
        $query .= mysql_real_escape_string(implode(', ', $response->hearabout->value)) . "','";
        $query .= mysql_real_escape_string($response->aboutpets->value) . "','";
        $query .= mysql_real_escape_string(json_encode($response)) . "',$response->timestamp);";

        $result = mysql_query($query, $link);

        @mysql_close($link);

        $message = 'Thank you for your message! We will be in contact soon.';

    }
}
catch (Exception $e) {
    $message = 'Sorry, something went wrong, we did not get your message.';
    @mail('cpatik@gmail.com', 'AKP error', json_encode($e));
}

$x = new Print_html();
$x->name = 'contact';
$x->pageTitle = 'Contact';
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

$x->print_full_page('print_page_body', $message);

?>
