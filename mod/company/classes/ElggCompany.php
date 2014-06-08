<?php
/**
 * ElggWire Class
 * 
 * @property string $method      The method used to create the wire post (site, sms, api)
 * @property bool   $reply       Whether this wire post was a reply to another post
 * @property int    $wire_thread The identifier of the thread for this wire post
 */
class ElggCompany extends ElggObject {

	/**
	 * Set subtype to thewire
	 * 
	 * @return void
	 */
	protected function initializeAttributes() {
		parent::initializeAttributes();

		$this->attributes['subtype'] = 'company';
	}

	/**
	 * Can a user comment on this wire post?
	 *
	 * @see ElggObject::canComment()
	 *
	 * @param int $user_guid User guid (default is logged in user)
	 * @return bool
	 * @since 1.8.0
	 */
	public function canComment($user_guid = 0) {
		$result = parent::canComment($user_guid);
		if ($result == false) {
			return $result;
		}

		return false;
	}
  
  	public function getURL($action = 'view') {
      global $CONFIG;
  		switch ($action) {
  
  			default :
  			case 'view' :
  				//$friendly_title = elgg_get_friendly_title($this->title);
  				return $CONFIG->url . "comp/view/$this->guid";//$friendly_title";
  				break;
  
  			case 'edit' :
  				return $CONFIG->url . "comp/edit/$this->guid";
  				break;
  
  			case 'delete' :
  				return elgg_add_action_tokens_to_url(elgg_get_site_url() . "comp/delete/object?guid=$this->guid");
  				break;

  		}
  	}

}
