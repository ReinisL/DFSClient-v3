<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasks;

class GetAdvancedSerpResultsByIdEntityMain extends \DFSClientV3\Models\ResponseModel 
{    
    /**
    * @var null|string $host;
    */
    public $host = null;

    /**
    * @var null|string $user_ip;
    */
    public $user_ip = null;

    /**
    * @var null|integer $DFS_ID;
    */
    public $DFS_ID = null;

    /**
    * @var null|integer $DFS_CF_INT;
    */
    public $DFS_CF_INT = null;

    /**
    * @var null|integer $DFS_CONTROLLER_INT;
    */
    public $DFS_CONTROLLER_INT = null;

    /**
    * @var null|string $DFS_CONTROLLER;
    */
    public $DFS_CONTROLLER = null;

    /**
    * @var null|integer $DFS_FUNCTION_INT;
    */
    public $DFS_FUNCTION_INT = null;

    /**
    * @var null|string $DFS_FUNCTION;
    */
    public $DFS_FUNCTION = null;

    /**
    * @var null|string $version;
    */
    public $version = '0.0.20191218';

    /**
    * @var null|integer $status_code;
    */
    public $status_code = null;

    /**
    * @var null|string $status_message;
    */
    public $status_message = null;

    /**
    * @var null|string $time;
    */
    public $time = null;

    /**
    * @var null|double $cost;
    */
    public $cost = null;

    /**
    * @var null|integer $tasks_count;
    */
    public $tasks_count = null;

    /**
    * @var null|integer $tasks_error;
    */
    public $tasks_error = null;

    /**
    * array|GetAdvancedSerpResultsByIdEntityMainTasks[] $tasks;
    */
    public $tasks = [];
 

	/**
	* @return \DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResult[]|null
	*/
	public function getResultsByPostID($postID): ?array {
		return parent::getResultsByPostID($postID);
	}
}