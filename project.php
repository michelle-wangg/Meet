<html>
    <head>
        <title>Networking App</title>
    </head>

    <body>

        <h2>Welcome to Meet!</h2>
        <h3>A Social Networking App</h3>

        <h2>Insert: Create a new Account and Profile</h2>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Email: <input type="text" name="email"><br /><br />
            Password:  <input type="password" name="password"><br /><br />
            Username: <input type="text" name="userid" maxlength = '80'> <br /><br />
            Faculty: <input type="text" name="faculty"> <br /><br />
            Name: <input type="text" name="name"> <br /><br />
            Pronouns: <input type="text" name="pronouns"> <br /><br />
            Interest: <input type="text" name="interest"> <br /><br />

            <input type="submit" value="Sign Up" name="insertSubmit"></p>
        </form>

        <hr />

        <h2>Insert: Share your thoughts through a Post!</h2>
        <form method="Post" action="project.php">
            <input type="hidden" id="insertQueryPostRequest" name="insertQueryPostRequest">
            Username: <input type="text" name="userid"> <br /><br />
            
            <textarea rows = "5" cols = "60" name = "caption" placeholder = "Enter your thoughts here..."></textarea><br><br />
            Mood: <input type="text" name="mood"> <br /><br />

            <input type="submit" value="Post" name="insertSubmit"></p>
        </form>

        <hr />

        <h2>Delete: Remove your Account</h2>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="deleteQueryRequest" name="deleteQueryRequest">
            Email: <input type="text" name="email"> <br /><br />
            <input type="submit" value="Delete" name="deleteSubmit"></p>
        </form>

        <hr />

        <h2>Update: Change Password in Account</h2>
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.</p>

        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            Email: <input type="text" name="email"> <br /><br />
            New Password: <input type="text" name="newPassword"> <br /><br />

            <input type="submit" value="Update" name="updateSubmit"></p>
        </form>

        <hr />

        <h2>Selection</h2>

        Select the table you would like to use for your selection:
        <form id = "user_input" method="GET" action="project.php">
            <input type="hidden" id="selectionQueryRequest" name="selectionQueryRequest">
            <select name="tables" id="tables">
                <option value="Profiles">Profiles</option>
                <option value="CommunityEvent">Community Event</option>
            </select>

            <p>Here are the attributes you can choose depending on which table you chose.</p>

            <p>
                Profiles: UserID: char[], Name: char[], Faculty: char[], Pronouns: char[],
                Interest: char[], Email: char[], GroupID: int.
            </p>

            <p>
                Community Event: EventID: int, Name: char[], event_Date: date, Location: char[], CID: int.
            </p>

            <hr />

            <p>
                Enter the attribute and condition you would like to use for your selection based on the data
                types listed above.
            </p>
                Attribute:<input type="text" name="attributeInput">
            <p>
                Example: "EventID > 1000" for integers or " Name = 'Halloween Social' "for char[]
            </p>
                Condition: <input type="text" name="conditionInput">
            <p>
                <input type="submit" value="Search" name="selectionSubmit"></p>
            </p>

        </form>

        <hr />

        
        <h2>Projection: Search For Events </h2>
        <form id = "user_input" method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="projectionRequest" name="projectionRequest">
            Event Name: <input type="text" name="inputEventName"><br /><br />

            Show: <input type="checkbox" id="event_name" name="eventAttribute[]" value="Name">
            <label for="event_name"> Name</label>

            <input type="checkbox" id="date" name="eventAttribute[]" value="Event_Date">
            <label for="date"> Date</label>

            <input type="checkbox" id="Location" name="eventAttribute[]" value="Location">
            <label for="Location"> Location</label><br /><br />

            <input type="submit" value="Search" name="projectionSubmit"></p>

        </form>


        <hr />

        <h2>Aggregation With Having: Find Communities With More Than 1 Person  </h2>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="AggregationHavingRequest" name="AggregationHavingRequest">
            <input type="submit" name="AggregationSubmit"></p>

        </form>

        <hr />
        
        <h2>Aggregation With Group By: Find the Number of Students in Each Faculty With a Profile</h2>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="AggregationGroupByRequest" name="AggregationGroupByRequest">
            <input type="submit" name="AggregationGroupBySubmit"></p>

        </form>

        <hr />

        <h2>Nested Aggregation With Group By: Find the Faculty Where the Oldest Person is Older than the Average Age of All Profiles </h2>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="NestedAggregationRequest" name="NestedAggregationRequest">
            <input type="submit" name="NestedAggregationSubmit"></p>

        </form>

        <hr />

        <h2>Division: Find People Who Are Going to Every Event   </h2>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
        <input type="hidden" id="DivisionQueryRequest" name="DivisionQueryRequest">
            <input type="submit" value="Search" name="DivisionSubmit"></p>

        </form>

        <hr />

        <h2>Join: Search Event by Community</h2>
        <form id = "user_input" method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="joinRequest" name="joinRequest">
            Community: <input type="text" name="inputJoin"><br /><br />

            <input type="submit" value="Search" name="joinSubmit"></p>

        </form>

        <hr />

        <h2>Count the Tuples in Profile</h2>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="countTupleRequest" name="countTupleRequest">
            <input type="submit" name="countTuples"></p>
        </form>


        <hr />

        <h2>Count the Tuples in Posts</h2>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="countTuplePostRequest" name="countTuplePostRequest">
            <input type="submit" name="countPostTuples"></p>
        </form>  

        <hr />

        

             


        <?php
        // code taken from oracle-test.php from CPSC 304 Tutorial 7
        
		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }


			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }


        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from Networking Application:<br>";
            echo "<table border = '2'>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Name"] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_gbrwg", "a12038626", "dbhost.students.cs.ubc.ca:1522/stu");
 
            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleUpdateRequest() {
            global $db_conn;

            $email = $_POST['email'];
            $new_password = $_POST['newPassword'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE Account SET Password='" . $new_password . "' WHERE Email='" . $email . "'");

            $result = executePlainSQL("SELECT A.Email, A.Password FROM Account A");

            echo "<br> Retrieved data from table:<br>";
            echo "<table border = '2'>";
            echo "<tr><th>Email</th><th>Password</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }

            echo "</table>";

            OCICommit($db_conn);

        }

        // insert query for account and profile

        function handleInsertRequest() {
            global $db_conn;

            //Get input from user to create a new ACCOUNT
            $tuple1 = array (
                ":bind1" => $_POST['email'],
                ":bind2" => $_POST['password']
            );

            //Get input from user to create a new PROFILE
            $tuple2 = array (
                ":bind1" => $_POST['userid'],
                ":bind2" => $_POST['email'],
                ":bind3" => $_POST['name'],
                ":bind4" => $_POST['pronouns'],
                ":bind5" => $_POST['faculty'],
                ":bind6" => $_POST['interest']
            );

            $alltuples1 = array (
                $tuple1
            );

            $alltuples2 = array (
                $tuple2
            );

    
            executeBoundSQL("INSERT into Account(email, password) values (:bind1, :bind2)", $alltuples1);
            executeBoundSQL("INSERT into Profiles(userid, email, name, pronouns, faculty, interest) values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples2);
           
            $result = executePlainSQL("SELECT P.UserID, P.Name FROM Profiles P");

            echo "<br> Retrieved data from table:<br>";

            $colsAccount = array("Email", "Password");
            $queryAccount = "SELECT * FROM Account";
            $resultAccount =executePlainSQL($queryAccount, $db_conn);

            createTable($resultAccount, $colsAccount);

            $cosProfiles = array("UserId", "Name", "Faculty", "Pronouns", "Interest", "Email", "GroupID");
            $queryProfiles = "SELECT * FROM Profiles";
            $resultProfiles =executePlainSQL($queryProfiles, $db_conn);

            createTable($resultProfiles, $cosProfiles);

            OCICommit($db_conn);

        }

        // insert query for post

        function insertQueryPostRequest() {
            global $db_conn;

            //Get input from user to create a new POST
            $tuple1 = array (
                ":bind1" => $_POST['userid'],
                ":bind2" => $_POST['caption'],
                ":bind3" => $_POST['mood']
            );

            $alltuples1 = array (
                $tuple1
            );

            executeBoundSQL("INSERT into Posts(userid, caption, mood) values (:bind1, :bind2, :bind3)", $alltuples1);

            $result = executePlainSQL("SELECT * FROM Posts P");

            echo "<br> Retrieved data from table:<br>";
            echo "<table border = '2'>";
            echo "<tr><th>UserID</th><th>Caption</th><th>Mood</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
            }

            echo "</table>";
            
            OCICommit($db_conn);

        }

        // delete query 

        function handleDeleteRequest() {
            global $db_conn;

            $email = $_POST['email'];

            executePlainSQL("DELETE FROM Account WHERE Email = '" . $email . "'");
            

            echo "<br> Account with email  " .  $email . " deleted <br>";

            $result = executePlainSQL("SELECT A.Email FROM Account A");

            echo "<br> Retrieved data from table:<br>";
            echo "<table border = '2'>";
            echo "<tr><th>Emails</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td></tr>";
            }

            echo "</table>";
            
            OCICommit($db_conn);
            
        }

        function handleCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM Profiles");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in Profiles: " . $row[0] . "<br>";
               
            
            }
            OCICommit($db_conn);
        }

        function handleCountPostRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM Posts");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in Posts: " . $row[0] . "<br>";
            }
            OCICommit($db_conn);
        }

        // projection query

        function handleProjectionRequest() {
            global $db_conn;

            $inputEventName = $_GET['inputEventName'];

            $cols = $_GET['eventAttribute'];
            $query = "SELECT " . implode(",", $cols) . " FROM CommunityEvent WHERE name like '%" . $inputEventName . "%'";
            
            $result = executePlainSQL($query, $db_conn);
            
            createTable($result, $cols);

            OCICommit($db_conn);

        }

        // join query 

        function handleJoinRequest() {
            global $db_conn;

            $inputJoin = $_GET['inputJoin'];

            $cols = array("Name", "Event Date", "Location");
            $query = "SELECT CommunityEvent.Name, CommunityEvent.event_Date, CommunityEvent.Location
             FROM (Community INNER JOIN CommunityEvent ON Community.CID = CommunityEvent.CID)
             WHERE Community.Name LIKE '%" . $inputJoin . "%'";
            
            $result = executePlainSQL($query, $db_conn);
            
            createTable($result, $cols);

            OCICommit($db_conn);
        }

        function createTable($result, $cols) {
            $ncols = count($cols);
            
            echo "<table border = '2'>";


            // create headers
            echo "<tr>";
            for($i = 0; $i < $ncols; $i++) {
                echo "<th>" . $cols[$i] . "</th>";
            }

            //create rows
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>";
                for ($i = 0; $i < $ncols; $i++) {
                    echo "<td>" . $row[$i] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

        }

        // division query

        function handleDivisionRequest() {
            global $db_conn;

        
            $result = executePlainSQl("SELECT userID FROM profiles P WHERE NOT EXISTS (SELECT EventID FROM communityEvent MINUS SELECT EventID FROM RSVPCommunity R WHERE p.UserID = R.profileID)");
            echo "<br>Retrieved data from Networking Application:</br>";
            echo "<table border = '2'>";
            echo "<tr><th>UserID</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row['USERID'] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";

            OCICommit($db_conn);

            
        }

        // aggregation with having query

        function handleAggregationHavingRequest() {
            global $db_conn;

            $result = executePlainSQl("SELECT CID FROM ispartof GROUP BY CID HAVING count(*) > 1");
            

            
            echo "<br>Retrieved data from Networking Application:<br>";
            echo "<table border = '2'>";
            echo "<tr><th>CID</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["CID"] . "</td></tr>"; 
            }
            echo "</table>";


            OCICommit($db_conn);

        }

        // aggregation with group by query

        function handleAggregationGroupByRequest() {
            global $db_conn;

            $inputCommunity = $_GET['inputCommunity'];

            $result = executePlainSQL("SELECT faculty, count(*) FROM profiles GROUP BY Faculty");
            
            echo "<table border = '2'>";
            echo "<tr><th>Faculty</th><th>Count</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }

            echo "</table>";

            
            // createTable($result, $cols);


            OCICommit($db_conn);

        }

        // nested aggregation with group by query

        function handleNestedAggregationRequest() {
            global $db_conn;
            // get the information of the person with the max age of each community 
            // executePlainSQl("Create View Temp(cid, Location, EventCount) as SELECT cid, location, count(location) FROM COMMUNITYEVENT GROUP BY CID, LOCATION");

            // $result = executePlainSQl("select location from temp where eventcount = (select max(eventcount) from temp)");
            $result = executePlainSQL("SELECT p.faculty, max(p.age) FROM profiles p GROUP BY faculty HAVING max(p.age) > (SELECT avg(p1.age) FROM profiles p1)");


            echo "<br>Retrieved data from Networking Application:<br>";
            echo "<table border = '2'>";
            echo "<tr><th>Faculty</th><th>Age</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";

            }
            echo "</table>";

            OCICommit($db_conn);

        }

        // selection query

        function handleSelectionQueryRequest() {
            global $db_conn;

            $tables = $_GET['tables'];
            $attributeInput = $_GET['attributeInput'];
            $conditionInput = $_GET['conditionInput'];


            $cols = explode(",", $attributeInput);

            $query = ("SELECT $attributeInput FROM $tables WHERE $conditionInput");

            $result = executePlainSQL($query);
            createTable($result, $cols);
            

            OCICommit($db_conn);

        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                } else if (array_key_exists('insertQueryPostRequest', $_POST)) {
                    insertQueryPostRequest();
                } else if (array_key_exists('deleteQueryRequest', $_POST)) {
                    handleDeleteRequest();
                }  

                

                disconnectFromDB();
            }
        }


        // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                } else if (array_key_exists('countPostTuples', $_GET)) {
                    handleCountPostRequest();
                } else if (array_key_exists('projectionSubmit', $_GET)) {
                    handleProjectionRequest();
                } else if (array_key_exists('AggregationSubmit', $_GET)) {
                    handleAggregationHavingRequest();
                } else if (array_key_exists('DivisionSubmit', $_GET)) {
                    handleDivisionRequest();
                } else if (array_key_exists('selectionSubmit', $_GET)) {
                    handleSelectionQueryRequest();
                } else if (array_key_exists('AggregationGroupBySubmit', $_GET)) {
                    handleAggregationGroupByRequest();
                } else if (array_key_exists('NestedAggregationSubmit', $_GET)) {
                    handleNestedAggregationRequest();
                } else if (array_key_exists('joinSubmit', $_GET)) {
                    handleJoinRequest();
                }


                disconnectFromDB();
            }
        }

		if (isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['projectionRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['countTuplePostRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['AggregationHavingRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['DivisionQueryRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['selectionQueryRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['AggregationGroupByRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['NestedAggregationRequest'])) {
            handleGETRequest();
        } else if (isset($_GET['joinRequest'])) {
            handleGETRequest();
        }
        
		?>
	</body>
</html>
