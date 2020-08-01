<div class="container-order">
<?php  ?>
<div class="container-orders"></div>

<div class="table-user">
    <div class='search'><input type="search" name="search" id="search"> <button onclick='searchUser()'  type='submit'>Search</button></div>
 
    <table >
        <thead>
        <tr>    
            <td>Avatar</td>
            <td>Name</td>
            <td>Lname</td>
            <td colspan='3' >Email</td>
            
        </tr>
    </thead>
    <tbody id='searched'>
    </tbody>
    <tbody id='show' >
         <?php  
         foreach($row as $rows){ ?>
            <tr id='getusers'>  </tr>
            <tr id='show'>  
            <td ><img src="<?php echo APP; ?>public/imges/uplodePhotoUser/<?php echo $rows['avatar']; ?>" width='70' height='59' alt="" srcset=""></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['lname']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><a href="admin/deleteUser/<?php echo $rows['id_user']; ?>">DELETE</a></td>
            </tr>
         <?php } ?>
         </tbody>
        
    </table>
    
</div>
</div>