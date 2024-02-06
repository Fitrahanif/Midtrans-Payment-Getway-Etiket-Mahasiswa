<?php

if (!function_exists('isAuth')) {
    function isAuth(): bool
    {
        return session()->has('id') ? true : false;

    }
}
