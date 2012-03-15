# eZGithub


A companion extension for accessing your datas within eZ Publish.


## Requirements

This extension need the following modules :

* php_curl


## Configuration

Configuration is made in `ezgithub.ini`. Please take a look at the original file in the settings folder of this extension.


## Features

### User informations

You can access user informations by using this URL :

> /github-user/show

or

> /github-user/show/username

or within a template :

```smarty
{def $content = fetch(github-user, content, hash(username, $username))}
```


### Repositories (projects)

#### List all projects for a given user

Get the list of all the projects for a given user with the following module and view :

> /github-project/list

or

> /github-project/list/username

or within a template :

```smarty
{def $list = fetch(github-project, list, hash(username, $username))}

<ul class="projects">
{foreach $list as $project}
    <li>
        <a href={concat('/github-project/show/', $username, '/', $project.name)|ezurl}>
            Link to the details.
        </a>
    </li>
{/foreach}
</ul>
```


#### Get all the informations about a repository (project)

Get the informations about a project with the following URL :

> /github-project/show/username/projectname

or (if you want to use the configured username in INI file)

> /github-project/show/projectname

or within a template :

```smarty
{def $content = fetch(github-project, content, hash(username, $username, project, $project))}
```


### Gists

#### Get all the gists for a given user

```smarty
{def $gists = fetch(gist, list)}

<ul class="gists">
{foreach $gists as $gist}
    <li>
        <a href={concat('gist/show/',$gist.id)|ezurl}>{$gist.description}</a>
    </li>
{/foreach}
</ul>
```

#### Get all informations about a Gist

```smarty
{def $content = fetch(gist, content, hash(gist_id, $gist_id))}
```



## Informations

### License

This extension is under GNU/GPL v3 : [View the license](http://www.gnu.org/copyleft/gpl.html).

### API

This extension is currently based on : [API v3](http://developer.github.com/v3/).