<?php

use Framework\Session;
?>
<!-- Nav -->
<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="http://localhost/">Jobseek</a>
        </h1>
        <nav class="space-x-4">
            <?php if (Session::has('user')) : ?>
                <div class="flex justify-between items-center gap-4">
                    <form method="POST" action="/auth/logout">
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300 hover:underline">Logout</button>
                    </form>
                </div>
            <?php else: ?>

                <a href="/auth/login" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300 hover:underline">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>