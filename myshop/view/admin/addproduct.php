

<div class="container-add">
<h2><?php echo isset($_GET['added']) ? "YOU ADDED PRODUCT USSEFFULS" : ''; ?></h2>
    <form action="admin/addded" method="POST" enctype='multipart/form-data'>
<label for="">Categories</label>
        <select name="category" id="">
            <option value="">Choose</option>
            <option value="Планшеты">Планшеты</option>
            <option value="Кнопочные телефоны">Кнопочные телефоны</option>
            <option value="Samsung">Samsung</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="iPhone">iPhone</option>
            <option value="Huawei">Huawei</option>
            <option value="Honor">Honor</option>
            <option value="Nokia">Nokia</option>
            <option value="Lenovo">Lenovo</option>
        </select>

        
       


        <label for="">Name</label>
        <input type="text" name="name" id="" required>
        
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="5" required></textarea>

        <label for="">Price</label>
        <input type="number" name="price" required id="">   

         <label for="">Year</label>
        <input type="number" name="year"  id="">

        <label for="">Photo</label>
        <input type="file" name="photo"  id="">

        <button type="submit">ADD</button>    
    </form>
</div>