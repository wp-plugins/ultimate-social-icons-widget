<?php
/**
 * @package ultimate_social_icons_widget
*/
/*
Plugin Name: Ultimate Social Icons Widget
Plugin URI: http://connexstudios.com/
Description: Thanks for installing Ultimate Social Icons Widget.
Version: 1.0
Author: Connex Studios
Author URI: http://connexstudios.com/
*/

class UltimateSocialIconsWidget extends WP_Widget{
    
    public function __construct() {
        $params = array(
            'description' => 'Thanks for installing Ultimate Social Icons',
            'name' => ' Ultimate Social Icons'
        );
        parent::__construct('UltimateSocialIconsWidget','',$params);
    }
	


    
    public function form($instance) {
        extract($instance);
        
        ?>
        
<p style="background:#000000; color:#3C0; padding:5px; border-radius:5px; text-align:center; font-size:18px">Share Button Settings</p>       
<!-- here will put all widget configuration -->
		<p>
				<label for="<?php echo $this->get_field_id('title');?>">Title : </label>
				<input
				class="widefat"
				id="<?php echo $this->get_field_id('title');?>"
				name="<?php echo $this->get_field_name('title');?>"
					value="<?php echo !empty($title) ? $title : "Ultimate Social Icons"; ?>" />
		</p>
		<p>
		<?php $fbook=" "; ?>
			<label for="<?php echo $this->get_field_id( 'fbook' ); ?>">Display Facebook:</label> 
			<select id="<?php echo $this->get_field_id( 'fbook' ); ?>"
				name="<?php echo $this->get_field_name( 'fbook' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($fbook == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($fbook == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('facebook_url');?>">Your Facebook URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('facebook_url');?>"
			name="<?php echo $this->get_field_name('facebook_url');?>"
			value="<?php echo !empty($facebook_url) ? $facebook_url : "#"; ?>" />
		</p>
		<p>
		<?php $fb_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'fb_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'fb_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'fb_layout' ); ?>"
				class="widefat" style="width:100%">
				<option value="box_count" <?php if ($fb_layout == 'box_count') echo 'selected'; ?> ><?php _e('Box Count', ' '); ?></option>
					<option value="button_count" <?php if ($fb_layout == 'button_count') echo 'selected'; ?> ><?php _e('Button Count', ' '); ?></option>
					<option value="button" <?php if ($fb_layout == 'button') echo 'selected'; ?>> <?php _e('Button', ' '); ?></option>
					<option value="icon_link" <?php if ($fb_layout == 'icon_link') echo ' selected'; ?>><?php _e('Icon Link', ' '); ?></option>		
			</select>
		</p>

		 <p>
          
            

            
          </select>
        </p>
		

										 <!------------------- facebook end--------------->

		<p>
		<?php $twitts=" "; ?>
			<label for="<?php echo $this->get_field_id( 'twitts' ); ?>">Display Twitter:</label> 
			<select id="<?php echo $this->get_field_id( 'twitts' ); ?>"
				name="<?php echo $this->get_field_name( 'twitts' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($twitts == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($twitts == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('twitter_url');?>">Your Twitter URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('twitter_url');?>"
			name="<?php echo $this->get_field_name('twitter_url');?>"
			value="<?php echo !empty($twitter_url) ? $twitter_url : "#"; ?>" />
		</p>
		<p>
		<?php $twit_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'twit_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'twit_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'twit_layout' ); ?>"
				class="widefat" style="width:100%;">
				    <option value="vertical" <?php if ($twit_layout == 'vertical') echo 'selected="vertical"'; ?> >vertical</option>
					<option value="horizontal" <?php if ($twit_layout == 'horizontal') echo 'selected="horizontal"'; ?> >horizontal</option>
					
					<option value="none" <?php if ($twit_layout == 'none') echo 'selected="none"'; ?> >none</option>
						
			</select>
		</p>
		<p>
		<?php $googles=" "; ?>
			<label for="<?php echo $this->get_field_id( 'googles' ); ?>">Display Google+:</label> 
			<select id="<?php echo $this->get_field_id( 'googles' ); ?>"
				name="<?php echo $this->get_field_name( 'googles' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($googles == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($googles == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('google_url');?>">Your Google+ URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('google_url');?>"
			name="<?php echo $this->get_field_name('google_url');?>"
			value="<?php echo !empty($google_url) ? $google_url : "#"; ?>" />
		</p>
		<p>
		<?php $google_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'google_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'google_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'google_layout' ); ?>"
				class="widefat" style="width:100%;">
				    <option value="vertical-bubble" <?php if ($google_layout == 'vertical-bubble') echo 'selected="vertical-bubble"'; ?> >vertical-bubble</option>
					<option value="bubble" <?php if ($google_layout == 'bubble') echo 'selected="bubble"'; ?> >bubble</option>
					
					<option value="inline" <?php if ($google_layout == 'inline') echo 'selected="inline"'; ?> >inline</option>
						
			</select>
		</p>
		<p>
		<?php $link=" "; ?>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">Display Linkedin:</label> 
			<select id="<?php echo $this->get_field_id( 'link' ); ?>"
				name="<?php echo $this->get_field_name( 'link' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($link == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($link == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('google_url');?>">Your Linkedin URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('linkedin_url');?>"
			name="<?php echo $this->get_field_name('linkedin_url');?>"
			value="<?php echo !empty($linkedin_url) ? $linkedin_url : "#"; ?>" />
		</p>
		<p>
		<?php $linkedin_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'linkedin_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'linkedin_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'linkedin_layout' ); ?>"
				class="widefat" style="width:100%;">
					<option value="top" <?php if ($linkedin_layout == 'top') echo 'selected="top"'; ?> >top</option>
					<option value="right" <?php if ($linkedin_layout == 'right') echo 'selected="right"'; ?> >right</option>
					<option value="none" <?php if ($linkedin_layout == 'none') echo 'selected="inline"'; ?> >none</option>
						
			</select>
		</p>
		<p>
		<?php $pin=" "; ?>
			<label for="<?php echo $this->get_field_id( 'pin' ); ?>">Display Pinterest:</label> 
			<select id="<?php echo $this->get_field_id( 'pin' ); ?>"
				name="<?php echo $this->get_field_name( 'pin' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($pin == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($pin == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('Pinterest_url');?>">Your Pinterest URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('Pinterest_url');?>"
			name="<?php echo $this->get_field_name('Pinterest_url');?>"
			value="<?php echo !empty($Pinterest_url) ? $Pinterest_url : "#"; ?>" />
		</p>
		<p>
		<?php $twit_layout=" "; ?>
				<label for="<?php echo $this->get_field_id('pin_image');?>">Your image URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('pin_image');?>"
				name="<?php echo $this->get_field_name('pin_image');?>"
				value="<?php echo !empty($pin_image) ? $pin_image : "#"; ?>" />
		</p>
		<p>
		<?php $Pinterest_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'Pinterest_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'Pinterest_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'Pinterest_layout' ); ?>"
				class="widefat" style="width:100%;">
					<option value="above" <?php if ($Pinterest_layout == 'above') echo 'selected="above"'; ?> >top</option>
					<option value="beside" <?php if ($Pinterest_layout == 'beside') echo 'selected="beside"'; ?> >right</option>
					<option value="none" <?php if ($Pinterest_layout == 'none') echo 'selected="inline"'; ?> >none</option>
						
			</select>
		</p>
		<p>
		<?php $buffs=" "; ?>
			<label for="<?php echo $this->get_field_id( 'buffs' ); ?>">Display Buffer:</label> 
			<select id="<?php echo $this->get_field_id( 'buffs' ); ?>"
				name="<?php echo $this->get_field_name( 'buffs' ); ?>"
				class="widefat" style="width:100%;">
				    <option value="no" <?php if ($buffs == 'no') echo 'selected="no"'; ?> >No</option>
					<option value="yes" <?php if ($buffs == 'yes') echo 'selected="yes"'; ?> >Yes</option>
						
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('buffer_url');?>">Your Buffer URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('buffer_url');?>"
			name="<?php echo $this->get_field_name('buffer_url');?>"
			value="<?php echo !empty($buffer_url) ? $buffer_url : "#"; ?>" />
		</p>
		<p>
		<?php $buffer_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'buffer_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'buffer_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'buffer_layout' ); ?>"
				class="widefat" style="width:100%;">
					<option value="vertical" <?php if ($buffer_layout == 'vertical') echo 'selected="vertical"'; ?> >vertical</option>
					<option value="horizontal" <?php if ($buffer_layout == 'horizontal') echo 'selected="horizontal"'; ?> >horizontal</option>
					<option value="none" <?php if ($buffer_layout == 'none') echo 'selected="inline"'; ?> >none</option>
						
			</select>
		</p>
		<p>
		<?php $xing=" "; ?>
			<label for="<?php echo $this->get_field_id( 'xing' ); ?>">Display Xing:</label> 
			<select id="<?php echo $this->get_field_id( 'xing' ); ?>"
				name="<?php echo $this->get_field_name( 'xing' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($xing == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($xing == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('xing_url');?>">Your Xing URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('xing_url');?>"
			name="<?php echo $this->get_field_name('xing_url');?>"
			value="<?php echo !empty($xing_url) ? $xing_url : "#"; ?>" />
		</p>
		<p>
		<?php $xing_layout=" "; ?>
			<label for="<?php echo $this->get_field_id( 'xing_layout' ); ?>"> Layout:</label> 
			<select id="<?php echo $this->get_field_id( 'xing_layout' ); ?>"
				name="<?php echo $this->get_field_name( 'xing_layout' ); ?>"
				class="widefat" style="width:100%;">
					<option value="top" <?php if ($buffer_layout == 'top') echo 'selected="top"'; ?> >top</option>
					<option value="right" <?php if ($buffer_layout == 'right') echo 'selected="right"'; ?> >right</option>
					<option value="none" <?php if ($buffer_layout == 'none') echo 'selected="inline"'; ?> >none</option>
						
			</select>
		</p>
		
		<p>
		<?php $red=" "; ?>
			<label for="<?php echo $this->get_field_id( 'red' ); ?>">Display Reddit:</label> 
			<select id="<?php echo $this->get_field_id( 'red' ); ?>"
				name="<?php echo $this->get_field_name( 'red' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($red == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($red == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('reddit_url');?>">Your Reddit URL : </label>
			<input class="widefat"
			id="<?php echo $this->get_field_id('reddit_url');?>"
			name="<?php echo $this->get_field_name('reddit_url');?>"
			value="<?php echo !empty($reddit_url) ? $reddit_url : "#"; ?>" />
		</p>

		<! -- ---------------------------------------------                  end share icon-------------------------- >
		
        <p style="background:#000000; color:#3C0; padding:5px; border-radius:5px; text-align:center; font-size:18px">Icons Configuration Settings</p>

		<p>
		<?php $images=" "; ?>
			<label for="<?php echo $this->get_field_id( 'images' ); ?>">Display Image Dimension:</label> 
			<select id="<?php echo $this->get_field_id( 'images' ); ?>"
				name="<?php echo $this->get_field_name( 'images' ); ?>"
				class="widefat" style="width:100%;">
					<option value="big" <?php if ($images == 'big') echo 'selected="big"'; ?> >Small</option>
					<option value="small" <?php if ($images == 'small') echo 'selected="small"'; ?> >Big</option>	
			</select>
		</p>
		<p>
		 <?php $imag=" "; ?>
			<label for="<?php echo $this->get_field_id( 'imag' ); ?>">Display Image:</label> 
			<select id="<?php echo $this->get_field_id( 'imag' ); ?>"
				name="<?php echo $this->get_field_name( 'imag' ); ?>"
				class="widefat" style="width:100%;">
					<option value="cir" <?php if ($imag == 'cir') echo 'selected="cir"'; ?> >circle</option>
					<option value="sq" <?php if ($imag == 'sq') echo 'selected="sq"'; ?> >squire</option>
					
			</select>
		</p>
		<p>
		<?php $bebo=" "; ?>
			<label for="<?php echo $this->get_field_id( 'bebo' ); ?>">Display Bebo:</label> 
			<select id="<?php echo $this->get_field_id( 'bebo' ); ?>"
				name="<?php echo $this->get_field_name( 'bebo' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($bebo == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($bebo == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>

		<p>
				<label for="<?php echo $this->get_field_id('bebo_url');?>">Bebo URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('bebo_url');?>"
				name="<?php echo $this->get_field_name('bebo_url');?>"
				value="<?php echo !empty($bebo_url) ? $bebo_url : "#"; ?>" />
		</p>
		<p>
		<?php $bibsonomy=" "; ?>
			<label for="<?php echo $this->get_field_id( 'bibsonomy' ); ?>">Display Bibsonomy:</label> 
			<select id="<?php echo $this->get_field_id( 'bibsonomy' ); ?>"
				name="<?php echo $this->get_field_name( 'bibsonomy' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($bibsonomy == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($bibsonomy == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('bibsonomy_url');?>">Bibsonomy URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('bibsonomy_url');?>"
				name="<?php echo $this->get_field_name('bibsonomy_url');?>"
				value="<?php echo !empty($bibsonomy_url) ? $bibsonomy_url : "#"; ?>" />
		</p>
		<p>
		<?php $bizsugar=" "; ?>
			<label for="<?php echo $this->get_field_id( 'bizsugar' ); ?>">Display bizsugar:</label> 
			<select id="<?php echo $this->get_field_id( 'bizsugar' ); ?>"
				name="<?php echo $this->get_field_name( 'bizsugar' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($bizsugar == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($bizsugar == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
		<?php $imag=" "; ?>
				<label for="<?php echo $this->get_field_id('bizsugar_url');?>">bizsugar URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('bizsugar_url');?>"
				name="<?php echo $this->get_field_name('bizsugar_url');?>"
				value="<?php echo !empty($bizsugar_url) ? $bizsugar_url : "#"; ?>" />
		</p>
		<p>
		<?php $blinklist=" "; ?>
			<label for="<?php echo $this->get_field_id( 'blinklist' ); ?>">Display blinklist:</label> 
			<select id="<?php echo $this->get_field_id( 'blinklist' ); ?>"
				name="<?php echo $this->get_field_name( 'blinklist' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($blinklist == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($blinklist == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('blinklist_url');?>">blinklist URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('blinklist_url');?>"
				name="<?php echo $this->get_field_name('blinklist_url');?>"
				value="<?php echo !empty($blinklist_url) ? $blinklist_url : "#"; ?>" />
		</p>
		<p>
		<?php $blogger=" "; ?>
			<label for="<?php echo $this->get_field_id( 'blogger' ); ?>">Display blogger:</label> 
			<select id="<?php echo $this->get_field_id( 'blogger' ); ?>"
				name="<?php echo $this->get_field_name( 'blogger' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($blogger == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($blogger == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('blinklist_url');?>">Blogger URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('blogger_url');?>"
				name="<?php echo $this->get_field_name('blogger_url');?>"
				value="<?php echo !empty($blogger_url) ? $blogger_url : "#"; ?>" />
		</p>
		<p>
		<?php $blogmarks=" "; ?>
			<label for="<?php echo $this->get_field_id( 'blogmarks' ); ?>">Display blogmarks:</label> 
			<select id="<?php echo $this->get_field_id( 'blogmarks' ); ?>"
				name="<?php echo $this->get_field_name( 'blogmarks' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($blogmarks == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($blogmarks == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('blogmarks_url');?>">Blogmarks URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('blogmarks_url');?>"
				name="<?php echo $this->get_field_name('blogmarks_url');?>"
				value="<?php echo !empty($blogmarksr_url) ? $blogmarks_url : "#"; ?>" />
		</p>
		<p>
		<?php $blokube=" "; ?>
			<label for="<?php echo $this->get_field_id( 'blokube' ); ?>">Display blokube:</label> 
			<select id="<?php echo $this->get_field_id( 'blokube' ); ?>"
				name="<?php echo $this->get_field_name( 'blokube' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($blokube == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($blokube == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('blokube_url');?>">Blokube URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('blokube_url');?>"
				name="<?php echo $this->get_field_name('blokube_url');?>"
				value="<?php echo !empty($blokube_url) ? $blokube_url : "#"; ?>" />
		</p>
		<p>
		<?php $blurpalicious=" "; ?>
			<label for="<?php echo $this->get_field_id( 'blurpalicious' ); ?>">Display blurpalicious:</label> 
			<select id="<?php echo $this->get_field_id( 'blurpalicious' ); ?>"
				name="<?php echo $this->get_field_name( 'blurpalicious' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($blurpalicious == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($blurpalicious == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('blurpalicious_url');?>">blurpalicious URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('blurpalicious_url');?>"
				name="<?php echo $this->get_field_name('blurpalicious_url');?>"
				value="<?php echo !empty($blurpalicious_url) ? $blurpalicious_url : "#"; ?>" />
		</p>
		<p>
		<?php $buddymarks=" "; ?>
			<label for="<?php echo $this->get_field_id( 'buddymarks' ); ?>">Display buddymarks:</label> 
			<select id="<?php echo $this->get_field_id( 'buddymarks' ); ?>"
				name="<?php echo $this->get_field_name( 'buddymarks' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($buddymarks == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($buddymarks == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('buddymarks_url');?>">Buddymarks URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('buddymarks_url');?>"
				name="<?php echo $this->get_field_name('buddymarks_url');?>"
				value="<?php echo !empty($buddymarks_url) ? $buddymarks_url : "#"; ?>" />
		</p>
		<p>
		<?php $buffer=" "; ?>
			<label for="<?php echo $this->get_field_id( 'buffer' ); ?>">Display buffer:</label> 
			<select id="<?php echo $this->get_field_id( 'buffer' ); ?>"
				name="<?php echo $this->get_field_name( 'buffer' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($buffer == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($buffer == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('buffer_urls');?>">Buffer URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('buffer_urls');?>"
				name="<?php echo $this->get_field_name('buffer_urls');?>"
				value="<?php echo !empty($buffer_urls) ? $buffer_urls : "#"; ?>" />
		</p>
		<p>
		<?php $care2=" "; ?>
			<label for="<?php echo $this->get_field_id( 'care2' ); ?>">Display care2:</label> 
			<select id="<?php echo $this->get_field_id( 'care2' ); ?>"
				name="<?php echo $this->get_field_name( 'care2' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($care2 == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($care2 == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p
		><p>
				<label for="<?php echo $this->get_field_id('care2_urls');?>">care2 URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('care2_urls');?>"
				name="<?php echo $this->get_field_name('care2_urls');?>"
				value="<?php echo !empty($care2_urls) ? $care2_urls : "#"; ?>" />
		</p>
		<p>
		<?php $connotea=" "; ?>
			<label for="<?php echo $this->get_field_id( 'connotea' ); ?>">Display connotea:</label> 
			<select id="<?php echo $this->get_field_id( 'connotea' ); ?>"
				name="<?php echo $this->get_field_name( 'connotea' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($connotea == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($connotea == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('connotea_urls');?>">connotea URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('connotea_urls');?>"
				name="<?php echo $this->get_field_name('connotea_urls');?>"
				value="<?php echo !empty($connotea_urls) ? $connotea_urls : "#"; ?>" />
		</p>
		<p>
		<?php $delicious=" "; ?>
			<label for="<?php echo $this->get_field_id( 'delicious' ); ?>">Display delicious:</label> 
			<select id="<?php echo $this->get_field_id( 'delicious' ); ?>"
				name="<?php echo $this->get_field_name( 'delicious' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($delicious == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($delicious == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('delicious_urls');?>">delicious URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('delicious_urls');?>"
				name="<?php echo $this->get_field_name('delicious_urls');?>"
				value="<?php echo !empty($delicious_urls) ? $delicious_urls : "#"; ?>" />
		</p>
		<p>
		<?php $designbump=" "; ?>
			<label for="<?php echo $this->get_field_id( 'designbump' ); ?>">Display designbump:</label> 
			<select id="<?php echo $this->get_field_id( 'designbump' ); ?>"
				name="<?php echo $this->get_field_name( 'designbump' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($designbump == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($designbump == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('designbump_url');?>">designbump URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('designbump_url');?>"
				name="<?php echo $this->get_field_name('designbump_url');?>"
				value="<?php echo !empty($designbump_url) ? $designbump_url : "#"; ?>" />
		</p>
		<p>
		<?php $designbump=" "; ?>
			<label for="<?php echo $this->get_field_id( 'designbump' ); ?>">Display designbump:</label> 
			<select id="<?php echo $this->get_field_id( 'designbump' ); ?>"
				name="<?php echo $this->get_field_name( 'designbump' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($designbump == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($designbump == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('designbump_urls');?>">designbump URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('designbump_urls');?>"
				name="<?php echo $this->get_field_name('designbump_urls');?>"
				value="<?php echo !empty($designbump_urls) ? $designbump_urls : "#"; ?>" />
		</p>
		<p>
		<?php $designfloat=" "; ?>
			<label for="<?php echo $this->get_field_id( 'designfloat' ); ?>">Display designfloat:</label> 
			<select id="<?php echo $this->get_field_id( 'designfloat' ); ?>"
				name="<?php echo $this->get_field_name( 'designfloat' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($designfloat == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($designfloat == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('designfloat_urls');?>">designfloat URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('designfloat_urls');?>"
				name="<?php echo $this->get_field_name('designfloat_urls');?>"
				value="<?php echo !empty($designfloat_urls) ? $designfloat_urls : "#"; ?>" />
		</p>
		<p>
		<?php $digg=" "; ?>
			<label for="<?php echo $this->get_field_id( 'digg' ); ?>">Display digg:</label> 
			<select id="<?php echo $this->get_field_id( 'digg' ); ?>"
				name="<?php echo $this->get_field_name( 'digg' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($digg == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($digg == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('digg_urls');?>">digg URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('digg_urls');?>"
				name="<?php echo $this->get_field_name('digg_urls');?>"
				value="<?php echo !empty($digg_urls) ? $digg_urls : "#"; ?>" />
		</p>
		<p>
		<?php $diigo=" "; ?>
			<label for="<?php echo $this->get_field_id( 'diigo' ); ?>">Display diigo:</label> 
			<select id="<?php echo $this->get_field_id( 'diigo' ); ?>"
				name="<?php echo $this->get_field_name( 'diigo' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($diigo == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($diigo == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('diigo_urls');?>">diigo URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('diigo_urls');?>"
				name="<?php echo $this->get_field_name('diigo_urls');?>"
				value="<?php echo !empty($diigo_urls) ? $diigo_urls : "#"; ?>" />
		</p>
		<p>
		<?php $dropjack=" "; ?>
			<label for="<?php echo $this->get_field_id( 'dropjack' ); ?>">Display dropjack:</label> 
			<select id="<?php echo $this->get_field_id( 'dropjack' ); ?>"
				name="<?php echo $this->get_field_name( 'dropjack' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($dropjack == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($dropjack == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('dropjack_urls');?>">dropjack URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('dropjack_urls');?>"
				name="<?php echo $this->get_field_name('dropjack_urls');?>"
				value="<?php echo !empty($dropjack_urls) ? $dropjack_urls : "#"; ?>" />
		</p>
		<p>
		<?php $dzone=" "; ?>
			<label for="<?php echo $this->get_field_id( 'dzone' ); ?>">Display dzone:</label> 
			<select id="<?php echo $this->get_field_id( 'dzone' ); ?>"
				name="<?php echo $this->get_field_name( 'dzone' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($dzone == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($dzone == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('dzone_urls');?>">dzone URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('dzone_urls');?>"
				name="<?php echo $this->get_field_name('dzone_urls');?>"
				value="<?php echo !empty($dzone_urls) ? $dzone_urls : "#"; ?>" />
		</p>
		<p>
		<?php $ekstreme=" "; ?>
			<label for="<?php echo $this->get_field_id( 'ekstreme' ); ?>">Display ekstreme:</label> 
			<select id="<?php echo $this->get_field_id( 'ekstreme' ); ?>"
				name="<?php echo $this->get_field_name( 'ekstreme' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($ekstreme == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($ekstreme == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('ekstreme_urls');?>">ekstreme URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('ekstreme_urls');?>"
				name="<?php echo $this->get_field_name('ekstreme_urls');?>"
				value="<?php echo !empty($ekstreme_urls) ? $ekstreme_urls : "#"; ?>" />
		</p>
		<p>
		<?php $evernote=" "; ?>
			<label for="<?php echo $this->get_field_id( 'evernote' ); ?>">Display evernote:</label> 
			<select id="<?php echo $this->get_field_id( 'evernote' ); ?>"
				name="<?php echo $this->get_field_name( 'evernote' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($evernote == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($evernote == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('evernote_urls');?>">evernote URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('evernote_urls');?>"
				name="<?php echo $this->get_field_name('evernote_urls');?>"
				value="<?php echo !empty($evernote_urls) ? $evernote_urls : "#"; ?>" />
		</p>
		<p>
		<?php $facebook=" "; ?>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Display facebook:</label> 
			<select id="<?php echo $this->get_field_id( 'facebook' ); ?>"
				name="<?php echo $this->get_field_name( 'facebook' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($facebook == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($facebook == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('facebook_urls');?>">facebook URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('facebook_urls');?>"
				name="<?php echo $this->get_field_name('facebook_urls');?>"
				value="<?php echo !empty($facebook_urls) ? $facebook_urls : "#"; ?>" />
		</p>
		<p>
		<?php $fark=" "; ?>
			<label for="<?php echo $this->get_field_id( 'fark' ); ?>">Display fark:</label> 
			<select id="<?php echo $this->get_field_id( 'fark' ); ?>"
				name="<?php echo $this->get_field_name( 'fark' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($fark == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($fark == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('fark_urls');?>">fark URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('fark_urls');?>"
				name="<?php echo $this->get_field_name('fark_urls');?>"
				value="<?php echo !empty($fark_urls) ? $fark_urls : "#"; ?>" />
		</p>
		<p>
		<?php $faves=" "; ?>
			<label for="<?php echo $this->get_field_id( 'faves' ); ?>">Display faves:</label> 
			<select id="<?php echo $this->get_field_id( 'faves' ); ?>"
				name="<?php echo $this->get_field_name( 'faves' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($faves == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($faves == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('faves_urls');?>">faves URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('faves_urls');?>"
				name="<?php echo $this->get_field_name('faves_urls');?>"
				value="<?php echo !empty($faves_urls) ? $faves_urls : "#"; ?>" />
		</p>
		<p>
		<?php $feedmarker=" "; ?>
			<label for="<?php echo $this->get_field_id( 'feedmarker' ); ?>">Display feedmarker:</label> 
			<select id="<?php echo $this->get_field_id( 'feedmarker' ); ?>"
				name="<?php echo $this->get_field_name( 'feedmarker' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($feedmarker == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($feedmarker == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('feedmarker_urls');?>">feedmarker URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('feedmarker_urls');?>"
				name="<?php echo $this->get_field_name('feedmarker_urls');?>"
				value="<?php echo !empty($feedmarker_urls) ? $feedmarker_urls : "#"; ?>" />
		</p>
		<p>
		<?php $folkd=" "; ?>
			<label for="<?php echo $this->get_field_id( 'folkd' ); ?>">Display folkd:</label> 
			<select id="<?php echo $this->get_field_id( 'folkd' ); ?>"
				name="<?php echo $this->get_field_name( 'folkd' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($folkd == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($folkd == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('folkd_urls');?>">folkd URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('folkd_urls');?>"
				name="<?php echo $this->get_field_name('folkd_urls');?>"
				value="<?php echo !empty($folkd_urls) ? $folkd_urls : "#"; ?>" />
		</p>
		<p>
		<?php $fwisp=" "; ?>
			<label for="<?php echo $this->get_field_id( 'fwisp' ); ?>">Display fwisp:</label> 
			<select id="<?php echo $this->get_field_id( 'fwisp' ); ?>"
				name="<?php echo $this->get_field_name( 'fwisp' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($fwisp == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($fwisp == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('fwisp_urls');?>">fwisp URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('fwisp_urls');?>"
				name="<?php echo $this->get_field_name('fwisp_urls');?>"
				value="<?php echo !empty($fwisp_urls) ? $fwisp_urls : "#"; ?>" />
		</p>
		<p>
		<?php $gabbr=" "; ?>
			<label for="<?php echo $this->get_field_id( 'gabbr' ); ?>">Display gabbr:</label> 
			<select id="<?php echo $this->get_field_id( 'gabbr' ); ?>"
				name="<?php echo $this->get_field_name( 'gabbr' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($gabbr == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($gabbr == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('gabbr_urls');?>">gabbr URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('gabbr_urls');?>"
				name="<?php echo $this->get_field_name('gabbr_urls');?>"
				value="<?php echo !empty($gabbr_urls) ? $gabbr_urls : "#"; ?>" />
		</p>
		<p>
		<?php $givealink=" "; ?>
			<label for="<?php echo $this->get_field_id( 'givealink' ); ?>">Display givealink:</label> 
			<select id="<?php echo $this->get_field_id( 'givealink' ); ?>"
				name="<?php echo $this->get_field_name( 'givealink' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($givealink == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($givealink == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('givealink_urls');?>">givealink URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('givealink_urls');?>"
				name="<?php echo $this->get_field_name('givealink_urls');?>"
				value="<?php echo !empty($givealink_urls) ? $givealink_urls : "#"; ?>" />
		</p>
		<p>
		<?php $googles=" "; ?>
			<label for="<?php echo $this->get_field_id( 'googles' ); ?>">Display google:</label> 
			<select id="<?php echo $this->get_field_id( 'googles' ); ?>"
				name="<?php echo $this->get_field_name( 'googles' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($googles == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($googles == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('google_urls');?>">google URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('google_urls');?>"
				name="<?php echo $this->get_field_name('google_urls');?>"
				value="<?php echo !empty($google_urls) ? $google_urls : "#"; ?>" />
		</p>
		<p>
		<?php $googleshare=" "; ?>
			<label for="<?php echo $this->get_field_id( 'googleshare' ); ?>">Display googleshare:</label> 
			<select id="<?php echo $this->get_field_id( 'googleshare' ); ?>"
				name="<?php echo $this->get_field_name( 'googleshare' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($googleshare == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($googleshare == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('google');?>">googleshare URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('googleshare_urls');?>"
				name="<?php echo $this->get_field_name('googleshare_urls');?>"
				value="<?php echo !empty($googleshare_urls) ? $googleshare_urls : "#"; ?>" />
		</p>
		<p>
		<?php $hyves=" "; ?>
			<label for="<?php echo $this->get_field_id( 'hyves' ); ?>">Display hyves:</label> 
			<select id="<?php echo $this->get_field_id( 'hyves' ); ?>"
				name="<?php echo $this->get_field_name( 'hyves' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($hyves == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($hyves == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('googleshare_urls');?>">hyves URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('hyves_urls');?>"
				name="<?php echo $this->get_field_name('hyves_urls');?>"
				value="<?php echo !empty($hyves_urls) ? $hyves_urls : "#"; ?>" />
		</p>
		<p>
		<?php $identica=" "; ?>
			<label for="<?php echo $this->get_field_id( 'identica' ); ?>">Display identica:</label> 
			<select id="<?php echo $this->get_field_id( 'identica' ); ?>"
				name="<?php echo $this->get_field_name( 'identica' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($identica == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($identica == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('identica_urls');?>">identica URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('identica_urls');?>"
				name="<?php echo $this->get_field_name('identica_urls');?>"
				value="<?php echo !empty($identica_urls) ? $identica_urls : "#"; ?>" />
		</p>
		<p>
		<?php $jamespot=" "; ?>
			<label for="<?php echo $this->get_field_id( 'jamespot' ); ?>">Display jamespot:</label> 
			<select id="<?php echo $this->get_field_id( 'jamespot' ); ?>"
				name="<?php echo $this->get_field_name( 'jamespot' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($jamespot == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($jamespot == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('jamespot_urls');?>">jamespot URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('jamespot_urls');?>"
				name="<?php echo $this->get_field_name('jamespot_urls');?>"
				value="<?php echo !empty($jamespot_urls) ? $jamespot_urls : "#"; ?>" />
		</p>
		<p>
		<?php $jumptags=" "; ?>
			<label for="<?php echo $this->get_field_id( 'jumptags' ); ?>">Display jumptags:</label> 
			<select id="<?php echo $this->get_field_id( 'jumptags' ); ?>"
				name="<?php echo $this->get_field_name( 'jumptags' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($jumptags == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($jumptags == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('jumptags_urls');?>">jumptags URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('jumptags_urls');?>"
				name="<?php echo $this->get_field_name('jumptags_urls');?>"
				value="<?php echo !empty($jumptags_urls) ? $jumptags_urls : "#"; ?>" />
		</p>
		<p>
		<?php $linkedin=" "; ?>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>">Display linkedin:</label> 
			<select id="<?php echo $this->get_field_id( 'linkedin' ); ?>"
				name="<?php echo $this->get_field_name( 'linkedin' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($linkedin == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($linkedin == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('linkedin_urls');?>">linkedin URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('linkedin_urls');?>"
				name="<?php echo $this->get_field_name('linkedin_urls');?>"
				value="<?php echo !empty($linkedin_urls) ? $linkedin_urls : "#"; ?>" />
		</p>
		<p>
		<?php $linkagogo=" "; ?>
			<label for="<?php echo $this->get_field_id( 'linkagogo' ); ?>">Display linkagogo:</label> 
			<select id="<?php echo $this->get_field_id( 'linkagogo' ); ?>"
				name="<?php echo $this->get_field_name( 'linkagogo' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($linkagogo == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($linkagogo == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('linkagogo_urls');?>">linkagogo URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('linkagogo_urls');?>"
				name="<?php echo $this->get_field_name('linkagogo_urls');?>"
				value="<?php echo !empty($linkagogo_urls) ? $linkagogo_urls : "#"; ?>" />
		</p>
		<p>
		<?php $linkarena=" "; ?>
			<label for="<?php echo $this->get_field_id( 'linkarena' ); ?>">Display linkarena:</label> 
			<select id="<?php echo $this->get_field_id( 'linkarena' ); ?>"
				name="<?php echo $this->get_field_name( 'linkarena' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($linkarena == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($linkarena == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('linkarena_urls');?>">linkarena URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('linkarena_urls');?>"
				name="<?php echo $this->get_field_name('linkarena_urls');?>"
				value="<?php echo !empty($linkarena_urls) ? $linkarena_urls : "#"; ?>" />
		</p>
		<p>
		<?php $mefeedia=" "; ?>
			<label for="<?php echo $this->get_field_id( 'mefeedia' ); ?>">Display mefeedia:</label> 
			<select id="<?php echo $this->get_field_id( 'mefeedia' ); ?>"
				name="<?php echo $this->get_field_name( 'mefeedia' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($mefeedia == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($mefeedia == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('mefeedia_urls');?>">mefeedia URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('mefeedia_urls');?>"
				name="<?php echo $this->get_field_name('mefeedia_urls');?>"
				value="<?php echo !empty($mefeedia_urls) ? $mefeedia_urls : "#"; ?>" />
		</p>
		<p>
		<?php $misterwong=" "; ?>
			<label for="<?php echo $this->get_field_id( 'misterwong' ); ?>">Display misterwong:</label> 
			<select id="<?php echo $this->get_field_id( 'misterwong' ); ?>"
				name="<?php echo $this->get_field_name( 'misterwong' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($misterwong == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($misterwong == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('misterwong_urls');?>">misterwong URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('misterwong_urls');?>"
				name="<?php echo $this->get_field_name('misterwong_urls');?>"
				value="<?php echo !empty($misterwong_urls) ? $misterwong_urls : "#"; ?>" />
		</p>
		<p>
		<?php $multiply=" "; ?>
			<label for="<?php echo $this->get_field_id( 'multiply' ); ?>">Display multiply:</label> 
			<select id="<?php echo $this->get_field_id( 'multiply' ); ?>"
				name="<?php echo $this->get_field_name( 'multiply' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($multiply == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($multiply == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('multiply_urls');?>">multiply URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('multiply_urls');?>"
				name="<?php echo $this->get_field_name('multiply_urls');?>"
				value="<?php echo !empty($multiply_urls) ? $multiply_urls : "#"; ?>" />
		</p>
		<p>
		<?php $myspace=" "; ?>
			<label for="<?php echo $this->get_field_id( 'myspace' ); ?>">Display myspace:</label> 
			<select id="<?php echo $this->get_field_id( 'myspace' ); ?>"
				name="<?php echo $this->get_field_name( 'myspace' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($myspace == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($myspace == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('multiply_urls');?>">myspace URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('myspace_urls');?>"
				name="<?php echo $this->get_field_name('myspace_urls');?>"
				value="<?php echo !empty($myspace_urls) ? $myspace_urls : "#"; ?>" />
		</p>
		<p>
		<?php $netlog=" "; ?>
			<label for="<?php echo $this->get_field_id( 'netlog' ); ?>">Display netlog:</label> 
			<select id="<?php echo $this->get_field_id( 'netlog' ); ?>"
				name="<?php echo $this->get_field_name( 'netlog' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($netlog == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($netlog == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('netlog_urls');?>">netlog URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('netlog_urls');?>"
				name="<?php echo $this->get_field_name('netlog_urls');?>"
				value="<?php echo !empty($netlog_urls) ? $netlog_urls : "#"; ?>" />
		</p>
		<p>
		<?php $netvouz=" "; ?>
			<label for="<?php echo $this->get_field_id( 'netvouz' ); ?>">Display netvouz:</label> 
			<select id="<?php echo $this->get_field_id( 'netvouz' ); ?>"
				name="<?php echo $this->get_field_name( 'netvouz' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($netvouz == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($netvouz == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('netvouz_urls');?>">netvouz URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('netvouz_urls');?>"
				name="<?php echo $this->get_field_name('netvouz_urls');?>"
				value="<?php echo !empty($netvouz_urls) ? $netvouz_urls : "#"; ?>" />
		</p>
		<p>
		<?php $newsvine=" "; ?>
			<label for="<?php echo $this->get_field_id( 'newsvine' ); ?>">Display newsvine:</label> 
			<select id="<?php echo $this->get_field_id( 'newsvine' ); ?>"
				name="<?php echo $this->get_field_name( 'newsvine' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($newsvine == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($newsvine == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('newsvine_urls');?>">newsvine URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('newsvine_urls');?>"
				name="<?php echo $this->get_field_name('newsvine_urls');?>"
				value="<?php echo !empty($newsvine_urls) ? $newsvine_urls : "#"; ?>" />
		</p>
		<p>
		<?php $orkut=" "; ?>
			<label for="<?php echo $this->get_field_id( 'orkut' ); ?>">Display orkut:</label> 
			<select id="<?php echo $this->get_field_id( 'orkut' ); ?>"
				name="<?php echo $this->get_field_name( 'orkut' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($orkut == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($orkut == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('orkut_urls');?>">orkut URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('orkut_urls');?>"
				name="<?php echo $this->get_field_name('orkut_urls');?>"
				value="<?php echo !empty($orkut_urls) ? $orkut_urls : "#"; ?>" />
		</p>
		<p>
		<?php $plaxo=" "; ?>
			<label for="<?php echo $this->get_field_id( 'plaxo' ); ?>">Display plaxo:</label> 
			<select id="<?php echo $this->get_field_id( 'plaxo' ); ?>"
				name="<?php echo $this->get_field_name( 'plaxo' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($plaxo == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($plaxo == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('plaxo_urls');?>">plaxo URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('plaxo_urls');?>"
				name="<?php echo $this->get_field_name('plaxo_urls');?>"
				value="<?php echo !empty($plaxo_urls) ? $plaxo_urls : "#"; ?>" />
		</p>
		<p>
		<?php $plurk=" "; ?>
			<label for="<?php echo $this->get_field_id( 'plurk' ); ?>">Display plurk:</label> 
			<select id="<?php echo $this->get_field_id( 'plurk' ); ?>"
				name="<?php echo $this->get_field_name( 'plurk' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($plurk == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($plurk == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('plurk_urls');?>">plurk URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('plurk_urls');?>"
				name="<?php echo $this->get_field_name('plurk_urls');?>"
				value="<?php echo !empty($plurk_urls) ? $plurk_urls : "#"; ?>" />
		</p>
		<p>
		<?php $posterous=" "; ?>
			<label for="<?php echo $this->get_field_id( 'posterous' ); ?>">Display posterous:</label> 
			<select id="<?php echo $this->get_field_id( 'posterous' ); ?>"
				name="<?php echo $this->get_field_name( 'posterous' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($posterous == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($posterous == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('posterous_urls');?>">posterous URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('posterous_urls');?>"
				name="<?php echo $this->get_field_name('posterous_urls');?>"
				value="<?php echo !empty($posterous_urls) ? $posterous_urls : "#"; ?>" />
		</p>
		<p>
		<?php $reddit=" "; ?>
			<label for="<?php echo $this->get_field_id( 'reddit' ); ?>">Display reddit:</label> 
			<select id="<?php echo $this->get_field_id( 'reddit' ); ?>"
				name="<?php echo $this->get_field_name( 'reddit' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($reddit == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($reddit == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('reddit_urls');?>">reddit URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('reddit_urls');?>"
				name="<?php echo $this->get_field_name('reddit_urls');?>"
				value="<?php echo !empty($reddit_urls) ? $reddit_urls : "#"; ?>" />
		</p>
		<p>
		<?php $slashdot=" "; ?>
			<label for="<?php echo $this->get_field_id( 'slashdot' ); ?>">Display slashdot:</label> 
			<select id="<?php echo $this->get_field_id( 'slashdot' ); ?>"
				name="<?php echo $this->get_field_name( 'slashdot' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($slashdot == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($slashdot == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('slashdot_urls');?>">slashdot URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('slashdot_urls');?>"
				name="<?php echo $this->get_field_name('slashdot_urls');?>"
				value="<?php echo !empty($slashdot_urls) ? $slashdot_urls : "#"; ?>" />
		</p>
		<p>
		<?php $speedtile=" "; ?>
			<label for="<?php echo $this->get_field_id( 'speedtile' ); ?>">Display speedtile:</label> 
			<select id="<?php echo $this->get_field_id( 'speedtile' ); ?>"
				name="<?php echo $this->get_field_name( 'speedtile' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($speedtile == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($speedtile == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('speedtile_urls');?>">speedtile URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('speedtile_urls');?>"
				name="<?php echo $this->get_field_name('speedtile_urls');?>"
				value="<?php echo !empty($speedtile_urls) ? $speedtile_urls : "#"; ?>" />
		</p>
		<p>
		<?php $stumbleupon=" "; ?>
			<label for="<?php echo $this->get_field_id( 'stumbleupon' ); ?>">Display stumbleupon:</label> 
			<select id="<?php echo $this->get_field_id( 'stumbleupon' ); ?>"
				name="<?php echo $this->get_field_name( 'stumbleupon' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($stumbleupon == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($stumbleupon == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('speedtile_urls');?>">stumbleupon URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('stumbleupon_urls');?>"
				name="<?php echo $this->get_field_name('stumbleupon_urls');?>"
				value="<?php echo !empty($stumbleupon_urls) ? $stumbleupon_urls : "#"; ?>" />
		</p>
		<p>
		<?php $technorati=" "; ?>
			<label for="<?php echo $this->get_field_id( 'technorati' ); ?>">Display technorati:</label> 
			<select id="<?php echo $this->get_field_id( 'technorati' ); ?>"
				name="<?php echo $this->get_field_name( 'technorati' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($technorati == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($technorati == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('technorati_urls');?>">technorati URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('technorati_urls');?>"
				name="<?php echo $this->get_field_name('technorati_urls');?>"
				value="<?php echo !empty($technorati_urls) ? $technorati_urls : "#"; ?>" />
		</p>
		<p>
		<?php $thisnext=" "; ?>
			<label for="<?php echo $this->get_field_id( 'thisnext' ); ?>">Display thisnext:</label> 
			<select id="<?php echo $this->get_field_id( 'thisnext' ); ?>"
				name="<?php echo $this->get_field_name( 'thisnext' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($thisnext == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($thisnext == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('thisnext_urls');?>">thisnext URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('thisnext_urls');?>"
				name="<?php echo $this->get_field_name('thisnext_urls');?>"
				value="<?php echo !empty($thisnext_urls) ? $thisnext_urls : "#"; ?>" />
		</p>
		<p>
		<?php $tumblr=" "; ?>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>">Display tumblr:</label> 
			<select id="<?php echo $this->get_field_id( 'tumblr' ); ?>"
				name="<?php echo $this->get_field_name( 'tumblr' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($tumblr == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($tumblr == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('tumblr_urls');?>">tumblr URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('tumblr_urls');?>"
				name="<?php echo $this->get_field_name('tumblr_urls');?>"
				value="<?php echo !empty($tumblr_urls) ? $tumblr_urls : "#"; ?>" />
		</p>
		<p>
		<?php $tweetmeme=" "; ?>
			<label for="<?php echo $this->get_field_id( 'tweetmeme' ); ?>">Display tweetmeme:</label> 
			<select id="<?php echo $this->get_field_id( 'tweetmeme' ); ?>"
				name="<?php echo $this->get_field_name( 'tweetmeme' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($tweetmeme == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($tweetmeme == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('tweetmeme_urls');?>">tweetmeme URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('tweetmeme_urls');?>"
				name="<?php echo $this->get_field_name('tweetmeme_urls');?>"
				value="<?php echo !empty($tweetmeme_urls) ? $tweetmeme_urls : "#"; ?>" />
		</p>
		<p>
		<?php $twitter=" "; ?>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Display twitter:</label> 
			<select id="<?php echo $this->get_field_id( 'twitter' ); ?>"
				name="<?php echo $this->get_field_name( 'twitter' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($twitter == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($twitter == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('twitter_urls');?>">twitter URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('twitter_urls');?>"
				name="<?php echo $this->get_field_name('twitter_urls');?>"
				value="<?php echo !empty($twitter_urls) ? $twitter_urls : "#"; ?>" />
		</p>
		<p>
		<?php $twitthis=" "; ?>
			<label for="<?php echo $this->get_field_id( 'twitthis' ); ?>">Display twitthis:</label> 
			<select id="<?php echo $this->get_field_id( 'twitthis' ); ?>"
				name="<?php echo $this->get_field_name( 'twitthis' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($twitthis == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($twitthis == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('twitthis_urls');?>">twitthis URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('twitthis_urls');?>"
				name="<?php echo $this->get_field_name('twitthis_urls');?>"
				value="<?php echo !empty($twitthis_urls) ? $twitthis_urls : "#"; ?>" />
		</p>
		<p>
		<?php $typepad=" "; ?>
			<label for="<?php echo $this->get_field_id( 'typepad' ); ?>">Display typepad:</label> 
			<select id="<?php echo $this->get_field_id( 'typepad' ); ?>"
				name="<?php echo $this->get_field_name( 'typepad' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($typepad == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($typepad == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('typepad_urls');?>">typepad URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('typepad_urls');?>"
				name="<?php echo $this->get_field_name('typepad_urls');?>"
				value="<?php echo !empty($typepad_urls) ? $typepad_urls : "#"; ?>" />
		</p>
		<p>
		<?php $viadeo=" "; ?>
			<label for="<?php echo $this->get_field_id( 'viadeo' ); ?>">Display viadeo:</label> 
			<select id="<?php echo $this->get_field_id( 'viadeo' ); ?>"
				name="<?php echo $this->get_field_name( 'viadeo' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($viadeo == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($viadeo == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('viadeo_urls');?>">viadeo URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('viadeo_urls');?>"
				name="<?php echo $this->get_field_name('viadeo_urls');?>"
				value="<?php echo !empty($viadeo_urls) ? $viadeo_urls : "#"; ?>" />
		</p>
		<p>
		<?php $windowslive=" "; ?>
			<label for="<?php echo $this->get_field_id( 'windowslive' ); ?>">Display windowslive:</label> 
			<select id="<?php echo $this->get_field_id( 'windowslive' ); ?>"
				name="<?php echo $this->get_field_name( 'windowslive' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($windowslive == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($windowslive == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('windowslive_urls');?>">windowslive URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('windowslive_urls');?>"
				name="<?php echo $this->get_field_name('windowslive_urls');?>"
				value="<?php echo !empty($windowslive_urls) ? $windowslive_urls : "#"; ?>" />
		</p>
		<p>
		<?php $wirefan=" "; ?>
			<label for="<?php echo $this->get_field_id( 'wirefan' ); ?>">Display wirefan:</label> 
			<select id="<?php echo $this->get_field_id( 'wirefan' ); ?>"
				name="<?php echo $this->get_field_name( 'wirefan' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($wirefan == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($wirefan == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('wirefan_urls');?>">wirefan URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('wirefan_urls');?>"
				name="<?php echo $this->get_field_name('wirefan_urls');?>"
				value="<?php echo !empty($wirefan_urls) ? $wirefan_urls : "#"; ?>" />
		</p>
		<p>
		<?php $wordpress=" "; ?>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>">Display wordpress:</label> 
			<select id="<?php echo $this->get_field_id( 'wordpress' ); ?>"
				name="<?php echo $this->get_field_name( 'wordpress' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($wordpress == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($wordpress == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>

				<label for="<?php echo $this->get_field_id('wordpress_urls');?>">wordpress URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('wordpress_urls');?>"
				name="<?php echo $this->get_field_name('wordpress_urls');?>"
				value="<?php echo !empty($wordpress_urls) ? $wordpress_urls : "#"; ?>" />
		</p>
		<p>
		<?php $xanga=" "; ?>
			<label for="<?php echo $this->get_field_id( 'xanga' ); ?>">Display xanga:</label> 
			<select id="<?php echo $this->get_field_id( 'xanga' ); ?>"
				name="<?php echo $this->get_field_name( 'xanga' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($xanga == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($xanga == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('xanga_urls');?>">xanga URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('xanga_urls');?>"
				name="<?php echo $this->get_field_name('xanga_urls');?>"
				value="<?php echo !empty($xanga_urls) ? $xanga_urls : "#"; ?>" />
		</p>
		<p>
		<?php $xings=" "; ?>
			<label for="<?php echo $this->get_field_id( 'xings' ); ?>">Display xing:</label> 
			<select id="<?php echo $this->get_field_id( 'xings' ); ?>"
				name="<?php echo $this->get_field_name( 'xings' ); ?>"
				class="widefat" style="width:100%;">
					<option value="yes" <?php if ($xings == 'yes') echo 'selected="yes"'; ?> >Yes</option>
					<option value="no" <?php if ($xings == 'no') echo 'selected="no"'; ?> >No</option>	
			</select>
		</p>
		<p>
				<label for="<?php echo $this->get_field_id('xings_urls');?>">xing URL : </label>
				<input class="widefat"
				id="<?php echo $this->get_field_id('xings_urls');?>"
				name="<?php echo $this->get_field_name('xings_urls');?>"
				value="<?php echo !empty($xings_urls) ? $xings_urls : "#"; ?>" />
		</p>
  <?php
      }
       
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $title = apply_filters('widget_title', $title);
        $description = apply_filters('widget_description', $description);
	    if(empty($fbook)) $fbook = "yes";
	    if(empty($facebook_url)) $facebook_url = "#";	
        if(empty($fb_layout)) $fb_layout = "box_count";
		if(empty($twitts)) $twitts = "yes";
	    if(empty($twitter_url)) $twitter_url = "#";	
        if(empty($twit_layout)) $twit_layout = "vertical";
		if(empty($googles)) $googles = "yes";
	    if(empty($google_url)) $google_url = "#";	
        if(empty($google_layout)) $google_layout = "vertical-bubble";
		if(empty($link)) $link = "yes";
	    if(empty($linkedin_url)) $linkedin_url = "#";	
        if(empty($linkedin_layout)) $linkedin_layout = "top";
		if(empty($pin))$pin= "yes";
	    if(empty($Pinterest_url)) $Pinterest_url = "#";	
        if(empty($Pinterest_layout)) $Pinterest_layout = "above";
		if(empty($buffs)) $buffs = "no";
	    if(empty($buffer_url)) $buffer_url = "#";	
        if(empty($buffer_layout)) $buffer_layout = "vertical";
        echo $before_widget;
        echo $before_title . $title . $after_title;
            
  ?>

     <style>
           iframe#twitter-widget-0 {
               margin-bottom: 0px;
         }
     </style>
              
 <div class="advanced_social_sidebar_share ">

    <?php
		$fb="";
		$google="";
		$twite="";
		$linked="";
		$pins="";
		$buffers="";
		$xinger="";
		$mails="";
		$redis="";
	 ?> 
                                                 <!--------------  pinterest   ---------------->
    <?php if ($pin=='yes'){?>                                      
               <a href="//www.pinterest.com/pin/create/button/?url=<?php echo $Pinterest_url;?>%2F&media=<?php echo $pin_image;?>&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" <?php if ($Pinterest_layout=='above'){?> data-pin-config="above" <?php } ?>  <?php if ($Pinterest_layout=='beside'){?> data-pin-config="beside" <?php } ?>  <?php if ($Pinterest_layout=='none'){?> data-pin-config="none" <?php } ?> data-pin-color="white" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_28.png" /></a>
                                                                <!-- Please call pinit.js only once per page -->
          <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
    <?php } else { echo $pins;}?>

 
                                                  <!--------------  XING   ---------------->

    <?php if ($xing=='yes'){?>  
              <div data-type="XING/Share" data-counter="<?php echo $xing_layout;?>" data-url="<?php echo $xing_url;?>"></div>
        <script>
          ;(function (d, s) {
            var x = d.createElement(s),
              s = d.getElementsByTagName(s)[0];
              x.src = "https://www.xing-share.com/js/external/share.js";
              s.parentNode.insertBefore(x, s);
          })(document, "script");
        </script>
    <?php } else { echo $xinger;}?>  

         
                                                    <!--------------  reddit   ---------------->
	 <span class="reds">                                                
	<?php if ($red=='yes'){?>  
		<script type="text/javascript">
	  reddit_url = "<?php echo $reddit_url;?>";  
	    </script>
	<script type="text/javascript" src="http://www.reddit.com/static/button/button2.js"></script>
	<?php } else { echo $redis;}?> </span>


                                                 <!------------------- facebook start--------------->
     
     <?php if ($fbook=='yes'){?>    
        <div id="fb-root"></div>
                 <script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
                </script>



	 <div class="fb-share-button" data-href="<?php echo $facebook_url;?>" 
	 data-type="<?php echo $fb_layout ;?>">
	 </div> 
     <?php } else { echo $fb;}?>  

                                                      <!-----------------  google plus -------------------->
                                                
     <?php if ($googles=='yes'){?> 
        <div class="g-plus" data-action="share" data-href="<?php echo $google_url;?>" data-annotation="<?php echo $google_layout;?>"> </div><script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
     <?php } else { echo $google;}?> 
 
                                              <!-----------------------   linkedin   ----------------------->

     <?php if ($link=='yes'){?>    
       <script type="IN/Share" data-url="<?php echo $linkedin_url;?>" data-counter="<?php echo $linkedin_layout ;?>"> </script>
	   <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
     <?php } else { echo $linked;}?>

                                           <!-----------------------   Twitter   ----------------------->

     <?php if ($twitts=='yes'){?>                          
         <a href="<?php echo $twitter_url;?>" class="twitter-share-button" data-lang="en" data-count="<?php echo $twit_layout;?>">Tweet</a>          
	  <script>
           !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
     </script>	
     <?php } else { echo $twite;}?>
                                                    <!--------------  bufferapp   ---------------->
                                              
     <?php if ($buffs=='yes'){?>                                              
        <a href="<?php echo $buffer_url;?>" class="buffer-add-button" data-count="<?php echo $buffer_layout;?>">Buffer</a><script type="text/javascript" src="https://d389zggrogs7qo.cloudfront.net/js/button.js"></script>
     <?php } else { echo $buffers;}?>  
                                              
  </div>
             
   <div class="simple_social_icons">
		<?php   
			$bebos=""; 
			$bibsonomys="";
			$bizsugars="";
			$blinklists="";
			$bloggers="";
			$blogmarkss="";
			$blokubes="";
			$blurpaliciouss="";
			$buddymarkss="";
			$buffers="";
			$care2s="";
			$connoteas="";
			$deliciouss="";
			$designbumps="";
			$designfloats="";
			$diggs="";
			$diigos="";
			$dropjacks="";
			$dzones="";
			$ekstremes="";
			$evernotes="";
			$facebooks="";
			$farks="";
			$favess="";
			$feedmarkers="";
			$folkds="";
			$fwisps="";
			$gabbrs="";
			$givealinks="";
			$googles="";
			$googleshares="";
			$hyvess="";
			$identicas="";
			$jamespots="";
			$jumptagss="";
			$linkagogos="";
			$linkarenas="";
			$linkedins="";
			$mefeedias="";
			$misterwongs="";
			$multiplys="";
			$myspaces="";
			$netlogs="";
			$netvouzs="";
			$newsvines="";
			$orkuts="";
			$pingfms="";
			$plaxos="";
			$plurks="";
			$posterouss="";
			$reddits="";
			$slashdots="";
			$speedtiles="";
			$stumbleupons="";
			$technoratis="";
			$thisnexts="";
			$tumblrs="";
			$tweetmemes="";
			$twitters="";
			$twitthiss="";
			$typepads="";
			$viadeos="";
			$windowslives="";
			$wirefans="";
			$wordpresss="";
			$xangas="";
			$xings="";
			$hobs="";
            
            if(empty($bebo)) $bebo = "yes";
            if(empty($bibsonomy)) $bibsonomy = "yes";
            if(empty($bizsugar)) $bizsugar = "yes";
            if(empty($blinklist)) $blinklist = "yes";
            if(empty($blogger)) $blogger = "yes";
            if(empty($blogmarks)) $blogmarks = "yes";
            if(empty($blokube)) $blokube = "yes";
            if(empty($blurpalicious)) $blurpalicious = "yes";
            if(empty($buddymarks)) $buddymarks = "yes";
            if(empty($buffer)) $buffer = "yes";
            if(empty($care2)) $care2 = "yes";
            if(empty($connotea)) $connotea = "yes";
            if(empty($delicious)) $delicious = "yes";
            if(empty($designbump)) $designbump = "yes";
            if(empty($designfloat)) $designfloat = "yes";
            if(empty($digg)) $digg = "yes";
            if(empty($dropjack)) $dropjack = "yes";
            if(empty($dzone)) $dzone = "yes";
            if(empty($ekstreme)) $ekstreme = "yes";
            if(empty($evernote)) $evernote = "yes";
            if(empty($facebook)) $facebook = "yes";
            if(empty($fark)) $fark = "yes";
            if(empty($faves)) $faves = "yes";
            if(empty($feedmarker)) $feedmarker = "yes";
            if(empty($folkd)) $folkd = "yes";
            if(empty($fwisp)) $fwisp = "yes";
            if(empty($gabbr)) $gabbr = "yes";
            if(empty($givealink)) $givealink = "yes";
            if(empty($google)) $google = "yes";
            if(empty($googleshare)) $googleshare = "yes";
            if(empty($hyves)) $hyves = "yes";
            if(empty($identica)) $identica = "yes";
            if(empty($jamespot)) $jamespot = "yes";
            if(empty($jumptags)) $jumptags = "yes";
            if(empty($linkedin)) $linkedin = "yes";
            if(empty($linkarena)) $linkarena = "yes";
            if(empty($mefeedia)) $mefeedia = "yes";
            if(empty($misterwong)) $misterwong = "yes";
            if(empty($multiply)) $multiply = "yes";
            if(empty($myspace)) $myspace = "yes";
             if(empty($netlog)) $netlog = "yes";
            if(empty($netvouz)) $netvouz = "yes";
            if(empty($newsvine)) $newsvine = "yes";
            if(empty($orkut)) $orkut = "yes";
            if(empty($plaxo)) $plaxo = "yes";
            if(empty($plurk)) $plurk = "yes";
            if(empty($posterous)) $posterous = "yes";
            if(empty($reddit)) $reddit = "yes";
             if(empty($slashdot)) $slashdot = "yes";
            if(empty($speedtile)) $speedtile = "yes";
            if(empty($stumbleupon)) $stumbleupon = "yes";
            if(empty($technorati)) $technorati = "yes";
            if(empty($thisnext)) $thisnext = "yes";
            if(empty($tumblr)) $tumblr = "yes";
            if(empty($tweetmeme)) $tweetmeme = "yes";
            if(empty($twitter)) $twitter = "yes";
             if(empty($twitthis)) $twitthis = "yes";
            if(empty($typepad)) $typepad = "yes";
            if(empty($viadeo)) $viadeo = "yes";
            if(empty($windowslive)) $windowslive = "yes";
            if(empty($wirefan)) $wirefan = "yes";
            if(empty($wordpress)) $wordpress = "yes";
            if(empty($xanga)) $xanga = "yes";
            if(empty($xing)) $xing = "yes";
			if(empty($bebo_url)) $bebo_url = "#";
			if(empty($bibsonomy_url)) $bibsonomy_url = "#";
			if(empty($bizsugar_url)) $bizsugar_url = "#";
			if(empty($blinklist_url)) $blinklist_url = "#";
			if(empty($blogger_url)) $blogger_url = "#";
			if(empty($blogmarks_url)) $blogmarks_url = "#";

			if(empty($blokube_url)) $blokube_urls= "#";
			if(empty($blurpalicious_url)) $blurpalicious_url = "#";
			if(empty($buddymarks_url)) $buddymarks_url = "#";
			if(empty($buffer_url))$buffer_url= "#";
			if(empty($care2_urls)) $care2_urls = "#";
			if(empty($connotea_urls)) $connotea_urls = "#";

			if(empty($delicious_urls)) $delicious_urls = "#";
			if(empty($designbump_urls)) $designbump_urls = "#";
			if(empty($designfloat_urls)) $designfloat_urls = "#";
			if(empty($digg_urls)) $digg_urls = "#";
			if(empty($dropjack_urls)) $dropjack_urls= "#";
			if(empty($dzone_urls)) $dzone_urls = "#";

			if(empty($ekstreme_urls)) $ekstreme_urls = "#";
			if(empty($evernote_urls)) $evernote_urls = "#";
			if(empty($facebook_urls)) $facebook_urls = "#";
			if(empty($fark_urls)) $digg_urls = "#";
			if(empty($faves_urls)) $faves_urls = "#";
			if(empty($feedmarker_urls)) $feedmarker_urls = "#";

			if(empty($folkd_urls)) $folkd_urls = "#";
			if(empty($fwisp_urls)) $fwisp_urls = "#";
			if(empty($gabbr_urls)) $gabbr_urls = "#";
			if(empty($givealink_urls)) $givealink_urls = "#";
			if(empty($google_urls)) $google_urls = "#";
			if(empty($googleshare_urls)) $googleshare_urls = "#";

			if(empty($hyves_urls)) $hyves_urls = "#";
			if(empty($identica_urls)) $identica_urls = "#";
			if(empty($jamespot_urls)) $jamespot_urls = "#";
			if(empty($jumptags_urls)) $jumptags_urls = "#";
			if(empty($linkedin_urls)) $linkedin_urls = "#";
			if(empty($linkagogo_urls)) $linkagogo_urls = "#";

			if(empty($linkarena_urls)) $linkarena_urls = "#";
			if(empty($mefeedia_urls)) $mefeedia_urls = "#";
			if(empty($misterwong_urls)) $misterwong_urls = "#";
			if(empty($multiply_urls)) $multiply_urls = "#";
			if(empty($myspace_urls)) $myspace_urls = "#";
			if(empty($netlog_urls)) $netlog_urls = "#";

			if(empty($netvouz_urls)) $netvouz_urls = "#";
			if(empty($newsvine_urls)) $newsvine_urls = "#";
			if(empty($orkut_urls)) $orkut_urls = "#";
			if(empty($plaxo_urls)) $plaxo_urls = "#";
			if(empty($plurk_urls)) $plurk_urls = "#";
			if(empty($posterous_urls)) $posterous_urls = "#";

			if(empty($slashdot_urls)) $slashdot_urls = "#";
			if(empty($speedtile_urls)) $speedtile_urls = "#";
			if(empty($stumbleupon_urls)) $stumbleupon_urls = "#";
			if(empty($technorati_urls)) $technorati_urls = "#";
			if(empty($thisnext_urls)) $thisnext_urls = "#";
			if(empty($tumblr_urls)) $tumblr_urls = "#";

			if(empty($tweetmeme_urls)) $tweetmeme_urls = "#";
			if(empty($twitter_urls)) $twitter_urls = "#";
			if(empty($twitthis_urls)) $twitthis_urls = "#";
			if(empty($typepad_urls)) $typepad_urls = "#";
			if(empty($viadeo_urls)) $viadeo_urls = "#";
			if(empty($windowslive_urls)) $windowslive_urls = "#";

			if(empty($wirefan_urls)) $wirefan_urls = "#";
			if(empty($wordpress_urls)) $wordpress_urls = "#";
			if(empty($xanga_urls)) $xanga_urls = "#";
			if(empty($xing_urls)) $xing_urls = "#";


		?>
    <?php $img = plugins_url( '/image' , __FILE__ );?>
   <style>
		span.diggs img {
			margin-top: -55px;
		}
		div.pluginButton {
			margin-top: -5px!important;
		}
		div.social a img:hover {
			/* border: 2px solid #000 !important; */
			-webkit-transform: scale(1.3,1.3);
			 -moz-transform: scale(1.3,1.3);
			  transform: scale(1.3,1.3);
			  
		}

		_ );
   ?>
		<?php if($imag=='cir'){?>
		<?php if($images=='small') {?>
	<style>
div.social a img {
    width: 40px;
    height: 40px;
	padding:2px;
}
</style>
   <?php } else {?>
   <style>
		  div.social a img {
			width: 50px;
			height: 50px;
			padding:1px
		}
   </style>	
   <?php	} ?>

   <?php if($images=='big') {?>

   <style>
	  div.social a img {
		width: 56px;
		height: 56px;
	}
	div.social{
		margin-top: 25px;

	}
   </style>	
   <?php }?>
  
    <div class="social">
			<?php if($bebo=='yes'){?>
			<a href="<?php echo $bebo_url;?>" target="_blank"><img src="<?php echo $img;?>/2/bebo.png"/></a>
			<?php } else {$bebos; }?>
			<?php if($bibsonomy=='yes'){?>
			<a href="<?php echo $bibsonomy_url;?>" target="_blank"><img src="<?php echo $img;?>/2/bibsonomy.png" /></a>
			<?php } else {$bibsonomys; }?>
			<?php if($bizsugar=='yes'){?>
			<a href="<?php echo $bizsugar_url;?>" target="_blank"><img src="<?php echo $img;?>/2/bizsugar.png" /></a>
			<?php } else {$bizsugars; }?>
			<?php if($blogger=='yes'){?>
			<a href="<?php echo $blogger_url;?>" target="_blank"><img src="<?php echo $img;?>/2/blogger.png" /></a>
			<?php } else {$bloggers; }?>
			<?php if($blogmarks=='yes'){?>
			<a href="<?php echo $blogmarks_url;?>" target="_blank"><img src="<?php echo $img;?>/2/blogmarks.png" /></a>
			<?php } else {$blogmarkss; }?>
			<?php if($blokube=='yes'){?>
			<a href="<?php echo $blokube_url;?>" target="_blank"><img src="<?php echo $img;?>/2/blokube.png" /></a>
			<?php } else {$blokubes; }?>
			<?php if($blurpalicious=='yes'){?>
			<a href="<?php echo $blurpalicious_url;?>" target="_blank"><img src="<?php echo $img;?>/2/blurpalicious.png" /></a>
			<?php } else {$blurpaliciouss; }?>
			<?php if($buddymarks=='yes'){?>
			<a href="<?php echo $buddymarks_url;?>" target="_blank"><img src="<?php echo $img;?>/2/buddymarks.png" /></a>
			<?php } else {$buddymarkss; }?>
			<?php if($buffer=='yes'){?>
			<a href="<?php echo $buffer_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/buffer.png" /></a>
			<?php } else {$buffers; }?>
			<?php if($care2=='yes'){ ?>
			<a href="<?php echo $care2_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/care2.png" /></a>
			<?php } else {$care2s; }?>
			<?php if($connotea=='yes'){?>
			<a href="<?php echo $connotea_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/connotea.png" /></a>
			<?php } else {$connoteas; }?>
			<?php if($delicious=='yes'){?>
			<a href="<?php echo $delicious_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/delicious.png" /></a>
			<?php } else {$deliciouss; }?>
			<?php if($designbump=='yes'){?>
			<a href="<?php echo $designbump_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/designbump.png" /></a>
			<?php } else {$designbumps; }?>
			<?php if($designfloat=='yes'){?>
			<a href="<?php echo $designfloat_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/designfloat.png" /></a>
			<?php } else {$designfloats; }?>
			<?php if($digg=='yes'){?>
			<a href="<?php echo $digg_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/digg.png" /></a>
			<?php } else {$diggs; }?>
			<?php if($diigo=='yes'){?>
			<a href="<?php echo $diigo_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/diigo.png" /></a>
			<?php } else {$diigos; }?>
			<?php if($dropjack=='yes'){?>
			<a href="<?php echo $dropjack_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/dropjack.png" /></a>
			<?php } else {$dropjacks; }?>
			<?php if($dzone=='yes'){?>
			<a href="<?php echo $dzone_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/dzone.png" /></a>
			<?php } else {$dzones; }?>
			<?php if($ekstreme=='yes'){?>
			<a href="<?php echo $ekstreme_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/ekstreme.png" /></a>
			<?php } else {$ekstremes; }?>
			<?php if($evernote=='yes'){ ?>
			<a href="<?php echo $evernote_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/evernote.png" /></a>
			<?php } else {$evernotes; }?>
			<?php if($facebook=='yes'){ ?>
			<a href="<?php echo $facebook_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/facebook.png" /></a>
			<?php } else {$facebooks; }?>
			<?php if($fark=='yes'){ ?>
			<a href="<?php echo $fark_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/fark.png" /></a>
			<?php } else {$farks; }?>
			<?php if($faves=='yes'){ ?>
			<a href="<?php echo $faves_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/faves.png" /></a>
			<?php } else {$favess; }?>
			<?php if($feedmarker=='yes'){ ?>
			<a href="<?php echo $feedmarker_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/feedmarker.png" /></a>
			<?php } else {$feedmarkers; }?>
			<?php if($folkd=='yes'){ ?>
			<a href="<?php echo $folkd_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/folkd.png" /></a>
			<?php } else {$folkds; }?>
			<?php if($fwisp=='yes'){ ?>
			<a href="<?php echo $fwisp_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/fwisp.png" /></a>
			<?php } else {$fwisps; }?>
			<?php if($gabbr=='yes'){ ?>
			<a href="<?php echo $gabbr_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/gabbr.png" /></a>
			<?php } else {$gabbrs; }?>
			<?php if($givealink=='yes'){ ?>
			<a href="<?php echo $givealink_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/givealink.png" /></a>
			<?php } else {$givealinks; }?>
			<?php if($google=='yes'){ ?>
			<a href="<?php echo $google_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/google.png" /></a>
			<?php } else {$googles; }?>
			<?php if($googleshare=='yes'){ ?>
			<a href="<?php echo $googleshare_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/googleshare.png" /></a>
			<?php } else {$googleshares; }?>
			<?php if($hyves=='yes'){ ?>
			<a href="<?php echo $hyves_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/hyves.png" /></a>
			<?php } else {$hyvess; }?>
			<?php if($identica=='yes'){ ?>
			<a href="<?php echo $identica_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/identica.png" /></a>
			<?php } else {$identicas; }?>
			<?php if($jamespot=='yes'){ ?>
			<a href="<?php echo $jamespot_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/jamespot.png" /></a>
			<?php } else {$jamespots; }?>
			<?php if($jumptags=='yes'){ ?>
			<a href="<?php echo $jumptags_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/jumptags.png" /></a>
			<?php } else {$jumptagss; }?>
			<?php if($linkagogo=='yes'){ ?>
			<a href="<?php echo $linkagogo_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/linkagogo.png" /></a>
			<?php } else {$linkagogos; }?>
			<?php if($linkarena=='yes'){ ?>
			<a href="<?php echo $linkarena_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/linkarena.png" /></a>
			<?php } else {$linkarenas; }?>
			<?php if($linkedin=='yes'){ ?>
			<a href="<?php echo $linkedin_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/linkedin.png" /></a>
			<?php } else {$linkedins; }?>
			<?php if($mefeedia=='yes'){ ?>
			<a href="<?php echo $mefeedia_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/mefeedia.png" /></a>
			<?php } else {$mefeedias; }?>
			<?php if($misterwong=='yes'){ ?>
			<a href="<?php echo $misterwong_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/misterwong.png" /></a>
			<?php } else {$misterwongs; }?>
			<?php if($multiply=='yes'){ ?>
			<a href="<?php echo $multiply_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/multiply.png" /></a>
			<?php } else {$multiplys; }?>
			<?php if($myspace=='yes'){ ?>
			<a href="<?php echo $myspace_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/myspace.png" /></a>
			<?php } else {$myspaces; }?>
			<?php if($netlog=='yes'){ ?>
			<a href="<?php echo $netlog_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/netlog.png" /></a>
			<?php } else {$netlogs; }?>
			<?php if($newsvine=='yes'){ ?>
			<a href="<?php echo $newsvine_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/newsvine.png" /></a>
			<?php } else {$newsvines; }?>
			<?php if($orkut=='yes'){ ?>
			<a href="<?php echo $orkut_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/orkut.png" /></a>
			<?php } else {$orkuts; }?>
			<?php if($plaxo=='yes'){ ?>
			<a href="<?php echo $plaxo_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/plaxo.png" /></a>
			<?php } else {$plaxos; }?>
			<?php if($plurk=='yes'){ ?>
			<a href="<?php echo $plurk_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/plurk.png" /></a>
			<?php } else {$plurks; }?>
			<?php if($posterous=='yes'){ ?>
			<a href="<?php echo $posterous_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/posterous.png" /></a>
			<?php } else {$posterouss; }?>
			<?php if($reddit=='yes'){ ?>
			<a href="<?php echo $reddit_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/reddit.png" /></a>
			<?php } else {$reddits; }?>
			<?php if($slashdot=='yes'){ ?>
			<a href="<?php echo $slashdot_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/slashdot.png" /></a>
			<?php } else {$slashdots; }?>
			<?php if($speedtile=='yes'){ ?>
			<a href="<?php echo $speedtile_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/speedtile.png" /></a>
			<?php } else {$speedtiles; }?>
			<?php if($stumbleupon=='yes'){ ?>
			<a href="<?php echo $stumbleupon_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/stumbleupon.png" /></a>
			<?php } else {$stumbleupons; }?>
			<?php if($technorati=='yes'){ ?>
			<a href="<?php echo $technorati_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/technorati.png" /></a>
			<?php } else {$technoratis; }?>
			<?php if($thisnext=='yes'){ ?>
			<a href="<?php echo $thisnext_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/thisnext.png" /></a>
			<?php } else {$thisnexts; }?>
			<?php if($tumblr=='yes'){ ?>
			<a href="<?php echo $tumblr_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/tumblr.png" /></a>
			<?php } else {$tumblrs; }?>
			<?php if($tweetmeme=='yes'){ ?>
			<a href="<?php echo $tweetmeme_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/tweetmeme.png" /></a>
			<?php } else {$tweetmemes; }?>
			<?php if($twitter=='yes'){ ?>
			<a href="<?php echo $twitter_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/twitter.png" /></a>
			<?php } else {$twitters; }?>
			<?php if($twitthis=='yes'){ ?>
			<a href="<?php echo $twitthis_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/twitthis.png" /></a>
			<?php } else {$twitthiss; }?>
			<?php if($typepad=='yes'){ ?>
			<a href="<?php echo $typepad_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/typepad.png" /></a>
			<?php } else {$typepads; }?>
			<?php if($viadeo=='yes'){ ?>
			<a href="<?php echo $viadeo_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/viadeo.png" /></a>
			<?php } else {$viadeos; }?>
			<?php if($windowslive=='yes'){ ?>
			<a href="<?php echo $windowslive_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/windowslive.png" /></a>
			<?php } else {$windowslives; }?>
			<?php if($wirefan=='yes'){ ?>
			<a href="<?php echo $wirefan_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/wirefan.png" /></a>
			<?php } else {$wirefan; }?>
			<?php if($wordpress=='yes'){ ?>
			<a href="<?php echo $wordpress_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/wordpress.png" /></a>
			<?php } else {$wordpresss; }?>
			<?php if($xanga=='yes'){ ?>
			<a href="<?php echo $xanga_urls;?>" target="_blank"><img src="<?php echo $img;?>/2/xanga.png" /></a>
			<?php } else {$xangas; }?>
			<?php if($xings=='yes'){ ?>
			<a href="<?php echo $xing_urls;?>m" target="_blank"><img src="<?php echo $img;?>/2/xing.png" /></a>
			<?php } else {$xings; }?>



    </div>

        <?php } else {?>
		<?php if($images=='small') {?>
			<style>
				div.social a img {
					width: 30px;
					height: 30px;
					padding:2px;
				}
			</style>
		<?php } else {?>
			<style>
				  div.social a img {
					width: 40px;
					height: 40px;
					padding:3px
				}
			</style>	
		<?php	} ?>

		<?php if($images=='big') {?>

			<style>
				  div.social a img {
					width: 50px;
					height: 50px;
					
				}
			</style>	
		<?php }?>  
		
    <div class="social">
			<?php if($bebo=='yes'){?>
			<a href="<?php echo $bebo_url;?>" target="_blank"><img src="<?php echo $img;?>/1/bebo.png" /></a>
			<?php } else {$bebos; }?>

			<?php if($bibsonomy=='yes'){?>
			<a href="<?php echo $bibsonomy_url;?>" target="_blank"><img src="<?php echo $img;?>/1/bibsonomy.png" /></a>
			<?php } else {$bibsonomys; }?>

			<?php if($bizsugar=='yes'){?>
			<a href="<?php echo $bizsugar_url;?>" target="_blank"><img src="<?php echo $img;?>/1/bizsugar.png" /></a>
			<?php } else {$bizsugars; }?>

			<?php if($blogger=='yes'){?>
			<a href="<?php echo $blogger_url;?>" target="_blank"><img src="<?php echo $img;?>/1/blogger.png" /></a>
			<?php } else {$bloggers; }?>

			<?php if($blogmarks=='yes'){?>
			<a href="<?php echo $blogmarks_url;?>" target="_blank"><img src="<?php echo $img;?>/1/blogmarks.png" /></a>
			<?php } else {$blogmarkss; }?>

			<?php if($blokube=='yes'){?>
			<a href="<?php echo $blokube_url;?>" target="_blank"><img src="<?php echo $img;?>/1/blokube.png" /></a>
			<?php } else {$blokubes; }?>

			<?php if($blurpalicious=='yes'){?>
			<a href="<?php echo $blurpalicious_url;?>" target="_blank"><img src="<?php echo $img;?>/1/blurpalicious.png" /></a>
			<?php } else {$blurpaliciouss; }?>

			<?php if($buddymarks=='yes'){?>
			<a href="<?php echo $buddymarks_url;?>" target="_blank"><img src="<?php echo $img;?>/1/buddymarks.png" /></a>
			<?php } else {$buddymarkss; }?>

			<?php if($buffer=='yes'){?>
			<a href="<?php echo $buffer_urls;?>" target="_blank"><img src="<?php echo $img;?>/1/buffer.png" /></a>
			<?php } else {$buffers; }?>

			<?php if($care2=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/care2.png" /></a>
			<?php } else {$care2s; }?>

			<?php if($connotea=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/connotea.png" /></a>
			<?php } else {$connoteas; }?>

			<?php if($delicious=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/delicious.png" /></a>
			<?php } else {$deliciouss; }?>

			<?php if($designbump=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/designbump.png" /></a>
			<?php } else {$designbumps; }?>

			<?php if($designfloat=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/designfloat.png" /></a>
			<?php } else {$designfloast; }?>

			<?php if($digg=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/digg.png" /></a>
			<?php } else {$diggs; }?>

			<?php if($diigo=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/diigo.png" /></a>
			<?php } else {$diigos; }?>

			<?php if($dropjack=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/dropjack.png" /></a>
			<?php } else {$dropjacks; }?>

			<?php if($dzone=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/dzone.png" /></a>
			<?php } else {$dzones; }?>

			<?php if($ekstreme=='yes'){?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/ekstreme.png" /></a>
			<?php } else {$ekstremes; }?>

			<?php if($evernote=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/evernote.png" /></a>
			<?php } else {$evernotes; }?>

			<?php if($facebook=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/facebook.png" /></a>
			<?php } else {$facebooks; }?>

			<?php if($fark=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/fark.png" /></a>
			<?php } else {$farks; }?>

			<?php if($faves=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/faves.png" /></a>
			<?php } else {$favess; }?>

			<?php if($feedmarker=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/feedmarker.png" /></a>
			<?php } else {$feedmarkers; }?>

			<?php if($folkd=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/folkd.png" /></a>
			<?php } else {$folkds; }?>

			<?php if($fwisp=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/fwisp.png" /></a>
			<?php } else {$fwisps; }?>

			<?php if($gabbr=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/gabbr.png" /></a>
			<?php } else {$gabbrs; }?>

			<?php if($givealink=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/givealink.png" /></a>
			<?php } else {$givealinsk; }?>

			<?php if($googles=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/google.png" /></a>
			<?php } else {$googles; }?>

			<?php if($googleshare=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/googleshare.png" /></a>
			<?php } else {$googleshares; }?>

			<?php if($hyves=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/hyves.png" /></a>
			<?php } else {$hyvess; }?>

			<?php if($identica=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/identica.png" /></a>
			<?php } else {$identicas; }?>

			<?php if($jamespot=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/jamespot.png" /></a>
			<?php } else {$jamespots; }?>

			<?php if($jumptags=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/jumptags.png" /></a>
			<?php } else {$jumptagss; }?>

			<?php if($linkagogo=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/linkagogo.png" /></a>
			<?php } else {$linkagogos; }?>

			<?php if($linkarena=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/linkarena.png" /></a>
			<?php } else {$linkarenas; }?>

			<?php if($linkedin=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/linkedin.png" /></a>
			<?php } else {$linkedins; }?>

			<?php if($mefeedia=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/mefeedia.png" /></a>
			<?php } else {$mefeedias; }?>

			<?php if($misterwong=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/misterwong.png" /></a>
			<?php } else {$misterwongs; }?>

			<?php if($multiply=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/multiply.png" /></a>
			<?php } else {$multiplys; }?>

			<?php if($myspace=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/myspace.png" /></a>
			<?php } else {$myspaces; }?>

			<?php if($netlog=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/netlog.png" /></a>
			<?php } else {$netlogs; }?>

			<?php if($newsvine=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/newsvine.png" /></a>
			<?php } else {$newsvines; }?>

			<?php if($orkut=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/orkut.png" /></a>
			<?php } else {$orkuts; }?>


			<?php if($plaxo=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/plaxo.png" /></a>
			<?php } else {$plaxos; }?>

			<?php if($plurk=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/plurk.png" /></a>
			<?php } else {$plurks; }?>

			<?php if($posterous=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/posterous.png" /></a>
			<?php } else {$posterouss; }?>

			<?php if($reddit=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/reddit.png" /></a>
			<?php } else {$reddits; }?>

			<?php if($slashdot=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/slashdot.png" /></a>
			<?php } else {$slashdots; }?>

			<?php if($speedtile=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/speedtile.png" /></a>
			<?php } else {$speedtiles; }?>

			<?php if($stumbleupon=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/stumbleupon.png" /></a>
			<?php } else {$stumbleupons; }?>

			<?php if($technorati=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/technorati.png" /></a>
			<?php } else {$technoratis; }?>

			<?php if($thisnext=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/thisnext.png" /></a>
			<?php } else {$thisnexts; }?>

			<?php if($tumblr=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/tumblr.png" /></a>
			<?php } else {$tumblrs; }?>

			<?php if($tweetmeme=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/tweetmeme.png" /></a>
			<?php } else {$tweetmemes; }?>

			<?php if($twitter=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/twitter.png" /></a>
			<?php } else {$twitters; }?>

			<?php if($twitthis=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/twitthis.png" /></a>
			<?php } else {$twitthiss; }?>

			<?php if($typepad=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/typepad.png" /></a>
			<?php } else {$typepads; }?>

			<?php if($viadeo=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/viadeo.png" /></a>
			<?php } else {$viadeos; }?>

			<?php if($windowslive=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/windowslive.png" /></a>
			<?php } else {$windowslives; }?>

			<?php if($wirefan=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/wirefan.png" /></a>
			<?php } else {$wirefans; }?>

			<?php if($wordpress=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/wordpress.png" /></a>
			<?php } else {$wordpresss; }?>

			<?php if($xanga=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/xanga.png" /></a>
			<?php } else {$xangas; }?>

			<?php if($xings=='yes'){ ?>
			<a href="#" target="_blank"><img src="<?php echo $img;?>/1/xing.png" /></a>
			<?php } else {$xings; }?>


    </div>		     
		
    <?php }?>		  
 </div>

 
      
<?php
        echo $after_widget;
    }
}

add_action('widgets_init','register_UltimateSocialIconsWidget');
function register_UltimateSocialIconsWidget(){
    register_widget('UltimateSocialIconsWidget');
}