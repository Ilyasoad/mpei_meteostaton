# SCP

This protocol is used to send/receive file from remote server.

## Sending file

Remote file will have 0755 permission

	$connection = SSH::connect('hostname', 'username', 'password');
	$connection->scp()->send('localfile', 'remotefile', 0755);

## Receiving file

	$connection = SSH::connect('hostname', 'username', 'password');
	$connection->scp()->receive('remotefile', 'localfile');
