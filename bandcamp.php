<?php

if (!class_exists('bbcode_parent_main_class')) {
	require_once( IPS_ROOT_PATH . 'sources/classes/text/parser/bbcode/defaults.php' );/*noLibHook*/
}

/**
 * This class provide you an easy way to integrate Bandcamp BBCode to your IPB install.
 * This class is for the versions 3.4+
 *
 * @author Sebastien Herblot <sherblot@gmail.com>
 */
class bbcode_plugin_bandcamp extends bbcode_parent_main_class {

	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	object		Registry object
	 * @return	@e void
	 */
	public function __construct( ipsRegistry $registry )
	{
		$this->currentBbcode	= 'bandcamp';
		
		parent::__construct( $registry );
	}

	/**
	 * Do the actual replacement
	 *
	 * @access	protected
	 * @param	string		$txt	Parsed text from database to be edited
	 * @return	string				BBCode content, ready for editing
	 */
	protected function _replaceText( $txt )
	{	
		$orig	= $txt;
		$txt	= preg_replace_callback( '#(\[bandcamp([^\]]+?)?\])#is' , array( $this, '_parseCode' ), $txt );

		return $txt;
	}
	
	/**
	 * Generating the output code for each bandcamp bbcode sections.
	 *
	 * @access	protected
	 * @param	string		$txt	Parsed text from database to be edited
	 * @return	string				BBCode content, ready for editing
	 */
	protected function _parseCode($txt)
	{
		$_orig	= $txt;
		$txt = $txt[1];

		if ( ! $txt )
		{
			return '';
		}
		
		$album = 0;
		$track = 0;
		
		if (preg_match('#album=([0-9]+)#is', $txt, $matches)) {
			$album = 'album='.$matches[1].'/';
		}
		
		if (preg_match('#track=([0-9]+)#is', $txt, $matches)) {
			$track = 'track='.$matches[1].'/';
		}
		
		if (!empty($album) || !empty($track)) {
			return '<iframe style="border: 0; width: 100%; height: 120px;" src="http://bandcamp.com/EmbeddedPlayer/'
				.$album.'size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/'.$track.'transparent=true/" seamless></iframe>';
		}
		
		return '';		
	}
}