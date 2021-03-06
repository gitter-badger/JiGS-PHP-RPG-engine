<?php
/**
 * @version		$Id: index.php WaseemSadiq - Modified by EMC23$
 * @package		Joomla
 * @subpackage	Templates / basic skeleton template
 * @copyright	Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
      
      / \
     /   \     
    /  0  \
   /       \
  /   \_/   \
 /___________\
 
 * This template structure includes elements from
		beez (overrides)
		rhuk_milkyway (rounded modules)
It is based on the skeleton-template-tableless by Waseem Sadiq of www.bulletprooftemplates.com (collapsible source-ordered layout, styleswitcher etc).
		 
 * EMC23 extends our infinite gratitude to the Joomla Community
 * Bugs? Please contact us - www.emc23.com
 */


// no direct access
defined('_JEXEC') or die('Restricted access');
JHTML::_('behavior.tooltip');
include_once("includes/template_config.php");
$url = clone(JURI::getInstance());
$user =& JFactory::getUser();
$app = Jfactory::getApplication();
?>



<?php echo '<?xml version="1.0" encoding="utf-8"?' .'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
<jdoc:include type="head" />
<?php  JHTML::_('behavior.mootools'); ?>
<script type="text/javascript">
	<!--
		if (top.location!= self.location) {
			top.location = self.location.href
		}
	-->
</script>
  <script id="loadarea_0" type="text/javascript"></script>
    <script id="loadarea_1" type="text/javascript"></script>
  
  
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="screen" />	

<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/theme.css" rel="stylesheet" type="text/css" media="screen" />	

  
	<!--[if lte IE 6]>
	<style type="text/css"> img { behavior: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/iepngfix.htc); }</style>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie_hacks.css" media="screen, projection" />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/iehover.js"></script>
	<![endif]-->	
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie_7.css" media="screen, projection" />
	<![endif]-->
    
<?php if($this->direction == 'rtl') : ?><link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/rtl/layout_rtl.css" rel="stylesheet" type="text/css" /><?php endif; ?>









<script type="text/javascript" src="<?php echo $this->baseurl ?>/media/system/js/modal.js"></script>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/media/system/css/modal.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/components/com_battle/includes/jigs.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/components/com_battle/includes/_web.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/components/com_battle/includes/style.css" type="text/css" media="screen" />


<script type="text/javascript" src="<?php echo $this->baseurl ?>/components/com_battle/includes/_class.noobSlide.packed.js"></script>


<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/emc23flexiv2.3/javascript/emctempus.js"></script>


</head>

<body id="<?php echo $style ;?>">

<div id="wrapper">
    
<!--<div id="header" class="clr clearfix">header-->
                    
<div id="logo">
<a href="<?php echo $this->baseurl ?>/index.php" title="<?php echo $app->getCfg('sitename');?> Home"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" border="0" alt="<?php echo $app->getCfg('sitename');?> Logo" /></a>
</div><!-- end logo -->
        
<?php if ($this->countModules('top')) : ?><!--top-module-->
<div id="top-module">
<jdoc:include type="modules" name="top" style="xhtml" />
</div><!-- end top-module -->
<?php endif; ?>
            
<!-- </div>end header -->
          
		 


            
<?php if ($this->countModules('user3')) : ?><!--horizontal nav-->
<div id="nav">
<jdoc:include type="modules" name="user3" style="raw" /> 
</div><!-- end nav -->
<?php endif; ?>
        
		
<!--Main Content Area-->
        <div id="BodyContent" class="clr clearfix">
			<div id="LoadFirst" class="clearfix">
				
				<div id="MiddleCol">
					<div class="inside">
						<?php if ($this->countModules('user1 or user2 or user5')) : ?><!--top-user-modules-->
            			<div id="top-user-modules" class="clearfix">
            		
            				<?php if ($this->countModules('user1')) : ?>
            				<div id="user1" class="count<?php echo $top_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user1" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user1 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user2')) : ?>
            				<div id="user2" class="count<?php echo $top_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user2" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user2 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user5')) : ?>
            				<div id="user5" class="count<?php echo $top_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user5" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user5 -->
            				<?php endif; ?>
            		
            			</div><!-- end top-user-modules -->
            			<?php endif; ?>
            	
				<!--Main Content-->
				
            			<div id="mainbody" class="clearfix">
            				<?php if(count(JFactory::getApplication()->getMessageQueue())):?>
							<div class="error">
								<h2> Message </h2>
									<jdoc:include type="message" />
							</div>	
 							<?php endif; ?>           			<jdoc:include type="component" />
            			</div><!-- end mainbody -->
            	
            			<?php if ($this->countModules('user6 or user7 or user8 or user9')) : ?><!--bottom-user-modules-->
            			<div id="bottom-user-modules" class="clearfix">
            		
            				<?php if ($this->countModules('user6')) : ?>
            				<div id="user6" class="count<?php echo $bottom_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user6" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user6 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user7')) : ?>
            				<div id="user7" class="count<?php echo $bottom_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user7" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user7 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user8')) : ?>
            				<div id="user8" class="count<?php echo $bottom_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user8" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user8 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user9')) : ?>
            				<div id="user9" class="count<?php echo $bottom_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user9" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user9 -->
            				<?php endif; ?>
            		
            			</div><!-- end bottom-user-modules -->
            			<?php endif; ?>
			
			

<?php if ($this->countModules('messenger')) : ?>
<jdoc:include type="modules" name="messenger" style="html" />
<?php endif; ?>

		


            		</div><!-- end inside -->
				</div><!-- end MiddleCol -->
	
				<?php if ($this->countModules('left or syndicate or user10')) : ?><!--Left Column-->
				<div id="left">
					<div class="inside">
						<?php if ($this->countModules('left')) : ?>
							<jdoc:include type="modules" name="left" style="xhtml" />
            			<?php endif; ?>
						<?php if ($this->countModules('syndicate')) : ?>
							<jdoc:include type="modules" name="syndicate" style="xhtml" />
            			<?php endif; ?>
						<?php if ($this->countModules('user10')) : ?>
							<jdoc:include type="modules" name="user10" style="rounded" />
            			<?php endif; ?>
                        
            		</div><!-- end inside -->
				</div><!-- end left-->
            	<?php endif; ?>
				
			</div><!-- end LoadFirst -->
					
	
			<?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?><!--Right Column-->
			<div id="right">
				<div class="inside">
					<jdoc:include type="modules" name="right" style="xhtml" />
            	</div><!-- end inside -->
			</div><!-- end right-->
            <?php endif; ?>

		</div><!-- end BodyContent -->


            			<?php if ($this->countModules('user11 or user12 or user13 or user14')) : ?><!--footer-user-modules-->
            			<div id="footer-user-modules" class="clearfix">
            		
            				<?php if ($this->countModules('user11')) : ?>
            				<div id="user11" class="count<?php echo $footer_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user11" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user11 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user12')) : ?>
            				<div id="user12" class="count<?php echo $footer_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user12" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user12 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user13')) : ?>
            				<div id="user13" class="count<?php echo $footer_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user13" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user13 -->
            				<?php endif; ?>
            		
            				<?php if ($this->countModules('user14')) : ?>
            				<div id="user14" class="count<?php echo $footer_total ;?>">
								<div class="inside">
                					<jdoc:include type="modules" name="user14" style="xhtml" />
            					</div><!-- end inside -->
            				</div><!-- end user14 -->
            				<?php endif; ?>
            		
            			</div><!-- end footer-user-modules -->
            			<?php endif; ?>
						
        

		     
		
</div><!-- end wrapper -->

<div id="footer" class="clearfix"><!--footer-->
		
<?php if ($this->countModules('user15')) : ?><!-- footer nav-->
<div id="footer_nav" class="clr">
<jdoc:include type="modules" name="user15" style="raw" /> 
</div>
<?php endif; ?>
			
					
<?php if ($this->countModules('footer')) : ?>
<jdoc:include type="modules" name="footer" style="raw" />
<?php endif; ?>
		
</div><!-- end footer -->
	
<?php if ($this->countModules('banner')) : ?><!--banner-->
<div id="banner" class="clearfix">
<jdoc:include type="modules" name="banner" style="raw" /> 
</div>
<?php endif; ?><!-- end banner -->
    
<?php if ($this->countModules('debug')) : ?>
<div id="debug"><jdoc:include type="modules" name="debug" /></div>
<?php endif; ?>
    
</div><!-- end background changer -->

	
</body>
</html>
