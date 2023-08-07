<?php




namespace Tests\Api;


use Tests\Support\ApiTester;


class MyApiTestCeptCest
{
    public function testGetUserById(ApiTester $I)
    {


        $I->sendGET('/users/2');


        $I->seeResponseCodeIs(200);


        $I->seeResponseContainsJson([


            'email' => 'janet.weaver@reqres.in',
            'first_name' => 'Janet',


        ]);
    }


    public function testPostUser(ApiTester $I)
    {


        $dataToSend = [


            "name" => "huy",
            "job" => "leader"


        ];


        $I->sendPOST('/users', $dataToSend);


        $I->seeResponseCodeIs(201);


        $I->seeResponseContainsJson($dataToSend);
    }


    public function testUpdateUser(ApiTester $I)
    {
        $updatedData = [


            "name" => "huy",
            "job" => "zion resident"


        ];


        $userId = 2;


        $I->sendPUT("/users/{$userId}", $updatedData);


        $I->seeResponseCodeIs(200);


        $response = $I->grabResponse();


        echo "Response: " . $response;
    }


    public function testDeleteUser(ApiTester $I)
    {
        $userId = 2;


        $I->sendDELETE("/users/{$userId}");


        $I->seeResponseCodeIs(204);
    }
}