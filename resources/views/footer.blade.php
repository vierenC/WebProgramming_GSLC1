<?php
    $page = $_SERVER['REQUEST_URI'];
    $bgColor = '';
    switch ($page) {
        case '/':
            $bgColor = 'bg-slate-200';
            break;
        case '/matt':
            $bgColor = 'bg-lime-200';
            break;
        case '/vieren':
            $bgColor = 'bg-rose-200';
            break;
        case '/vika':
            $bgColor = 'bg-gray-200';
            break;
        default:
            $bgColor = 'bg-gray-100';
    }
?>

<div class="footer py-4 <?php echo $bgColor ?>">
    <?php
        if ($page == "/") {
            echo '<a href="https://www.instagram.com/jasonsjanuard/" target="_blank" class="text-gray-600 flex justify-center font-bold font-serif text-xl hover:text-gray-800">Connect with Jasons on Instagram</a>';
        } else if ($page == "/matt") {
            echo '<a href="https://www.instagram.com/matthew__christian/" target="_blank" class="text-gray-600 flex justify-center font-bold font-serif text-xl hover:text-gray-800">Connect with Matthew on Instagram</a>';
        } else if ($page == "/vieren") {
            echo '<a href="https://www.instagram.com/vieren.cristiann/" target="_blank" class="text-gray-600 flex justify-center font-bold font-serif text-xl hover:text-gray-800">Connect with Vieren on Instagram</a>';
        } else if ($page == "/vika") {
            echo '<a href="https://www.instagram.com/cnllv.v_/" target="_blank" class="text-gray-600 flex justify-center font-bold font-serif text-xl hover:text-gray-800">Connect with Vika on Instagram</a>';
        } else {
            echo '<a href="#" target="_blank" class="text-gray-600 flex justify-center font-bold font-serif text-xl hover:text-gray-800">Connect with us on Facebook</a>';
        }
    ?>
</div>
