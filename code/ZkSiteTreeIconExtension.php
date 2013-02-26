<?php

class ZkSiteTreeIconExtension extends DataExtension {

	public function updateStatusFlags($flags) {
		
		if ($this->owner->Title == 'Faq') {
			var_dump($this->owner->Title);
			var_dump($flags);
			exit;
		}

		if (isset($flags['addedtodraft'])) {
			$flags['status_draft'] = '';
		} elseif (isset($flags['modified'])) {
			$flags['status_draft_published'] = '';
		} else {
			$flags['status_published'] = '';
		}
	}

}