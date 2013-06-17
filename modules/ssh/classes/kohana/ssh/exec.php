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
 * SSH command classes
 *
 * @package SSH
 * @category Base
 * @author Zbigniew Motyka <zbigniew@motyka.net.pl>
 * @copyright &copy; 2012 Zbigniew Motyka
 * @license MIT
 */
class Kohana_SSH_Exec {
	
	/**
	 * Input/Output stream
	 * @var resource
	 */
	protected $_stream_stdio;
	/**
	 * Error stream
	 * @var resource
	 */
	protected $_stream_stderr;
	
	/**
	 * Execute command
	 * @param SSH $ssh SSH instance
	 * @param string $command command to execute
	 * @return SSH_Exec
	 */
	public static function factory(SSH $ssh, $command)
	{
		return new SSH_Exec($ssh, $command);
	}
	
	/**
	 * Execute command
	 * @param SSH $ssh SSH instance
	 * @param string $command command to execute
	 * @return SSH_Exec
	 */
	public function __construct(SSH $ssh, $command)
	{
		$this->_stream_stdio = ssh2_exec($ssh->get_connection(), $command);
		$this->_stream_stderr = ssh2_fetch_stream($this->_stream_stdio, SSH2_STREAM_STDERR);
		stream_set_blocking($this->_stream_stdio, true);
	}
	
	/**
	 * Get result
	 * @return string
	 */
	public function output()
	{
		$result = NULL;
		while($buffer = fread($this->_stream_stdio, 4096)) {
			$result .= $buffer;
		}
		return $result;
	}
	
	/**
	 * Get errors
	 * @return string
	 */
	public function errors()
	{
		$result = NULL;
		while($buffer = fread($this->_stream_stderr, 4096)) {
			$result .= $buffer;
		}
		return $result;
	}
	
	/**
	 * Close streams
	 */
	public function close()
	{
		fclose($this->_stream_stderr);
		fclose($this->_stream_stdio);
	}
	
}
