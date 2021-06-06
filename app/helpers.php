<?php
function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'sectionActive' : '';
}

function setShow($routeName)
{
    if ($routeName == 'personal.information') {
        return request()->routeIs($routeName) ? 'show' : '';
    }
}
