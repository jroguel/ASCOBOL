<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Full Name</label></td>
            <td><input type="input" name="name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" name="email" size="50" /></td>
        </tr>
        <tr>
            <td><label for="home_add">Home Address</label></td>
            <td><textarea name="home_add" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other </td>
        </tr>
        <tr>
            <td><label for="cpnum">Cellphone Number</label></td>
            <td><input type="input" name="cpnum" size="50" /></td>
        </tr>
        <tr>
            <td><label for="comments">Comments</label></td>
            <td><textarea name="comments" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>