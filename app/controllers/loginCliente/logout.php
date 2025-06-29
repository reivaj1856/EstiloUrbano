<?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            session_unset();
            session_destroy();
            echo "<script>window.location.href = '/app/views/loginViews/login.php';</script>";
            exit;
          }
          ?>