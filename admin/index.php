<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


include 'header.php';
?>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment icon-rounded"></i>
                    <div class="stats">
                           <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT count(*) as total FROM posts_tbl");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
                      <h5><strong><?php echo $row['total']; ?></strong></h5>
                      <a href="managenews.php"> <span>Total Articles</span>  </a>    
 <?php } ?>
                      
                      
                    </div>
                </div>
        	</div>
            <?php
                           // include('../connect.php');
				$result = $db->prepare("SELECT count(*) as total FROM table_admin");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $row['total']; ?></strong></h5>
                      <a href="manage_admin.php"><span>Total Admins</span></a>
                    </div>
                </div>
        	</div>
                                <?php } ?>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                   <i class="pull-left fa fa-info-circle dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php
print ('.'.$_SERVER['REMOTE_ADDR'].'.'); ?>
</strong></h5>
                      <span> Your IP  </span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                            <a href="../index.php" target="blank">    <i class="pull-left fa fa-globe dollar1 icon-rounded"></i></a>
                    <div class="stats">
                    <?php
                           // include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                  
               ?>  <span>View</span>
                        <a href="../index.php" target="blank"><h5><?php echo $row['site_name'];?></h5></a>
                         <?php } ?>         </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      <div class="col_1">
		    <div class="col-md-4 span_7">	
		      <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
		    </div>
		    <div class="col-md-4 span_8">
		       <div class="activity_box">
		        <div class="scrollbar" id="style-2">
                                  <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM posts_tbl ORDER BY id DESC Limit 10");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                                
?>
                   <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-thumbs-up text-info icon_13"> </i>  </div>
                         <div class="col-xs-3 activity-img"><a href="printing.php?id=<?php echo $row['id'];?>" target="_blank" ><img src="../uploads/<?php echo $row['file'];?>" class="roundimage2"  alt=""/></a></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="printing.php?id=<?php echo $row['id'];?>" target="_blank" ><?php echo $row['post_title']; ?></a></h5>
	                    <p><?php echo substr($row['post_body'],0,25);?></p>
	                    <h6><?php echo $row['date']; ?></h6>
	                 </div>
	                 <div class="clearfix"> </div>
                        
                    </div>
	  		
                            <?php }
                                        ?>
                             <a href="managenews.php" class="fa fa-eye-slash btn btn-xs btn-primary">View more</a>
	               
	                 <div class="clearfix"> </div>
                     </div>
	  		        </div>
		          </div>
		    </div>
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Time</h4>
                </div>
                <div class="panel-body float-right">
                    <script type="text/javascript" src="http://www.webestools.com/page/js/flashobject.js"></script>
<div id="clock_2261" style="display:inline-block;">
	<a href="http://get.adobe.com/flashplayer/">You need to install the Flash plugin</a> - <a href="http://www.webestools.com/">http://www.webestools.com/</a>
</div>
<script type="text/javascript">
	var flashvars_2261 = {};
	var params_2261 = {
		quality: "high",
		wmode: "transparent",
		bgcolor: "#ffffff",
		allowScriptAccess: "always",
	};
	var attributes_2261 = {};
	flashObject("http://flash.webestools.com/horloges/horloge12.swf", "clock_2261", "150", "150", "8", false, flashvars_2261, params_2261, attributes_2261);
</script>
                </div>
            </div>
            <div class="clearfix"> </div>
	  </div>
	  
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		
<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',
	
	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	
       </div>
       <div class="clearfix"> </div>
    </div>
    
		<div class="clearfix"> </div>
	    </div>
	<?php include 'footer.php';?>