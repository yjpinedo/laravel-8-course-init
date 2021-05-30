<?php

    function splitName($name) {
        $name = trim($name);
        $arrayName = explode(' ', $name);
        $firstName = $arrayName[0];
        $lastName = $arrayName[1];
        return ['firstName' => $firstName, 'lastName' => $lastName];
    }