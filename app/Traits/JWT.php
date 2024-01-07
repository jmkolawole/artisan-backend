<?php

namespace App\Traits;

trait JWT
{
    private $payload;

    private function getHeader()
    {
        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
        ];

        return base64_encode(
            json_encode($header)
        );
    }

    private function createPayload(
        $userId,
        string $email,
        string $expires
    ) {
        $payload = [
            'user_id' => $userId,
            'email' => $email,
            'expires' => $expires,
        ];

        $this->payload = base64_encode(
            json_encode($payload)
        );
    }

    /**
     * Decode and get the payload in a JWT token
     *
     * @param string $jwtToken
     * @return mixed
     */
    private function getPayload(string $jwtToken)
    {
        // Explode JWT token on "."
        $payload = explode('.', $jwtToken)[1];
        $payload = base64_decode($payload);
        $payload = json_decode($payload);

        return $payload;
    }

    /**
     * Use header, payload and secret key to create a JWT signature
     *
     * @return string
     */
    private function createSignature()
    {
        return hash_hmac(
            'sha256',
            ($this->getHeader() . '.' . $this->payload),
            config('ctg.jwt_secret')
        );
    }

    /**
     * Get JWT token
     *
     * @return string
     */
    private function jwtToken()
    {
        return $this->getHeader() . '.' . $this->payload . '.' . $this->createSignature();
    }
}
