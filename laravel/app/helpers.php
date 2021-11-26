<?php

function route_class()
{
    return str_replace('.', '-', Rount::currentRouteName());
}
