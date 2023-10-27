<?php include_once 'layout/header.php'; ?>
<div class="d-flex flex-row" style="flex-grow:1;">
    <div class="d-flex flex-column sidebar">
        <div id="titlepart" class="row justify-content-center flex-shrink-0">
            <h1 class="dptitle ptitle"><?php echo $pName; ?></h1>
        </div>
        <nav class="row align-items-center flex-grow-1">
            <ul class="na container-md flex-grow-1">
                <li><i class="bi bi-house-door"></i><a href="index.php">Accueil</a></li>
                <li><i class="bi bi-calendar2-range"></i><a href="index.php#hRes">Reservation</a></li>
                <li><i class="bi bi-people"></i><a href="index.php#aprop">A propos</a></li>
                <?php
                session_start();
                if (isset($_SESSION['role'])) {
                ?>
                    <li class="dropdown">
                        <i class="bi bi-person"></i>
                        <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"><? echo $_SESSION['namePren']; ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="paramco.php">Paramétres du compte</a>
                            <?php
                            if ($_SESSION['role'] === "A") {
                            ?>
                                <a class="dropdown-item" href="admindash.php">Admin Dashboard</a>
                            <?php

                            }
                            ?>
                            <a class="dropdown-item" href="mesres.php">Mes reservations</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                <?php
                } else {
                ?>
                    <li><i class="bi bi-door-open"></i><a href="login.php">Login</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
