<h2><?php echo $title; ?></h2>

 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
   <table>
        <tr>
            <td><label for="name">Full Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $news_item['name'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" value="<?php echo $news_item['nickname'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" name="email" size="50" value="<?php echo $news_item['email'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="home_add">Home Address</label></td>
            <td><textarea name="home_add" rows="10" cols="40"><?php echo $news_item['home_add'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="radio" name="gender" value="male" <?php echo ($news_item['gender']=='male')?'checked':'' ?>> Male<br>
            <input type="radio" name="gender" value="female" <?php echo ($news_item['gender']=='female')?'checked':'' ?>> Female<br>
            <input type="radio" name="gender" value="other" <?php echo ($news_item['gender']=='other')?'checked':'' ?>> Other </td>
        </tr>
        <tr>
            <td><label for="cpnum">Cellphone Number</label></td>
            <td><input type="input" name="cpnum" size="50" value="<?php echo $news_item['cpnum'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="comments">Comments</label></td>
            <td><textarea name="comments" rows="10" cols="40" ><?php echo $news_item['comments'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit enrty" /></td>
        </tr>
    </table>    
</form>