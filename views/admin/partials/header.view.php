<div class="container-xl">
<header>

    <nav class="text-white">

        <div class="row">
            <div class="col-md-3">
                <h1>Admin</h1>
            </div>

            <div class=" fs-2 col-md-3">
                <div><a href="/user">List all users</a></div>
            </div>

            <div class="fs-2 col-md-3">
                <div><a href="/products">List all products</a></div>
            
            </div>

            <div class="col-md-3 text-right pr-4">
                <a href="logout">Uitloggen</a>
                <div><?= fullNameFromSession() ?></div>
            </div>
        </div>

        

        

    </nav>
    
</header>
</div>
