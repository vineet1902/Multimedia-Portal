<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
// Create connection
$con=mysqli_connect("localhost","root","","multimedia");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<html>
    <head>
        <title>Gamer's Arena</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Thumbnails Navigation Gallery with jQuery and CSS3" />
        <meta name="keywords" content="jquery, thumbnails, gallery, menu, navigation, full page, background, image, photo, portfolio, photography"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Quicksand_Book_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('span,p,h1',{
				textShadow: '0px 0px 1px #ffffff'
			});
		</script>
        <style>
			span.reference{
				font-family:Arial;
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:11px;
			}
			span.reference a{
				color:#aaa;
				text-decoration:none;
				margin-right:20px;
			}
			span.reference a:hover{
				color:#ddd;
                                
			}
		</style>
    </head>

    <body>
        
        
        
		<div id="st_main" class="st_main">
			<img src="wallpaper1.jpg" alt="" class="st_preview" style="display:none;"/>
			<div class="st_overlay"></div>
			<h1>The Arena</h1>
			<div id="st_loading" class="st_loading"><span>Loading...</span></div>
			<ul id="st_nav" class="st_navigation">
				<li class="album">
					<span class="st_link">Action<span class="st_arrow_down"></span></span>
					<div class="st_wrapper st_thumbs_wrapper">
						<div class="st_thumbs">
							<?php
                                                        $result = mysqli_query($con,"SELECT * FROM multimedia.games WHERE genre='action' order by rating DESC limit 10");
                                                        while($row = mysqli_fetch_array($result))
                                                          {
                                                                echo '<a href="../play/gameplay.php?gameid=';
                                                                echo $row['id'].'"><img style="width:180px;height:120px" src="';
                                                                echo "../games/action/images/".$row['image_location'].'">';
                                                                echo '</a>';
                                                          }
                                                        ?>
                                                    <a href="../play/index.php?id=1"><img style="width:180px;height:120px" src="download.jpg"></img></a>
						</div>
					</div>
				</li>
				<li class="album">
					<span class="st_link">Puzzle<span class="st_arrow_down"></span></span>
					<div class="st_wrapper st_thumbs_wrapper">
						<div class="st_thumbs">
							<?php
                                                      
                                                        
                                                        $result = mysqli_query($con,"SELECT * FROM multimedia.games WHERE genre='puzzle' order by rating DESC limit 10");
                                                        while($row = mysqli_fetch_array($result))
                                                          {
                                                                echo '<a href="../play/gameplay.php?gameid=';
                                                                echo $row['id'].'"><img style="width:180px;height:120px" src="';
                                                                echo "../games/puzzle/images/".$row['image_location'].'"></a>';
                                                          }
                                                        ?>
                                                        <a href="../play/index.php?id=2"><img style="width:180px;height:120px" src="download.jpg"></img></a>
						</div>
					</div>
				</li>
				<li class="album">
					<span class="st_link">Shooter<span class="st_arrow_down"></span></span>
					<div class="st_wrapper st_thumbs_wrapper">
						<div class="st_thumbs">
                                                        <?php
                                                      
                                                        
                                                        $result = mysqli_query($con,"SELECT * FROM multimedia.games WHERE genre='shooter' order by rating DESC limit 10");
                                                        while($row = mysqli_fetch_array($result))
                                                          {
                                                                echo '<a href="../play/gameplay.php?gameid=';
                                                                echo $row['id'].'"><img style="width:180px;height:120px" src="';
                                                                echo "../games/shooter/images/".$row['image_location'].'"></a>';
                                                          }
                                                        ?>
                                                        
                                                        
                                                        <a href="../play/index.php?id=3"><img style="width:180px;height:120px" src="download.jpg"></img></a>
							
                                                        
						</div>
					</div>
				</li>
				<li class="album">
					<span class="st_link">Strategy & Defense<span class="st_arrow_down"></span></span>
					<div class="st_wrapper st_thumbs_wrapper">
						<div class="st_thumbs">
							<?php
                                                      
                                                        
                                                        $result = mysqli_query($con,"SELECT * FROM multimedia.games WHERE genre='strategy' order by rating DESC limit 10");
                                                        while($row = mysqli_fetch_array($result))
                                                          {
                                                                echo '<a href="../play/gameplay.php?gameid=';
                                                                echo $row['id'].'"><img style="width:180px;height:120px" src="';
                                                                echo "../games/strategy/images/".$row['image_location'].'"></a>';
                                                          }
                                                        ?>
                                                    <a href="../play/index.php?id=4"><img style="width:180px;height:120px" src="download.jpg"></img></a>
						</div>
					</div>
				</li>
				<li class="album">
					<span class="st_link">Racing<span class="st_arrow_down"></span></span>
					<div class="st_about st_thumbs_wrapper">
						<div class="st_thumbs">
                                                       <?php
                                                      
                                                        
                                                        $result = mysqli_query($con,"SELECT * FROM multimedia.games WHERE genre='racing' order by rating DESC limit 10");
                                                        while($row = mysqli_fetch_array($result))
                                                          {
                                                                echo '<a href="../play/gameplay.php?gameid=';
                                                                echo $row['id'].'"><img style="width:180px;height:120px" src="';
                                                                echo "../games/racing/images/".$row['image_location'].'"></a>';
                                                          }
                                                        ?>
						<a href="../play/index.php?id=5"><img style="width:180px;height:120px" src="download.jpg"></img></a>
						</div>
					</div>
				</li>
			</ul>
		</div>



        <!-- The JavaScript -->
        <script type="text/javascript">
            $(function() {
				//the loading image
				var $loader		= $('#st_loading');
				//the ul element 
				var $list		= $('#st_nav');
				//the current image being shown
				var $currImage 	= $('#st_main').children('img:first');
				
				//let's load the current image 
				//and just then display the navigation menu
				$('<img>').load(function(){
					$loader.hide();
					$currImage.fadeIn(3000);
					//slide out the menu
					setTimeout(function(){
						$list.animate({'left':'0px'},500);
					},
					1000);
				}).attr('src',$currImage.attr('src'));
				
				//calculates the width of the div element 
				//where the thumbs are going to be displayed
				buildThumbs();
				
				function buildThumbs(){
					$list.children('li.album').each(function(){
						var $elem 			= $(this);
						var $thumbs_wrapper = $elem.find('.st_thumbs_wrapper');
						var $thumbs 		= $thumbs_wrapper.children(':first');
						//each thumb has 180px and we add 3 of margin
						var finalW 			= $thumbs.find('img').length * 183;
						$thumbs.css('width',finalW + 'px');
						//make this element scrollable
						makeScrollable($thumbs_wrapper,$thumbs);
					});
				}
				
				//clicking on the menu items (up and down arrow)
				//makes the thumbs div appear, and hides the current 
				//opened menu (if any)
				$list.find('.st_arrow_down').live('click',function(){
					var $this = $(this);
					hideThumbs();
					$this.addClass('st_arrow_up').removeClass('st_arrow_down');
					var $elem = $this.closest('li');
					$elem.addClass('current').animate({'height':'170px'},200);
					var $thumbs_wrapper = $this.parent().next();
					$thumbs_wrapper.show(200);
				});
				$list.find('.st_arrow_up').live('click',function(){
					var $this = $(this);
					$this.addClass('st_arrow_down').removeClass('st_arrow_up');
					hideThumbs();
				});
				
				//clicking on a thumb, replaces the large image
				$list.find('.st_thumbs img').bind('click',function(){
					var $this = $(this);
					$loader.show();
					$('<img class="st_preview"/>').load(function(){
						var $this = $(this);
						var $currImage = $('#st_main').children('img:first');
						$this.insertBefore($currImage);
						$loader.hide();
						$currImage.fadeOut(2000,function(){
							$(this).remove();
						});
					}).attr('src',$this.attr('alt'));
				}).bind('mouseenter',function(){
					$(this).stop().animate({'opacity':'1'});
				}).bind('mouseleave',function(){
					$(this).stop().animate({'opacity':'0.7'});
				});
				
				//function to hide the current opened menu
				function hideThumbs(){
					$list.find('li.current')
						 .animate({'height':'50px'},400,function(){
							$(this).removeClass('current');
						 })
						 .find('.st_thumbs_wrapper')
						 .hide(200)
						 .andSelf()
						 .find('.st_link span')
						 .addClass('st_arrow_down')
						 .removeClass('st_arrow_up');
				}

				//makes the thumbs div scrollable
				//on mouse move the div scrolls automatically
				function makeScrollable($outer, $inner){
					var extra 			= 800;
					//Get menu width
					var divWidth = $outer.width();
					//Remove scrollbars
					$outer.css({
						overflow: 'hidden'
					});
					//Find last image in container
					var lastElem = $inner.find('img:last');
					$outer.scrollLeft(0);
					//When user move mouse over menu
					$outer.unbind('mousemove').bind('mousemove',function(e){
						var containerWidth = lastElem[0].offsetLeft + lastElem.outerWidth() + 2*extra;
						var left = (e.pageX - $outer.offset().left) * (containerWidth-divWidth) / divWidth - extra;
						$outer.scrollLeft(left);
					});
				}
            });
        </script>
    </body>
</html>
