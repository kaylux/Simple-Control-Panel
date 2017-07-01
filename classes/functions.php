<?php

/**
 * Class registration
 * handles the user registration
 */
class Functions
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
	 
	 public function updatePage()
	{
		$stats;
		// create a database connection, using the constants from config/db.php (which we loaded in index.php)
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		// change character set to utf8 and check it
         if (!$this->db_connection->set_charset("utf8")) {
             $this->errors[] = $this->db_connection->error;
        }
        if (!$this->db_connection->connect_errno) {

			//Latest Arrests
            $sql = "SELECT * FROM crimes";
            $query_check_total_crimes = $this->db_connection->query($sql);
			$stats = $query_check_total_crimes->num_rows;
			
			echo $stats;
			
	
		}

	}
	public function updateMessages()
	{
		$messages;
		// create a database connection, using the constants from config/db.php (which we loaded in index.php)
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		// change character set to utf8 and check it
         if (!$this->db_connection->set_charset("utf8")) {
             $this->errors[] = $this->db_connection->error;
        }
				
			//Latest Messages
		    $sql = "SELECT * FROM messages WHERE message_recipient = '" . $_SESSION['user_name'] . "' OR message_status =  1";
            $query_check_new_messages = $this->db_connection->query($sql);
			$messages = $query_check_new_messages->num_rows;
			
		
			echo $messages;
	
		
	}
	public function populateArrestList()
	{
	
	
		$messages;
		// create a database connection, using the constants from config/db.php (which we loaded in index.php)
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		// change character set to utf8 and check it
         if (!$this->db_connection->set_charset("utf8")) {
             $this->errors[] = $this->db_connection->error;
        }
				
			//Latest Messages
		    $sql = "SELECT * FROM crimes WHERE crime_deputy	 = '" . $_SESSION['user_name'] . "'";
            $query_check_crimes = $this->db_connection->query($sql);
			$crimes = $query_check_crimes->num_rows;
			
		while ($row = mysql_fetch_array($query_check_crimes, MYSQL_NUM)) {

		
		  echo '<table class="datatable table table-striped" cellspacing="0" width="100%">
                     <thead>
                        <tr>
							<th>Namjhe</th>
							<th>Crime</th>
							<th>Date</th>
                              
                        </tr>
                    </thead>
									
                    <tbody>
                       <tr>
							<td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
							<td>'.$row[2].'</td>
                                   
                        </tr>
                          
                    </tbody>
            </table>';
		
		}
		
		
		
		}
	
	
	
	
	
	
	
	
}
