<?php

namespace Cantie\AppStoreConnect\AccessToken;

use DateTime;
use Firebase\JWT\JWT;

class Generate
{
    const TOKEN_ALGORITHM = "ES256";
    const TOKEN_TYPE = "JWT";

    private $KEY_CACHE;

    private $jwtHeader;

    private $jwtPayload;

    private $jwtAuthKey;

    private $jwtEncryptAlg;


    public function __construct($apiKey, $keyIdentifier, $issuerId)
    {
        $this->jwtHeader = $this->makeHeader($keyIdentifier);
        $this->jwtPayload = $this->makePayload($issuerId);
        $this->jwtAuthKey = $apiKey;
        $this->jwtEncryptAlg = self::TOKEN_ALGORITHM;
        $this->KEY_CACHE = md5($apiKey . $keyIdentifier . $issuerId);
    }

    public function generateToken()
    {
        $jwt = JWT::encode($this->jwtPayload, $this->jwtAuthKey, $this->jwtEncryptAlg, null, $this->jwtHeader);
        return $jwt;
    }

    private function makeHeader($keyIdentifier)
    {
        return [
            'alg' => self::TOKEN_ALGORITHM,
            'kid' => $keyIdentifier,
            'typ' => self::TOKEN_TYPE
        ];
    }

    private function makePayload($issuerId)
    {
        return [
            'iss' => $issuerId,
            'iat' => (new DateTime())->getTimestamp(),
            'exp' => (new DateTime())->modify("+10 minutes")->getTimestamp(),
            'aud' => 'appstoreconnect-v1'
        ];
    }

    private function getAuthKey($keyPath)
    {
        $fp = fopen($keyPath, "r");
        $key = fread($fp, 8192);
        fclose($fp);
        return $key;
    }
}
