{def $content = fetch(github-user, content, hash(username, $username))}

<h1>{$content.name} ({$content.login})</h1>

<div class="github-user">

    <table>

        <tr>
            <td width="90px">
                <img src="{$content.avatar_url}" alt="avatar" />
            </td>
            <td>
                <b>{'Location :'|i18n('ezgithub/user')}</b> {$content.location}<br/>
                <b>{'Public repos :'|i18n('ezgithub/user')}</b> {$content.public_repos}<br/>
                <b>{'Public gists :'|i18n('ezgithub/user')}</b> {$content.public_gists}
            </td>
        </tr>

    </table>

    <p>
        <a href="{$content.html_url}" target="_blank">
            {'View this user profile directly on Github.'|i18n('ezgithub/user')}
        </a>
    </p>

</div>

{undef $content}
