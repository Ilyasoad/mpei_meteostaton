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
 * SCP protocol
 *
 * @package SSH
 * @category SCP
 * @author Zbigniew Motyka <zbigniew@motyka.net.pl>
 * @copyright &copy; 2012 Zbigniew Motyka
 * @license MIT
 */
class Kohana_SSH_SCP {
	
	/**
	 * SSH connection
	 * @var SSH
	 */
	protected $_ssh;
	
	/**
	 * Get SCP interface
	 * @param SSH $ssh SSH instance
	 * @return SSH_SCP
	 */
	public static function factory(SSH $ssh)
	{
		return new SSH_SCP($ssh);
	}
	
	/**
	 * Get SCP interface
	 * @param SSH $ssh SSH instance
	 * @return SSH_SCP
	 */
	public function __construct(SSH $ssh)
	{
		$this->_ssh = $ssh;
	}
	
	/**
	 * Send file to remote server
	 * @param string $local Local filename
	 * @param string $remote Remote filename
	 * @param int $mode Remote file permission
	 * @return bool
	 */
	public function send($local, $remote, $mode = 0644)
	{
		return ssh2_scp_send($this->_ssh->get_connection(), $local, $remote, $mode);
	}
	
	/**
	 * Receive file from remote server
	 * @param string $remote Remote filename
	 * @param string $local Local filename
	 * @return bool
	 */
	public function receive($remote, $local)
	{
		return ssh2_scp_recv($this->_ssh->get_connection(), $remote, $local);
	}
	
}
