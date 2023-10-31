<?php include('components/header.php')?>

<section class="aunt py-5">
    <div class="container">
        <h2 class="text-primary text-primary text-center mb-4">Log in</h2>

        <form action="php/login.php" method="post">
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter you email">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter you Password">
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Log in</button>
            <p class="mt-3 text-secondary text-center">Don't have an account? <a href="signup.php" class="text-primary">Sign Up</a></p>
        </form>
    </div>
</section>