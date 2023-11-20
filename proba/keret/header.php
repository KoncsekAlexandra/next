<?php
	// munkamenet kezelese
	include('session.php');
	// menupont megjelenites
	if($belepve)
	{
		$belepes = "<a href='./?menu=egyenleg'>Tetoválás</a> &#10036;";
		$menupont="<a href='./?menu=kilepes'>Kilépés</a>";
		$belepesisav="";
	}
	else
	{
		$belepes = "";
		$menupont="";
		$belepesisav="";
	}
	// menukezeles
	//include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/table.css">
	
	
    <title>Next</title>
	 
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name">Next</div>
        </a>
        <ul class="side-menu">
		    <li><a href="../pages/kezdolap.php"><i class='bx bxs-dashboard'></i>Kezdőlap</a></li>
			<li><a href="../pages/projektek.php"><i class='bx bx-store-alt'></i>Projektek</a></li>
			<li><a href="../pages/penzugy.php"><i class='bx bx-analyse'></i>Pénzügy</a></li>
			<li><a href="../pages/statisztika.php"><i class='bx bx-message-square-dots'></i>Statisztika</a></li>
			<li><a href="../pages/szamlazas.php"><i class='bx bx-message-square-dots'></i>Számlázás</a></li>
			<li><a href="../pages/ceg.php"><i class='bx bx-message-square-dots'></i>Cégoldal</a></li>
			<li><a href="../pages/felhasznalo.php"><i class='bx bx-group'></i>Felhasználó</a></li>

			
        </ul>
        <ul class="side-menu">
            <li>
                <a href="" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
       
<nav style="line-bottom: 1px, solid;border-bottom: 1px solid;border-bottom-color: #d1caca;">
    <i class='bx bx-menu'></i>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
        </div>
    </form>
    <input type="checkbox" id="theme-toggle" hidden>
    <label for="theme-toggle" class="theme-toggle"></label>
    <a href="#" class="notif">
        <i class='bx bx-bell'></i>
         <span class="count"> 5 </span> 
    </a>
</nav>





<main>
<!-- End of Navbar -->

			  <div class="contents">
			     <br>
              </div>
            </div>

        </main>

    </div>

    <script src="../js/index.js"></script>
	
	<script type="text/javascript" src="../js/htmlhttprequest.js"></script>
	<script type="text/javascript" src="../js/inside.js"></script>
	

</body>

</html>
