<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Full Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Home Address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Cellphone Number</strong></td>
        <td><strong>Comments</strong></td>
        <td><strong>Actions</strong></td>
    </tr>
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
                <!--<a href="<?php echo site_url('news/'.$news_item['id']); ?>">View</a> |-->
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>