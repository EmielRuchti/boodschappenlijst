<?php

function urlIs($checkUrl) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $checkUrl;
}