<table border="1">
<tbody>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Pass</th>
    </tr>

    <?php 
    $html='';
    foreach($content as $key=> $tableRow)
    {
        $html.='<tr>';
        foreach($tableRow as $tableCell)
        {
            $html .='<td>' . $tableCell .'</td>';
        }
    $html .='</tr>';
    }
    echo ($html); ?>
</tbody>
</table>