{def $list = fetch(github-project, list, hash(username, $username))}

<h1>{'List of all the projects of '|i18n('ezgithub/project')}{$username}</h1>

{foreach $list as $project}
    <div class="githubproject">

        <h2>{$project.name}</h2>

        <p>
            {'View the project on Github :'|i18n('ezgithub/project')}
            <a href="{$project.html_url}">{$project.html_url}</a>
            <br/>
            {'Last update :'|i18n('ezgithub/project')}
            {$project.updated_at}
        </p>

        <p>
            <a href={concat('/github-project/show/', $username, '/', $project.name)|ezurl}>
                {'View more informations about this project.'|i18n('ezgithub/project')}
            </a>
        </p>

    </div>
{/foreach}

{undef $list}
