<?php

/**
 * Class registration
 * handles the user registration
 */

	$suspect = new AddSuspect();
class AddSuspect
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
  

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
     public function __construct()
    {
		if (isset($_POST["suspect_name"])) {
            $this->addSuspect();
        }
		else
		{
		header('Location: ../index.php');
		}	
    }
	
	private function addSuspect()
	{
		define("DB_HOST", "127.0.0.1");
define("DB_NAME", "login");
define("DB_USER", "root");
define("DB_PASS", "");
		// create a database connection, using the constants from config/db.php (which we loaded in index.php)
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (!$this->db_connection->connect_errno) {
		
			$suspect_name = $this->db_connection->real_escape_string($_POST['suspect_name']);
			$suspect_ethnicity = $this->db_connection->real_escape_string($_POST['suspect_ethnicity']);
			$suspect_sex = $this->db_connection->real_escape_string($_POST['suspect_sex']);
			// change character set to utf8 and check it
			 if (!$this->db_connection->set_charset("utf8")) {
				 $this->errors[] = $this->db_connection->error;
			}
					
				//Latest Messages
		 $sql = "INSERT INTO suspects (suspect_name, suspect_ethnicity, suspect_sex)
					VALUES('" . $suspect_name . "', '" . $suspect_ethnicity . "', '" . $suspect_sex . "');";
		$query_new_user_insert = $this->db_connection->query($sql);

							if ($query_new_user_insert) {
							header('Location: ../index.php');
						} else {
							$this->errors[] = "Sorry, your registration failed. Please go back and try again.";
						}
						
		}
		
	}	
	

	
	
	
}
