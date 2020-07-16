<?php
include_once 'global.php';

?>
<nav class="navbar navbar-expand-sm bg-custom navbar-dark">
            <a class='navbar-brand' href='index.php'>
                <img src='bird.jpg' alt='My Marketplace'>
            </a> 
            <ul class="navbar-nav mr-auto">
                <?php
                    if($_SESSION["role"]=="admin"){
                        echo "<li class='nav-item'>
                                    <a class='nav-link' href='food.php'>Food</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='drink.php'>Drink</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='contact.php'>Contact Us</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='faq.php'>FAQ</a>
                                </li>
                                <li class='nav-item'>
                                   <a class='nav-link' href='product_edit.php'>Product Edit</a>
                              </li>";
                        
                    }else{
                        echo "<li class='nav-item'>
                                    <a class='nav-link' href='food.php'>Food</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='drink.php'>Drink</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='contact.php'>Contact Us</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='faq.php'>FAQ</a>
                                </li>";
                    }
                    
                    
                    ?>
            </ul>            
            <ul class="navbar-nav">
                <?php
                    
                    if($_SESSION["role"]=="admin"){
                        echo "<li class='nav-item'>
                            <a class='nav-link' href='basket.php'>basket</a>
                        </li>";
                        echo "<li class='nav-item'>
                            <a class='nav-link' href='#'>".$_SESSION["username"]."</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Sign Out</a>
                        </li>";
                    }else{
                        echo "<li class='nav-item'>
                            <a class='nav-link' href='basket.php'>basket</a>
                        </li>";
                        echo "<li class='nav-item'>
                            <a class='nav-link' href='#'>".$_SESSION["username"]."</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Sign Out</a>
                        </li>";
                    }
                ?>
            </ul>
    </nav>