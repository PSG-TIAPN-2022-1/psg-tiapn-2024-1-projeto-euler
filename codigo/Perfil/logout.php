<?php

session_start();

session_destroy();

header("Location: ../Menus/Menu-base/index.html");