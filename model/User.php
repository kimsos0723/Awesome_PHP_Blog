<?php

class User {
    /**
     * @var string
     */
    public $username, $password, $nickname;

    /**
     * User constructor.
     * @param string $username
     * @param string $nickname
     * @param string $password
     */
    public function __construct(string $username = "", string $password= "", string $nickname= "") {
        $this->username = $username;
        $this->password = $password;
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getNickname(): string {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getUsername(): string {
        return $this->username;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname) {
        $this->nickname = $nickname;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username) {
        $this->username = $username;
    }

    public function verify(string $password) {
        return $this->password === $password;
    }
}