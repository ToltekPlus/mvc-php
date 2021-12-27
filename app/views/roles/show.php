<table>
    <caption>Сводная таблица пользователей</caption>
    <tr>
        <th>Телефон</th>
        <th>Роль</th>
        <th>Уровень</th>
    </tr>

    <?php foreach ($users as $item): ?>
        <tr>
            <td><?=$item->phone?></td>
            <td><?=$item->role?></td>
            <td><?=$item->level?></td>
        </tr>
    <?php endforeach;?>
</table>