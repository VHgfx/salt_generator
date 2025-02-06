<?php # index.php
// Generate a salt
$salt = bin2hex(random_bytes(16));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salter</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="container">
    <h2>Salter 🔐</h2>
    <div id="salt"><?php echo $salt; ?></div>
    <button onclick="refreshSalt()">🔄 Générer un nouveau Salt</button>
    <button class="copy-btn" onclick="copySalt()">📋 Copier dans le presse-papier</button>
</div>

<script>
    function refreshSalt() {
        location.reload();
    }

    function copySalt() {
        const saltText = document.getElementById("salt").innerText;
        navigator.clipboard.writeText(saltText).then(() => {
            alert("Salt copié dans le presse-papier!");
        }).catch(err => {
            console.error("Echec de la copie : ", err);
        });
    }
</script>

</body>
</html>
