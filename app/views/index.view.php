<?php require_once 'partials/header.php'; ?>
<main class="page-content pt-2">
    <ul>
        <?php foreach($users as $list): ?>
            <li><?php echo $list['fullname'];?></li>
        <?php endforeach; ?>
    </ul>

    <form action="addUser" method="post">
    Name :  <input type="text" name="fullname"></br></br>
    Email : <input type="email" name="email"></br></br>
    Mobile : <input type="text" name="mobile"></br></br>
    Password :  <input type="password" name="pwd"></br></br>
        <button type="submit">Submit</button>
    </form>
</main>
<?php require_once 'partials/footer.php'; ?>