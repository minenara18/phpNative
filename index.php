<?php 
    $title = 'Homepage';
    include('components/header.php'); 
    $last_post = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id ORDER BY posts.id DESC LIMIT 1"));
?>

<header class="py-5">
    <div class="container">
        <h1 class="header-title text-primary text-center text-capitalize">Discover nice Articles here</h1>
        <p class="text-secondary text-center text-capitalize">
            all the article and contents of the site have been Updated today and
            you can find your articles and contents quickly and without any problems.
        </p>
        <form action="#" method="get" class="d-flex align-items-center gap-2 bg-light rounded p-2">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </span>
                <input type="search" name="search" id="search" class="form-control bg-transparent border-0" placeholder="Search">
            </div>
            <button type="sumbmit" class="btn btn-primary">Go!</button>
        </form>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <a href="detail.php?title=<?= $last_post['slug'] ?>" class="row align-items-center hero-post">
            <div class="col md-6">
                <img src="assets/img//posts/<?= $last_post['image'] ?>" alt="" class="rounded-3 mb-3 hero-post-img">
            </div>
            <div class="col-md-6">
                <span class="bg-light rounded p-2 fw-bold text-primary category">The News</span>
                <h2 class="hero-post-title text-primary text-capitalize mt-3">
                    <?= $last_post['title'] ?>
                </h2>
                <p class="text-secondary">
                    <?= (str_word_count($last_post['body']) > 60 ? substr($last_post['body']. 0, 200) . "......": $last_post['body']) ?>
                </p>
                <div class="d-flex align-items-center gap-3">
                    <img src="assets/img/users/<?= $last_post['photo'] ?>" alt="" class="avatar rounded-circle">
                    <div class="profile">
                        <p class="m-0 text-primary"><?= $last_post['name'] ?></p>
                        <p class="m-0 text-secondary" style="font-size: 14px;"><?= $last_post['email'] ?></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
        <?php 
            $query = mysqli_query($connect, "SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id ORDER BY posts.id DESC ");
            while($data = mysqli_fetch_array($query)){
        ?>

            <div class="col-md-4">
                <a href="detail.php?title=<?= $data['slug']?>" class="card card-post border-0 rounded-3 mb-3">
                    <img src="assets/img/posts/<?= $data['image']?>" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <span class="bg-light rounded p-2 fw-bold text-primary category">The News</span>
                        <h2 class="hero-post-title text-primary text-capitalize mt-3">
                            <?= $data['title'] ?>
                        </h2>
                        <p class= "text-secondary">
                            <?= (str_word_count($data['body']) > 60 ? substr($data['body']. 0, 200) . "......": $data['body']) ?>
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/img/users/<?= $data['photo'] ?>" alt="" class="avatar rounded-circle">
                            <div class="profile">
                                <p class="m-0 text-primary"><?= $data['name'] ?></p>
                                <p class="m-0 text-secondary" style="font-size: 14px;"><?= $data['email'] ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include('components/header.php') ?>    