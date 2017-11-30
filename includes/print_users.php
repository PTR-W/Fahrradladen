<form action="" method="post">

<div>
<label for="sortbysubject">Nach Namen sortieren</label>
<input type="radio" name="sortby" value="byname" id="sortbysubject"><br>
</div>
<div>
<label for="sortbydate">Nach Datum sortieren</label>
<input type="radio" name="sortby" value="bydate" id="sortbydate"><br>
</div>

    <input type="submit" name="sendSort" value="best&auml;tigen">
</form>

<table border="1">
<tbody>
    <tr>
        <th>Pr&uuml;fung</th>
        <th>Datum</th>
        <th>Note</th>
        <th>Versuche</th>
    </tr>

    

    <?php 
    $sum=0;
    $rows=0;
    $avg=0;
    $html='';
    foreach($content as $key=> $tableRow)
    {
        $rows++;
        $sum += $tableRow['grade'];
        $html.='<tr>';
        foreach($tableRow as $tableCell)
        {
            $html .='<td>' . $tableCell .'</td>';
        }
    $html .='</tr>';
    }
    if($rows!=0)
    {
        $avg=$sum/$rows;
    }
    $html.= '<tr><td>' . 'Durchschnitt' .'</td>' . '<td></td>' . '<td>' . round($avg, 2) .'</td>' . '<td></td>';
    echo ($html);

    ?>
</tbody>
</table>