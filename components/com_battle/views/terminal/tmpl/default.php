<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
jimport( 'joomla.methods' ); 
/*if ($this->player->id == 0){
	$this->player->username = 'Nobody';
} 

*/
echo 'test:';
// print_r($this->buildings);
//exit();
?>
 <div class="terminal">
  <div class="building_left">
    <div id="info" class=" clearfix">
      <div class="name"><?php //echo $this->player->username; ?> owns <?php //echo $this->buildings->name; ?> 
        <span class="small">[Level 1]</span>
        <span class="red"><a href="#" title="Allocate stats points">-</a></span>
        <span class="small">
          <span class="highlight">3 Stats Pts</span>
          <span class="red"><a href="#" title="Allocate stats points">-</a></span>
        </span>
      </div>
     
   
   <img id ="cyber1" class="cyber" src  = "/components/com_battle/images/terminal/002a.png">
   
   
    </div><!-- end info -->
    <div class="extra clearfix">
      <div class="message_board">
        <?php //echo $this->loadTemplate ('board_message'); ?>
          <img id ="cyber2" class="cyber" src = "/components/com_battle/images/terminal/001b.png">
      </div>
    </div>
  </div><!--end building_left-->
  <div class="building_right">
    <div id="status">
      <div class="instructions">
        <?php //echo $this->loadTemplate ('board_info1'); ?>
          <img id ="cyber3" class="cyber" src = "/components/com_battle/images/terminal/001a.png">
      </div>
      <div id="action" class="clearfix">
        <img id ="cyber4" class="cyber" src = "/components/com_battle/images/terminal/003a.png">
<?php
//////////////////////////////   No Owner - Buy Only //////////////////////////////////
//if ($this->buildings->owner == 0){?>
        <div class="buy" >
          <a href="#" class= "buy" id = "<?php //echo $this->buildings->id ; ?>">Buy this <?php //echo $this->buildings->type ; ?></a>
        </div> <!--buy-->
<?php 

//}?>
<?php
/////////////////////////////////////// Owned but not Player Owned //////////////////////////
//if ($this->buildings->owner != $this->user->id && $this->buildings->owner != 0 ){?>
       <div class= "attack" >
          <a href="#" class= "attack" id = "<?php //echo $this->buildings->id ; ?>"> Attack this  <?php //echo $this->buildings->type ; ?></a>
        </div><!-- attack-->
<?php 

?>
      </div><!-- end action -->
    </div><!-- end status. Is this being used? I mean, really?? -->
  </div><!--end building_right-->
</div><!-- end terminal -->
<?php


?>
<script type="text/javascript">
	
	var head = document.getElementsByTagName('head')[0] ;
	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = '<?php echo $this->baseurl; ?>/components/com_battle/includes/character.js';  
	head.appendChild(script);

	
	$$('.cyber').addEvent('click', function(){
		var itemID = this.get('id');
		var a = new Request.JSON({
			url:"index.php?option=com_battle&format=json&task=computer_action&action=display_terminal&id="+itemID,
			onSuccess: function(result){
				mything = new Element ('div',{'id':"term2",
				html:result,
				'style':'border 1px solid #F00; '});
				mything.replaces(document.id('mainbody'));
			}
		}).get();
	});


	
</script>	