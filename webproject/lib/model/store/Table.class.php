<?php
/**
 * TABLE
 *
 * This class contains common functionality for all tables. All table classes are derived from this class.
 *
 * @package    jeevansathi
 * @author     Tanu Gupta
 * @created    05-06-2011
 */
abstract class TABLE{

        protected $db;  //PDO database Object

        /**
         * @fn __construct
         * @brief Constructor function
         * @param $dbName - Database name to which the connection would be made
         */
        protected function __construct($dbName) {
                $dbName=$dbName?$dbName:"newjs_master"; // Set default connection to newjs_master
                $this->db = jsDatabaseManager::getInstance()->getDatabase($dbName)->getConnection();//Get connection
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Set attribute
        }

        /**
         * @fn setConnection
         * @brief Resets database connection
         * @param $dbName - Database name to which the connection needs to reset
         */
        public function setConnection($dbName){
                $this->db = jsDatabaseManager::getInstance()->getDatabase($dbName)->getConnection();
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
}
?>
