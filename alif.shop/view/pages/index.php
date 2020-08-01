
<div class="main-caontainer-phone">
    <div class="nav-bar-left">
        <div class="about">ПЛАНШЕТЫ И СМАРТФОНЫ</div>
        <ul>
            <a href="">Планшеты </a>
            <a href="">Кнопочные телефоны </a> 
            <a href="">Samsung </a> 
            <a href="">Xiaomi  </a>  
            <a href="">iPhone  </a>  
            <a href="">Huawei  </a>  
            <a href="">Honor   </a> 
            <a href="">Meizu   </a> 
            <a href="">Nokia   </a> 
            <a href="">Lenovo  </a>  
    
        </ul>
    </div>
    <div class="container-product">

    <?php foreach($row as $product ) : ?>
  
        <div class='main-p'>
        <a href="<?php echo APP ?>Catalog<?php echo'/phone/?name=' . $product['cat_name'] ."&id_prod=".  $product['id_prod'] ?>">
             <div><img src="public\imges\product\<?php echo $product['photo']; ?>" width='150' height='220' alt="" srcset=""></div>
             <div class='about-p'>
                <span><a href=""><?php echo $product['name']; ?></a></span>
                <span>Цена: <b style='color: black'><?php echo $product['price']; ?> C </b> <span style='margin-left: 4px'>12мес.</span></span>
                <a name='<?php echo $product['cat_name'] ?>/<?php echo $product['id_prod'] ?>' onclick='showOrder(this.getAttribute("name"))' id='btn-bay'>Bay Now</a>
            </div>
            </a>
        </div>
   
        <?php endforeach ?>
</div>
  <div style='display: none' class="container-product">
  
  </div>
</div>

<section id="order">
    <span id='x'>X</span>
    <div class="container">
        <table>
            <thead>
            <tr>
                    <td>item</td>
                    <td>Qty</td>
                    <td>Price</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td id='order-td'><img src="" width='100' height='130' id='img-order'>
                        <div class="nameyear">
                        <span id="name-ord"> </span> 
                        <span id="year-ord"> </span>
                        </div>
                    </td>
                    <td> <button id='minus'>-</button> <input type="number" value='1' name="orderNum" id=""><button id='pilus'>+</button></td>
                    <td id='price-ord'></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <button id="addToCard">Добавить в корзине</button>
</section>

<?php 

echo time();

?>