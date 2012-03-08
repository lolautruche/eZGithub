# eZGithub

> **IMPORTANT : This extension is a work in progress**

A companion extension for accessing your datas within eZ Publish.


## Requirements

This extension need the following modules :

* php_curl


## Features

### User informations

> This part is currently not written but is planned.

### Gists

Get the list of all the gists of a user :

    {def $gists = fetch(gist, list)}
    
    <ul class="gists">
    {foreach $gists as $gist}
        <li>
            <a href={concat('gist/show/',$gist.id)|ezurl}>{$gist.description}</a>
        </li>
    {/foreach}
    </ul>
    
Get all informations about a Gist :

    {def $content = fetch(gist, content, hash(gist_id, $gist_id))}

## Informations

### License

This extension is under GNU/GPL v3 : [View the license](http://www.gnu.org/copyleft/gpl.html).

### API

This extension is currently based on : [API v3](http://developer.github.com/v3/).