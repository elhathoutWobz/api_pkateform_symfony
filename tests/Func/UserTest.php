<?php
namespace  App\Tests\Func;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTest extends  AbstractEndPoint
{
     public  function testGetUsers(): void
    {
        //get response
        $response=$this->GetResponseFromRequest(Request::METHOD_GET,'http://127.0.0.1:8000/api/users');
       //get content
        $responseContent = $response->getContent();
        //decode content
        $responseDecoded = json_decode($responseContent);
       //test status code
        self::assertEquals(Response::HTTP_OK,$response->getStatusCode());
        //test if content are format json
        self::assertJson($responseContent);
        //tester que respone est non vide
        self::assertNotEmpty($responseDecoded);
    }
}