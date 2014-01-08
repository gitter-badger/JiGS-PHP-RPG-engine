building_id			= 11093;
flat=1;


function request_flat_inventory()
{
	var all = '<div id="building_inventory_table"><div class="name">In Storage</div>';
	var details = this.details;
	//	var id = $('image').get('number');
	var a = new Request.JSON(
	{
		url: "index.php?option=com_battle&format=raw&task=action&action=get_flat_inventory&building_id=" 
		+ building_id + "&room=" + flat, 
        onSuccess: function(result)
        {
            for (i = 0; i < result.length; ++ i)
            {
                var row = "<div class='object'><a href='#' title='" 
                + result[i].name + "' class='buy' id='" 
                + result[i].id + "'><img src='/components/com_battle/images/objects/" 
                + result[i].name + ".png' height='32' width='32' /></a><span class='price'>$" 
                + result[i].sell_price + "</span></div>"; 
  		        all= all + row;
  		    }
		    id      = 0;
		    all     = all + '</div>';
		    document.id('building_inventory_table').innerHTML = all;
		    $$('.buy').addEvent('click', function()
		    {
			    var itemID = this.get('id');
			    retrieve(itemID);
		    });
		}
	}).get();
}

function request_my_inventory()
{
	var all = '<div id="my_inventory"><div class="name">Backpack</div>';
	var details = this.details;
	var a = new Request.JSON({
		url: "index.php?option=com_battle&format=raw&task=action&action=get_backpack&building_id=" 
		+ building_id, 
        onSuccess: function(result)
        {
            for (i = 0; i < result.length; ++ i)
            {
                var row = "<div class='object'><a href='#' title='" 
                + result[i].name + "' class='sell' id='" 
                + result[i].id 
                + "'><img src='/components/com_battle/images/objects/" 
                + result[i].name + ".png' height='32' width='32' /></a><span class='price'>$" 
                + result[i].buy_price 
                + "</span></div>"; 
 				all= all + row;
 			}
			all= all + '</div>';
			document.id('my_inventory').innerHTML = all;
			$$('.sell').addEvent('click', function()
			{
				var itemID = this.get('id');
				store(itemID);
			});
		}
	}).get();
	
}	

function retrieve(itemID){
	var a = new Request.JSON({
    url: "index.php?option=com_battle&format=raw&task=action&action=retrieve&building_id=" + building_id + "&item=" + itemID + "&room=" + flat, 
    onSuccess: function(result){
    	     request_flat_inventory();
                request_my_inventory();
    	}
    }).get();
 
}

function store(itemID)
{
 
	var a = new Request.JSON(
	{
        url: "index.php?option=com_battle&format=raw&task=action&action=store&building_id=" + building_id + "&item=" + itemID + "&room="  + flat, 
        onSuccess: function(result)
        {
       	   request_flat_inventory();
            request_my_inventory();
       	  
       	  
       	   
        }
    }).get();
}


 request_flat_inventory();
 request_my_inventory();