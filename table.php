<?php
header('Content-Type: text/html; charset=utf-8');

require_once 'simple_html_dom.php';

$table = array();
$time = $artist = '';

$t = '<table class="bordered" style="width: 222px;">
    <tbody>
        <tr>
            <td class="">Ключ1</td>
            <td class="">значение</td>
        </tr>
        <tr>
            <td class="">Ключ2</td>
            <td class="">значение</td>
        </tr>
        <tr>
            <td class="">Ключ3</td>
            <td class="">значение</td>
        </tr>
        <tr>
            <td class="">Ключ4</td>
            <td class="">значение</td>
        </tr>
    </tbody>
</table>';

$html = str_get_html($t);


foreach($html->find('tr') as $row) {
    $time = $row->find('td',0)->plaintext;
    $artist = $row->find('td',1)->plaintext;
	
    $table[$time][$artist] = true;
}


echo $t;

echo '<hr>';

echo '<pre>';
print_r($table);
echo '</pre>';

?>
