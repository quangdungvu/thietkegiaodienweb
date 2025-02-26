<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Food Websites</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/menu-momo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">

</head>
<body>
    <div class="header">
        <div class="logo">
            <a href=""><img src="img/logo.png" alt=""></a>
        </div>           
            
         <ul class="menu">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#categories">Categories</a>
                </li>
                <li>
                    <a href="#foods">Foods</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
        </ul>
       
        
    </div>
    <div id="home" class="search">
        <div class="search2">
             <input type="text" value="" placeholder="Seach for Food... ">
             <button>Search</button>
        </div>      
    </div>
    <div id ="categories"class="explore">
        <h1>Explore Foods</h1>
        <ul class="explore__food">
            <li>
                <img src="img/pizza.jpg" alt="">
                <p>Pizza</p>
            </li>
            <li>
                <img src="img/burger.jpg" alt="">
                <p>Burger</p>
            </li>
            <li>
                <img src="img/momo.jpg" alt="">
                <p>Momo</p>
            </li>
        </ul>
    </div>
    <div id="foods" class="food">
        <h1>Food Menu</h1>
        <ul class="food__menu">
            <li>
                <img src="img/menu-pizza.jpg" alt="">
                <div>
                    <h3>Food Tile</h3>
                    <h4>$2.3</h4>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                </div>
            </li>
            <li>
                <img src="img/menu-burger.jpg" alt="">
                <div>
                    <h3>Smoky Burger</h3>
                    <h4>$2.3</h4>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                </div>
            </li>
            <li>
                <img src="img/menu-burger.jpg" alt="">
                <div>
                    <h3>Nice Burger</h3>
                    <h4>$2.3</h4>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                </div>
            </li>
            <li>
                <img src="img/menu-pizza.jpg" alt="">
                <div>
                    <h3>Food Tile</h3>
                    <h4>$2.3</h4>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                </div>
            </li>
            <li>
                <img src="img/menu-pizza.jpg" alt="">
                <div>
                    <h3>Food Tile</h3>
                    <h4>$2.3</h4>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                </div>
            </li>
            <li>
                <img src="img/menu-momo.jpg" alt="">
                <div>
                    <h3>Chicken Steam Momo</h3>
                    <h4>$2.3</h4>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                </div>
            </li>
        </ul>
        <h3 class="see__all">See All Foods</h3>
    </div>
    <div class="order">
        <h1>Fill this form to confirm your order.</h1>
        <form action="" class="selected">
            <fieldset>
            <legend>Selected Food</legend>
            <img src="img/menu-pizza.jpg" alt="">
            <div>
                <h1>Food Title</h1>
                <h2>$2.3</h2>
                <label>Quantity</label>
                <input type= "number" value="1" min="1">
            </div>
            </fieldset>
        </form>
        <form action="" class="delivery">
            <fieldset>
                <legend>Delivery Details</legend>
                <div>
                    <label for="">Full Name</label>
                    <input type="text" placeholder="E.g. 16_Vu Quang Dung">
                    <label for="">Phone Number</label>
                    <input type="text" placeholder="E.g. +112333...">
                    <label for="">Email</label>
                    <input type="text" placeholder="E.g. quangdungvu629@gmail.com">
                    <label for="">Address</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="E.g. Tây Sơn, Đống Đa, Hà Nội"></textarea>
                    <input type="submit" value="Confirm Oder">
                </div>
               
            </fieldset>
        </form>
    </div>
    <div id="contact" class="footer">
    <ul>
            
           <li><i class="fab fa-facebook"></i></li>
           <li><i class="fab fa-instagram"></i></li>
           <li><i class="fab fa-twitter"></i></li>
        </ul>
        <p>All rights reserved. Designed By <a href="" >CSE.TLU</a></p>
    </div>
    
</body>
</html>