<div class="table-title">
<h3><?php echo $title; ?></h3>
</div>

<table border='1' cellpadding='4' class="table-fill">
<thread>
    <tr>
        <th>Full Name</th>
        <th>Nickname</th>
        <th>Email</th>
        <th>Home Address</th>
        <th>Gender</th>
        <th>Cellphone Number</th>
        <th>Comments</th>
        <th>Actions</th>
</thread>
<tbody class="table-hover">
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['name']; ?></td>
            <td><?php echo $news_item['nickname']; ?></td>
            <td><?php echo $news_item['email']; ?></td>
            <td><?php echo $news_item['home_add']; ?></td>
            <td><?php echo $news_item['gender']; ?></td>
            <td><?php echo $news_item['cpnum']; ?></td>
            <td><?php echo $news_item['comments']; ?></td>  
            <td>
                <a href="<?php echo site_url('news/'.$news_item['id']); ?>">View</a> |
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</tbody>
</table>