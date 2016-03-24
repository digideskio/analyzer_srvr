<?php
/**
 * Serve analyze requests from clients (wp plugin installations)
 * Listen to POST from plugins:
 *  Auth by Token + URL // Stage 2
 *  Verify request credentials and permissions // Stage 2
 *  Manage client status (API usage etc.) // Stage 2
 *  Verify/Sanitize request data
 *  Call Client controller to continue analysis
 *  Respond with analysis response
 */
require(APPPATH . 'libraries/REST_Controller.php');

class Analyzer extends REST_Controller {

    public function index_get() {
        $this->response("success!");
    }
}