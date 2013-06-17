# SSH

This is a module for Kohana 3.x which provide classes to remotely execute commands by SSH2 protocol.

This module require [this](http://php.net/manual/en/book.ssh2.php) PECL extension.

## Usage

Before we use SSH, we must enable module in bootstrap.php file:

	Kohana::modules(array(
		...
		'ssh' => MODPATH.'ssh',
		...
	));

There is example for remotely executing `ping` command:

	$connection = SSH::connect('hostname', 'username', 'password');
	$ping = $connection->exec('ping 127.0.0.1 -c5');
	echo "Command result:<br /><pre>" . $ping->output() . "</pre><hr />";
	echo "Command errors:<br /><pre>" . $ping->errors() . "</pre><hr />";
	$ping->close();
	
## License

Licensed under the [MIT](http://www.opensource.org/licenses/mit-license.php) license. 
 
