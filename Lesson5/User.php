<?php

/*закоментила, чтобы не мешал в Ltsson6*/
//class User
{
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;
    public DateTime $dateCreated;


    function __construct(string $username, string $email, ?int $age)
    {
        $this->username = $username;
        $this->email = $email;
        $this->age = $age;

    }


}