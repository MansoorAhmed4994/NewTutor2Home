<?php
namespace App\Services\Zoom;

use stdClass;
use App\Services\Zoom\Endpoint\Meetings;
use App\Services\Zoom\Endpoint\Users;

class ZoomAPI {

	/**
	 * @var null
	 */
	private $apiKey = null;

	/**
	 * @var null
	 */
	private $apiSecret = null;

	/**
	 * @var null
	 */
	private $users = null;


	/**
	 * Retorna uma instância única de uma classe.
	 *
	 * @staticvar Singleton $instance A instância única dessa classe.
	 *
	 * @return Singleton A Instância única.
	 */
	public function getInstance()
	{
		static $users = null;
		static $meetings = null;

		if (null === $users) {
			$this->users = new Users($this->apiKey, $this->apiSecret);
		}

		if (null === $meetings) {
			$this->meetings = new Meetings($this->apiKey, $this->apiSecret);
		}
	}

	/**
	 * Zoom constructor.
	 * @param $apiKey
	 * @param $apiSecret
	 */
	public function __construct( $apiKey, $apiSecret ) {

		$this->apiKey = $apiKey;

		$this->apiSecret = $apiSecret;

		$this->getInstance();

	}


	/*Functions for management of users*/

	public function createUser($email="", $pass="", $first_name="", $last_name=""){
		$userInfo = new stdClass;
		$userInfo->email = $email;
		$userInfo->type = 1;
		$userInfo->first_name = $first_name;
		$userInfo->last_name = $last_name; 
		$data = new stdClass;
		$data->action = "create";
		$data->user_info = $userInfo;

		return $this->users->create($data);
	}
	
	
	/*
	public function createUserAccount($email="", $pass="", $first_name="", $last_name=""){
		$userInfo = new stdClass;
		$userInfo->email = $email;
		$userInfo->type = 1;
		$userInfo->first_name = $first_name;
		$userInfo->last_name = $last_name; 
		$userInfo->password = "testing123"; 
		$data = new stdClass;
		$data->action = "create";
		$data->user_info = $userInfo;

		return $this->users->createaccount();
	}*/
	
	

	public function getUsers() {
		return $this->users->list();
	}
 
	public function getUser($id) {
		return $this->users->retrieve($id);
	}
 
	public function getMeetings($id) {
		return $this->meetings->list($id);
	}

	public function deleteMeetings($id) {
		return $this->meetings->remove($id);
	}

	public function createMeeting($id,$body) {
		/*$body = [
			'topic' => 'Meeting created by API',
			'type' => 2,
			'start_time' => '2020-02-10 01:00:00',
			'password' => '123asc',
			'agenda' => 'This meeting has been set to test the zoom sandbox api' 
		];*/
        //return $this->meetings->create('lJvsSQaiSFOZioazIHbr_A', $body);
		return $this->meetings->create($id, $body);
	}
	
	public function updateMeeting($id,$body) {
	 
        //return $this->meetings->create('lJvsSQaiSFOZioazIHbr_A', $body);
		return $this->meetings->update($id, $body);
	}
	
	public function getMeeting($meeting_id) 
	{ 
        //return $this->meetings->create('lJvsSQaiSFOZioazIHbr_A', $body);
        return $this->meetings->meeting($meeting_id);
	}
	
	
	 
}
