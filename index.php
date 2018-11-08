<?php get_header() ?> 
<!---------------------------- HERO SECTION START ------------------------------>
<section class="container-fluid hero"> 

</section>  
<!---------------------------- HERO SECTION END ------------------------------>
<!---------------------------- MUSIC SECTION START ------------------------------>
<main>
    <section class="container">
        <div class="row align-items-center">
            <section class='col-12 col-sm-6 music__heading'>
                <h1 class="hidden">Presenting</h1>
                <h1>Music for the</h1> 
                <h1 class="music__heading--highlight"> &nbsp;People</h1> 
            </section>  

            <section class="col-12 col-sm-6 music">

                <div class="music__albumnCover"></div>
                <div class="audioWrapper">
                    <audio controls width='300px' id='audio'>
                        <source src='Assets/new_beat_long.mp3' srcset="" type="audio/mp3">
                    </audio>
                </div>    
              
                <div class="music__scrollBox">
                    <div class="music__scrollBoxItems">
                        <img src="//cdn.shopify.com/s/files/1/1250/3075/files/US-UK_Apple_Music_Badge_RGB_1024x1024.png?v=1529095281" alt="apple buton" class='music__scrollBoxImg'> 
                        <div class="music__scrollBoxBtn"><p>Play</p></div>
                    </div>
                    <div class="music__scrollBoxItems">
                        <img src="https://cdn.shopify.com/s/files/1/1250/3075/files/US_UK_iTunes_Store_Buy_Badge_RGB_011818_1024x1024.png?v=1529095262" alt="Buy on iTunes" class="music__scrollBoxImg">
                        <div class="music__scrollBoxBtn"><p>Download</p></div>
                    </div>
                    <div class="music__scrollBoxItems">
                        <img src="https://cdn.shopify.com/s/files/1/1250/3075/files/spotify_1024x1024.png?v=1528989657" alt="Spotify" class="music__scrollBoxImg">
                        <div class="music__scrollBoxBtn"><p>Play</p></div>
                    </div>
                    <div class="music__scrollBoxItems">
                        <img src="https://cdn.shopify.com/s/files/1/1250/3075/files/pandora_1024x1024.png?v=1528989734" alt="Pandora" class="music__scrollBoxImg">
                        <div class="music__scrollBoxBtn"><p>Play</p></div>
                    </div>
                    <div class="music__scrollBoxItems">
                        <img src="https://cdn.shopify.com/s/files/1/1250/3075/files/googleplay_1024x1024.png?v=1528989909" alt="Google Play" class="music__scrollBoxImg">
                        <div class="music__scrollBoxBtn"><p>Play</p></div>
                    </div>
                    <div class="music__scrollBoxItems">
                        <img src="https://cdn.shopify.com/s/files/1/1250/3075/files/soundcloud_1024x1024.png?v=1529097307" alt="SoundCloud" class="music__scrollBoxImg">
                        <div class="music__scrollBoxBtn"><p>Play</p></div>
                    </div>
                </div>
            </section>     
        </div>    
    </section>  
<!---------------------------- MUSIC SECTION END ------------------------------>
<!---------------------------- TOUR SECTION END ------------------------------>
    <section class="container-fluid">
        <div class="row justify-content-center">
            <section class='col-12 tour'>
                <div class="tour__heading" id='tour'>
                    <h1>Tour &nbsp;</h1>
                    <h1 class=tour__drkHeading>Dates</h1>
                </div>
                <section class='row justify-content-center '>
                    <div class=" col-10 tour__list">
                        <div class='tour__listItemPrimary'>
                            <h3 class='primary'>Upcoming Dates</h3>
                        </div>

                        <?php 
            // $today sets the current date so that we can compare and show only posts before or after current date
            $today = date('mdY');
            // Create a custom Wordpress Query to access data not on the current page
            $homePageEvents = new WP_Query(array(
              
            'posts_per_page'=> 5,
            'post_type'=>'event',
            'meta_key'=>'event_date',
            'orderby'=>'meta_value',
            'order'=>'ASC',
            'meta_query'=>array(
              array(
                'key'=>'event_date',
                'compare'=>'>=',
                'value'=>$today,
                'meta_type'=> 'numeric'
              ),
                )
            ));
                                
                                    
                                    while ( $homePageEvents->have_posts() ) {
                                      
                                    $homePageEvents->the_post();?>
                                   
                                    <div class="row tour__listItem">
                                        <div class="col-12 col-sm-8 tour__gig">
                                            <div class="tour__gigDate">
                                                <h3><?php 
                                                
                                                // Get Raw date
                                                $the_event_date = get_field( 'event_date', false, false );
                                                // THEN create object
                                                $eventDate= new DateTime( $the_event_date );
                                                echo $eventDate->format( 'M d' );  ?>
                                                </h3>
                                            </div>
                                            <div class="tour__gigVenue">
                                                <h3><?php the_field('location_title')?></h3>
                                            </div>
                                            <div class="tour__gigLocation">
                                                <h3><?php the_field('physical_location')?></h3>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4   tour__gigButtons">
                                            <div class="tour__gigRsvp">
                                                <div> <a class='lightBtn' href="https://www.eventbrite.com/l/online-rsvp/">RSVP</a></div>
                                            </div>
                                            <div class="tour__gigTickets">
                                                <div><a class='darkBtn' href="https://www.ticketmaster.com/new/">Tickets</a></div>
                                            </div>
                                        </div> 
                                    </div>



                                    <?php   } wp_reset_postdata();?>
                </section>
            </section>
        </div>       
    </section>
 <!---------------------------- TOUR SECTION END ------------------------------>      

<!---------------------------- INSTAGRAM SECTION START ------------------------------>   
    <!-- <section class="container-fluid instagram">
        <div class="row justify-content-center ">
            <div class=" col-10 instagram__heading">
                <h1 class="instagram__headingPlain">
                    From&nbsp;
                </h1>
                <h1 class="instagram__headingStencil">
                    Instagram
                </h1>
            </div>
        </div>
        <div class=" row justify-content-center instagram__posts">
                <div class="col-10 col-md-4 instagram__mediaWrapper">
                        <blockquote  class="instagram-media " data-instgrm-permalink="https://www.instagram.com/p/BbFyEUqnnFo/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BbFyEUqnnFo/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Jazz music (@jazzvideo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-11-04T22:38:30+00:00">Nov 4, 2017 at 3:38pm PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="col-10 col-md-4 instagram__mediaWrapper">
                        <blockquote   class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/loCNFkBjj3/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/loCNFkBjj3/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#hiromi #uehara #hiromiuehara #piano #jazz #amazing #live #best #music #musician #hiromitrioproject</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/sutefanvalve/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> V A L V E</a> (@sutefanvalve) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2014-03-17T01:37:29+00:00">Mar 16, 2014 at 6:37pm PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="col-10 col-md-4 instagram__mediaWrapper">
                        <blockquote   class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BkMZ9QKgDmY/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.194444444444443% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BkMZ9QKgDmY/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">上原ひろみザ·トリオ·プロジェクト 「MOVE」ライヴ·クリップ ......... Hiromi Uehara The Trio Project &#34; MOVE &#34; . . . #drumcover#hiromiuehara#move#hiromitrioproject#drumuniversity @iddpf @indonesian_drummers#wowmusician @wowmusicians @indomusikgram #indomusikgram</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/yudha_dacunha/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Yudha Dacunha</a> (@yudha_dacunha) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-06-19T05:20:29+00:00">Jun 18, 2018 at 10:20pm PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>       
                </div>  
        </div>
    </section> -->
<!---------------------------- INSTAGRAM SECTION END ------------------------------>   
<!-------------------------- VIDEO SECTION START ------------------------------>    
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="video__heading">
                    <h1 class="video__headingPlain">
                        Featured&nbsp;
                    </h1>
                    <h1 class="video__headingOutline">
                        Video
                    </h1>
                </div>
            </div>
        </div>   
        
    
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="video__vidwrapper" >
                        <iframe class= 'video__vidwrapperiframe'width="640" height="360" src="https://www.youtube.com/embed/EFeouD2IWSA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>   
        </div>
    </section>     
    <!---------------------------- VIDEO SECTION END ------------------------------> 
    <!---------------------------- MERCH SECTION START ------------------------------>
    <section class="container-fluid merch">
            <div class="row justify-content-center">
                <div class="col-10">
                        <div class="merch__heading" id='merch'>
                            <h1 class="merch__headingPlain">Our&nbsp;</h1>
                            <h1 class="merch__headingStencil">Merch</h1>
                        </div>
                        <div class="merch__product">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOmy9_Lvvh1bPiy1lRuFd8uBfkPcv75gyCQb1GVxUhDj95hM-W" alt="product1" class='merch__product--1'>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjHV2iIreaWLiRU8nZTKW43Qd6BMQn5kzk27N9VvL7bfIuWBZr" alt="product2" class='merch__product--2'>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6T5jxz9Eb2XeLZgINU0DzNp5DCfWgpanUjL1jTvvvxt4oITw7" alt="product3" class='merch__product--3'>    
                        </div>               
                </div>                       
            </div>
            <div class="row justify-content-center">
                <div class="col-3 flexCenter">
                    <a href="#">  
                        <div class="button margin-btn">
                            <h3>All Merch</h3> 
                        </div>
                    </a>
                </div>
            </div>
    </section>
<!---------------------------- MERCH SECTION END ------------------------------>  
<!---------------------------- CONTACT SECTION START ------------------------------> 
    <section class="container-fluid form">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form__heading" id='contact'>
                    <h1 class=form__headingPlain>Contact&nbsp;</h1> 
                    <h1 class="form__headingStencil">Us</h1>
                </div>
        
                <form action=" " method='POST'>
                    <input type="name" placeholder=' Full Name' required><br>
                    <input type="email" placeholder=' Email' required><br>
                    <input type="text" placeholder=' Subject'><br> 
                    <textarea type="textarea" placeholder=' Message'></textarea><br>
                    <input type="submit" value='Send '>
                </form>
            </div>
        </div> 
    </section>
<!---------------------------- CONTACT SECTION END ------------------------------> 
</main>
<?php get_footer() ?> 