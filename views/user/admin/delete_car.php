<section class="contenedor">
    <h2 class="text-center">Result</h2>
    <div class="crud-result">
        <?php if($_SESSION['delete'] = "complete") :?>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M9 12l2 2l4 -4" />
            </svg>
            <p>The action have been completed successfully</p>
            <a class="btn btn-primary"href="<?php base_url ?>admin">Return</a>
        <?php else : ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M10 10l4 4m0 -4l-4 4" />
            </svg>
            <p>The action have been failed</p>
        <?php endif; ?>
    </div>
</section>