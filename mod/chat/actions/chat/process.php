<?php


    $function = $_GET['function'];
    $profilePic = $_GET['profilePic'];
    $log = array();
    
	// Connect to database to retrieve dataroot
	global $CONFIG;
	
	$site_url=elgg_get_site_url();
	// Define smiley array
	$smiley = array(':)' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/smile.gif">',
					':(' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/frown.gif">',
					':0' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/gasp.gif">',
					'O:-)' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/angel.gif">',
					':3' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/colonthree.gif">',
					
					'o.O' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/confused.gif">',
					":'(" => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/cry.gif">',
					'3:-)' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/devil.gif">',
					':o' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/gasp.gif">',
					'B-)' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/glasses.gif">',
					
					':D' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/grin.gif">',
					'-.-' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/grumpy.gif">',
					'^_^' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/kiki.gif">',
					':-*' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/kiss.gif">',
					':v' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/pacman.gif">',
					
					'-_-' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/squint.gif">',
					'8|' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/sunglasses.gif">',
					':p' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/tongue.gif">',
					':-/' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/unsure.gif">',
					'-_-' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/upset.gif">',
					
					
					'heart' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/heart.gif">',
					'HEART' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/heart.gif">',
					'LOVE' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/heart.gif">',
					'love' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/heart.gif">',
					'X)' => '<img src="'.$site_url.'mod/group_chat/graphics/smiley/devil.gif">'					
					);
	
	// Check group chat directory. if not exist then creat else use it
	$dataroot = elgg_get_config('dataroot');
	if(!is_dir($dataroot.'group_chat')){
		mkdir($dataroot.'group_chat', '0755');
	    chmod($dataroot.'group_chat', '0755');
	}
	$groupEntityId =  get_input('groupEntityId');
	if(!is_dir($dataroot.'group_chat'.'/'.$groupEntityId)){
		mkdir($dataroot.'group_chat'.'/'.$groupEntityId, '0755');
		chmod($dataroot.'group_chat'.'/'.$groupEntityId, '0755');
	}
			
	$chatLogDir = $dataroot.'group_chat'.'/'.$groupEntityId.'/';
	$dayWiseChatLog = date('mdY').'.txt';
	$filePath = $chatLogDir.$dayWiseChatLog;//'chat.txt';
	
    switch($function) {
    
    	 case('getState'):
        	 if(file_exists($filePath)){
               $lines = file($filePath);
        	 }
             $log['state'] = count($lines); 
        	 break;	
    	
    	 case('update'):
        	$state = $_GET['state'];
        	if(file_exists($filePath)){
        	   $lines = file($filePath);
        	 }
			  $log['count_lines'] = $state.'_'.count($lines);
        	 $count =  count($lines);
        	 if($state == $count){
        		 $log['state'] = $state;
        		 $log['text'] = false;
        		 }
        		 else{
        			 $text= array();
        			 $log['state'] = $state + count($lines) - $state;
        			 foreach ($lines as $line_num => $line)
                       {
        				   if($line_num >= $state){
                         $text[] =  $line = str_replace("\n", "", $line);
        				   }
         
                        }
        			 $log['text'] = $text; 
        		 }
        	  
             break;
    	 
    	 case('send'):
		  $nickname = htmlentities(strip_tags($_GET['nickname']));
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			 $message = htmlentities(strip_tags($_GET['message']));		 
			 						 
			 if(($message) != "\n"){
				 if(preg_match($reg_exUrl, $message, $url)) {			    
					$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
				 }
				 
				  // Replace smily with image	 		   			  
				 foreach($smiley as $key => $value){
					$message = str_replace($key, $value, $message);
				 }
				 
				 $profileUrl = $site_url.'profile/'.$nickname;
				 $messageStr = str_replace("\n", " ", $message);
                 // Set timezone to HoChiMin
                 date_default_timezone_set("Asia/Ho_Chi_Minh");
				 if(trim($messageStr) != ''){
				 $message = "<li class='chatTxt' id='chat' onmouseover='chatCall(this);'><div class='chatTime'>".date('h:i a')."</div><div class='clear padTop5'><div style='float:left'><a href='".$profileUrl."'><img src='".$profilePic."' title='title' width='25' height='25' /></a></div><div class='floatLeft txtDiv'><a href='".$profileUrl."'><strong>".ucfirst($nickname).":</strong></a>&nbsp;<span style='color:#666666'>".$messageStr."</span></div></div><div class='clear'></div></li>";
				 fwrite(fopen($filePath, 'a'), $message. "\n"); 
				}						
			 }
        	 break;
    	
    }
    $log['dataroot'] = $dataroot;
    echo json_encode($log);

?>
