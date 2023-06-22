<?php
    session_start();
    $page_title = 'Messageboard';
    require './header.php';
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    } 
    else {
        $lang = "de";
    }
?>
<link rel="stylesheet" href="style/form.css?<?php echo time(); ?>">
<script src="script/mb_script.js?<?php echo time(); ?>"></script>
</head>
<body>
<main>
    <div id="navspacer"><!--spacer--></div>
    <section id="mb_main" class="wrapper">
        <h2>Message Board</h2>
        <?php include './forms/postform.php';?>
        <div id="messageboard"> 
            <?php include './script/board_script.php';?>
        </div>
    </section>
</main>
<?php
    include './footer.php';
?>