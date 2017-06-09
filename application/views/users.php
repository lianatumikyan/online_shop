<!DOCTYPE html>
<html>
<head>
    <title>403 Forbidden</title>
</head>
<body>

<p>user.</p>
<?php foreach ($users as $user) { ?>
    <p><?=$user['firstname']; ?> </p>
<?php }; ?>
<?php echo $this->pagination->create_links(); ?>
</body>
</html>