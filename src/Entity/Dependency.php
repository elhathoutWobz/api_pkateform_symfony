<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource(

    operations: [
        new Get(
            paginationEnabled: false
        ),
        new GetCollection(
            paginationEnabled: false
        ),

    ]
)]
class Dependency
{
    #[ApiProperty(
    identifier: true
    )]
    private string $uuid;
    #[ApiProperty(
        description: 'Nom de dependance'
    )]
    private string $name;
    #[ApiProperty(
        description: 'version de dependance',
        openapiContext: [

        ]

    )]
    private string $version;
    public function __construct(
         string $uuid,
         string $name,
         string $version,

    )
    {
        $this->uuid = $uuid;
        $this->name = $name;
        $this->version = $version;
    }


    public function getUuid(): string
    {
        return $this->uuid;
    }



    public function getName(): string
    {
        return $this->name;
    }



    public function getVersion(): string
    {
        return $this->version;
    }




}