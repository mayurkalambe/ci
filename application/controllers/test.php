
<table style="table-layout: fixed">
    <tr>
        <th style="width: 200px;">Dates</th>
        <?php foreach($date_array as $date) : ?>
            <th style="width:90px; overflow-x: auto ;"><?php echo date('m-d',strtotime(str_replace('-', '/', $date)));?></th>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Queries Sent</td>
        <?php foreach($date_array as $date) : ?>
            <td><a href="/adm/dashboard/query_detail?date=<?php echo $date;?>"><?php echo isset($query_report[$date]['queries_posted']) ? $query_report[$date]['queries_posted']:0?></a></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td style="padding-left: 15px;">Queries Recipients</td>
        <?php foreach($date_array as $date) : ?>
            <td><?php echo isset($query_report[$date]['num_recipients']) ? $query_report[$date]['num_recipients']:0?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td style="padding-left: 15px;">Posts</td>
        <?php foreach($date_array as $date) : ?>
            <td><?php echo isset($query_report[$date]['queries_responded']) ? $query_report[$date]['queries_responded']:0?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Deals Added</td>
        <?php foreach($date_array as $date) : ?>
            <td><a href="/adm/dashboard/deals?date=<?php echo $date;?>"><?php echo isset($deal_report[$date]) ? $deal_report[$date]:0?></a></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Searches</td>
        <?php foreach($date_array as $date) : ?>
            <td><a href="/adm/dashboard/searches?date=<?php echo $date;?>"><?php echo isset($search_report[$date]) ? $search_report[$date]:0?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Bids/Offers</td>
        <?php foreach($date_array as $date) : ?>
            <td>-</td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td style="padding-left: 15px;">New B/O initiated</td>
        <?php foreach($date_array as $date) : ?>
            <td>-</td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td style="padding-left: 15px;">Matched</td>
        <?php foreach($date_array as $date) : ?>
            <td>-</td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Marks</td>
        <?php foreach($date_array as $date) : ?>
            <td><?php echo isset($mark_report[$date]) ? $mark_report[$date]:0?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Logins</td>
        <?php foreach($date_array as $date) : ?>
            <td><a href="/adm/dashboard/logins?date=<?php echo $date;?>"><?php echo isset($login_report[$date]) ? $login_report[$date]:0?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td>Registrations</td>
        <?php foreach($date_array as $date) : ?>
            <td><a href="/adm/dashboard/regs?date=<?php echo $date;?>"><?php echo isset($reg_report[$date]) ? $reg_report[$date]:0?></td>
        <?php endforeach; ?>
    </tr>


    <tr>
        <td>Invites Sent</td>
        <?php foreach($date_array as $date) : ?>
            <td><a href="/adm/dashboard/invites?date=<?php echo $date;?>"><?php echo isset($invite_report[$date]) ? $invite_report[$date]:0?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <td style="padding-left: 15px;">Invites Accepted</td>
        <?php foreach($date_array as $date) : ?>
            <td><?php echo isset($invite_accept_report[$date]) ? $invite_accept_report[$date]:0?></td>
        <?php endforeach; ?>
    </tr>
</table>