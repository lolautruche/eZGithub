{def $content = fetch(github-project, content, hash(username, $username, project, $project))}

<h1>{$project}</h1>

<p>
    {'View the project on Github :'|i18n('ezgithub/project')}
    <a href="{$content.html_url}">{$content.html_url}</a>
    <br/>
    {'Last update :'|i18n('ezgithub/project')}
    {$content.updated_at}
</p>

<p>
    {'Language :'|i18n('ezgithub/project')}
    {$content.language}
    <br/>
    {'Watchers :'|i18n('ezgithub/project')}
    {$content.watchers}
</p>

<h2>{'Project description'|i18n('ezgithub/project')}</h2>
<p>

    {$content.description}
</p>

{undef $content}
