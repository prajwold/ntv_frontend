<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Nepal Television</title>
	<link rel="stylesheet" type="text/css" href="css/main2.css"/>
    <link rel="stylesheet" type="text/css" href="test/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/font.css"/>
    
    
    
</head>

<body onload="startTime()">
<div class="outer_wrapper">
	
    
    <div id="header">
    	<div class="inner_wrapper">
        	<div id="left_header_wrapper">
            	<div id="left_header_wrapper_logo">
                	<div id="ntv_logo">
						<img src="images/ntv1/ntv_logo.png" width="63" height="84" alt="logo" />
                	</div>
                </div>
                <div id="left_header_wrapper_heading">
                	<div id="header_heading_top">
                    	<h1> <span class="ntvcolor"> Nepal Television </span> </h1>
                    </div>
                    <div id="header_heading_bottom">
                    	<h3> communication for development </h3>
                    </div>
                </div>
            </div>
            <div id="right_header_wrapper">
            	<div id="right_header_top_wrapper">
                	<div id="right_header_schannel">
                    	<div id="switch_channel_wrapper">
                        	<div id="switch_channel">
                            	Switch Channels
                            </div>
                            
                        </div>
                    </div>
                    <div id="right_header_datetime_wrapper">
                    	
                        	<div class="calendar">
                            	<script>
								
									var d = new Date();
									var weekday = new Array(7);
									weekday[0] = "Sun";
									weekday[1] = "Mon";
									weekday[2] = "Tue";
									weekday[3] = "Wed";
									weekday[4] = "Thu";
									weekday[5] = "Fri";
									weekday[6] = "Sat";
								
									var n = weekday[d.getDay()];
									document.write (n)
								
								
								</script>
                        	</div>
                            <div id="right_datetime">
                            	<div id="date">
                                		<script>
											var today = new Date();
											var dd = today.getDate();
											var mm = today.getMonth()+1; //January is 0!
											var month = new Array(12);
											month[0] = 'Jan';
											month[1] = 'Feb';
											month[2] = 'Mar';
											month[3] = 'Apr';
											month[4] = 'May';
											month[5] = 'Jun';
											month[6] = 'Jul';
											month[7] = 'Aug';
											month[8] = 'Sep';
											month[9] = 'Oct';
											month[10] = 'Nov';
											month[11] = 'Dec';
											
											var yyyy = today.getFullYear();
											var dd= today.getDate();
											var now =dd+'th' + ' of ' +month[today.getMonth()]+' ' + yyyy;
											document.write(now)
										</script>				
                                </div>
                            	<div id="time">
                              
									<script type="text/javascript">
										<!--
											var currentTime = new Date()
											var hours = currentTime.getHours()
											var minutes = currentTime.getMinutes()
										
											if (minutes < 10)
											minutes = "0" + minutes
										
											var suffix = "AM";
											if (hours >= 12) {
											suffix = "PM";
											hours = hours - 12;
											}
											if (hours == 0) {
											hours = 12;
											}
										
											document.write( hours + ":" + minutes + " " + suffix )
										//-->
									</script>
                                 
                                </div>
                            </div>
                            
                            <div class="calendar_clock">
                            	<img src="images/time_logo.png" width="44" height="46" alt="time" />
                            </div>
                        
                    </div>
                </div>
                
                <div id="right_header_menu">
                	<div id="menu">
                    	<ul>
                        	<li class="current"> <a href="#"> Home </a> </li>
                            <li> <a href="#"> About Us </a> </li>
                            <li> <a href="#"> Organization </a> </li>
                            <li> <a href="#"> Notive and Form </a> </li>
                            <li> <a href="#"> Videos </a> </li>
                            <li> <a href="#"> Activities </a> </li>
                            <li> <a href="#"> Tarriff </a> </li>
                            <li> <a href="#"> Contact Us </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div id="searchicon">
        	<img src="images/search_icon.png" width="38" height="46" alt="search_icon" />
        </div>
        </div>
        
        
    </div>
    <div id="slider">
		<img src="images/slider.png" width="1536" height="770" alt="slider" />
    </div>
    
    
    <div class="inner_wrapper">
        <div id="rssnews_wrapper">
            
            <div id="rssnews_logo">
                <img src="images/rss_logo.png" width="59" height="61" alt="rss_logo" />
            </div>
            <div id="rss_news_heading_wrapper">	
                <div id="rss_news_heading">
                </div>
            </div>
            <div id="rss_news_content">
            </div>
            
        </div>
    </div>
    
    
    <div class="inner_wrapper">
        
            <div id="maincontent_leftwrapper">
                <div id="video_wrapper">
                    <div id="video_heading">
            			<h1> Recent Videos </h1>
                    </div>
                    <div id="video_content">
                    	<div class="img">
                        	<img src="images/video1.png" width="228" height="168" alt="video1" />
                        </div>
                        <div class="img">
                        	<img src="images/video2.png" width="228" height="168" alt="video2" />
                        </div>
                        <div class="img">
                        	<img src="images/video3.png" width="228" height="168" alt="video3" />
                        </div>
                    </div>
                </div>
                <div id="news_wrapper">
                	<div id="news_heading">
                    <h1> NTV News </h1>
                    </div>
                    <div id="news_content">
                    	<div class="news">
                        	<img src="images/news1.png" width="167" height="137" alt="news1" />
                            <div class="desc">
                             <a href="#"> Description</a>
                            </div>
                        </div>
                        <div class="news">
                        	<img src="images/news2.png" width="168" height="137" alt="news2" />
                            <div class="desc">
                            <a href="#"> Description </a>
                            </div>
                        </div>
                        <div class="news">
                        	<img src="images/news3.png" width="168" height="137" alt="news3" />
                            <div class="desc">
                            <a href="#"> Description </a>
                            </div>
                        </div>
                        <div class="news">
                        	<img src="images/news4.png" width="168" height="137" alt="news4" />
                            <div class="desc">
                            <a href="#"> Description </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="extra_wrapper">
                	<div id="extra_leftwrapper">
                    	<div class="extrainfo_wrapper">
                        	<div class="extrainfo_heading">
                            	<span class="bullion_icon"> <img src="images/bullion_logo.png" width="44" height="24" alt="bullion " /> </span>
                                 <div class="bullion_heading">
                                 	<h1>Bullion</h1> 
                                 </div>
                             </div>   
                            <div class="extrainfo_content">
                            	<div id="bullion_cont_heading">
                                	<div class="bullion_cont_box">
                                    	Name
                                    </div>
                                    <div class="bullion_cont_box">
                                    	Rate
                                    </div>
                                    <div class="bullion_cont_box">
                                    	Difference
                                    </div>
                                    
                                </div>
                                <div class="bullion_cont">
                                	<span class="bullion_cont_box">
                                    	Hallmarked
                                    </span>
                                </div>
                                <div class="bullion_cont">
                                	<span class="bullion_cont_box">
                                    	Worked
                                    </span>
                                </div>
                                <div class="bullion_cont">
                                	<span class="bullion_cont_box">
                                    	Silver
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="extrainfo_wrapper">
                        	<img src="images/weather.png" width="361" height="245" alt="wht" />
                        </div>
                        <div class="extrainfo_wrapper">
                        	<div class="extrainfo_heading">
                                <div class="stock_icon">
                                	<img src="images/stock_logo.png" width="34" height="25" alt="stock" />
                                </div>
                                <div class="stock_heading">
                                    <h1> Stock </h1>
                                </div>	
                            </div>
                            <div class="extrainfo_content">
                            	<div id="stock_cont_heading">
                                	<span class="stock_cont_box">
                                    	INDEX	
                                    </span>
                                    <span class="stock_cont_box">
                                    	CLOSE
                                    </span>
                                    <span class="stock_cont_box">
                                    	CHANGE
                                    </span>
                                    <span class="stock_cont_box">
                                    	%CHANGE
                                    </span>
                                </div>
                                
                                <div class="stock_cont">
                                	<span class="stock_cont_box">
                                    	Nepse
                                    </span>
                                    <span class="stock_cont_box">
                                    	4,550.78
                                    </span>
                                    <span class="stock_cont_box">
                                    	14.6
                                    </span>
                                    <span class="stock_cont_box">
                                    	3.4%
                                    </span>
                                </div>
                                <div class="stock_cont">
                                	<span class="stock_cont_box">
                                    	Sensitive
                                    </span>
                                    <span class="stock_cont_box">
                                    	1,034.39
                                    </span>
                                    <span class="stock_cont_box">
                                    	8.18
                                    </span>
                                    <span class="stock_cont_box">
                                    	0.8%
                                    </span>
                                </div>
                                <div class="stock_cont">
                                	<span class="stock_cont_box">
                                    	Float
                                    </span>
                                    <span class="stock_cont_box">
                                    	73.09
                                    </span>
                                    <span class="stock_cont_box">
                                    	0.42
                                    </span>
                                    <span class="stock_cont_box">
                                    	0.5%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="extra_rightwrapper">
                    	<div id="event_wrapper">
                        	<div class="extrainfo_rightheading">
                            	<h1> Events </h1>
                            </div>
                            <div id="event_content">
                            	<div class="event_cont">
                                	<div class="event_cont_icon">
                                    	<img src="images/event_cont_logo.png" width="70" height="77" alt="evnt_icon" />
                                    </div>
                                    <div class="event_cont_cont">
                                    	<div class="event_cont_head">
                                        	Tender Notice 
                                        </div>
                                        <div class="event_info">
                                        	This is to inform all the citizens on open tender bid. Regestration open now.   
                                        </div>
                                    </div>
                                </div>
                                <div class="event_cont">
                                	<div class="event_cont_icon">
                                    	<img src="images/event_cont_logo.png" width="70" height="77" alt="evnt_icon" />
                                    </div>
                                    <div class="event_cont_cont">
                                    	<div class="event_cont_head">
                                        	Tender Notice 
                                        </div>
                                        <div class="event_info">
                                        	This is to inform all the citizens on open tender bid. Regestration open now.   
                                        </div>
                                    </div>
                                </div>
                                <div class="event_cont">
                                	<div class="event_cont_icon">
                                    	<img src="images/event_cont_logo.png" width="70" height="77" alt="evnt_icon" />
                                    </div>
                                    <div class="event_cont_cont">
                                    	<div class="event_cont_head">
                                        	Tender Notice 
                                        </div>
                                        <div class="event_info">
                                        	This is to inform all the citizens on open tender bid. Regestration open now.   
                                        </div>
                                    </div>
                                </div>
                                <div class="event_cont">
                                	<div class="event_cont_icon">
                                    	<img src="images/event_cont_logo.png" width="70" height="77" alt="evnt_icon" />
                                    </div>
                                    <div class="event_cont_cont">
                                    	<div class="event_cont_head">
                                        	Tender Notice 
                                        </div>
                                        <div class="event_info">
                                        	This is to inform all the citizens on open tender bid. Regestration open now.   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="forex_wrapper">
                        	<div class="extrainfo_rightheading">
                            	<div class="forex_icon">
                                	<img src="images/forex_logo.png" width="25" height="26" alt="forex_logo" />
                                </div>
                                <div class="forex_heading">
                            		<h1> Forex </h1>
                               	</div>
                            </div>
                            <div id="forex_content">
                            	<div id="forex_cont_heading">
                                	<div class="forex_cont_box">
                                    	<h4> Currency </h4>
                                    </div>
                                    <div class="forex_cont_box">
                                    	<h4> Buy </h4>
                                    </div>
                                    <div class="forex_cont_box">
                                    	<h4> Sell </h4>
                                    </div>
                                </div>
                                <div class="forex_cont">
                                	<div class="forex_cont_box">
                                    USD
                                    </div>
                                    <div class="forex_cont_box">
                                    95.92
                                    </div>
                                    <div class="forex_cont_box">
                                    96.85
                                    </div>
                                </div>
                                <div class="forex_cont">
                                	<div class="forex_cont_box">
                                    ERU
                                    </div>
                                    <div class="forex_cont_box">
                                    130.72
                                    </div>
                                    <div class="forex_cont_box">
                                    131.53
                                    </div>
                                </div>
                                <div class="forex_cont">
                                	<div class="forex_cont_box">
                                    UK pound Sterling
                                    </div>
                                    <div class="forex_cont_box">
                                    130.72
                                    </div>
                                    <div class="forex_cont_box">
                                    131.53
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="maincontent_rightwrapper">
                <div id="live_streming">
            		<div id="live_logo">
                    	<img src="images/live_tv_logo.png" width="71" height="44" alt="live_logo" />
                    </div>
                    <div id="live_content">
                    	<h1> Live Streaming </h1> <h2> Click here for live Streaming </h2>
                    </div>
                </div>
                <div id="poll_wrapper">
                	<div id="poll_heading">
                    	<div id="poll_logo">
                        	<img src="images/poll_icon.png" width="33" height="21" alt="poll_icon" />
                        </div>
                        <div id="poll_head">
                        	<h1> POLL </h1>
                        </div>
                    </div>
                    <div id="poll_content">
                    	<div id="poll_cont_question">
                        	What should be NTV news priority in 2014?
                        </div>
                        <div class="poll">
                        </div>
                        <div class="poll">
                        </div>
                        <div class="poll">
                        </div>
                        <div class="submit">
                        </div>
                    </div>
                </div>
                <div id="publiccorner_wrapper">
                	<div id="pcorner_heading">
                    	<div id="pcorner_logo">
                        	<img src="images/pcorner_logo.png" width="23" height="23" alt="pcorner_logo" />
                        </div>
                        <div id="pcorner_head">
                        	<h1> Public Corner </h1>
                        </div>
                    </div>
                    <div id="pinfo_head">
                    	Please provive informations below.
                    </div>
                    <div id="pcorner_info">
                    </div>
                    <div id="upload_wrapper">
                    	<div id="pbrowse">
                        </div>
                        <div id="upload_logo">
                        	<img src="images/upload_logo.png" width="44" height="27" alt="upload_logo" />
                        </div> 
                       
                    </div>
                </div>
                <div id="followus_wrapper">
                	<div id="followus_heading">
                    	<h1> Follow Us </h1>
                    </div>
                    <div id="followus">
                    	<div class="followus_logo">
                        	<img src="images/facebook_icon.png" width="35" height="33" alt="fb" />
                        </div>
                        <div class="followus_logo">
                        	<img src="images/twitter_icon.png" width="34" height="33" alt="twt" />
                        </div>
                        <div class="followus_logo">
                        	<img src="images/googleplus.png" width="33" height="33" alt="gg" />
                        </div>
                        <div class="followus_logo">
                        	<img src="images/instagram.png" width="36" height="33" alt="instg" />
                        </div>
                    </div>
                </div>
                <div id="programlist_wrapper">
                	<div id="plist_heading">
                    	<div id="pglist_logo">
                        	<img src="images/pglist_logo.png" width="28" height="21" alt="pg_logo" />
                        </div>
                        <div id="pg_head">
                        	<h1> Program List </h1>
                        </div>
                        
                    </div>
                    <div id="plist_pic">
                    <img src="images/programlist_pic.png" width="249" height="230" alt="program" />
                    </div>
                    <div id="plist">
                    	<div class="plist_list_wrapper">
                        	<div class="plist_logo">
                            	<img src="images/pglist_logo.png" width="28" height="21" alt="pglogo" />
                            </div>
                            <div class="plist_list">
                            	9:00 pm Tito Satye
                            </div>
                        </div>
                        
                        <div class="plist_list_wrapper">
                        	<div class="plist_logo">
                            	<img src="images/pglist_logo.png" width="28" height="21" alt="pglogo" />
                            </div>
                            <div class="plist_list">
                            	10:00 pm Khelkud Samachar
                            </div>
                        </div>
                    </div>
                    <div id="plist_viewall_wrapper">
                     	<div id="viewall_wrapper">       
                            <div id="vall_logo">
                            	<img src="images/pglist_logo.png" width="28" height="21" alt="view_logo" />
                            </div>
                            <div id="viewall">
                            	View All
                            </div>
                     	</div>
                    </div>
                </div>
            </div>
        
        
        
	</div> 
    <div class="space">
        </div>
        
        <div id="footer_wrapper">
            <div id="footer_topborder">
            </div>
            <div id="footer_main_contentwrapper">
            	<img src="images/footer_content.png" width="100%" height="100%" alt="footer_content" />
            </div>
            <div id="footer_copyright">
            	<img src="images/footer_copyright.png" width="100%" height="100%" alt="copyright" />
            </div>
        </div>   
</div>


</body>
</html>