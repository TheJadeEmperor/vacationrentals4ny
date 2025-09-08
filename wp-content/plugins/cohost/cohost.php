<?php
/*
Plugin Name: Sales Training pages
Description: add pages to the admin panel for sales training and reviewing sales calls
Version: 0.1
*/

// Power Dialer & address analyst
function lead_admin_menu() {
    add_menu_page(
        'Power Dialer', //page name
        'Power Dialer', //menu name
        'edit_posts', // capability required for this menu to be displayed to user
        'power-dialer', // url slug
        'power_dialer_pg', //callback function 
        '',
        3 //menu order
    );
}

add_action('admin_menu', 'lead_admin_menu');
 
// Sales training & sales call 
function sales_admin_menu() {
    add_menu_page(
        'Sales Training',
        'Sales Training',
        'edit_posts',
        'sales-training',
        'sales_training_pg',
        '',
        4
    );

    add_submenu_page(
        'sales-training',
        'Sales Calls',
        'Sales Calls',
        'edit_posts',
        'sales-call',
        'sales_call_pg'
    );
 
}
add_action('admin_menu', 'sales_admin_menu');

 
 

function sales_training_pg() {

?>

<div class="wrap">
    <h1>Training vids & guides</h1>

    <p><a href="https://drive.google.com/drive/folders/1bqj6vWUCHvW9Wk5KSSCcWHB0NK7BFCQH?usp=drive_link
    ">https://drive.google.com/drive/folders/1bqj6vWUCHvW9Wk5KSSCcWHB0NK7BFCQH?usp=drive_link
    </a></p>

</div>

<?php 
 
}

function sales_call_pg () {

    $salesCall = array(
        '4/2/1 | Brigantine, NJ | Shelly Lappi' => array(
            'transcript' => 'https://drive.google.com/drive/folders/1kDHd36MFZ314DARgX3puIWrAXfkRYAFY?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/E_xwGB_gw8U?si=l2aexyYcCo32gIQ1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
        '14/6/4.5 | R Beach, DE | Mike McCormick' => array(
            'transcript' => 'https://drive.google.com/drive/folders/14LBXpXG-FqfxNjAu3z5t7GWrSFUZO9Ox?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/mjRm3vOO0gU?si=UyOBeZfT3N03ZOMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
        '8/4/2.5 | Tobyhanna, PA | Rosemary' => array(
            'transcript' => 'https://drive.google.com/drive/folders/1EKcNfrhrzY5zAxtwHJ6L_Y7Sbr6G2zJ9?usp=drive_link',
            'embedCode' => 'https://drive.google.com/file/d/1yUC8D8SGDLnQCQVWGWjZi4MN8FNdrxn3/view?usp=drive_link'
        ),
        '10/3/2 | Greentown, PA | Jennifer' => array(
            'transcript' => 'https://drive.google.com/drive/folders/1cJdntP-7jUPX9Q_BGzx06qmuGJJgq1u8?usp=drive_link',
            'embedCode' => 'https://drive.google.com/file/d/1nVlXf4TGd6MjHf7TJmOk4kQ8If29knI-/view?usp=drive_link'
        ),
        '10/4/3.5 | Tannersville, PA | Cesarina ' => array(
            'transcript' => 'https://drive.google.com/drive/folders/1Y1lnnEe584ETxyqw1swXmC8zFhmiqV6_?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/cQTdDgKlZs4?si=do3F8KimYdAObNkW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
        '11/3/2.5 | Monroe, PA | Jolanta' => array(
            'transcript' => 'https://drive.google.com/drive/folders/1CcCfi8ZC1MhIcoHL6s_lZEOYicufSsge?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/YEnUAD3cdek?si=PLoFTAfX9BQtne2v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
        '5/3/1 | Lansdowne, PA | Ellen Cooper' => array(
            'transcript' => 'https://drive.google.com/drive/folders/1A3qlRdhIO_lZTda_O628OLeXa67O6CJB?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/GXqMrN2KzCI?si=40xDlmsDQykcKMTY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
        '11/4/2.5 | Monroe, PA | Bruce (Practice) 1' => array(
            'transcript' => 'https://drive.google.com/drive/folders/11lud0vsc-7mx0-Y-mXcOWR8QwB01qoFu?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/5hD6tbg6gsg?si=8vUU5i38uqLPKRAx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
        '11/4/2.5 | Monroe, PA | Bruce (Practice) 2' => array(
            'transcript' => 'https://drive.google.com/drive/folders/11lud0vsc-7mx0-Y-mXcOWR8QwB01qoFu?usp=drive_link',
            'embedCode' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/K78pWkvlLrc?si=AlXZBYbYHh00sCpr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ),
    );

?>

    <h1>Sales Calls</h1>
    <p>
    All meeting notes in google drive <a target="_BLANK" href="https://drive.google.com/drive/folders/1L-2jycsplYEh3vPZkvfuBXzhlvPBgADD?usp=sharing">https://drive.google.com/drive/folders/1L-2jycsplYEh3vPZkvfuBXzhlvPBgADD?usp=sharing</a>
    </p>
    <div class="wrap">

<?php

    foreach($salesCall as $name => $sc) {
        echo '<h2>'.$name.'</h2>
        
        <p>'.$sc['embedCode'].'</p>
        
        <p><a href="'.$sc['transcript'].'" target="_BLANK">Transcript & notes</a></p>
';
    }

    ?>
     
</div>

<?php
}

function power_dialer_pg() {
    ?>
<div class="wrap">
    <h1>Power Dialer</h1>

    <p>Welcome to our power dialer position. Below you will find our scripts and trainings </p>

    <p>Cold Call Scripts</p>

    <p><a target="_BLANK" href="https://drive.google.com/drive/folders/1vYQLa272dzjUdnllnQyAd-0k-mgxkuMJ?usp=drive_link">https://drive.google.com/drive/folders/1vYQLa272dzjUdnllnQyAd-0k-mgxkuMJ?usp=drive_link</a></p>

    <p>Dailing training vids</p>
    <p><a target="_BLANK" href="https://drive.google.com/drive/folders/1bqj6vWUCHvW9Wk5KSSCcWHB0NK7BFCQH?usp=drive_link">https://drive.google.com/drive/folders/1bqj6vWUCHvW9Wk5KSSCcWHB0NK7BFCQH?usp=drive_link</a></p>



    <p>STR-Business-Ultimate-Guide</p>
   
    <p> A guide written by Hospitable. Recommended reading for those who want to learn more about the STR industry. This may also give you insights to answer a client's questions. </p>
 
    <p><a target="_BLANK" href=" https://drive.google.com/file/d/1pggtkz2IsHj7JeJM-7iZvVkj0VC8TwLS/view?usp=drive_link">https://drive.google.com/file/d/1pggtkz2IsHj7JeJM-7iZvVkj0VC8TwLS/view?usp=drive_link</a></p>
</div>
<?php 
}

?>