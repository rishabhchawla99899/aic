<?php
try {
    $request = $_SERVER['REDIRECT_URL'];
    if ($request != null) {
        switch ($request) {
            case '/' :
                require __DIR__ . '/views/home.php';
                break;
            case '' :
                require __DIR__ . '/views/home.php';
                break;
            case '/about/aic' :
                require __DIR__ . '/views/about-aic.php';
                break;
            case '/about/muj' :
                require __DIR__ . '/views/about-muj.php';
                break;
            case '/about/board-team-mentors/':
                require __DIR__ . '/views/about-board-team-mentors.php';
                break;
            case '/events/':
                require __DIR__ . '/views/events.php';
                break;
            case '/inside-aic/':
                require __DIR__ . '/views/inside-aic.php';
                break;
            case '/collaborators/':
                require __DIR__ . '/views/collaborators.php';
                break;
            case '/success/':
                require __DIR__ . '/views/success.php';
                break;
            case '/contact/':
                require __DIR__ . '/views/contact.php';
                break;
            case '/about/aic/' :
                require __DIR__ . '/views/about-aic.php';
                break;
            case '/about/muj/' :
                require __DIR__ . '/views/about-muj.php';
                break;
            case '/about/board-team-mentors':
                require __DIR__ . '/views/about-board-team-mentors.php';
                break;
            case '/events':
                require __DIR__ . '/views/events.php';
                break;
            case '/inside-aic':
                require __DIR__ . '/views/inside-aic.php';
                break;
            case '/collaborators':
                require __DIR__ . '/views/collaborators.php';
                break;
            case '/success':
                require __DIR__ . '/views/success.php';
                break;
            case '/contact':
                require __DIR__ . '/views/contact.php';
                break;
            default: 
                require __DIR__ . '/views/404.php';
                break;
        }
    }
} catch (Exception $e) {}
?>