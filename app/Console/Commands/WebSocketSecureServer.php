<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Ratchet\Server\IoServer;

use Ratchet\Http\HttpServer;

use Ratchet\WebSocket\WsServer;

use React\EventLoop\Factory;
use React\Socket\SecureServer;
use React\Socket\Server;

use App\Http\Controllers\SocketController;

class WebSocketSecureServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'websocketsecure:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    
    
    public function handle() {
		$loop = Factory::create();
		$webSock = new SecureServer(
		 new Server('0.0.0.0:8443', $loop),
		 $loop,
		 array(
			'local_cert' => '/home/wealthmark/ssl/certs/wealthmark_io_d629f_a1e8f_1691366399_98638f7f809badafa7049108e0eef93c.crt',
			'local_pk' => '/home/wealthmark/ssl/keys/d629f_a1e8f_e98bc216dfc51c2f0147eca0af6c35dd.key', 
			'allow_self_signed' => TRUE, 
			'verify_peer' => FALSE
		 )
		);
		$webServer = new IoServer(
		 new HttpServer(
			new WsServer(
			   new SocketController()
			)
		 ),
		 $webSock
		);
		$loop->run();
	}
}
