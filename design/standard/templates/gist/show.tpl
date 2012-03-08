{def $content = fetch(gist, content, hash(gist_id, $gist_id))}

<h1>{$content.description}</h1>

<div id="gist_informations">

    <p>
        <b>{'Last update :'|i18n('ezgithub/gist')}</b>
        {$content.updated_at}
        <br/>
        <b>{'View on Github :'|i18n('ezgithub/gist')}</b>
        <a href="{$content.html_url}">{$content.html_url}</a>
    </p>

</div>

{foreach $content.files as $file}
    <h2>{$file.filename} ({$file.language})</h2>
    <pre>{$file.content}</pre>
{/foreach}
