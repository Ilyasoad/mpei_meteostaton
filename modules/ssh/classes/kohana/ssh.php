<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * Copyright (c) 2012 Zbigniew Motyka <zbigniew@motyka.net.pl>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the 
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or 
 * sell copies of the Software, and to permit persons to whom the Software is 
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in 
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER 
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING 
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */

/**
 * Contains classes to request SSH command
 * 
 * @package SSH
 * @category Base
 * @author Zbigniew Motyka <zbigniew@motyka.net.pl>
 * @copyright &copy; 2012 Zbigniew Motyka
 * @license MIT
 */
class Kohana_SSH {
	
	/**
	 * Keeps SSH instances
	 * @var array
	 */
	protected static $_instances = array();
	
	/**
	 * Connect to SSH server
	 * 
	 * @param string $host Hostname
	 * @param string $login Username
	 * @param string $password Username password
	 * @param int $port Server port
	 * @return SSH
	 */
	public static function connect($host, $login, $password, $port = 22, $methods = NULL)
	{
		if (!isset(SSH::$_instances[$host])) SSH::$_instances[$host] = array();
		if (!isset(SSH::$_instances[$host][$port])) SSH::$_instances[$host][$port] = FALSE;
		if (SSH::$_instances[$host][$port] === FALSE) SSH::$_instances[$host][$port] = new SSH($host, $login, $password, $port, $methods);
		
		return SSH::$_instances[$host][$port];
	}
	
	/**
	 * Handle current SSH connection
	 * @var resource
	 */
	protected $_connection;
	
	/**
	 * Create new connection
	 *
	 * @param string $host Hostname
	 * @param string $login Username
	 * @param string $password Username password
	 * @param int $port Server port
	 * @return SSH
	 */
	public function __construct($host, $login, $password, $port = 22, $methods = NULL)
	{
		$this->_connection = ssh2_connect($host, $port, $methods);
		ssh2_auth_password($this->_connection, $login, $password);
	}
	
	/**
	 * Return current ssh connection
	 * @return resource
	 */
	public function get_connection()
	{
		return $this->_connection;
	}
	
	/**
	 * Send command to server
	 * @param string $command Command to execute
	 * @return SSH_Exec
	 */
	public function exec($command)
	{
		return SSH_Exec::factory($this, $command);
	}
	
	/**
	 * Return SCP interface
	 * @return SSH_SCP
	 */
	public function scp()
	{
		return SSH_SCP::factory($this);
	}
	
}
