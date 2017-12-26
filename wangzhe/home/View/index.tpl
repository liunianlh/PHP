<html>
    <head>
        <title>title</title>
        <meta charset="utf8" />
    </head>
    <body>
        <table border="1" width="600" align="center" style="text-align: center;">
              <th>管理员ID</th><th>管理员名称</th>
            {foreach from=$list item=value}
             <tr>
             <td>{$value.admin_id}</td>
             <td>{$value.admin_name}</td>
             </tr> 
              {/foreach}
          </table>
    </body>
</html>
