<?php
namespace  App\Tests\Func;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Faker\Factory;
class ArticeTest extends  AbstractEndPoint
{

    //get all articles
    public  function testGetArticles(): void
    {
        //get response
        $response=$this->GetResponseFromRequest(
            Request::METHOD_GET,
            'http://127.0.0.1:8000/api/articles');
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
    //create one user

}