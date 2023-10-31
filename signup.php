<?php include('components/header.php')?>

<section class="aunt py-5">
    <div class="container">
        <h2 class="text-primary text-primary text-center mb-4">Sign Up</h2>

        <form action="#" method="post">
            <div class="mb-3">
                <label for="name">Full name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter you Name">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter you email">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter you Password">
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Sign up</button>
            <p class="mt-3 text-secondary text-center"> already have an account? <a href="login.php" class="text-primary">Login</a></p>
        </form>
    </div>
</section>