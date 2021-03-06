<?php

	/**
	 * @author Paul-Reftu
	 */

	/**
	 * class whose instance represents the connection details w.r.t an Oracle database, as well as the connection itself
	 */
	class OracleDatabase {

		private $username;
		private $password;
		private $connPath;
		private $conn;

		/**
		 * @param $username
		 * @param $password
		 * @param $connPath
		 * initialize object attributes and establish Oracle DB connection
		 */
		public function __construct($username, $password, $connPath) {

			$this->username = $username;
			$this->password = $password;
			$this->connPath = $connPath;

			$this->conn = oci_connect($username, $password, $connPath);

		} // END of __construct()

		/**
		 * close the DB conn., if it is not already closed
		 */
		public function closeConn() {

			if ($this->conn || $this->conn != null)
				oci_close($this->conn);

		} // END of closeConn()

		/**
		 * @return the conn. to our DB
		 */ 
		public function getConn() {

			return $this->conn;

		} // END of getConn()

	} // end of OracleDatabase class

?>