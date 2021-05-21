<?php 

include("configuration/connection.php");

$sql="SELECT * FROM signup WHERE status=0";
$query=mysqli_query($conn, $sql);
$numRows=mysqli_num_rows($query);

?>

<body>
<div class="navbar">
    <div class="logo"><a href="">live life</a></div>
    <a id="toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M16,7a2,2,0,1,1,2-2A2,2,0,0,1,16,7Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/><path d="M16,18a2,2,0,1,1,2-2A2,2,0,0,1,16,18Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/><path d="M16,29a2,2,0,1,1,2-2A2,2,0,0,1,16,29Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg></a>
    <div class="nav-links">
    <?php if($_SESSION['role'] === 'admin'): ?>
        <ul>
            <a href="home.php"><li>home</li></a>
            <li><a href="about.php">about</a></li>
            <li id="upcoming">Upcoming Events
                <ul>
                    <li><a href="#">Blanket Distribution</a></li>
                    <li><a href="#">Tree Plantation</a></li>
                    <li><a href="#">Food distribution</a></li>
                </ul>
            </li>
            <li><a href="#footer">contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li style="color:red;"><a href="request.php">Requests</a><span>(<?php echo $numRows; ?>)</span></li>
        </ul>
        <?php endif; ?>
        <?php if($_SESSION['role'] === 'user'): ?>
        <ul>
            <a href="home.php"><li>home</li></a>
            <li><a href="about.php">about</a></li>
            <li id="upcoming">Upcoming Events
                <ul>
                    <li><a href="#">Blanket Distribution</a></li>
                    <li><a href="#">Tree Plantation</a></li>
                    <li><a href="#">Food distribution</a></li>
                </ul>
            </li>
            <li><a href="#footer">contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <?php endif; ?>
    </div>
</div>


