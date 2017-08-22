<!doctype html>
<html lang="en">
<?php require('../fragments/_head.php') ?>
<body>

<header>
    <h1>Ghosts of Miami</h1>
    <a href="../es" class="button">Espa&ntilde;ol</a>
</header>

<div id="content">
    <div id="title">
        <h1>Ghosts of Miami</h1>
        <div class="top-links">
            <div>Available now:</div>
            <a href="http://store.steampowered.com/app/677300/Ghosts_of_Miami/" class="dev-blog">Steam</a>
            <a href="https://pillowfight.itch.io/ghosts-of-miami" class="dev-blog">Itch.io</a>
            <a href="https://www.humblebundle.com/store/ghosts-of-miami" class="dev-blog">Humble</a>

            <!-- <a href="https://pillowfight.itch.io/ghosts-of-miami" target="_blank" class="dev-blog">Play the Demo</a><br> -->
            <!-- <a href="https://press.pillowfight.io/sheet.php?p=ghosts_of_miami" target="_blank" class="dev-blog">Presskit</a><br> -->
            <!-- <a href="#latest" class="dev-blog">Blog</a> -->
        </div>
    </div>

    <div id="intro" class="section">
        <div class="container">
            <p><span class="drop-caps">Miami, 1986</span> On average, one person is murdered every day in Dade County. Between the drug cartels, the AIDS epidemic, and a flood of undocumented immigrants, hundreds more will vanish, never to be seen again. Chelo Mart&iacute;nez finds the people who slip through the cracks. </p>

            <p>Help Chelo explore the beaches and back alleys of Miami at its most dangerous, investigating her very first cases as a private investigator. You make the decisions: do you bait the shady drug dealer, or beat the answers out of him? When that handsome stranger shows up at Chelo&rsquo;s door, will he help your case--or distract you from it? And will you be able to find Chelo&rsquo;s missing father, who disappeared without a word almost ten years ago? </p>
            <div class="vendors">Available now on<br>
                <a href="http://store.steampowered.com/app/677300/Ghosts_of_Miami/" class="logo">Steam</a>
                <a href="https://pillowfight.itch.io/ghosts-of-miami" class="logo">Itch.io</a>
                <a href="https://www.humblebundle.com/store/ghosts-of-miami" class="logo">Humble Store</a>
                <!-- <div class="logo">iOS</div> -->
                <!-- <div class="logo">Google Play</div> -->
                <div class="languages">in English, Spanish, and Traditional Chinese</div>
            </div>
        </div>
    </div>
    <!-- div id="latest" class="section" -->
<?php /*
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

        */?>
    <!-- /div -->

    <div id="characters" class="section">
        <div class="container">
            <div class="character">
                <div id="chelo" class="portrait"><img src="../img/chelo-shape.png"></div>
                <div class="profile">
                    <h3>Consuelo &ldquo;Chelo&rdquo; Mart&iacute;nez</h3>
                    <div class="attribute"><span class="label">Age:</span> 23</div>
                    <div class="attribute"><span class="label">Occupation:</span> Finding Missing People</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> Finding Tasty Snacks</div>
                    <div class="attribute"><span class="label">Life Goal:</span> To help her father and others who&rsquo;ve disappeared to reunite with their families. </div>
                    <div class="quote">&ldquo;No one just up and disappears, right&hellip;?&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="luci" class="portrait"><img src="../img/luci-shape.png"></div>
                <div class="profile">
                    <h3>Luciana &ldquo;Luci&rdquo; Escobar</h3>
                    <div class="attribute"><span class="label">Age:</span> 24</div>
                    <div class="attribute"><span class="label">Occupation:</span> VIP</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> The perfect stilettos</div>
                    <div class="attribute"><span class="label">Life Goal:</span> To live up to the Escobar name and reputation.</div>
                    <div class="quote">&ldquo;No, I would not betray your lovely face for even the handsomest spy.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="ethan" class="portrait"><img src="../img/ethan-shape.png"></div>
                <div class="profile">
                    <h3>Ethan Brown</h3>
                    <div class="attribute"><span class="label">Age:</span> 21</div>
                    <div class="attribute"><span class="label">Occupation:</span> EMT</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> Being good to his momma.</div>
                    <div class="attribute"><span class="label">Life Goal:</span> To someday put himself through nursing school, so he can support a family of his own.</div>

                    <div class="quote">&ldquo;I&rsquo;m ready to help! Just&hellip; tell me what I can do.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="tala" class="portrait"><img src="../img/tala-shape.png"></div>
                <div class="profile">
                    <h3>Tala Nassiri</h3>
                    <div class="attribute"><span class="label">Age:</span> 18</div>
                    <div class="attribute"><span class="label">Occupation:</span> High School Student</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> Chelo&rsquo;s old high school band</div>
                    <div class="attribute"><span class="label">Life Goal:</span> To be in a popular movie so that maybe her father, a political prisoner in Iran, can see her.</div>
                    <div class="quote">&ldquo;Have you seen the latest episode of Miami Vice? We can&rsquo;t talk until you have.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="janet" class="portrait"><img src="../img/janet-shape.png"></div>
                <div class="profile">
                    <h3>Janet Lessig</h3>
                    <div class="attribute"><span class="label">Age:</span> 30</div>
                    <div class="attribute"><span class="label">Occupation:</span> Professional Drag King</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> The perfect hair swoop</div>
                    <div class="attribute"><span class="label">Life Goal:</span> Just to take care of herself and others like her.</div>
                    <div class="quote">&ldquo;I&rsquo;m the Prince Charming you&rsquo;ve been looking for&mdash;you&rsquo;ve just been looking in the wrong direction.&rdquo;</div>
                </div>
            </div>

            <div class="character">
                <div id="richard" class="portrait"><img src="../img/richard-shape.png"></div>
                <div class="profile">
                <h3>&ldquo;Richard&rdquo;</h3>
                    <div class="attribute"><span class="label">Age:</span> 52</div>
                    <div class="attribute"><span class="label">Occupation:</span> Gentleman Gangster</div>
                    <div class="attribute"><span class="label">Preoccupation:</span> Being mysterious</div>
                    <div class="attribute"><span class="label">Life Goal:</span> ???</div>
                    <div class="quote">&ldquo;You may never be ready for me.<br>But when you are, call.&rdquo;</div>
                </div>
            </div>
        </div>
    </div>

    <div id="team" class="section">
        <div class="container">
            <div class="credit">
                <h3>Writer & Producer</h3>
                <span class="name">Jo Fu</span>
            </div>
            <div class="credit">
                <h3>Technical Lead</h3>
                <span class="name">Conrad Kreyling</span>
            </div>
            <div class="credit">
                <h3>Sprite Artist</h3>
                <span class="name">Cassie Freire</span>
            </div>
            <div class="credit">
                <h3>Environment Artist</h3>
                <span class="name">Iasmin Omar Ata</span>
            </div>
            <div class="credit">
                <h3>UX Artist &amp; Programmer</h3>
                <span class="name">Kim Nguyen</span>
            </div>
            <div class="credit">
                <h3>Story Consultants/Editors</h3>
                <span class="name">Iasmin Omar Ata</span>
                <span class="name">Magnolia Porter</span>
                <span class="nane">Stella Ramirez</span>
                <span class="name">Ryan Murphy</span>
            </div>
            <div class="credit">
                <h3>Music</h3>
                <span class="name">Casey Yates</span>
                <span class="name">Matt “2 Mello” Hopkins</span>
            </div>
            <div class="credit">
                <h3>Translators</h3>
                <span class="name">Stella Ramirez</span>
                <span class="name">May King</span>
            </div>
            <p>GHOSTS OF MIAMI is presented by <a href="http://pillowfight.io">PILLOW FIGHT GAMES</a>, from the dev team that brought you WE KNOW THE DEVIL.</p>
            <p><a target="_blank" href="https://press.pillowfight.io/sheet.php?p=ghosts_of_miami">Presskit</a></p>
        </div>
    </div>

</div>

<?php require('../fragments/_footer.php') ?>

</body>
</html>
