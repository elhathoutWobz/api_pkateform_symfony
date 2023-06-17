<?php
namespace  App\Tests\Func;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Faker\Factory;
class UserTest extends  AbstractEndPoint
{
    private string $userPayload = '{"email":"%s","password":"password"}';

    //get all users
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
    //create one user
    public  function testPostUser():void
    {

        //get response
        $response=$this->GetResponseFromRequest(
            Request::METHOD_POST,
            'http://127.0.0.1:8000/api/users',
            $this->getPayload()

        );

        //get content
        $responseContent = $response->getContent();

        //decode content
        $responseDecoded = json_decode($responseContent);

        //test status code
        self::assertEquals(Response::HTTP_CREATED,$response->getStatusCode());
        //test if content are format json
        self::assertJson($responseContent);
        //tester que respone est non vide
        self::assertNotEmpty($responseDecoded);
    }

    //function to get fake email
    private function getPayload() :string
    {
    $faker = Factory::create();
    return sprintf($this->userPayload,$faker->email);
    }
}