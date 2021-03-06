<div id="smallworld_admin_allusers">
    <{if $allusersinspectcounter > 0}>
    <legend class="smallworldadmin_legend"><{$smarty.const._AM_SMALLWORLD_USERADMININSPECT_TITLE}></legend>
    <table id="smallworld_admin_allusers_table">
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_IMAGE}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_USERNAME}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_REALNAME}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_IP}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_COMPLAINTS}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_INSPECTTIME}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_INSPECTADD}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_INSPECTDELETE}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_DELETEUSER}></th>
        <{foreach item=post from=$allusersinspect}>
        <tr>
            <td>
                <img src="<{$post.userimage}>" <{$post.avatar_highwide}>>
            </td>
            <td><{$post.username}></td>
            <td><{$post.realname}></td>
            <td><{$post.ip}></td>
            <td><{$post.complaint}></td>
            <td>
                                <span id="clock-<{$post.userid}>">
                                </span>
                <script type='text/javascript'>
                    (function ($) {
                        $(function () {
                            $('#clock-<{$post.userid}>').countdown({onExpiry: SmallworldCountdownliftOff, until: + < {$post.userinspect_timetotal} >
                        })
                        });
                    })(jQuery);
                </script>

            </td>

            <td>
                                <span id="smallworld_addmoretime">
                                <select rel="<{$post.userid}>" id="smallworld_addmoretime_options<{$post.userid}>">
                                    <option id="<{$post.userid}>" value="0"><{$smarty.const._AM_SMALLWORLD_ADDTIMEDROPDOWN_NOCHANGE}></option>
                                    <{section name=addtimevalue start=1 loop=61 step=1}>
                                        <option rel="<{$post.userid}>" value="<{$smarty.section.addtimevalue.index}>">
                                            <{$smarty.section.addtimevalue.index}><{$smarty.const._AM_SMALLWORLD_ADDTIMEDROPDOWN_MINUTES}>
                                        </option>
                                    <{/section}>
                                </select>
                                </span>
                <img id="smallworld_addtime_img" rel="<{$post.userid}>" height="16px" width="16px" src="../assets/images/time_add.png">
            </td>
            <td>
                <img id="smallworld_deletetime_img" rel="<{$post.userid}>" height="16px" width="16px" src="../assets/images/time_delete.png">
            </td>
            <td>
                <img id="smallworld_accountdelete_img" name="<{$post.username}>" rel="<{$post.userid}>" height="16px" width="16px" src="../assets/images/accountdelete.png">
            </td>

        </tr>
        <{/foreach}>
    </table>
    <{/if}>

    <br>

    <{if $allusersnoinspectcounter > 0}>
    <table id="smallworld_admin_allusers_table">
        <legend class="smallworldadmin_legend"><{$smarty.const._AM_SMALLWORLD_USERADMINNOINSPECT_TITLE}></legend>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_IMAGE}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_USERNAME}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_REALNAME}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_IP}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_COMPLAINTS}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_INSPECTTIME}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_INSPECTADD}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_INSPECTDELETE}></th>
        <th><{$smarty.const._AM_SMALLWORLD_TITLE_DELETEUSER}></th>

        <{foreach item=posts from=$allusersnoinspect}>
        <tr>
            <td>
                <img src="<{$posts.userimage}>" <{$posts.avatar_highwide}>>
            </td>
            <td><{$posts.username}></td>
            <td><{$posts.realname}></td>
            <td><{$posts.ip}></td>
            <td><{$posts.complaint}></td>
            <td>
            </td>

            <td>
                                <span id="smallworld_addmoretime">
                                <select rel="<{$posts.userid}>" id="smallworld_addmoretime_options<{$posts.userid}>">
                                    <option value="0"><{$smarty.const._AM_SMALLWORLD_ADDTIMEDROPDOWN_NOCHANGE}></option>
                                    <{section name=addtimevalue start=1 loop=61 step=1}>
                                        <option value="<{$smarty.section.addtimevalue.index}>">
                                            <{$smarty.section.addtimevalue.index}><{$smarty.const._AM_SMALLWORLD_ADDTIMEDROPDOWN_MINUTES}>
                                        </option>
                                    <{/section}>
                                </select>
                                </span>
                <img id="smallworld_addtime_img" rel="<{$posts.userid}>" height="16px" width="16px" src="../assets/images/time_add.png">
            </td>
            <td>
                <img id="smallworld_deletetime_img" rel="<{$posts.userid}>" height="16px" width="16px" src="../assets/images/time_delete.png">
            </td>
            <td>
                <img id="smallworld_accountdelete_img" name="<{$posts.username}>" rel="<{$posts.userid}>" height="16px" width="16px" src="../assets/images/accountdelete.png">
            </td>

        </tr>
        <{/foreach}>
    </table>
    <{/if}>
</div>
