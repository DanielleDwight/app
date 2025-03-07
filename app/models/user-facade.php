<?php

class UsersFacade extends DBConnection
{

    function addUser($firstName, $lastName, $username, $password)
    {
        $sql = $this->connect()->prepare("INSERT INTO users VALUES (?, ?, ? ?)");
        $sql->execute([$firstName, $lastName, $username, $password]);
        return $sql;
    }


}