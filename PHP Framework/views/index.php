<?php

// Load a ramdom picture from the static images directory
$response = APIMovies::RequestRandom();
$data = $response;
$overview = $response['overview'];
if(strlen($overview) > 300) $overview = substr($overview, 0, 300).'...';
// Get all movies
$responseAll = APIMovies::Request();

require_once './config.php';
require_once 'includes/_navbar.php';
?>


<div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url(https://image.tmdb.org/t/p/w500<?php echo $data['backdrop_path']; ?>);">
    <img class="featured-title" src="https://image.tmdb.org/t/p/w500<?php echo $data['poster_path']; ?>" alt="">
    <p class="featured-desc"><?php echo $overview; ?></p>
    <a href="<?php echo "MovieView/".$data['id']; ?>"><button class="featured-button">WATCH</button></a>
</div>
<h1 style="margin-left: 2%;">Popular Movies</h1>
<div class="container">
    <div class="movie-list-container">
        <div class="movie-list-wrapper">
            <div class="movie-list">
            <?php foreach($responseAll as $responses): ?>
                <?php if (is_array($responses) || is_object($responses)): ?>
                    <?php foreach($responses as $responses2): ?>
                        <?php if(strlen($responses2['overview']) > 100) { $moviedescription = substr($responses2['overview'], 0, 100).'...'; } else { $moviedescription = $responses2['overview']; } ?>
                        <?php if(strlen($responses2['original_title']) > 11) { $movietitle = substr($responses2['original_title'], 0, 11).'...'; } else { $movietitle = $responses2['original_title']; } ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://image.tmdb.org/t/p/w500<?php echo $responses2['backdrop_path']; ?>" alt="">
                            <span class="movie-list-item-title"><?php echo $movietitle; ?></span>
                            <p class="movie-list-item-desc"><?php echo $moviedescription; ?></p>
                            <a href="<?php echo "MovieView/".$responses2['id']; ?>"><button class="movie-list-item-button">Watch</button></a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        <i class="fas fa-chevron-right arrow"></i>
        </div>
    </div>
</div>
<div class="actie-deals">
    <div class="top-gradient"></div>
    <div class="content-header text-toggle">
        Lekker naar de film bij <?php echo SITE_NAME; ?>
    </div>
    <div class="content-body text-toggle">
        Met de movie deals<br> van <?php echo SITE_NAME; ?>!
    </div>
    <div class="button-wrapper">
        <a href="Films/1" class="cta">
            <span class="span-button text-toggle">ZIEN</span>
            <span class="span-button color-arrow">
                <svg class="color-arrow" width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path class="one svg-arrow" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path class="two svg-arrow" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path class="three svg-arrow" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                    </g>
                </svg>
            </span> 
        </a>
    </div>
</div>
</div>
<?php
require_once 'includes/_footer.php';
?>
<style>
    .footer{
        background-color: rgb(36, 36, 36);
    }
</style>