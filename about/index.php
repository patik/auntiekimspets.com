<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/html.php');

function print_page_body()
{
    ?>
            <div class="row">
                <div class="large-12 columns">
                    <h1>The Team</h1>
                </div>
            </div>

            <div class="row margin-bottom-medium">
                <div class="small-12 columns">
                    <h2>Kim Patik</h2>
                </div>

                <figure class="small-12 medium-3 columns center">
                    <img src="/img/kim-koko-liebchen-siena-2012-small.jpg" alt="Auntie Kim with her German Shepherds, Liebchen and Koko">
                </figure>

                <div class="small-12 medium-9 columns">

                    <p>I’m a native of the Capital District where I currently live with my husband and two dogs, both German Shepherds. <abbr title="German for 'sweetheart'">Liebchen</abbr> is two years old and Koko is seven. Both of my dogs have been adopted from local rescue groups.</p>

                    <p>When I’m not enjoying my dogs’ company I love to travel and learn about different countries and cultures.</p>

                    <p>During my time with <a href="http://www.auntiemartas.com">Auntie Marta’s Pet Sitting Services</a> I learned many things about being a pet sitter while caring for clients’ pets. Auntie Marta has taught me all she knows about how to run a great business.</p>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <h2>Kyle Klippel</h2>
                </div>

                <div class="small-12 medium-7 columns">
                    <p>Hi, my name is Kyle Klippel. I have lived in the Capital Region my entire life. I am also Auntie Kim’s younger brother. I currently reside in Watervliet with my wife, Rebeka, and my dog, Jax. Jax is almost 3 years old and he is a Shepherd/Doberman mix. He is a mid-size dog, weight around 45 pounds. My family had a golden retriever when I was very young and then we rescued a Lab mix, Penny, in October 2005. Not too long after that in June 2006 we rescued another dog, Koko. Koko is a pure bred German Shepherd and currently lives with Auntie Kim and her husband. A lot of other extended family member’s have dogs as well, so I have been around pets most of my life.</p>
                    <p>In my spare time, I enjoy watching sports, especially baseball (New York Mets) and football (Tennessee Titans). I am currently enrolled at Siena College, studying in the History Education program.</p>
                    <p>I shower my pets with love, and can’t wait to show your pets some TLC!</p>
                </div>

                <figure class="small-12 medium-5 columns center">
                    <img src="/img/kyle-jax.jpg" alt="Kyle with Jax">
                </figure>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <h1>Auntie Kim's Philosphy</h1>

                    <p>Making the decision to hire a pet sitting service is a very important one because of the relationship you have with your pet. After all, your pet is a member of your family and you want the peace of mind that comes with knowing your pet is in good hands while you're away.</p>

                    <p>My philosophy is simple: I believe that exceptional customer service is the foundation of any successful business. For me, that means the customer is my boss &mdash; and that's you.</p>

                    <p>Having customers is a privilege and it allows me to turn my passion into a career. When prospective or existing customers contact me, I make a point of returning their call within two hours. When I'm a customer, I want to feel that I'm a priority and that's exactly how I treat my own customers.</p>

                    <p>I look forward to meeting you and your pet and offering you peace of mind in caring for your pet's needs.</p>

                    <p><em>Professionally Bonded/Insured</em></p>
                </div>
            </div>
    <?php
}

$x = new Print_html();
$x->name = 'about';
$x->pageTitle = 'About';
$x->dirLevel = 2;

$x->print_full_page();

?>