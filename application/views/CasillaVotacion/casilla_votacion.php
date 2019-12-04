

<?php

if($_POST){
           
    $v=new stdClass();
    $v->nombreV = "Votante";
    $v->nombreC	 = $_POST['nombreC'];
    $v->partidoC =  $_POST['partidoC'];
    $v->cargoC =  $_POST['cargoC'];

    saveVotantes($v);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/generalStyle.css">
    <!--<link rel="stylesheet" href="generalStyle.css">-->
    <title>VoteGo</title>




</head>

<body>
    <header>
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <section class="container">
                    <a class="navbar-brand" href="<?= base_url(); ?>">VoteGo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <form class="form-inline my-2 my-lg-0 navBotones">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() ?>"><span><img class="icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDQ2MC4yOTggNDYwLjI5NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDYwLjI5OCA0NjAuMjk3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjMwLjE0OSwxMjAuOTM5TDY1Ljk4NiwyNTYuMjc0YzAsMC4xOTEtMC4wNDgsMC40NzItMC4xNDQsMC44NTVjLTAuMDk0LDAuMzgtMC4xNDQsMC42NTYtMC4xNDQsMC44NTJ2MTM3LjA0MSAgICBjMCw0Ljk0OCwxLjgwOSw5LjIzNiw1LjQyNiwxMi44NDdjMy42MTYsMy42MTMsNy44OTgsNS40MzEsMTIuODQ3LDUuNDMxaDEwOS42M1YzMDMuNjY0aDczLjA5N3YxMDkuNjRoMTA5LjYyOSAgICBjNC45NDgsMCw5LjIzNi0xLjgxNCwxMi44NDctNS40MzVjMy42MTctMy42MDcsNS40MzItNy44OTgsNS40MzItMTIuODQ3VjI1Ny45ODFjMC0wLjc2LTAuMTA0LTEuMzM0LTAuMjg4LTEuNzA3TDIzMC4xNDksMTIwLjkzOSAgICB6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD4KCQk8cGF0aCBkPSJNNDU3LjEyMiwyMjUuNDM4TDM5NC42LDE3My40NzZWNTYuOTg5YzAtMi42NjMtMC44NTYtNC44NTMtMi41NzQtNi41NjdjLTEuNzA0LTEuNzEyLTMuODk0LTIuNTY4LTYuNTYzLTIuNTY4aC01NC44MTYgICAgYy0yLjY2NiwwLTQuODU1LDAuODU2LTYuNTcsMi41NjhjLTEuNzExLDEuNzE0LTIuNTY2LDMuOTA1LTIuNTY2LDYuNTY3djU1LjY3M2wtNjkuNjYyLTU4LjI0NSAgICBjLTYuMDg0LTQuOTQ5LTEzLjMxOC03LjQyMy0yMS42OTQtNy40MjNjLTguMzc1LDAtMTUuNjA4LDIuNDc0LTIxLjY5OCw3LjQyM0wzLjE3MiwyMjUuNDM4Yy0xLjkwMywxLjUyLTIuOTQ2LDMuNTY2LTMuMTQsNi4xMzYgICAgYy0wLjE5MywyLjU2OCwwLjQ3Miw0LjgxMSwxLjk5Nyw2LjcxM2wxNy43MDEsMjEuMTI4YzEuNTI1LDEuNzEyLDMuNTIxLDIuNzU5LDUuOTk2LDMuMTQyYzIuMjg1LDAuMTkyLDQuNTctMC40NzYsNi44NTUtMS45OTggICAgTDIzMC4xNDksOTUuODE3bDE5Ny41NywxNjQuNzQxYzEuNTI2LDEuMzI4LDMuNTIxLDEuOTkxLDUuOTk2LDEuOTkxaDAuODU4YzIuNDcxLTAuMzc2LDQuNDYzLTEuNDMsNS45OTYtMy4xMzhsMTcuNzAzLTIxLjEyNSAgICBjMS41MjItMS45MDYsMi4xODktNC4xNDUsMS45OTEtNi43MTZDNDYwLjA2OCwyMjkuMDA3LDQ1OS4wMjEsMjI2Ljk2MSw0NTcuMTIyLDIyNS40Mzh6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+" alt=""></span>
                                        Inicio </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('mesa/sesion') ?>"><span><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDgwLjEzIDgwLjEzIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA4MC4xMyA4MC4xMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxnPgoJPHBhdGggZD0iTTQ4LjM1NSwxNy45MjJjMy43MDUsMi4zMjMsNi4zMDMsNi4yNTQsNi43NzYsMTAuODE3YzEuNTExLDAuNzA2LDMuMTg4LDEuMTEyLDQuOTY2LDEuMTEyICAgYzYuNDkxLDAsMTEuNzUyLTUuMjYxLDExLjc1Mi0xMS43NTFjMC02LjQ5MS01LjI2MS0xMS43NTItMTEuNzUyLTExLjc1MkM1My42NjgsNi4zNSw0OC40NTMsMTEuNTE3LDQ4LjM1NSwxNy45MjJ6IE00MC42NTYsNDEuOTg0ICAgYzYuNDkxLDAsMTEuNzUyLTUuMjYyLDExLjc1Mi0xMS43NTJzLTUuMjYyLTExLjc1MS0xMS43NTItMTEuNzUxYy02LjQ5LDAtMTEuNzU0LDUuMjYyLTExLjc1NCwxMS43NTJTMzQuMTY2LDQxLjk4NCw0MC42NTYsNDEuOTg0ICAgeiBNNDUuNjQxLDQyLjc4NWgtOS45NzJjLTguMjk3LDAtMTUuMDQ3LDYuNzUxLTE1LjA0NywxNS4wNDh2MTIuMTk1bDAuMDMxLDAuMTkxbDAuODQsMC4yNjMgICBjNy45MTgsMi40NzQsMTQuNzk3LDMuMjk5LDIwLjQ1OSwzLjI5OWMxMS4wNTksMCwxNy40NjktMy4xNTMsMTcuODY0LTMuMzU0bDAuNzg1LTAuMzk3aDAuMDg0VjU3LjgzMyAgIEM2MC42ODgsNDkuNTM2LDUzLjkzOCw0Mi43ODUsNDUuNjQxLDQyLjc4NXogTTY1LjA4NCwzMC42NTNoLTkuODk1Yy0wLjEwNywzLjk1OS0xLjc5Nyw3LjUyNC00LjQ3LDEwLjA4OCAgIGM3LjM3NSwyLjE5MywxMi43NzEsOS4wMzIsMTIuNzcxLDE3LjExdjMuNzU4YzkuNzctMC4zNTgsMTUuNC0zLjEyNywxNS43NzEtMy4zMTNsMC43ODUtMC4zOThoMC4wODRWNDUuNjk5ICAgQzgwLjEzLDM3LjQwMyw3My4zOCwzMC42NTMsNjUuMDg0LDMwLjY1M3ogTTIwLjAzNSwyOS44NTNjMi4yOTksMCw0LjQzOC0wLjY3MSw2LjI1LTEuODE0YzAuNTc2LTMuNzU3LDIuNTktNy4wNCw1LjQ2Ny05LjI3NiAgIGMwLjAxMi0wLjIyLDAuMDMzLTAuNDM4LDAuMDMzLTAuNjZjMC02LjQ5MS01LjI2Mi0xMS43NTItMTEuNzUtMTEuNzUyYy02LjQ5MiwwLTExLjc1Miw1LjI2MS0xMS43NTIsMTEuNzUyICAgQzguMjgzLDI0LjU5MSwxMy41NDMsMjkuODUzLDIwLjAzNSwyOS44NTN6IE0zMC41ODksNDAuNzQxYy0yLjY2LTIuNTUxLTQuMzQ0LTYuMDk3LTQuNDY3LTEwLjAzMiAgIGMtMC4zNjctMC4wMjctMC43My0wLjA1Ni0xLjEwNC0wLjA1NmgtOS45NzFDNi43NSwzMC42NTMsMCwzNy40MDMsMCw0NS42OTl2MTIuMTk3bDAuMDMxLDAuMTg4bDAuODQsMC4yNjUgICBjNi4zNTIsMS45ODMsMTIuMDIxLDIuODk3LDE2Ljk0NSwzLjE4NXYtMy42ODNDMTcuODE4LDQ5Ljc3MywyMy4yMTIsNDIuOTM2LDMwLjU4OSw0MC43NDF6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD4KPC9nPjwvZz4gPC9zdmc+" alt="" class="icono"></span>
                                        Mesa Electoral</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('votaciones') ?>"><span><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyLjIwNiA1MTIuMjA2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMjA2IDUxMi4yMDY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGc+PGc+Cgk8cGF0aCBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7IiBkPSJNMTQ5LjUwNiw0MjguOTM2bC0xMDQuMDgtMTE4LjAyICAgYy0yOS40MjgtMzMuNDMzLTI0LjQ1NS03Ni43MDgsNS44ODYtMTA3LjU0OGMxNC44NjktMTQuMjQ2LDM1Ljc5MS0yMi4wNjksNTYuMzI0LTIxLjM0M2MyMC4zMTcsMC43MTksMzYuMDMsNi40MjMsNTAuMjMxLDIxLjU0NyAgIGMxMC42NDYsMTAuNjE3LDIwLjg2MSwyMy4wODksMzAuODM2LDM0LjQwM2w5OC4xNTYtOTkuMTM5SDE1Yy04LjI4NCwwLTE1LDYuNzE2LTE1LDE1djMyMC44ODFjMCw4LjI4NCw2LjcxNiwxNSwxNSwxNWgzMjAuODggICBjOC4yODQsMCwxNS02LjcxNiwxNS0xNXYtMTc4LjM2TDIxNS44MDksNDMxLjg0MUMxOTcuMTc5LDQ1MC42MzksMTY2LjU5Myw0NDkuMTQ3LDE0OS41MDYsNDI4LjkzNnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCI+PC9wYXRoPgoJPHBhdGggc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgZD0iTTQ5NS42MzYsMzQuODY1Yy0xNy4zNzQtMTcuNTQzLTQ4LjA2MS0xNS44MzgtNjUuMDczLDEuMzQ0TDE4Ny4zODQsMjgxLjgyMyAgIGMtNC4wNDYtNC41ODYtNDcuMDQ0LTUzLjQ1MS00OC4zNzQtNTQuODFjLTE3LjY0Ny0xOS4yOC00OC4wNjMtMjAuMTg1LTY2Ljk1NS0yLjA4M2MtMTkuMjI1LDE3LjU3My0yMS44MTIsNDYuMjczLTQuMjQ1LDY2LjE4MSAgIEwxNzIuMzU4LDQwOS42YzUuOTgzLDcuMDc2LDE2LjA4MSw3LjM1NSwyMi4yNDEsMS4xNDdDMjk1LjUzOSwzMDguNzk2LDM5OS4yNTMsMjA2LjkxLDQ5OC41OSwxMDMuNzExICAgQzUxOC40NTgsODMuNjUsNTE1LjgyMiw1My41ODQsNDk1LjYzNiwzNC44NjV6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiPjwvcGF0aD4KPC9nPjwvZz4gPC9zdmc+" alt="" class="icono"></span>
                                        Casilla de Votación</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('configuracion') ?>"><span><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDkzMi4xNzkgOTMyLjE3OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgOTMyLjE3OSA5MzIuMTc5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGc+Cgk8cGF0aCBkPSJNNjEuMiwzNDEuNTM4YzQuOSwxNi44LDExLjcsMzMsMjAuMyw0OC4ybC0yNC41LDMwLjljLTgsMTAuMS03LjEsMjQuNSwxLjksMzMuNmw0Mi4yLDQyLjJjOS4xLDkuMSwyMy41LDkuODk5LDMzLjYsMS44OTkgICBsMzAuNy0yNC4zYzE1LjgsOS4xMDEsMzIuNiwxNi4yLDUwLjEsMjEuMmw0LjYsMzkuNWMxLjUsMTIuOCwxMi4zLDIyLjQsMjUuMSwyMi40aDU5LjdjMTIuOCwwLDIzLjYtOS42MDEsMjUuMS0yMi40bDQuNC0zOC4xICAgYzE4LjgtNC45LDM2LjgtMTIuMiw1My43LTIxLjdsMjkuNywyMy41YzEwLjEsOCwyNC41LDcuMSwzMy42LTEuOWw0Mi4yLTQyLjJjOS4xLTkuMSw5LjktMjMuNSwxLjktMzMuNmwtMjMuMS0yOS4zICAgYzkuNi0xNi42MDEsMTcuMS0zNC4zLDIyLjEtNTIuOGwzNS42LTQuMWMxMi44MDEtMS41LDIyLjQtMTIuMywyMi40LTI1LjF2LTU5LjdjMC0xMi44LTkuNi0yMy42LTIyLjQtMjUuMWwtMzUuMS00LjEgICBjLTQuODAxLTE4LjMtMTItMzUuOC0yMS4xOTktNTIuMmwyMS42LTI3LjNjOC0xMC4xLDcuMS0yNC41LTEuOS0zMy42bC00Mi4xLTQyLjFjLTkuMS05LjEtMjMuNS05LjktMzMuNi0xLjlsLTI2LjUsMjEgICBjLTE3LjItMTAuMS0zNS42MDEtMTcuOC01NC45LTIzbC00LTM0LjNjLTEuNS0xMi44LTEyLjMtMjIuNC0yNS4xLTIyLjRoLTU5LjdjLTEyLjgsMC0yMy42LDkuNi0yNS4xLDIyLjRsLTQsMzQuMyAgIGMtMTkuOCw1LjMtMzguNywxMy4zLTU2LjMsMjMuOGwtMjcuNS0yMS44Yy0xMC4xLTgtMjQuNS03LjEtMzMuNiwxLjlsLTQyLjIsNDIuMmMtOS4xLDkuMS05LjksMjMuNS0xLjksMzMuNmwyMywyOS4xICAgYy05LjIsMTYuNi0xNi4yLDM0LjMtMjAuOCw1Mi43bC0zNi44LDQuMmMtMTIuOCwxLjUtMjIuNCwxMi4zLTIyLjQsMjUuMXY1OS43YzAsMTIuOCw5LjYsMjMuNiwyMi40LDI1LjFMNjEuMiwzNDEuNTM4eiAgICBNMjc3LjUsMTgwLjAzOGM1NC40LDAsOTguNyw0NC4zLDk4LjcsOTguN3MtNDQuMyw5OC43LTk4LjcsOTguN2MtNTQuMzk5LDAtOTguNy00NC4zLTk4LjctOTguN1MyMjMuMSwxODAuMDM4LDI3Ny41LDE4MC4wMzh6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD4KCTxwYXRoIGQ9Ik04NjcuNjk5LDM1Ni4yMzhsLTMxLjUtMjYuNmMtOS42OTktOC4yLTI0LTcuOC0zMy4xOTksMC45bC0xNy40LDE2LjNjLTE0LjY5OS03LjEtMzAuMjk5LTEyLjEtNDYuNC0xNWwtNC44OTgtMjQgICBjLTIuNS0xMi40LTE0LTIxLTI2LjYwMi0yMGwtNDEuMSwzLjVjLTEyLjYsMS4xLTIyLjUsMTEuNC0yMi45LDI0LjFsLTAuNzk5LDI0LjRjLTE1LjgwMSw1LjctMzAuNzAxLDEzLjUtNDQuMzAxLDIzLjMgICBsLTIwLjc5OS0xMy44Yy0xMC42MDItNy0yNC43MDEtNS0zMi45LDQuN2wtMjYuNiwzMS43Yy04LjIwMSw5LjctNy44MDEsMjQsMC44OTgsMzMuMmwxOC4yMDEsMTkuMzk5ICAgYy02LjMwMSwxNC4yLTEwLjgwMSwyOS4xMDEtMTMuNCw0NC40bC0yNiw1LjNjLTEyLjQsMi41LTIxLDE0LTIwLDI2LjYwMWwzLjUsNDEuMWMxLjEsMTIuNiwxMS40LDIyLjUsMjQuMSwyMi45bDI4LjEsMC44OTkgICBjNS4xMDIsMTMuNCwxMS44MDEsMjYuMTAxLDE5LjksMzhsLTE1LjY5OSwyMy43Yy03LDEwLjYtNSwyNC43LDQuNjk5LDMyLjlsMzEuNSwyNi42YzkuNzAxLDguMiwyNCw3LjgsMzMuMjAxLTAuOWwyMC42LTE5LjMgICBjMTMuNSw2LjMsMjcuNjk5LDExLDQyLjI5OSwxMy44bDUuNzAxLDI4LjJjMi41LDEyLjQsMTQsMjEsMjYuNiwyMGw0MS4xLTMuNWMxMi42LTEuMSwyMi41LTExLjM5OSwyMi45LTI0LjFsMC45LTI3LjYwMSAgIGMxNS01LjMsMjkuMTk5LTEyLjUsNDIuMjk5LTIxLjM5OWwyMi43MDEsMTVjMTAuNiw3LDI0LjY5OSw1LDMyLjktNC43bDI2LjYtMzEuNWM4LjE5OS05LjcsNy43OTktMjQtMC45LTMzLjJsLTE4LjMwMS0xOS4zOTkgICBjNi43MDEtMTQuMiwxMS42MDItMjkuMiwxNC40LTQ0LjYwMWwyNS01LjFjMTIuNC0yLjUsMjEtMTQsMjAtMjYuNjAxbC0zLjUtNDEuMWMtMS4xLTEyLjYtMTEuNC0yMi41LTI0LjEtMjIuOWwtMjUuMS0wLjggICBjLTUuMjAxLTE0LjYtMTIuMjAxLTI4LjM5OS0yMC45LTQxLjJsMTMuNjk5LTIwLjZDODc5LjQsMzc4LjYzOCw4NzcuNCwzNjQuNDM4LDg2Ny42OTksMzU2LjIzOHogTTcxMi44MDEsNTkzLjgzNyAgIGMtNDQuNCwzLjgwMS04My42MDItMjkuMy04Ny4zMDEtNzMuNjk5Yy0zLjgwMS00NC40LDI5LjMwMS04My42MDEsNzMuNjk5LTg3LjMwMWM0NC40LTMuOCw4My42MDIsMjkuMzAxLDg3LjMwMSw3My43ICAgQzc5MC4zMDEsNTUwLjkzOCw3NTcuMTk5LDU5MC4xMzgsNzEyLjgwMSw1OTMuODM3eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDAwMDAwIj48L3BhdGg+Cgk8cGF0aCBkPSJNMjA1LDcwNC40MzhjLTEyLjYsMS4zLTIyLjMsMTEuODk5LTIyLjQsMjQuNmwtMC4zLDI1LjNjLTAuMiwxMi43LDkuMiwyMy41LDIxLjgsMjUuMTAxbDE4LjYsMi4zOTkgICBjMy4xLDExLjMwMSw3LjUsMjIuMTAxLDEzLjIsMzIuMzAxbC0xMiwxNC44Yy04LDkuODk5LTcuNCwyNC4xLDEuNSwzMy4ybDE3LjcsMTguMWM4LjksOS4xLDIzLjEsMTAuMSwzMy4yLDIuM2wxNC44OTktMTEuNSAgIGMxMC41LDYuMiwyMS42MDEsMTEuMTAxLDMzLjIsMTQuNWwyLDE5LjJjMS4zLDEyLjYsMTEuOSwyMi4zLDI0LjYsMjIuNGwyNS4zMDEsMC4zYzEyLjY5OSwwLjIsMjMuNS05LjIsMjUuMS0yMS44bDIuMy0xOC4yICAgYzEyLjYwMS0zLjEwMSwyNC42MDEtNy44LDM2LTE0bDE0LDExLjNjOS45LDgsMjQuMTAxLDcuNCwzMy4yMDEtMS41bDE4LjEtMTcuN2M5LjEtOC44OTksMTAuMS0yMy4xLDIuMzAxLTMzLjJMNDk2LjYsODE4LjQzOCAgIGM2LjYtMTEsMTEuNzAxLTIyLjcsMTUuMjAxLTM1bDE2LjYtMS43YzEyLjYtMS4zLDIyLjI5OS0xMS45LDIyLjQtMjQuNmwwLjI5OS0yNS4zMDFjMC4yMDEtMTIuNjk5LTkuMTk5LTIzLjUtMjEuNzk5LTI1LjEgICBsLTE2LjIwMS0yLjFjLTMuMS0xMi4yLTcuNjk5LTI0LTEzLjY5OS0zNWwxMC4xLTEyLjRjOC05LjksNy40LTI0LjEtMS41LTMzLjJsLTE3LjY5OS0xOC4xYy04LjktOS4xMDEtMjMuMTAyLTEwLjEwMS0zMy4yMDEtMi4zICAgbC0xMi4xMDEsOS4zYy0xMS4zOTktNi45LTIzLjYtMTIuMi0zNi4zOTktMTUuOGwtMS42MDEtMTUuN2MtMS4zLTEyLjYwMS0xMS44OTktMjIuMy0yNC42LTIyLjRsLTI1LjMtMC4zICAgYy0xMi43LTAuMi0yMy41LDkuMi0yNS4xMDEsMjEuOGwtMiwxNS42MDFjLTEzLjE5OSwzLjM5OS0yNS44OTksOC42LTM3LjY5OSwxNS4zOTlsLTEyLjUtMTAuMmMtOS45LTgtMjQuMTAxLTcuMzk5LTMzLjIwMSwxLjUgICBsLTE4LjIsMTcuODAxYy05LjEsOC44OTktMTAuMSwyMy4xLTIuMywzMy4xOTlsMTAuNywxMy44MDFjLTYuMiwxMS0xMS4xLDIyLjY5OS0xNC4zLDM1TDIwNSw3MDQuNDM4eiBNMzY4LjMsNjc1LjgzNyAgIGMzNi4zLDAuNCw2NS4zOTksMzAuMzAxLDY1LDY2LjYwMWMtMC40LDM2LjMtMzAuMzAxLDY1LjM5OS02Ni42MDEsNjVjLTM2LjMtMC40LTY1LjM5OS0zMC4zLTY1LTY2LjYwMSAgIEMzMDIuMSw3MDQuNTM4LDMzMiw2NzUuNDM4LDM2OC4zLDY3NS44Mzd6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD4KPC9nPjwvZz4gPC9zdmc+" alt="" class="icono"></span>
                                        Configuración</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </section>
            </nav>
        </div>
    </header>

    <div class="container prueba">
        <p><?= isset($votante)? $votante->cedulaV:"Fallo al mostrar cedula"?></p><!--Aqui deberia imprimirse la cedula por lo menos----------->
    </div>
    <!-----------------------Titulo del nivel----------------------------------------------->
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-6 inline-block">
                <ul class="list-inline">
                    <li class="list-inline-item lead">Nivel:</li>
                    <li class="list-inline-item text-muted">Presidente</li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-inline text-right">
                    <li class="list-inline-item lead">Candidatos:</li>
                    <li class="list-inline-item text-muted">#</li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <!-----------------------Fin de Titulo del nivel----------------------------------------------->


    <!-----------------------Candidatos del nivel----------------------------------------------->
    <div class="container">

   <!-- <form method="post" action="">-->
        <div class="row align-center">
            <!----Casilla del candidato----------------------------------->
            <!----Esto debe ir en una funcion para que se genere dependiendo de la cantidad de candidatos------>
            
          <!--  foreach ($query->result() as $key) {
            echo $key->nombre.'<br>';
            echo $key->nombres.'<br>';------>
            

            <?php
            foreach ($query->result() as $key) {

                echo "
                

                    <div class='col-md-4 border border-secondary candidato'>
                    <form method='post' action=''>
                    <img class='card-img-top imgCandidato' src='{$key->foto}' 
                    alt='imagen candidato' style='margin-left:50px'>
                    <hr>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>{$key->nombres}</h5>
                        <div>
                            <dt class='col-sm-2'>Partido:</dt>
                            <dd class='col-sm-10'>{$key->nombre}</dd>
                            <dt class='col-sm-2'>Cargo:</dt>
                            <dd class='col-sm-10'>{$key->titulo}</dd>
                        </div>
                        <input type='submit' value='Votar' class='btn btn-primary'>
                        <input type='hidden' name='nombreC' id='nombreC' value='$key->nombres'>
                        <input type='hidden' name='cargoC' id='cargoC' value='$key->titulo'>
                        <input type='hidden' name='partidoC' id='partidoC' value='$key->nombre'>
                    </div>
                    </form>
                </div>
                    
                "; //termino

            }

            ?>
            
            <!--
                <div class="col-md-4 border border-secondary candidato">
                    <img class="card-img-top imgCandidato" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00MiAwIDUxMiA1MTIuMDAyIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGc+PHBhdGggZD0ibTIxMC4zNTE1NjIgMjQ2LjYzMjgxMmMzMy44ODI4MTMgMCA2My4yMjI2NTctMTIuMTUyMzQzIDg3LjE5NTMxMy0zNi4xMjg5MDYgMjMuOTcyNjU2LTIzLjk3MjY1NiAzNi4xMjUtNTMuMzA0Njg3IDM2LjEyNS04Ny4xOTE0MDYgMC0zMy44NzUtMTIuMTUyMzQ0LTYzLjIxMDkzOC0zNi4xMjg5MDYtODcuMTkxNDA2LTIzLjk3NjU2My0yMy45Njg3NS01My4zMTI1LTM2LjEyMTA5NC04Ny4xOTE0MDctMzYuMTIxMDk0LTMzLjg4NjcxOCAwLTYzLjIxODc1IDEyLjE1MjM0NC04Ny4xOTE0MDYgMzYuMTI1cy0zNi4xMjg5MDYgNTMuMzA4NTk0LTM2LjEyODkwNiA4Ny4xODc1YzAgMzMuODg2NzE5IDEyLjE1NjI1IDYzLjIyMjY1NiAzNi4xMzI4MTIgODcuMTk1MzEyIDIzLjk3NjU2MyAyMy45Njg3NSA1My4zMTI1IDM2LjEyNSA4Ny4xODc1IDM2LjEyNXptMCAwIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtNDI2LjEyODkwNiAzOTMuNzAzMTI1Yy0uNjkxNDA2LTkuOTc2NTYzLTIuMDg5ODQ0LTIwLjg1OTM3NS00LjE0ODQzNy0zMi4zNTE1NjMtMi4wNzgxMjUtMTEuNTc4MTI0LTQuNzUzOTA3LTIyLjUyMzQzNy03Ljk1NzAzMS0zMi41MjczNDMtMy4zMDg1OTQtMTAuMzM5ODQ0LTcuODA4NTk0LTIwLjU1MDc4MS0xMy4zNzEwOTQtMzAuMzM1OTM4LTUuNzczNDM4LTEwLjE1NjI1LTEyLjU1NDY4OC0xOS0yMC4xNjQwNjMtMjYuMjc3MzQzLTcuOTU3MDMxLTcuNjEzMjgyLTE3LjY5OTIxOS0xMy43MzQzNzYtMjguOTY0ODQzLTE4LjE5OTIxOS0xMS4yMjY1NjMtNC40NDE0MDctMjMuNjY3OTY5LTYuNjkxNDA3LTM2Ljk3NjU2My02LjY5MTQwNy01LjIyNjU2MyAwLTEwLjI4MTI1IDIuMTQ0NTMyLTIwLjA0Mjk2OSA4LjUtNi4wMDc4MTIgMy45MTc5NjktMTMuMDM1MTU2IDguNDQ5MjE5LTIwLjg3ODkwNiAxMy40NjA5MzgtNi43MDcwMzEgNC4yNzM0MzgtMTUuNzkyOTY5IDguMjc3MzQ0LTI3LjAxNTYyNSAxMS45MDIzNDQtMTAuOTQ5MjE5IDMuNTQyOTY4LTIyLjA2NjQwNiA1LjMzOTg0NC0zMy4wMzkwNjMgNS4zMzk4NDQtMTAuOTcyNjU2IDAtMjIuMDg1OTM3LTEuNzk2ODc2LTMzLjA0Njg3NC01LjMzOTg0NC0xMS4yMTA5MzgtMy42MjEwOTQtMjAuMjk2ODc2LTcuNjI1LTI2Ljk5NjA5NC0xMS44OTg0MzgtNy43Njk1MzItNC45NjQ4NDQtMTQuODAwNzgyLTkuNDk2MDk0LTIwLjg5ODQzOC0xMy40Njg3NS05Ljc1LTYuMzU1NDY4LTE0LjgwODU5NC04LjUtMjAuMDM1MTU2LTguNS0xMy4zMTI1IDAtMjUuNzUgMi4yNTM5MDYtMzYuOTcyNjU2IDYuNjk5MjE5LTExLjI1NzgxMyA0LjQ1NzAzMS0yMS4wMDM5MDYgMTAuNTc4MTI1LTI4Ljk2ODc1IDE4LjE5OTIxOS03LjYwNTQ2OSA3LjI4MTI1LTE0LjM5MDYyNSAxNi4xMjEwOTQtMjAuMTU2MjUgMjYuMjczNDM3LTUuNTU4NTk0IDkuNzg1MTU3LTEwLjA1ODU5NCAxOS45OTIxODgtMTMuMzcxMDk0IDMwLjMzOTg0NC0zLjE5OTIxOSAxMC4wMDM5MDYtNS44NzUgMjAuOTQ1MzEzLTcuOTUzMTI1IDMyLjUyMzQzNy0yLjA1ODU5NCAxMS40NzY1NjMtMy40NTcwMzEgMjIuMzYzMjgyLTQuMTQ4NDM3IDMyLjM2MzI4Mi0uNjc5Njg4IDkuNzk2ODc1LTEuMDIzNDM4IDE5Ljk2NDg0NC0xLjAyMzQzOCAzMC4yMzQzNzUgMCAyNi43MjY1NjIgOC40OTYwOTQgNDguMzYzMjgxIDI1LjI1IDY0LjMyMDMxMiAxNi41NDY4NzUgMTUuNzQ2MDk0IDM4LjQ0MTQwNiAyMy43MzQzNzUgNjUuMDY2NDA2IDIzLjczNDM3NWgyNDYuNTMxMjVjMjYuNjI1IDAgNDguNTExNzE5LTcuOTg0Mzc1IDY1LjA2MjUtMjMuNzM0Mzc1IDE2Ljc1NzgxMy0xNS45NDUzMTIgMjUuMjUzOTA2LTM3LjU4NTkzNyAyNS4yNTM5MDYtNjQuMzI0MjE5LS4wMDM5MDYtMTAuMzE2NDA2LS4zNTE1NjItMjAuNDkyMTg3LTEuMDM1MTU2LTMwLjI0MjE4N3ptMCAwIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD48L2c+IDwvc3ZnPg==" 
                    alt="imagen candidato">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title text-center">Nombre del candidato</h5>
                        <div>
                            <dt class="col-sm-2">Partido:</dt>
                            <dd class="col-sm-10">Nombre del partido</dd>
                            <dt class="col-sm-2">Cargo:</dt>
                            <dd class="col-sm-10">Nombre del cargo</dd>
                        </div>
                        <fieldset id="field">
                        <input type="button" value="Votar" onclick="crear();" class="btn btn-primary">
                    </div>
                </div>
    -->
            <!----Fin de Casilla del candidato----------------------------------->

        </div>

        <hr>

        <div class="row justify-content-between">
            <div class="col-4">
                <a href="<?= base_url('Votaciones/reportespdf') ?>"><button type="button" class="btn btn-secondary">Imprimir Resultados</button></a>
            </div>
            <div class="col-4 text-right">
                <a href="<?= base_url('Votaciones/Voletines') ?>"><button type="submit" class="btn btn-success">Finalizar</button></a>
            </div>
        </div>
        
            <!--</form>-->
    </div>
    <!-----------------------Fin de candidatos del nivel----------------------------------------------->


    <!--style="margin-left:150%; width:200px"
    Eso de arriba hay que colocarlo en una funcion para que se genere dependiendo de la cantidad de niveles-->

    <!-- anadir
<script >

incremento=0;
function crear(){
    incremento++;
    field = document.getElementById('field');
 contenedor = document.createElement('div');
  contenedor.id = 'div'+incremento;
  field.appendChild(contenedor);

  boton = document.createElement('input');
  boton.type = 'text';
  boton.name = 'text'+'[ ]';
  boton.value='dasdasdasdas';
  contenedor.appendChild(boton);
}

</script>
-->
<br><br><br><br><br><br><footer>
    <div class="text-center piePagina fixed-bottom">
        <p class="pie lead">VoteGo © 2019</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>