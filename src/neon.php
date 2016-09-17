<?php
namespace Neon;
use GuzzleHttp\Client;

class Neon
{
  public function test() {
    $client = new Client();

    $request = $client->request('GET', 'http://vivaretina.com/neon', [
      'auth' => ['vorvor','123456']
    ]);
    $response = $request->getBody();

    return $response;

  }
}


